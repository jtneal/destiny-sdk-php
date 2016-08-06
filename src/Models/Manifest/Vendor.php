<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class Vendor
 * @package Necowebs\Destiny\Models\Manifest
 */
class Vendor
{
    use ModelTrait;

    /**
     * @var VendorSummary
     */
    private $summary;

    /**
     * @var Collection
     */
    private $acceptedItems;

    /**
     * @var Collection
     */
    private $categories;

    /**
     * @var array
     */
    private $failureStrings;

    /**
     * @var int
     */
    private $unlockValueHash;

    /**
     * @var int
     */
    private $hash;

    /**
     * @var int
     */
    private $index;

    /**
     * @return VendorSummary
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param VendorSummary $summary
     * @return Vendor
     */
    public function setSummary(VendorSummary $summary)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getAcceptedItems()
    {
        return $this->acceptedItems;
    }

    /**
     * @param Collection $acceptedItems
     * @return Vendor
     */
    public function setAcceptedItems(Collection $acceptedItems)
    {
        $this->acceptedItems = $acceptedItems;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param Collection $categories
     * @return Vendor
     */
    public function setCategories(Collection $categories)
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * @return array
     */
    public function getFailureStrings()
    {
        return $this->failureStrings;
    }

    /**
     * @param array $failureStrings
     * @return Vendor
     */
    public function setFailureStrings(array $failureStrings)
    {
        $this->failureStrings = $failureStrings;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnlockValueHash()
    {
        return $this->unlockValueHash;
    }

    /**
     * @param int $unlockValueHash
     * @return Vendor
     */
    public function setUnlockValueHash($unlockValueHash)
    {
        $this->unlockValueHash = (int) $unlockValueHash;
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
     * @return Vendor
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
     * @return Vendor
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Vendor
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('summary', null, VendorSummary::class . '::toObject')
            ->add('acceptedItems', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('categories', null, VendorCategory::class . '::toCollection')
            ->add('failureStrings')
            ->add('unlockValueHash')
            ->add('hash')
            ->add('index');
        return $mapper->map($val);
    }
}
