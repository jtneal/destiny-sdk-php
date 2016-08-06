<?php

namespace Necowebs\Destiny\Models\Manifest;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class InventoryItemEquippingBlockArrangement
 * @package Necowebs\Destiny\Models\Manifest
 */
class InventoryItemEquippingBlockArrangement
{
    use ModelTrait;

    /**
     * @var int
     */
    private $classHash;

    /**
     * @var int
     */
    private $gearArtArrangementIndex;

    /**
     * @return int
     */
    public function getClassHash()
    {
        return $this->classHash;
    }

    /**
     * @param int $classHash
     * @return InventoryItemEquippingBlockArrangement
     */
    public function setClassHash($classHash)
    {
        $this->classHash = (int) $classHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getGearArtArrangementIndex()
    {
        return $this->gearArtArrangementIndex;
    }

    /**
     * @param int $gearArtArrangementIndex
     * @return InventoryItemEquippingBlockArrangement
     */
    public function setGearArtArrangementIndex($gearArtArrangementIndex)
    {
        $this->gearArtArrangementIndex = (int) $gearArtArrangementIndex;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return InventoryItemEquippingBlockArrangement
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('classHash')
            ->add('gearArtArrangementIndex');
        return $mapper->map($val);
    }
}
