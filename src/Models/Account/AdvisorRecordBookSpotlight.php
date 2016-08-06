<?php

namespace Necowebs\Destiny\Models\Account;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class AdvisorRecordBookSpotlight
 * @package Necowebs\Destiny\Models\Account
 */
class AdvisorRecordBookSpotlight
{
    use ModelTrait;

    /**
     * @var int
     */
    private $rewardItemHash;

    /**
     * @var int
     */
    private $rewardedAtLevel;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var int
     */
    private $status;

    /**
     * @return int
     */
    public function getRewardItemHash()
    {
        return $this->rewardItemHash;
    }

    /**
     * @param int $rewardItemHash
     * @return AdvisorRecordBookSpotlight
     */
    public function setRewardItemHash($rewardItemHash)
    {
        $this->rewardItemHash = (int) $rewardItemHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getRewardedAtLevel()
    {
        return $this->rewardedAtLevel;
    }

    /**
     * @param int $rewardedAtLevel
     * @return AdvisorRecordBookSpotlight
     */
    public function setRewardedAtLevel($rewardedAtLevel)
    {
        $this->rewardedAtLevel = (int) $rewardedAtLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return AdvisorRecordBookSpotlight
     */
    public function setQuantity($quantity)
    {
        $this->quantity = (int) $quantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return AdvisorRecordBookSpotlight
     */
    public function setStatus($status)
    {
        $this->status = (int) $status;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorRecordBookSpotlight
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('rewardItemHash')
            ->add('rewardedAtLevel')
            ->add('quantity')
            ->add('status');
        return $mapper->map($val);
    }
}
