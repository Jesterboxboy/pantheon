<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT! (protoc-gen-twirp_php 0.9.1)
# source: proto/mimir.proto

declare(strict_types=1);

namespace Common;

/**
 *
 *
 * Generated from protobuf service <code>common.Mimir</code>
 */
interface Mimir
{
    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetRulesets</code>
     *
     * @throws \Twirp\Error
     */
    public function GetRulesets(array $ctx, \Common\EventsGetRulesetsPayload $req): \Common\EventsGetRulesetsResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetTimezones</code>
     *
     * @throws \Twirp\Error
     */
    public function GetTimezones(array $ctx, \Common\EventsGetTimezonesPayload $req): \Common\EventsGetTimezonesResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetCountries</code>
     *
     * @throws \Twirp\Error
     */
    public function GetCountries(array $ctx, \Common\EventsGetCountriesPayload $req): \Common\EventsGetCountriesResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetEvents</code>
     *
     * @throws \Twirp\Error
     */
    public function GetEvents(array $ctx, \Common\EventsGetEventsPayload $req): \Common\EventsGetEventsResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetEventsById</code>
     *
     * @throws \Twirp\Error
     */
    public function GetEventsById(array $ctx, \Common\EventsGetEventsByIdPayload $req): \Common\EventsGetEventsByIdResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetMyEvents</code>
     *
     * @throws \Twirp\Error
     */
    public function GetMyEvents(array $ctx, \Common\PlayersGetMyEventsPayload $req): \Common\PlayersGetMyEventsResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetGameConfig</code>
     *
     * @throws \Twirp\Error
     */
    public function GetGameConfig(array $ctx, \Common\GenericEventPayload $req): \Common\GameConfig;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetRatingTable</code>
     *
     * @throws \Twirp\Error
     */
    public function GetRatingTable(array $ctx, \Common\EventsGetRatingTablePayload $req): \Common\EventsGetRatingTableResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetLastGames</code>
     *
     * @throws \Twirp\Error
     */
    public function GetLastGames(array $ctx, \Common\EventsGetLastGamesPayload $req): \Common\EventsGetLastGamesResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetGame</code>
     *
     * @throws \Twirp\Error
     */
    public function GetGame(array $ctx, \Common\EventsGetGamePayload $req): \Common\EventsGetGameResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetGamesSeries</code>
     *
     * @throws \Twirp\Error
     */
    public function GetGamesSeries(array $ctx, \Common\GenericEventPayload $req): \Common\EventsGetGamesSeriesResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetCurrentSessions</code>
     *
     * @throws \Twirp\Error
     */
    public function GetCurrentSessions(array $ctx, \Common\PlayersGetCurrentSessionsPayload $req): \Common\PlayersGetCurrentSessionsResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetAllRegisteredPlayers</code>
     *
     * @throws \Twirp\Error
     */
    public function GetAllRegisteredPlayers(array $ctx, \Common\EventsGetAllRegisteredPlayersPayload $req): \Common\EventsGetAllRegisteredPlayersResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetTimerState</code>
     *
     * @throws \Twirp\Error
     */
    public function GetTimerState(array $ctx, \Common\GenericEventPayload $req): \Common\EventsGetTimerStateResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetSessionOverview</code>
     *
     * @throws \Twirp\Error
     */
    public function GetSessionOverview(array $ctx, \Common\GamesGetSessionOverviewPayload $req): \Common\GamesGetSessionOverviewResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetPlayerStats</code>
     *
     * @throws \Twirp\Error
     */
    public function GetPlayerStats(array $ctx, \Common\PlayersGetPlayerStatsPayload $req): \Common\PlayersGetPlayerStatsResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/AddRound</code>
     *
     * @throws \Twirp\Error
     */
    public function AddRound(array $ctx, \Common\GamesAddRoundPayload $req): \Common\GamesAddRoundResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/PreviewRound</code>
     *
     * @throws \Twirp\Error
     */
    public function PreviewRound(array $ctx, \Common\GamesPreviewRoundPayload $req): \Common\GamesPreviewRoundResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/AddOnlineReplay</code>
     *
     * @throws \Twirp\Error
     */
    public function AddOnlineReplay(array $ctx, \Common\GamesAddOnlineReplayPayload $req): \Common\GamesAddOnlineReplayResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetLastResults</code>
     *
     * @throws \Twirp\Error
     */
    public function GetLastResults(array $ctx, \Common\PlayersGetLastResultsPayload $req): \Common\PlayersGetLastResultsResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetLastRound</code>
     *
     * @throws \Twirp\Error
     */
    public function GetLastRound(array $ctx, \Common\PlayersGetLastRoundPayload $req): \Common\PlayersGetLastRoundResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetAllRounds</code>
     *
     * @throws \Twirp\Error
     */
    public function GetAllRounds(array $ctx, \Common\PlayersGetAllRoundsPayload $req): \Common\PlayersGetAllRoundsResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetLastRoundByHash</code>
     *
     * @throws \Twirp\Error
     */
    public function GetLastRoundByHash(array $ctx, \Common\PlayersGetLastRoundByHashPayload $req): \Common\PlayersGetLastRoundByHashResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetEventForEdit</code>
     *
     * @throws \Twirp\Error
     */
    public function GetEventForEdit(array $ctx, \Common\EventsGetEventForEditPayload $req): \Common\EventsGetEventForEditResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/RebuildScoring</code>
     *
     * @throws \Twirp\Error
     */
    public function RebuildScoring(array $ctx, \Common\GenericEventPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/CreateEvent</code>
     *
     * @throws \Twirp\Error
     */
    public function CreateEvent(array $ctx, \Common\EventData $req): \Common\GenericEventPayload;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/UpdateEvent</code>
     *
     * @throws \Twirp\Error
     */
    public function UpdateEvent(array $ctx, \Common\EventsUpdateEventPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/FinishEvent</code>
     *
     * @throws \Twirp\Error
     */
    public function FinishEvent(array $ctx, \Common\GenericEventPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/ToggleListed</code>
     *
     * @throws \Twirp\Error
     */
    public function ToggleListed(array $ctx, \Common\GenericEventPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetTablesState</code>
     *
     * @throws \Twirp\Error
     */
    public function GetTablesState(array $ctx, \Common\GenericEventPayload $req): \Common\EventsGetTablesStateResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/StartTimer</code>
     *
     * @throws \Twirp\Error
     */
    public function StartTimer(array $ctx, \Common\GenericEventPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/RegisterPlayer</code>
     *
     * @throws \Twirp\Error
     */
    public function RegisterPlayer(array $ctx, \Common\EventsRegisterPlayerPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/UnregisterPlayer</code>
     *
     * @throws \Twirp\Error
     */
    public function UnregisterPlayer(array $ctx, \Common\EventsUnregisterPlayerPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/UpdatePlayerSeatingFlag</code>
     *
     * @throws \Twirp\Error
     */
    public function UpdatePlayerSeatingFlag(array $ctx, \Common\EventsUpdatePlayerSeatingFlagPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetAchievements</code>
     *
     * @throws \Twirp\Error
     */
    public function GetAchievements(array $ctx, \Common\EventsGetAchievementsPayload $req): \Common\EventsGetAchievementsResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/ToggleHideResults</code>
     *
     * @throws \Twirp\Error
     */
    public function ToggleHideResults(array $ctx, \Common\GenericEventPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/UpdatePlayersLocalIds</code>
     *
     * @throws \Twirp\Error
     */
    public function UpdatePlayersLocalIds(array $ctx, \Common\EventsUpdatePlayersLocalIdsPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/UpdatePlayerReplacement</code>
     *
     * @throws \Twirp\Error
     */
    public function UpdatePlayerReplacement(array $ctx, \Common\EventsUpdatePlayerReplacementPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/UpdatePlayersTeams</code>
     *
     * @throws \Twirp\Error
     */
    public function UpdatePlayersTeams(array $ctx, \Common\EventsUpdatePlayersTeamsPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/StartGame</code>
     *
     * @throws \Twirp\Error
     */
    public function StartGame(array $ctx, \Common\GamesStartGamePayload $req): \Common\GamesStartGameResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/EndGame</code>
     *
     * @throws \Twirp\Error
     */
    public function EndGame(array $ctx, \Common\GamesEndGamePayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/CancelGame</code>
     *
     * @throws \Twirp\Error
     */
    public function CancelGame(array $ctx, \Common\GamesCancelGamePayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/FinalizeSession</code>
     *
     * @throws \Twirp\Error
     */
    public function FinalizeSession(array $ctx, \Common\GenericEventPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/DropLastRound</code>
     *
     * @throws \Twirp\Error
     */
    public function DropLastRound(array $ctx, \Common\GamesDropLastRoundPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/DefinalizeGame</code>
     *
     * @throws \Twirp\Error
     */
    public function DefinalizeGame(array $ctx, \Common\GamesDefinalizeGamePayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/AddPenalty</code>
     *
     * @throws \Twirp\Error
     */
    public function AddPenalty(array $ctx, \Common\GamesAddPenaltyPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/AddPenaltyGame</code>
     *
     * @throws \Twirp\Error
     */
    public function AddPenaltyGame(array $ctx, \Common\GamesAddPenaltyGamePayload $req): \Common\GamesAddPenaltyGameResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetPlayer</code>
     *
     * @throws \Twirp\Error
     */
    public function GetPlayer(array $ctx, \Common\PlayersGetPlayerPayload $req): \Common\PlayersGetPlayerResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetCurrentSeating</code>
     *
     * @throws \Twirp\Error
     */
    public function GetCurrentSeating(array $ctx, \Common\GenericEventPayload $req): \Common\EventsGetCurrentSeatingResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/MakeShuffledSeating</code>
     *
     * @throws \Twirp\Error
     */
    public function MakeShuffledSeating(array $ctx, \Common\SeatingMakeShuffledSeatingPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/MakeSwissSeating</code>
     *
     * @throws \Twirp\Error
     */
    public function MakeSwissSeating(array $ctx, \Common\GenericEventPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/ResetSeating</code>
     *
     * @throws \Twirp\Error
     */
    public function ResetSeating(array $ctx, \Common\GenericEventPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GenerateSwissSeating</code>
     *
     * @throws \Twirp\Error
     */
    public function GenerateSwissSeating(array $ctx, \Common\GenericEventPayload $req): \Common\SeatingGenerateSwissSeatingResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/MakeIntervalSeating</code>
     *
     * @throws \Twirp\Error
     */
    public function MakeIntervalSeating(array $ctx, \Common\SeatingMakeIntervalSeatingPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/MakePrescriptedSeating</code>
     *
     * @throws \Twirp\Error
     */
    public function MakePrescriptedSeating(array $ctx, \Common\SeatingMakePrescriptedSeatingPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetNextPrescriptedSeating</code>
     *
     * @throws \Twirp\Error
     */
    public function GetNextPrescriptedSeating(array $ctx, \Common\GenericEventPayload $req): \Common\SeatingGetNextPrescriptedSeatingResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetPrescriptedEventConfig</code>
     *
     * @throws \Twirp\Error
     */
    public function GetPrescriptedEventConfig(array $ctx, \Common\GenericEventPayload $req): \Common\EventsGetPrescriptedEventConfigResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/UpdatePrescriptedEventConfig</code>
     *
     * @throws \Twirp\Error
     */
    public function UpdatePrescriptedEventConfig(array $ctx, \Common\EventsUpdatePrescriptedEventConfigPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/InitStartingTimer</code>
     *
     * @throws \Twirp\Error
     */
    public function InitStartingTimer(array $ctx, \Common\GenericEventPayload $req): \Common\GenericSuccessResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/GetStartingTimer</code>
     *
     * @throws \Twirp\Error
     */
    public function GetStartingTimer(array $ctx, \Common\GenericEventPayload $req): \Common\EventsGetStartingTimerResponse;

    /**
     *
     *
     * Generated from protobuf method <code>common.Mimir/ClearStatCache</code>
     *
     * @throws \Twirp\Error
     */
    public function ClearStatCache(array $ctx, \Common\ClearStatCachePayload $req): \Common\GenericSuccessResponse;
}
