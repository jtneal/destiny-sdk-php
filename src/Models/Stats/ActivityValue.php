<?php

namespace Necowebs\Destiny\Models\Stats;

/**
 * Class ActivityValue
 * @package Necowebs\Destiny\Models\Stats
 */
class ActivityValue
{
    /**
     * @var string
     */
    private $statId;

    /**
     * @var ActivityValueBasic
     */
    private $basic;

    /**
     * @return string
     */
    public function getStatId()
    {
        return $this->statId;
    }

    /**
     * @param string $statId
     * @return ActivityValue
     */
    public function setStatId($statId)
    {
        $this->statId = (string) $statId;
        return $this;
    }

    /**
     * @return ActivityValueBasic
     */
    public function getBasic()
    {
        return $this->basic;
    }

    /**
     * @param ActivityValueBasic $basic
     * @return ActivityValue
     */
    public function setBasic(ActivityValueBasic $basic)
    {
        $this->basic = $basic;
        return $this;
    }
}
