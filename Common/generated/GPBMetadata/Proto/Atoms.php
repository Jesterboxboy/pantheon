<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/atoms.proto

namespace GPBMetadata\Proto;

class Atoms
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�S
proto/atoms.protocommon"}
AccessRules-
rules (2.common.AccessRules.RulesEntry?

RulesEntry
key (	 
value (2.common.RuleValue:8"Y
	RuleValue
number_value (H 
string_value (	H 

bool_value (H B
kind"n

EventAdmin
rule_id (
	person_id (
person_name (	

has_avatar (
last_update (	"<
RuleListItem
default (	
type (	
title (	"�
EventRuleListItem
	is_global (

id ( 
value (2.common.RuleValue
name (	
owner_title (	
allowed_values (	"d
RuleListItemEx

id (
type (	 
value (2.common.RuleValue
allowed_values (	"�
RuleListItemExMap3
rules (2$.common.RuleListItemExMap.RulesEntryD

RulesEntry
key (	%
value (2.common.RuleListItemEx:8"m
Person

id (
city (	
	tenhou_id (	
title (	

has_avatar (
last_update (	"�
PersonEx

id (
city (	
	tenhou_id (	
title (	
country (	
email (	
phone (	
groups (

has_avatar	 (
last_update
 (	"F
Group

id (
title (	
color (	
description (	"%
Country
code (	
name (	"�
Event

id (
title (	
description (	
finished (
	is_listed (
is_rating_shown (
tournament_started (
type (2.common.EventType
is_prescripted	 (
is_team
 (

has_series (

with_chips (
min_games_count ("L
MyEvent

id (
title (	
description (	
	is_online ("�

GameConfig
ruleset_title
 (	
event_title (	
event_description (	
event_stat_host (	
	use_timer (
use_penalty (
game_duration" (
timezone# (	
	is_online$ (
is_team% (
auto_seating& (

sync_start\' (
sync_end( (
sort_by_games) (
allow_player_append* (
series_length- (
min_games_count. (3
games_status/ (2.common.TournamentGamesStatus
hide_results0 (
hide_add_replay_button1 (
is_prescripted2 (
is_finished4 (-
ruleset_config5 (2.common.RulesetConfig
lobby_id6 ("�
PlayerInRating

id (
title (	
	tenhou_id (	
rating (
chips (
winner_zone (
	avg_place (
	avg_score (
games_played	 (
	team_name
 (	H �

has_avatar (
last_update (	B

_team_name"_
Player

id (
title (	
	tenhou_id (	

has_avatar (
last_update (	"]
FinalResultOfSession
	player_id (
score (
rating_delta (
place ("F
Penalty
who (
amount (
reason (	H �B	
_reason"�
	RonResult
round_index (
honba (
	winner_id (
loser_id (
pao_player_id (
han (

fu (
yaku (
riichi_bets	 (
dora
 (
uradora (
kandora (

kanuradora (
	open_hand ("�
MultironWin
	winner_id (
pao_player_id (
han (

fu (
yaku (
dora (
uradora (
kandora (

kanuradora	 (
	open_hand
 ("�
MultironResult
round_index (
honba (
loser_id (
	multi_ron (!
wins (2.common.MultironWin
riichi_bets ("�
TsumoResult
round_index (
honba (
	winner_id (
pao_player_id (
han (

fu (
yaku (
riichi_bets (
dora	 (
uradora
 (
kandora (

kanuradora (
	open_hand ("U

DrawResult
round_index (
honba (
riichi_bets (
tempai ("F
AbortResult
round_index (
honba (
riichi_bets ("D
ChomboResult
round_index (
honba (
loser_id ("i
NagashiResult
round_index (
honba (
riichi_bets (
tempai (
nagashi ("�
Round 
ron (2.common.RonResultH $
tsumo (2.common.TsumoResultH *
multiron (2.common.MultironResultH "
draw (2.common.DrawResultH $
abort (2.common.AbortResultH &
chombo (2.common.ChomboResultH (
nagashi (2.common.NagashiResultH B	
outcome"�

GameResult
session_hash (	
date (	H �
replay_link (	
players (3
final_results (2.common.FinalResultOfSession%
penalty_logs (2.common.Penalty
rounds (2.common.RoundB
_date":
PlayerPlaceInSeries
session_hash (	
place ("�
SeriesResult
player (2.common.Player0
best_series (2.common.PlayerPlaceInSeries
best_series_scores (
best_series_places (
best_series_avg_place (	3
current_series (2.common.PlayerPlaceInSeries
current_series_scores (
current_series_places ( 
current_series_avg_place	 (	"W
ReplacementPlayer

id (
title (	

has_avatar (
last_update (	"�
PlayerInSession

id (
title (	
score (3
replaced_by (2.common.ReplacementPlayerH �
rating_delta (

has_avatar (
last_update (	B
_replaced_by"�
CurrentSession
session_hash (	
status (	
table_index (H �(
players (2.common.PlayerInSessionB
_table_index"�
RegisteredPlayer

id (
title (	
local_id (H �
	team_name (	H�
	tenhou_id (	
ignore_seating (3
replaced_by (2.common.ReplacementPlayerH�

has_avatar (
last_update	 (	B
	_local_idB

_team_nameB
_replaced_by"�
SessionHistoryResult
session_hash (	
event_id (
	player_id (
score (
rating_delta (
place (
title (	

has_avatar (
last_update	 (	"I
SessionHistoryResultTable,
tables (2.common.SessionHistoryResult"1
PlacesSummaryItem
place (
count ("�
PlayerWinSummary
ron (
tsumo (
chombo (
feed (
	tsumofeed (
wins_with_open (
wins_with_riichi (
wins_with_dama (
unforced_feed_to_open	 (
unforced_feed_to_riichi
 (
unforced_feed_to_dama (
draw (
draw_tempai (

points_won (
points_lost_ron (
points_lost_tsumo ("1
HandValueStat
	han_count (
count ("*
YakuStat
yaku_id (
count ("S
RiichiSummary

riichi_won (
riichi_lost (
feed_under_riichi ("-
DoraSummary
count (
average ("m
IntermediateResultOfSession
	player_id (
score (
penalty_score (H �B
_penalty_score"T
PaymentLogItem
from (H �
to (H�
amount (B
_fromB
_to"�

PaymentLog&
direct (2.common.PaymentLogItem&
riichi (2.common.PaymentLogItem%
honba (2.common.PaymentLogItem"�

RoundState
session_hash (	
dealer (
round_index (
riichi (
honba (

riichi_ids (3
scores (2#.common.IntermediateResultOfSession9
scores_delta (2#.common.IntermediateResultOfSession$
payments	 (2.common.PaymentLog
round
 (2.common.Round%
outcome (2.common.RoundOutcome"�
	EventData$
type (2.common.EventTypeH �
title (	
description (	
duration (
timezone (	
lobby_id (
series_length (
	min_games	 (
is_team
 (
is_prescripted (
	autostart (-
ruleset_config (2.common.RulesetConfig
	is_listed (B
_type"�

TableState%
status (2.common.SessionStatus
may_definalize (
session_hash (	%
penalty_logs (2.common.Penalty
table_index (H �&

last_round (2.common.RoundH�
current_round_index (3
scores (2#.common.IntermediateResultOfSession)
players	 (2.common.RegisteredPlayerB
_table_indexB
_last_round"?
Achievement
achievement_id (	
achievement_data (	"5
LocalIdMapping
	player_id (
local_id ("3
TeamMapping
	player_id (
	team_name (	"�
PlayerSeating
order (
	player_id (

session_id (
table_index (
rating (
player_title (	

has_avatar (
last_update (	"7
PlayerSeatingSwiss
	player_id (
rating ("=
TableItemSwiss+
players (2.common.PlayerSeatingSwiss"=
PrescriptedTable)
players (2.common.RegisteredPlayer"�
SessionState
dealer (
round_index (
riichi_count (
honba_count (3
scores (2#.common.IntermediateResultOfSession
finished ("
	penalties (2.common.Penalty
last_hand_started ("E
Uma
place1 (
place2 (
place3 (
place4 ("b

ComplexUma
neg1 (2.common.Uma
neg3 (2.common.Uma
	otherwise (2.common.Uma"�
RulesetConfig\'
complex_uma (2.common.ComplexUma+
ending_policy (2.common.EndingPolicy
uma (2.common.Uma!
uma_type (2.common.UmaType!
doubleron_honba_atamahane ("
doubleron_riichi_atamahane (
equalize_uma (
extra_chombo_payments (
play_additional_rounds	 (
riichi_goes_to_winner
 (
	tonpuusen (
with_abortives (
with_atamahane (
with_buttobi (

with_kazoe (
with_kiriage_mangan (
with_kuitan (%
with_leading_dealer_game_over (
with_multi_yakumans (
with_nagashi_mangan ()
!with_winning_dealer_honba_skipped (
chips_value (
chombo_penalty (
game_expiration_time (
goal_points (
max_penalty (
min_penalty (
oka (
penalty_step (\'
replacement_player_fixed_points (\'
replacement_player_override_uma (
start_points  (
start_rating! (
allowed_yaku" (
yaku_with_pao# (")
GenericSuccessResponse
success ("\'
GenericEventPayload
event_id (*o
	EventType
EVENT_TYPE_UNSPECIFIED 
EVENT_TYPE_TOURNAMENT
EVENT_TYPE_LOCAL
EVENT_TYPE_ONLINE*�
TournamentGamesStatus\'
#TOURNAMENT_GAMES_STATUS_UNSPECIFIED )
%TOURNAMENT_GAMES_STATUS_SEATING_READY#
TOURNAMENT_GAMES_STATUS_STARTED*�
RoundOutcome
ROUND_OUTCOME_UNSPECIFIED 
ROUND_OUTCOME_RON
ROUND_OUTCOME_TSUMO
ROUND_OUTCOME_DRAW
ROUND_OUTCOME_ABORT
ROUND_OUTCOME_CHOMBO
ROUND_OUTCOME_NAGASHI
ROUND_OUTCOME_MULTIRON*�
SessionStatus
SESSION_STATUS_UNSPECIFIED 
SESSION_STATUS_INPROGRESS
SESSION_STATUS_PREFINISHED
SESSION_STATUS_FINISHED
SESSION_STATUS_CANCELLED
SESSION_STATUS_PLANNED*V
UmaType
UMA_TYPE_UNSPECIFIED 
UMA_TYPE_UMA_SIMPLE
UMA_TYPE_UMA_COMPLEX*y
EndingPolicy 
ENDING_POLICY_EP_UNSPECIFIED "
ENDING_POLICY_EP_ONE_MORE_HAND#
ENDING_POLICY_EP_END_AFTER_HANDbproto3'
        , true);

        static::$is_initialized = true;
    }
}

