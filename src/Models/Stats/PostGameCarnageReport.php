<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class PostGameCarnageReport
 * @package Necowebs\Destiny\Models\Stats
 */
class PostGameCarnageReport
{
    use ModelTrait;

    /**
     * @var string
     */
    private $period;

    /**
     * @var ActivityDetails
     */
    private $activityDetails;

    /**
     * @var Collection
     */
    private $entries;

    /**
     * @var Collection
     */
    private $teams;

    /**
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param string $period
     * @return PostGameCarnageReport
     */
    public function setPeriod($period)
    {
        $this->period = (string) $period;
        return $this;
    }

    /**
     * @return ActivityDetails
     */
    public function getActivityDetails()
    {
        return $this->activityDetails;
    }

    /**
     * @param ActivityDetails $activityDetails
     * @return PostGameCarnageReport
     */
    public function setActivityDetails(ActivityDetails $activityDetails)
    {
        $this->activityDetails = $activityDetails;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * @param Collection $entries
     * @return PostGameCarnageReport
     */
    public function setEntries(Collection $entries)
    {
        $this->entries = $entries;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getTeams()
    {
        return $this->teams;
    }

    /**
     * @param Collection $teams
     * @return PostGameCarnageReport
     */
    public function setTeams(Collection $teams)
    {
        $this->teams = $teams;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return PostGameCarnageReport
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('period')
            ->add('activityDetails', null, ActivityDetails::class . '::toObject')
            ->add('entries', null, PostGameCarnageReportEntry::class . '::toCollection')
            ->add('teams', null, PostGameCarnageReportTeam::class . '::toCollection');
        return $mapper->map($val);
    }
}
