<?php

namespace Necowebs\Destiny\Models\Stats;

/**
 * Class ActivityDetails
 * @package Necowebs\Destiny\Models\Stats
 */
class ActivityDetails
{
    /**
     * @var int
     */
    private $referenceId;

    /**
     * @var string
     */
    private $instanceId;

    /**
     * @var int
     */
    private $mode;

    /**
     * @var int
     */
    private $activityTypeHashOverride;

    /**
     * @return int
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * @param int $referenceId
     * @return ActivityDetails
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = (int) $referenceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInstanceId()
    {
        return $this->instanceId;
    }

    /**
     * @param string $instanceId
     * @return ActivityDetails
     */
    public function setInstanceId($instanceId)
    {
        $this->instanceId = (string) $instanceId;
        return $this;
    }

    /**
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param int $mode
     * @return ActivityDetails
     */
    public function setMode($mode)
    {
        $this->mode = (int) $mode;
        return $this;
    }

    /**
     * @return int
     */
    public function getActivityTypeHashOverride()
    {
        return $this->activityTypeHashOverride;
    }

    /**
     * @param int $activityTypeHashOverride
     * @return ActivityDetails
     */
    public function setActivityTypeHashOverride($activityTypeHashOverride)
    {
        $this->activityTypeHashOverride = (int) $activityTypeHashOverride;
        return $this;
    }
}
