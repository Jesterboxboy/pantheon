# Updating Pantheon

Updating infrastructure between major versions takes some effort, because sometimes newer versions are incompatible with older ones. In general, the process is the following:

- Ensure no games are in progress now.
- Stop your reverse proxy (e.g. `sudo systemctl stop nginx` on your host system)
- Go to pantheon folder (all further actions are performed from there)
- Export pantheon database with `make db_export`. It will produce `export.tar.gz` file in `Database` folder. Copy it somewhere just in case.
- Stop all containers with `make prod_stop_all`.
- Ensure all the pantheon containers are stopped with `docker ps`, if there are something left, you need to stop them manually with `docker stop CONTAINER_ID`.
- (optional, will free some disk space) Inspect and remove the stopped containers and their images:
  - Use `docker ps -a` to view all the containers including stopped ones
  - Use `docker images` to view all the images
  - Use `docker rm CONTAINER_ID` to remove the container
  - Use `docker rmi IMAGE_ID` to remove the image
- Checkout newer version of the code with `git fetch && git checkout origin/master`.
- Pull newer version of the containers with `make pull`.
- Start the containers with `make prod_start`. 
  - Note that newer version of the code uses different database storage volume. This allows a safer rollback if required (but in the same time it requires doing export/import of the data).
- Import your saved data with `make db_import`. It will use the `export.tar.gz` file saved in `Database` folder, it should be still there (unless you cleaned something). If it's not, copy it there from where you saved it last time before running import. Import might output some errors, the ones related to deleting tables can be ignored safely.
- Run `make prod_compile` to update the frontend code.
- Restart your reverse proxy (e.g. `sudo systemctl start nginx` on your host system).

After all the steps completed, check if everything works as expected.

Replace `docker` with `podman` in the instruction above if you're using podman.

## When do I need to use this instruction?

❗ If your current revision is older or equal to the following ones, the update to last master will require the process described above:
- https://github.com/MahjongPantheon/pantheon/commit/f27a8bca1afaa9e33b6368d74d5b66100bf9ea33 

## Upgrading to Frey v2

If you were using Frey v1 (any release before Aug 1 2025), you will need to do an upgrade to use newer version of the service.

Follow these steps:
- You may want to disable the services for a while, as the upgrade can't be done without downtime. It'd be best to just
  turn off your reverse proxy server (e.g. nginx) as you will need running containers to perform the upgrade. Make
  sure no games are played when you do an upgrade, you may look at monitoring service to verify it.
- Checkout to recent master using `git checkout origin/master` or update the code the way you do it usually.
- Pull new containers using `make pull`.
- Run `make prod_restart` to restart containers.
- Run `cd Database && make create_frey2_db` to create the new database for the new service.
- Run `make prod_compile` to build all the services.
- Run `make migrate_frey1` to migrate the database contents. Note that old `frey` database will not
  be altered during migration, and the new `frey2` database will be populated with the data from `frey` database. In case of
  any error you may try running the migration again, as it's executed inside the transaction which is rolled back in case of
  any error. Also if something goes wrong you might want to roll back to some previous commit and everything will work as expected.
  - Note: you should not run this command twice or run it an already populated database.
- After these steps are completed, turn the reverse proxy back on.
- Basically this is it, congratulations :) Now you may want to remove `frey` database, though we'd advise to not doing this
  for a while, until you verify that everything works find.

## Known issue: duplicate chombo rounds when Skirnir hangs (found 2026-09-21)

### Symptom

In Tyr, confirming a round (✓ on the round preview screen) did nothing visible: the page stayed on the preview screen.
Each additional click saved another round. For chombo this produced several chombo penalties for the same player
(in the test event 61 / session 1479: 9 chombo rows for player 37, `_chombo: {"37": -180000}` in the session state),
while the game management view in Forseti showed only one chombo entry. Other outcomes were affected as well
(every `AddRound` request failed with HTTP 500/499), but a repeated submit of those is rejected by the server.

### Cause

Three independent problems add up:

1. **Skirnir never answers requests in the dev stack.** supervisord starts the production build
   (`/var/www/html/Skirnir-dist`, `node server.js`). In dev that folder has no `node_modules`, so
   `Skirnir/app/server.ts` starts its placeholder server, whose request handler is empty and never responds.
   The placeholder reads `process.env.PORT` instead of `SKIRNIR_PORT` (supervisord only sets `SKIRNIR_PORT=41151`),
   so it falls back to port 4015 and blocks the real dev server started by nodemon.
   Production is probably not affected, because `make prod_deps` installs `node_modules` into `Skirnir-dist`
   (not verified on a live production container).
2. **Mimir waited for Skirnir without a timeout.** `InteractiveSessionModel::addRound()` saves the round and updates the
   session state first, then notifies Skirnir (`trackSession()`, `messageHandRecorded()`). `SkirnirClient::_sendMessage()`
   had no curl timeout, so the request hung after the data was already written, and the client never got a response.
