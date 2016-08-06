<?php

namespace Necowebs\Destiny\Models\Manifest;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class InventoryItemStat
 * @package Necowebs\Destiny\Models\Manifest
 */
class InventoryItemStat
{
    use ModelTrait;

    /**
     * @var int
     */
    private $statHash;

    /**
     * @var int
     */
    private $value;

    /**
     * @var int
     */
    private $minimum;

    /**
     * @var int
     */
    private $maximum;

    /**
     * @return int
     */
    public function getStatHash()
    {
        return $this->statHash;
    }

    /**
     * @param int $statHash
     * @return InventoryItemStat
     */
    public function setStatHash($statHash)
    {
        $this->statHash = (int) $statHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     * @return InventoryItemStat
     */
    public function setValue($value)
    {
        $this->value = (int) $value;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * @param int $minimum
     * @return InventoryItemStat
     */
    public function setMinimum($minimum)
    {
        $this->minimum = (int) $minimum;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * @param int $maximum
     * @return InventoryItemStat
     */
    public function setMaximum($maximum)
    {
        $this->maximum = (int) $maximum;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return InventoryItemStat
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('statHash')
            ->add('value')
            ->add('minimum')
            ->add('maximum');
        return $mapper->map($val);
    }
}
