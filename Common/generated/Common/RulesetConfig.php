<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/atoms.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>common.RulesetConfig</code>
 */
class RulesetConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.common.ComplexUma complex_uma = 1;</code>
     */
    protected $complex_uma = null;
    /**
     * Generated from protobuf field <code>.common.EndingPolicy ending_policy = 2;</code>
     */
    protected $ending_policy = 0;
    /**
     * Generated from protobuf field <code>.common.Uma uma = 3;</code>
     */
    protected $uma = null;
    /**
     * Generated from protobuf field <code>.common.UmaType uma_type = 4;</code>
     */
    protected $uma_type = 0;
    /**
     * Generated from protobuf field <code>bool doubleron_honba_atamahane = 5;</code>
     */
    protected $doubleron_honba_atamahane = false;
    /**
     * Generated from protobuf field <code>bool doubleron_riichi_atamahane = 6;</code>
     */
    protected $doubleron_riichi_atamahane = false;
    /**
     * Generated from protobuf field <code>bool equalize_uma = 7;</code>
     */
    protected $equalize_uma = false;
    /**
     * Generated from protobuf field <code>bool extra_chombo_payments = 8;</code>
     */
    protected $extra_chombo_payments = false;
    /**
     * Generated from protobuf field <code>bool play_additional_rounds = 9;</code>
     */
    protected $play_additional_rounds = false;
    /**
     * Generated from protobuf field <code>bool riichi_goes_to_winner = 10;</code>
     */
    protected $riichi_goes_to_winner = false;
    /**
     * Generated from protobuf field <code>bool tonpuusen = 11;</code>
     */
    protected $tonpuusen = false;
    /**
     * Generated from protobuf field <code>bool with_abortives = 12;</code>
     */
    protected $with_abortives = false;
    /**
     * Generated from protobuf field <code>bool with_atamahane = 13;</code>
     */
    protected $with_atamahane = false;
    /**
     * Generated from protobuf field <code>bool with_buttobi = 14;</code>
     */
    protected $with_buttobi = false;
    /**
     * Generated from protobuf field <code>bool with_kazoe = 15;</code>
     */
    protected $with_kazoe = false;
    /**
     * Generated from protobuf field <code>bool with_kiriage_mangan = 16;</code>
     */
    protected $with_kiriage_mangan = false;
    /**
     * Generated from protobuf field <code>bool with_kuitan = 17;</code>
     */
    protected $with_kuitan = false;
    /**
     * Generated from protobuf field <code>bool with_leading_dealer_game_over = 18;</code>
     */
    protected $with_leading_dealer_game_over = false;
    /**
     * Generated from protobuf field <code>bool with_multi_yakumans = 19;</code>
     */
    protected $with_multi_yakumans = false;
    /**
     * Generated from protobuf field <code>bool with_nagashi_mangan = 20;</code>
     */
    protected $with_nagashi_mangan = false;
    /**
     * Generated from protobuf field <code>bool with_winning_dealer_honba_skipped = 21;</code>
     */
    protected $with_winning_dealer_honba_skipped = false;
    /**
     * Generated from protobuf field <code>int32 chips_value = 22;</code>
     */
    protected $chips_value = 0;
    /**
     * Generated from protobuf field <code>int32 chombo_amount = 23;</code>
     */
    protected $chombo_amount = 0;
    /**
     * Generated from protobuf field <code>int32 game_expiration_time = 24;</code>
     */
    protected $game_expiration_time = 0;
    /**
     * Generated from protobuf field <code>int32 goal_points = 25;</code>
     */
    protected $goal_points = 0;
    /**
     * Generated from protobuf field <code>int32 max_penalty = 26;</code>
     */
    protected $max_penalty = 0;
    /**
     * Generated from protobuf field <code>int32 min_penalty = 27;</code>
     */
    protected $min_penalty = 0;
    /**
     * Generated from protobuf field <code>int32 oka = 28;</code>
     */
    protected $oka = 0;
    /**
     * Generated from protobuf field <code>int32 penalty_step = 29;</code>
     */
    protected $penalty_step = 0;
    /**
     * Generated from protobuf field <code>int32 replacement_player_fixed_points = 30;</code>
     */
    protected $replacement_player_fixed_points = 0;
    /**
     * Generated from protobuf field <code>int32 replacement_player_override_uma = 31;</code>
     */
    protected $replacement_player_override_uma = 0;
    /**
     * Generated from protobuf field <code>int32 start_points = 32;</code>
     */
    protected $start_points = 0;
    /**
     * Generated from protobuf field <code>int32 start_rating = 33;</code>
     */
    protected $start_rating = 0;
    /**
     * Generated from protobuf field <code>repeated int32 allowed_yaku = 34;</code>
     */
    private $allowed_yaku;
    /**
     * Generated from protobuf field <code>repeated int32 yaku_with_pao = 35;</code>
     */
    private $yaku_with_pao;
    /**
     * Generated from protobuf field <code>bool with_yakitori = 36;</code>
     */
    protected $with_yakitori = false;
    /**
     * Generated from protobuf field <code>int32 yakitori_penalty = 37;</code>
     */
    protected $yakitori_penalty = 0;
    /**
     * Generated from protobuf field <code>bool chombo_ends_game = 38;</code>
     */
    protected $chombo_ends_game = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Common\ComplexUma $complex_uma
     *     @type int $ending_policy
     *     @type \Common\Uma $uma
     *     @type int $uma_type
     *     @type bool $doubleron_honba_atamahane
     *     @type bool $doubleron_riichi_atamahane
     *     @type bool $equalize_uma
     *     @type bool $extra_chombo_payments
     *     @type bool $play_additional_rounds
     *     @type bool $riichi_goes_to_winner
     *     @type bool $tonpuusen
     *     @type bool $with_abortives
     *     @type bool $with_atamahane
     *     @type bool $with_buttobi
     *     @type bool $with_kazoe
     *     @type bool $with_kiriage_mangan
     *     @type bool $with_kuitan
     *     @type bool $with_leading_dealer_game_over
     *     @type bool $with_multi_yakumans
     *     @type bool $with_nagashi_mangan
     *     @type bool $with_winning_dealer_honba_skipped
     *     @type int $chips_value
     *     @type int $chombo_amount
     *     @type int $game_expiration_time
     *     @type int $goal_points
     *     @type int $max_penalty
     *     @type int $min_penalty
     *     @type int $oka
     *     @type int $penalty_step
     *     @type int $replacement_player_fixed_points
     *     @type int $replacement_player_override_uma
     *     @type int $start_points
     *     @type int $start_rating
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $allowed_yaku
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $yaku_with_pao
     *     @type bool $with_yakitori
     *     @type int $yakitori_penalty
     *     @type bool $chombo_ends_game
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Atoms::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.common.ComplexUma complex_uma = 1;</code>
     * @return \Common\ComplexUma|null
     */
    public function getComplexUma()
    {
        return $this->complex_uma;
    }

    public function hasComplexUma()
    {
        return isset($this->complex_uma);
    }

    public function clearComplexUma()
    {
        unset($this->complex_uma);
    }

    /**
     * Generated from protobuf field <code>.common.ComplexUma complex_uma = 1;</code>
     * @param \Common\ComplexUma $var
     * @return $this
     */
    public function setComplexUma($var)
    {
        GPBUtil::checkMessage($var, \Common\ComplexUma::class);
        $this->complex_uma = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.common.EndingPolicy ending_policy = 2;</code>
     * @return int
     */
    public function getEndingPolicy()
    {
        return $this->ending_policy;
    }

    /**
     * Generated from protobuf field <code>.common.EndingPolicy ending_policy = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEndingPolicy($var)
    {
        GPBUtil::checkEnum($var, \Common\EndingPolicy::class);
        $this->ending_policy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.common.Uma uma = 3;</code>
     * @return \Common\Uma|null
     */
    public function getUma()
    {
        return $this->uma;
    }

    public function hasUma()
    {
        return isset($this->uma);
    }

    public function clearUma()
    {
        unset($this->uma);
    }

    /**
     * Generated from protobuf field <code>.common.Uma uma = 3;</code>
     * @param \Common\Uma $var
     * @return $this
     */
    public function setUma($var)
    {
        GPBUtil::checkMessage($var, \Common\Uma::class);
        $this->uma = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.common.UmaType uma_type = 4;</code>
     * @return int
     */
    public function getUmaType()
    {
        return $this->uma_type;
    }

    /**
     * Generated from protobuf field <code>.common.UmaType uma_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setUmaType($var)
    {
        GPBUtil::checkEnum($var, \Common\UmaType::class);
        $this->uma_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool doubleron_honba_atamahane = 5;</code>
     * @return bool
     */
    public function getDoubleronHonbaAtamahane()
    {
        return $this->doubleron_honba_atamahane;
    }

    /**
     * Generated from protobuf field <code>bool doubleron_honba_atamahane = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setDoubleronHonbaAtamahane($var)
    {
        GPBUtil::checkBool($var);
        $this->doubleron_honba_atamahane = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool doubleron_riichi_atamahane = 6;</code>
     * @return bool
     */
    public function getDoubleronRiichiAtamahane()
    {
        return $this->doubleron_riichi_atamahane;
    }

    /**
     * Generated from protobuf field <code>bool doubleron_riichi_atamahane = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setDoubleronRiichiAtamahane($var)
    {
        GPBUtil::checkBool($var);
        $this->doubleron_riichi_atamahane = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool equalize_uma = 7;</code>
     * @return bool
     */
    public function getEqualizeUma()
    {
        return $this->equalize_uma;
    }

    /**
     * Generated from protobuf field <code>bool equalize_uma = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setEqualizeUma($var)
    {
        GPBUtil::checkBool($var);
        $this->equalize_uma = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool extra_chombo_payments = 8;</code>
     * @return bool
     */
    public function getExtraChomboPayments()
    {
        return $this->extra_chombo_payments;
    }

    /**
     * Generated from protobuf field <code>bool extra_chombo_payments = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setExtraChomboPayments($var)
    {
        GPBUtil::checkBool($var);
        $this->extra_chombo_payments = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool play_additional_rounds = 9;</code>
     * @return bool
     */
    public function getPlayAdditionalRounds()
    {
        return $this->play_additional_rounds;
    }

    /**
     * Generated from protobuf field <code>bool play_additional_rounds = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setPlayAdditionalRounds($var)
    {
        GPBUtil::checkBool($var);
        $this->play_additional_rounds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool riichi_goes_to_winner = 10;</code>
     * @return bool
     */
    public function getRiichiGoesToWinner()
    {
        return $this->riichi_goes_to_winner;
    }

    /**
     * Generated from protobuf field <code>bool riichi_goes_to_winner = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setRiichiGoesToWinner($var)
    {
        GPBUtil::checkBool($var);
        $this->riichi_goes_to_winner = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool tonpuusen = 11;</code>
     * @return bool
     */
    public function getTonpuusen()
    {
        return $this->tonpuusen;
    }

    /**
     * Generated from protobuf field <code>bool tonpuusen = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setTonpuusen($var)
    {
        GPBUtil::checkBool($var);
        $this->tonpuusen = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool with_abortives = 12;</code>
     * @return bool
     */
    public function getWithAbortives()
    {
        return $this->with_abortives;
    }

    /**
     * Generated from protobuf field <code>bool with_abortives = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithAbortives($var)
    {
        GPBUtil::checkBool($var);
        $this->with_abortives = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool with_atamahane = 13;</code>
     * @return bool
     */
    public function getWithAtamahane()
    {
        return $this->with_atamahane;
    }

    /**
     * Generated from protobuf field <code>bool with_atamahane = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithAtamahane($var)
    {
        GPBUtil::checkBool($var);
        $this->with_atamahane = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool with_buttobi = 14;</code>
     * @return bool
     */
    public function getWithButtobi()
    {
        return $this->with_buttobi;
    }

    /**
     * Generated from protobuf field <code>bool with_buttobi = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithButtobi($var)
    {
        GPBUtil::checkBool($var);
        $this->with_buttobi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool with_kazoe = 15;</code>
     * @return bool
     */
    public function getWithKazoe()
    {
        return $this->with_kazoe;
    }

    /**
     * Generated from protobuf field <code>bool with_kazoe = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithKazoe($var)
    {
        GPBUtil::checkBool($var);
        $this->with_kazoe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool with_kiriage_mangan = 16;</code>
     * @return bool
     */
    public function getWithKiriageMangan()
    {
        return $this->with_kiriage_mangan;
    }

    /**
     * Generated from protobuf field <code>bool with_kiriage_mangan = 16;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithKiriageMangan($var)
    {
        GPBUtil::checkBool($var);
        $this->with_kiriage_mangan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool with_kuitan = 17;</code>
     * @return bool
     */
    public function getWithKuitan()
    {
        return $this->with_kuitan;
    }

    /**
     * Generated from protobuf field <code>bool with_kuitan = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithKuitan($var)
    {
        GPBUtil::checkBool($var);
        $this->with_kuitan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool with_leading_dealer_game_over = 18;</code>
     * @return bool
     */
    public function getWithLeadingDealerGameOver()
    {
        return $this->with_leading_dealer_game_over;
    }

    /**
     * Generated from protobuf field <code>bool with_leading_dealer_game_over = 18;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithLeadingDealerGameOver($var)
    {
        GPBUtil::checkBool($var);
        $this->with_leading_dealer_game_over = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool with_multi_yakumans = 19;</code>
     * @return bool
     */
    public function getWithMultiYakumans()
    {
        return $this->with_multi_yakumans;
    }

    /**
     * Generated from protobuf field <code>bool with_multi_yakumans = 19;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithMultiYakumans($var)
    {
        GPBUtil::checkBool($var);
        $this->with_multi_yakumans = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool with_nagashi_mangan = 20;</code>
     * @return bool
     */
    public function getWithNagashiMangan()
    {
        return $this->with_nagashi_mangan;
    }

    /**
     * Generated from protobuf field <code>bool with_nagashi_mangan = 20;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithNagashiMangan($var)
    {
        GPBUtil::checkBool($var);
        $this->with_nagashi_mangan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool with_winning_dealer_honba_skipped = 21;</code>
     * @return bool
     */
    public function getWithWinningDealerHonbaSkipped()
    {
        return $this->with_winning_dealer_honba_skipped;
    }

    /**
     * Generated from protobuf field <code>bool with_winning_dealer_honba_skipped = 21;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithWinningDealerHonbaSkipped($var)
    {
        GPBUtil::checkBool($var);
        $this->with_winning_dealer_honba_skipped = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 chips_value = 22;</code>
     * @return int
     */
    public function getChipsValue()
    {
        return $this->chips_value;
    }

    /**
     * Generated from protobuf field <code>int32 chips_value = 22;</code>
     * @param int $var
     * @return $this
     */
    public function setChipsValue($var)
    {
        GPBUtil::checkInt32($var);
        $this->chips_value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 chombo_amount = 23;</code>
     * @return int
     */
    public function getChomboAmount()
    {
        return $this->chombo_amount;
    }

    /**
     * Generated from protobuf field <code>int32 chombo_amount = 23;</code>
     * @param int $var
     * @return $this
     */
    public function setChomboAmount($var)
    {
        GPBUtil::checkInt32($var);
        $this->chombo_amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 game_expiration_time = 24;</code>
     * @return int
     */
    public function getGameExpirationTime()
    {
        return $this->game_expiration_time;
    }

    /**
     * Generated from protobuf field <code>int32 game_expiration_time = 24;</code>
     * @param int $var
     * @return $this
     */
    public function setGameExpirationTime($var)
    {
        GPBUtil::checkInt32($var);
        $this->game_expiration_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 goal_points = 25;</code>
     * @return int
     */
    public function getGoalPoints()
    {
        return $this->goal_points;
    }

    /**
     * Generated from protobuf field <code>int32 goal_points = 25;</code>
     * @param int $var
     * @return $this
     */
    public function setGoalPoints($var)
    {
        GPBUtil::checkInt32($var);
        $this->goal_points = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 max_penalty = 26;</code>
     * @return int
     */
    public function getMaxPenalty()
    {
        return $this->max_penalty;
    }

    /**
     * Generated from protobuf field <code>int32 max_penalty = 26;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxPenalty($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_penalty = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 min_penalty = 27;</code>
     * @return int
     */
    public function getMinPenalty()
    {
        return $this->min_penalty;
    }

    /**
     * Generated from protobuf field <code>int32 min_penalty = 27;</code>
     * @param int $var
     * @return $this
     */
    public function setMinPenalty($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_penalty = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 oka = 28;</code>
     * @return int
     */
    public function getOka()
    {
        return $this->oka;
    }

    /**
     * Generated from protobuf field <code>int32 oka = 28;</code>
     * @param int $var
     * @return $this
     */
    public function setOka($var)
    {
        GPBUtil::checkInt32($var);
        $this->oka = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 penalty_step = 29;</code>
     * @return int
     */
    public function getPenaltyStep()
    {
        return $this->penalty_step;
    }

    /**
     * Generated from protobuf field <code>int32 penalty_step = 29;</code>
     * @param int $var
     * @return $this
     */
    public function setPenaltyStep($var)
    {
        GPBUtil::checkInt32($var);
        $this->penalty_step = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 replacement_player_fixed_points = 30;</code>
     * @return int
     */
    public function getReplacementPlayerFixedPoints()
    {
        return $this->replacement_player_fixed_points;
    }

    /**
     * Generated from protobuf field <code>int32 replacement_player_fixed_points = 30;</code>
     * @param int $var
     * @return $this
     */
    public function setReplacementPlayerFixedPoints($var)
    {
        GPBUtil::checkInt32($var);
        $this->replacement_player_fixed_points = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 replacement_player_override_uma = 31;</code>
     * @return int
     */
    public function getReplacementPlayerOverrideUma()
    {
        return $this->replacement_player_override_uma;
    }

    /**
     * Generated from protobuf field <code>int32 replacement_player_override_uma = 31;</code>
     * @param int $var
     * @return $this
     */
    public function setReplacementPlayerOverrideUma($var)
    {
        GPBUtil::checkInt32($var);
        $this->replacement_player_override_uma = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 start_points = 32;</code>
     * @return int
     */
    public function getStartPoints()
    {
        return $this->start_points;
    }

    /**
     * Generated from protobuf field <code>int32 start_points = 32;</code>
     * @param int $var
     * @return $this
     */
    public function setStartPoints($var)
    {
        GPBUtil::checkInt32($var);
        $this->start_points = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 start_rating = 33;</code>
     * @return int
     */
    public function getStartRating()
    {
        return $this->start_rating;
    }

    /**
     * Generated from protobuf field <code>int32 start_rating = 33;</code>
     * @param int $var
     * @return $this
     */
    public function setStartRating($var)
    {
        GPBUtil::checkInt32($var);
        $this->start_rating = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 allowed_yaku = 34;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedYaku()
    {
        return $this->allowed_yaku;
    }

    /**
     * Generated from protobuf field <code>repeated int32 allowed_yaku = 34;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedYaku($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->allowed_yaku = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 yaku_with_pao = 35;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getYakuWithPao()
    {
        return $this->yaku_with_pao;
    }

    /**
     * Generated from protobuf field <code>repeated int32 yaku_with_pao = 35;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setYakuWithPao($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->yaku_with_pao = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool with_yakitori = 36;</code>
     * @return bool
     */
    public function getWithYakitori()
    {
        return $this->with_yakitori;
    }

    /**
     * Generated from protobuf field <code>bool with_yakitori = 36;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithYakitori($var)
    {
        GPBUtil::checkBool($var);
        $this->with_yakitori = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 yakitori_penalty = 37;</code>
     * @return int
     */
    public function getYakitoriPenalty()
    {
        return $this->yakitori_penalty;
    }

    /**
     * Generated from protobuf field <code>int32 yakitori_penalty = 37;</code>
     * @param int $var
     * @return $this
     */
    public function setYakitoriPenalty($var)
    {
        GPBUtil::checkInt32($var);
        $this->yakitori_penalty = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool chombo_ends_game = 38;</code>
     * @return bool
     */
    public function getChomboEndsGame()
    {
        return $this->chombo_ends_game;
    }

    /**
     * Generated from protobuf field <code>bool chombo_ends_game = 38;</code>
     * @param bool $var
     * @return $this
     */
    public function setChomboEndsGame($var)
    {
        GPBUtil::checkBool($var);
        $this->chombo_ends_game = $var;

        return $this;
    }

}

