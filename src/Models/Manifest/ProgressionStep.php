<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class ProgressionStep
 * @package Necowebs\Destiny\Models\Manifest
 */
class ProgressionStep
{
    /**
     * @var int
     */
    private $progressTotal;

    /**
     * @todo: Find out what this includes and convert to Collection or Object
     * @var array
     */
    private $rewardItems;

    /**
     * @return int
     */
    public function getProgressTotal()
    {
        return $this->progressTotal;
    }

    /**
     * @param int $progressTotal
     * @return ProgressionStep
     */
    public function setProgressTotal($progressTotal)
    {
        $this->progressTotal = (int) $progressTotal;
        return $this;
    }

    /**
     * @return array
     */
    public function getRewardItems()
    {
        return $this->rewardItems;
    }

    /**
     * @param array $rewardItems
     * @return ProgressionStep
     */
    public function setRewardItems(array $rewardItems)
    {
        $this->rewardItems = $rewardItems;
        return $this;
    }
}