3. **Duplicate submits are not prevented.**
   - Tyr's round preview screen does not disable ✓ while `state.loading.addRound` is set and does not show a save error.
   - Mimir's duplicate check only compares `round_index` and `honba`. A chombo changes neither, so repeated chombo
     submits are accepted.

### Status

- **Fixed:** `SkirnirClient::_sendMessage()` now uses a 2 second curl timeout (`CURLOPT_TIMEOUT`), so a stuck Skirnir can
  no longer block saving a round. While Skirnir is broken, each save takes about 2 seconds longer and no notifications
  are delivered.
- **Open:**
  - Skirnir placeholder port: use `process.env.SKIRNIR_PORT ?? process.env.PORT ?? '4015'` in `Skirnir/app/server.ts`,
    then restart the Skirnir container.
  - Tyr: disable ✓ on the round preview screen while a round is being saved.
  - Mimir: reject a repeated chombo for the same round (the `round_index`/`honba` check does not catch it).
  - Data cleanup for event 61: delete the extra chombo rounds 11953–11960 and recalculate the state of session 1479.

### Disabling notifications

- Per event: events whose title contains `TEST` (uppercase) skip player and admin notifications. `trackSession()` is
  still called for these events, so this does not avoid the hang.
- Globally: leave `SKIRNIR_URL_INTERNAL` empty (the only Skirnir variable Mimir reads) and restart the stack. Mimir then
  fails the notification call immediately and sends nothing. `SKIRNIR_URL` is not read by any service code.

## Planned: force finish in sync start tournaments (not implemented yet)

### Current behaviour

- Forseti hides the "Force finish game" button when the event has sync start on (`Forseti/app/pages/GamesControl/index.tsx:385`
  and `GamesList.tsx:265-269`). The button is shown only for games in progress with at least one recorded round.
- Mimir itself does not block it: `GamesController::forceFinishGame()` only checks for event admin or referee rights.
- `forceFinishGame()` calls `SessionPrimitive::finish()`, which finishes the game and counts its results immediately.
  In events with sync end on, this skips the "approve results" step: approval (`finalizeSessions()`) only processes
  games in the `prefinished` state.
- A normally ended game goes through `SessionPrimitive::prefinish()`: with sync end on it becomes `prefinished` and
  waits for approval, without sync end it calls `finish()`.

### Workaround until then

Record an exhaustive draw with nobody tenpai. It is a normal round, so it ends the game only when the regular rules do:

- all-last with the dealer noten,
- time is up and the ending policy is "end after hand",
- time is up and the ending policy is "one more hand": the first round after the buzzer only marks the last hand, the
  next one ends the game.

If time is left and it is not the last hand, the game simply continues. The game ends through `prefinish()`, so approval
works as usual. Downsides: the fake hand appears in the game log and statistics (draws, noten rate), adds a honba, and
riichi sticks on the table are handled by the ruleset's end-of-game rule. In Tyr, press + only after the timer has run
out, because the timer reading at that moment decides whether time is up.

### Planned changes

1. `Mimir/src/controllers/Games.php`, `forceFinishGame()`:

   ```diff
   -        $success = $session[0]->finish();
   +        // prefinish() respects sync end: the game waits for "approve results" like a normally ended one;
   +        // without sync end it calls finish() itself, so club events behave as before.
   +        $success = $session[0]->prefinish();
   +        if ($session[0]->getStatus() !== SessionPrimitive::STATUS_FINISHED) {
   +            // Waiting for approval: finalizeSessions() queues achievements and notifies players later.
   +            $this->_log->info('Force-prefinished session id# ' . $sessionHash);
   +            return $success;
   +        }
   ```

   The rest of the function (achievements job, "game ended" message) stays unchanged and only runs for games that are
   really finished.

2. `Forseti/app/pages/GamesControl/index.tsx`:

   ```diff
   -        onForceFinish={eventConfig?.syncStart ? undefined : onForceFinish}
   +        onForceFinish={onForceFinish}
   ```

3. `Forseti/app/pages/GamesControl/GamesList.tsx`:

   ```diff
                    {t.status === SessionStatus.SESSION_STATUS_INPROGRESS &&
                      t.lastRound &&
   -                  eventConfig &&
   -                  !eventConfig.syncStart &&
                      !!onForceFinish && (
   ```

Not changed: the button label stays "Force finish game" (a new label would need new translations), and "Remove game"
and "Cancel results" stay hidden for sync start events. With sync start on but sync end off, the button finishes the
game immediately, as it does in club events today.

### How to test

- `make lint` and the Mimir/Forseti unit tests.
- In a test tournament with sync start and sync end on: force finish one table, check that the game waits for approval,
  then approve and check that it is finalized and the players are notified.
