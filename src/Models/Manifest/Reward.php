<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class Reward
 * @package Necowebs\Destiny\Models\Manifest
 */
class Reward
{
    /**
     * @var Collection
     */
    private $rewardItems;

    /**
     * @return Collection
     */
    public function getRewardItems()
    {
        return $this->rewardItems;
    }

    /**
     * @param Collection $rewardItems
     * @return Reward
     */
    public function setRewardItems(Collection $rewardItems)
    {
        $this->rewardItems = $rewardItems;
        return $this;
    }
}
