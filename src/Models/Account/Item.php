<?php

namespace Necowebs\Destiny\Models\Account;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class Item
 * @package Necowebs\Destiny\Models\Account
 */
class Item
{
    use ModelTrait;

    /**
     * @var int
     */
    private $itemHash;

    /**
     * @var string
     */
    private $itemId;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var int
     */
    private $damageType;

    /**
     * @var int
     */
    private $damageTypeHash;

    /**
     * @var SummaryCharacterBaseStat
     */
    private $primaryStat;

    /**
     * @var bool
     */
    private $isGridComplete;

    /**
     * @var int
     */
    private $transferStatus;

    /**
     * @var int
     */
    private $state;

    /**
     * @var int
     */
    private $characterIndex;

    /**
     * @var int
     */
    private $bucketHash;

    /**
     * @return int
     */
    public function getItemHash()
    {
        return $this->itemHash;
    }

    /**
     * @param int $itemHash
     * @return Item
     */
    public function setItemHash($itemHash)
    {
        $this->itemHash = (int) $itemHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param string $itemId
     * @return Item
     */
    public function setItemId($itemId)
    {
        $this->itemId = (string) $itemId;
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
     * @return Item
     */
    public function setQuantity($quantity)
    {
        $this->quantity = (int) $quantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getDamageType()
    {
        return $this->damageType;
    }

    /**
     * @param int $damageType
     * @return Item
     */
    public function setDamageType($damageType)
    {
        $this->damageType = (int) $damageType;
        return $this;
    }

    /**
     * @return int
     */
    public function getDamageTypeHash()
    {
        return $this->damageTypeHash;
    }

    /**
     * @param int $damageTypeHash
     * @return Item
     */
    public function setDamageTypeHash($damageTypeHash)
    {
        $this->damageTypeHash = (int) $damageTypeHash;
        return $this;
    }

    /**
     * @return SummaryCharacterBaseStat
     */
    public function getPrimaryStat()
    {
        return $this->primaryStat;
    }

    /**
     * @param SummaryCharacterBaseStat $primaryStat
     * @return Item
     */
    public function setPrimaryStat(SummaryCharacterBaseStat $primaryStat)
    {
        $this->primaryStat = $primaryStat;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsGridComplete()
    {
        return $this->isGridComplete;
    }

    /**
     * @param bool $isGridComplete
     * @return Item
     */
    public function setIsGridComplete($isGridComplete)
    {
        $this->isGridComplete = (bool) $isGridComplete;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransferStatus()
    {
        return $this->transferStatus;
    }

    /**
     * @param int $transferStatus
     * @return Item
     */
    public function setTransferStatus($transferStatus)
    {
        $this->transferStatus = (int) $transferStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param int $state
     * @return Item
     */
    public function setState($state)
    {
        $this->state = (int) $state;
        return $this;
    }

    /**
     * @return int
     */
    public function getCharacterIndex()
    {
        return $this->characterIndex;
    }

    /**
     * @param int $characterIndex
     * @return Item
     */
    public function setCharacterIndex($characterIndex)
    {
        $this->characterIndex = (int) $characterIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getBucketHash()
    {
        return $this->bucketHash;
    }

    /**
     * @param int $bucketHash
     * @return Item
     */
    public function setBucketHash($bucketHash)
    {
        $this->bucketHash = (int) $bucketHash;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Summary
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('itemHash')
            ->add('itemId')
            ->add('quantity')
            ->add('damageType')
            ->add('damageTypeHash')
            ->add('primaryStat', null, SummaryCharacterBaseStat::class . '::toObject')
            ->add('isGridComplete')
            ->add('transferStatus')
            ->add('state')
            ->add('characterIndex')
            ->add('bucketHash');
        return $mapper->map($val);
    }
}
