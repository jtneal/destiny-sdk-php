<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class InventoryBucket
 * @package Necowebs\Destiny\Models\Manifest
 */
class InventoryBucket
{
    /**
     * @var int
     */
    private $bucketHash;

    /**
     * @var string
     */
    private $bucketName;

    /**
     * @var string
     */
    private $bucketDescription;

    /**
     * @var int
     */
    private $scope;

    /**
     * @var int
     */
    private $category;

    /**
     * @var int
     */
    private $bucketOrder;

    /**
     * @var string
     */
    private $bucketIdentifier;

    /**
     * @var int
     */
    private $itemCount;

    /**
     * @var int
     */
    private $location;

    /**
     * @var bool
     */
    private $hasTransferDestination;

    /**
     * @var bool
     */
    private $enabled;

    /**
     * @var int
     */
    private $hash;

    /**
     * @var int
     */
    private $index;

    /**
     * @return int
     */
    public function getBucketHash()
    {
        return $this->bucketHash;
    }

    /**
     * @param int $bucketHash
     * @return InventoryBucket
     */
    public function setBucketHash($bucketHash)
    {
        $this->bucketHash = (int) $bucketHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getBucketName()
    {
        return $this->bucketName;
    }

    /**
     * @param string $bucketName
     * @return InventoryBucket
     */
    public function setBucketName($bucketName)
    {
        $this->bucketName = (string) $bucketName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBucketDescription()
    {
        return $this->bucketDescription;
    }

    /**
     * @param string $bucketDescription
     * @return InventoryBucket
     */
    public function setBucketDescription($bucketDescription)
    {
        $this->bucketDescription = (string) $bucketDescription;
        return $this;
    }

    /**
     * @return int
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param int $scope
     * @return InventoryBucket
     */
    public function setScope($scope)
    {
        $this->scope = (int) $scope;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param int $category
     * @return InventoryBucket
     */
    public function setCategory($category)
    {
        $this->category = (int) $category;
        return $this;
    }

    /**
     * @return int
     */
    public function getBucketOrder()
    {
        return $this->bucketOrder;
    }

    /**
     * @param int $bucketOrder
     * @return InventoryBucket
     */
    public function setBucketOrder($bucketOrder)
    {
        $this->bucketOrder = (int) $bucketOrder;
        return $this;
    }

    /**
     * @return string
     */
    public function getBucketIdentifier()
    {
        return $this->bucketIdentifier;
    }

    /**
     * @param string $bucketIdentifier
     * @return InventoryBucket
     */
    public function setBucketIdentifier($bucketIdentifier)
    {
        $this->bucketIdentifier = (string) $bucketIdentifier;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemCount()
    {
        return $this->itemCount;
    }

    /**
     * @param int $itemCount
     * @return InventoryBucket
     */
    public function setItemCount($itemCount)
    {
        $this->itemCount = (int) $itemCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param int $location
     * @return InventoryBucket
     */
    public function setLocation($location)
    {
        $this->location = (int) $location;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasTransferDestination()
    {
        return $this->hasTransferDestination;
    }

    /**
     * @param bool $hasTransferDestination
     * @return InventoryBucket
     */
    public function setHasTransferDestination($hasTransferDestination)
    {
        $this->hasTransferDestination = (bool) $hasTransferDestination;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     * @return InventoryBucket
     */
    public function setEnabled($enabled)
    {
        $this->enabled = (bool) $enabled;
        return $this;
    }

    /**
     * @return int
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param int $hash
     * @return InventoryBucket
     */
    public function setHash($hash)
    {
        $this->hash = (int) $hash;
        return $this;
    }

    /**
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param int $index
     * @return InventoryBucket
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }
}
