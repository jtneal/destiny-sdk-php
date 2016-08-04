<?php

namespace Necowebs\Destiny\Models\Stats;

/**
 * Class Activity
 * @package Necowebs\Destiny\Models\Stats
 */
class Activity
{
    /**
     * @var string
     */
    private $period;

    /**
     * @var ActivityDetails
     */
    private $activityDetails;

    /**
     * @var ActivityValues
     */
    private $values;

    /**
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param string $period
     * @return Activity
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
     * @return Activity
     */
    public function setActivityDetails(ActivityDetails $activityDetails)
    {
        $this->activityDetails = $activityDetails;
        return $this;
    }

    /**
     * @return ActivityValues
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param ActivityValues $values
     * @return Activity
     */
    public function setValues(ActivityValues $values)
    {
        $this->values = $values;
        return $this;
    }
}
