<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class InventoryItemEquippingBlockArrangement
 * @package Necowebs\Destiny\Models\Manifest
 */
class InventoryItemEquippingBlockArrangement
{
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
}
