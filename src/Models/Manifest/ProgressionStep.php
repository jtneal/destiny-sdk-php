<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

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
     * @var Collection
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
     * @return Collection
     */
    public function getRewardItems()
    {
        return $this->rewardItems;
    }

    /**
     * @param Collection $rewardItems
     * @return ProgressionStep
     */
    public function setRewardItems(Collection $rewardItems)
    {
        $this->rewardItems = $rewardItems;
        return $this;
    }
}
