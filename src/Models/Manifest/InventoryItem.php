<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class InventoryItem
 * @package Necowebs\Destiny\Models\Manifest
 */
class InventoryItem
{
    /**
     * @var int
     */
    private $itemHash;

    /**
     * @var string
     */
    private $itemName;

    /**
     * @var string
     */
    private $itemDescription;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var bool
     */
    private $hasIcon;

    /**
     * @var string
     */
    private $secondaryIcon;

    /**
     * @var string
     */
    private $tierTypeName;

    /**
     * @var int
     */
    private $tierType;

    /**
     * @var string
     */
    private $itemTypeName;

    /**
     * @var int
     */
    private $bucketTypeHash;

    /**
     * @return int
     */
    public function getItemHash()
    {
        return $this->itemHash;
    }

    /**
     * @param int $itemHash
     * @return InventoryItem
     */
    public function setItemHash($itemHash)
    {
        $this->itemHash = (int) $itemHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * @param string $itemName
     * @return InventoryItem
     */
    public function setItemName($itemName)
    {
        $this->itemName = (string) $itemName;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemDescription()
    {
        return $this->itemDescription;
    }

    /**
     * @param string $itemDescription
     * @return InventoryItem
     */
    public function setItemDescription($itemDescription)
    {
        $this->itemDescription = (string) $itemDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     * @return InventoryItem
     */
    public function setIcon($icon)
    {
        $this->icon = (string) $icon;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasIcon()
    {
        return $this->hasIcon;
    }

    /**
     * @param bool $hasIcon
     * @return InventoryItem
     */
    public function setHasIcon($hasIcon)
    {
        $this->hasIcon = (bool) $hasIcon;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecondaryIcon()
    {
        return $this->secondaryIcon;
    }

    /**
     * @param string $secondaryIcon
     * @return InventoryItem
     */
    public function setSecondaryIcon($secondaryIcon)
    {
        $this->secondaryIcon = (string) $secondaryIcon;
        return $this;
    }

    /**
     * @return string
     */
    public function getTierTypeName()
    {
        return $this->tierTypeName;
    }

    /**
     * @param string $tierTypeName
     * @return InventoryItem
     */
    public function setTierTypeName($tierTypeName)
    {
        $this->tierTypeName = (string) $tierTypeName;
        return $this;
    }

    /**
     * @return int
     */
    public function getTierType()
    {
        return $this->tierType;
    }

    /**
     * @param int $tierType
     * @return InventoryItem
     */
    public function setTierType($tierType)
    {
        $this->tierType = (int) $tierType;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemTypeName()
    {
        return $this->itemTypeName;
    }

    /**
     * @param string $itemTypeName
     * @return InventoryItem
     */
    public function setItemTypeName($itemTypeName)
    {
        $this->itemTypeName = (string) $itemTypeName;
        return $this;
    }

    /**
     * @return int
     */
    public function getBucketTypeHash()
    {
        return $this->bucketTypeHash;
    }

    /**
     * @param int $bucketTypeHash
     * @return InventoryItem
     */
    public function setBucketTypeHash($bucketTypeHash)
    {
        $this->bucketTypeHash = (int) $bucketTypeHash;
        return $this;
    }
}
