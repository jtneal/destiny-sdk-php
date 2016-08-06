<?php

namespace Necowebs\Destiny\Models\Stats;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class AggregateActivityValues
 * @package Necowebs\Destiny\Models\Stats
 */
class AggregateActivityValues
{
    use ModelTrait;

    /**
     * @var ActivityValue
     */
    private $fastestCompletionSecondsForActivity;

    /**
     * @var ActivityValue
     */
    private $activityCompletions;

    /**
     * @var ActivityValue
     */
    private $activityDeaths;

    /**
     * @var ActivityValue
     */
    private $activityKills;

    /**
     * @var ActivityValue
     */
    private $activitySecondsPlayed;

    /**
     * @var ActivityValue
     */
    private $activityWins;

    /**
     * @var ActivityValue
     */
    private $activityKillsDeathsRatio;

    /**
     * @var ActivityValue
     */
    private $activityAssists;

    /**
     * @var ActivityValue
     */
    private $activityKillsDeathsAssists;

    /**
     * @var ActivityValue
     */
    private $activityPrecisionKills;

    /**
     * @var ActivityValue
     */
    private $activityGatesHit;

    /**
     * @return ActivityValue
     */
    public function getFastestCompletionSecondsForActivity()
    {
        return $this->fastestCompletionSecondsForActivity;
    }

    /**
     * @param ActivityValue $fastestCompletionSecondsForActivity
     * @return AggregateActivityValues
     */
    public function setFastestCompletionSecondsForActivity(ActivityValue $fastestCompletionSecondsForActivity)
    {
        $this->fastestCompletionSecondsForActivity = $fastestCompletionSecondsForActivity;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getActivityCompletions()
    {
        return $this->activityCompletions;
    }

    /**
     * @param ActivityValue $activityCompletions
     * @return AggregateActivityValues
     */
    public function setActivityCompletions(ActivityValue $activityCompletions)
    {
        $this->activityCompletions = $activityCompletions;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getActivityDeaths()
    {
        return $this->activityDeaths;
    }

    /**
     * @param ActivityValue $activityDeaths
     * @return AggregateActivityValues
     */
    public function setActivityDeaths(ActivityValue $activityDeaths)
    {
        $this->activityDeaths = $activityDeaths;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getActivityKills()
    {
        return $this->activityKills;
    }

    /**
     * @param ActivityValue $activityKills
     * @return AggregateActivityValues
     */
    public function setActivityKills(ActivityValue $activityKills)
    {
        $this->activityKills = $activityKills;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getActivitySecondsPlayed()
    {
        return $this->activitySecondsPlayed;
    }

    /**
     * @param ActivityValue $activitySecondsPlayed
     * @return AggregateActivityValues
     */
    public function setActivitySecondsPlayed(ActivityValue $activitySecondsPlayed)
    {
        $this->activitySecondsPlayed = $activitySecondsPlayed;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getActivityWins()
    {
        return $this->activityWins;
    }

    /**
     * @param ActivityValue $activityWins
     * @return AggregateActivityValues
     */
    public function setActivityWins(ActivityValue $activityWins)
    {
        $this->activityWins = $activityWins;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getActivityKillsDeathsRatio()
    {
        return $this->activityKillsDeathsRatio;
    }

    /**
     * @param ActivityValue $activityKillsDeathsRatio
     * @return AggregateActivityValues
     */
    public function setActivityKillsDeathsRatio(ActivityValue $activityKillsDeathsRatio)
    {
        $this->activityKillsDeathsRatio = $activityKillsDeathsRatio;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getActivityAssists()
    {
        return $this->activityAssists;
    }

    /**
     * @param ActivityValue $activityAssists
     * @return AggregateActivityValues
     */
    public function setActivityAssists(ActivityValue $activityAssists)
    {
        $this->activityAssists = $activityAssists;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getActivityKillsDeathsAssists()
    {
        return $this->activityKillsDeathsAssists;
    }

    /**
     * @param ActivityValue $activityKillsDeathsAssists
     * @return AggregateActivityValues
     */
    public function setActivityKillsDeathsAssists(ActivityValue $activityKillsDeathsAssists)
    {
        $this->activityKillsDeathsAssists = $activityKillsDeathsAssists;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getActivityPrecisionKills()
    {
        return $this->activityPrecisionKills;
    }

    /**
     * @param ActivityValue $activityPrecisionKills
     * @return AggregateActivityValues
     */
    public function setActivityPrecisionKills(ActivityValue $activityPrecisionKills)
    {
        $this->activityPrecisionKills = $activityPrecisionKills;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getActivityGatesHit()
    {
        return $this->activityGatesHit;
    }

    /**
     * @param ActivityValue $activityGatesHit
     * @return AggregateActivityValues
     */
    public function setActivityGatesHit(ActivityValue $activityGatesHit)
    {
        $this->activityGatesHit = $activityGatesHit;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AggregateActivityValues
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('fastestCompletionSecondsForActivity', null, ActivityValue::class . '::toObject')
            ->add('activityCompletions', null, ActivityValue::class . '::toObject')
            ->add('activityDeaths', null, ActivityValue::class . '::toObject')
            ->add('activityKills', null, ActivityValue::class . '::toObject')
            ->add('activitySecondsPlayed', null, ActivityValue::class . '::toObject')
            ->add('activityWins', null, ActivityValue::class . '::toObject')
            ->add('activityKillsDeathsRatio', null, ActivityValue::class . '::toObject')
            ->add('activityAssists', null, ActivityValue::class . '::toObject')
            ->add('activityKillsDeathsAssists', null, ActivityValue::class . '::toObject')
            ->add('activityPrecisionKills', null, ActivityValue::class . '::toObject')
            ->add('activityGatesHit', null, ActivityValue::class . '::toObject');
        return $mapper->map($val);
    }
}
