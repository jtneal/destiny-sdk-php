<?php

namespace Necowebs\Destiny\Models\Stats;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class ActivityValues
 * @package Necowebs\Destiny\Models\Stats
 */
class ActivityValues
{
    use ModelTrait;

    /**
     * @var ActivityValue
     */
    private $assists;

    /**
     * @var ActivityValue
     */
    private $kills;

    /**
     * @var ActivityValue
     */
    private $averageScorePerKill;

    /**
     * @var ActivityValue
     */
    private $deaths;

    /**
     * @var ActivityValue
     */
    private $averageScorePerLife;

    /**
     * @var ActivityValue
     */
    private $completed;

    /**
     * @var ActivityValue
     */
    private $killsDeathsRatio;

    /**
     * @var ActivityValue
     */
    private $killsDeathsAssists;

    /**
     * @var ActivityValue
     */
    private $activityDurationSeconds;

    /**
     * @var ActivityValue
     */
    private $completionReason;

    /**
     * @var ActivityValue
     */
    private $fireTeamId;

    /**
     * @var ActivityValue
     */
    private $playerCount;

    /**
     * @var ActivityValue
     */
    private $leaveRemainingSeconds;

    /**
     * @return ActivityValue
     */
    public function getAssists()
    {
        return $this->assists;
    }

    /**
     * @param ActivityValue $assists
     * @return ActivityValues
     */
    public function setAssists(ActivityValue $assists)
    {
        $this->assists = $assists;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getKills()
    {
        return $this->kills;
    }

    /**
     * @param ActivityValue $kills
     * @return ActivityValues
     */
    public function setKills(ActivityValue $kills)
    {
        $this->kills = $kills;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getAverageScorePerKill()
    {
        return $this->averageScorePerKill;
    }

    /**
     * @param ActivityValue $averageScorePerKill
     * @return ActivityValues
     */
    public function setAverageScorePerKill(ActivityValue $averageScorePerKill)
    {
        $this->averageScorePerKill = $averageScorePerKill;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getDeaths()
    {
        return $this->deaths;
    }

    /**
     * @param ActivityValue $deaths
     * @return ActivityValues
     */
    public function setDeaths(ActivityValue $deaths)
    {
        $this->deaths = $deaths;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getAverageScorePerLife()
    {
        return $this->averageScorePerLife;
    }

    /**
     * @param ActivityValue $averageScorePerLife
     * @return ActivityValues
     */
    public function setAverageScorePerLife(ActivityValue $averageScorePerLife)
    {
        $this->averageScorePerLife = $averageScorePerLife;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getCompleted()
    {
        return $this->completed;
    }

    /**
     * @param ActivityValue $completed
     * @return ActivityValues
     */
    public function setCompleted(ActivityValue $completed)
    {
        $this->completed = $completed;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getKillsDeathsRatio()
    {
        return $this->killsDeathsRatio;
    }

    /**
     * @param ActivityValue $killsDeathsRatio
     * @return ActivityValues
     */
    public function setKillsDeathsRatio(ActivityValue $killsDeathsRatio)
    {
        $this->killsDeathsRatio = $killsDeathsRatio;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getKillsDeathsAssists()
    {
        return $this->killsDeathsAssists;
    }

    /**
     * @param ActivityValue $killsDeathsAssists
     * @return ActivityValues
     */
    public function setKillsDeathsAssists(ActivityValue $killsDeathsAssists)
    {
        $this->killsDeathsAssists = $killsDeathsAssists;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getActivityDurationSeconds()
    {
        return $this->activityDurationSeconds;
    }

    /**
     * @param ActivityValue $activityDurationSeconds
     * @return ActivityValues
     */
    public function setActivityDurationSeconds(ActivityValue $activityDurationSeconds)
    {
        $this->activityDurationSeconds = $activityDurationSeconds;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getCompletionReason()
    {
        return $this->completionReason;
    }

    /**
     * @param ActivityValue $completionReason
     * @return ActivityValues
     */
    public function setCompletionReason(ActivityValue $completionReason)
    {
        $this->completionReason = $completionReason;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getFireTeamId()
    {
        return $this->fireTeamId;
    }

    /**
     * @param ActivityValue $fireTeamId
     * @return ActivityValues
     */
    public function setFireTeamId(ActivityValue $fireTeamId)
    {
        $this->fireTeamId = $fireTeamId;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getPlayerCount()
    {
        return $this->playerCount;
    }

    /**
     * @param ActivityValue $playerCount
     * @return ActivityValues
     */
    public function setPlayerCount(ActivityValue $playerCount)
    {
        $this->playerCount = $playerCount;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getLeaveRemainingSeconds()
    {
        return $this->leaveRemainingSeconds;
    }

    /**
     * @param ActivityValue $leaveRemainingSeconds
     * @return ActivityValues
     */
    public function setLeaveRemainingSeconds(ActivityValue $leaveRemainingSeconds)
    {
        $this->leaveRemainingSeconds = $leaveRemainingSeconds;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return ActivityValues
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('assists', null, ActivityValue::class . '::toObject')
            ->add('kills', null, ActivityValue::class . '::toObject')
            ->add('averageScorePerKill', null, ActivityValue::class . '::toObject')
            ->add('deaths', null, ActivityValue::class . '::toObject')
            ->add('averageScorePerLife', null, ActivityValue::class . '::toObject')
            ->add('completed', null, ActivityValue::class . '::toObject')
            ->add('killsDeathsRatio', null, ActivityValue::class . '::toObject')
            ->add('killsDeathsAssists', null, ActivityValue::class . '::toObject')
            ->add('activityDurationSeconds', null, ActivityValue::class . '::toObject')
            ->add('completionReason', null, ActivityValue::class . '::toObject')
            ->add('fireTeamId', null, ActivityValue::class . '::toObject')
            ->add('playerCount', null, ActivityValue::class . '::toObject')
            ->add('leaveRemainingSeconds', null, ActivityValue::class . '::toObject');
        return $mapper->map($val);
    }
}
