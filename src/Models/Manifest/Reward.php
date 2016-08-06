<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class Reward
 * @package Necowebs\Destiny\Models\Manifest
 */
class Reward
{
    use ModelTrait;

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
     * @return Reward
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
     * @return Reward
     */
    public function setRewardItems(Collection $rewardItems)
    {
        $this->rewardItems = $rewardItems;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Reward
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('progressTotal')
            ->add('rewardItems', null, RewardItem::class . '::toCollection');
        return $mapper->map($val);
    }
}
