<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Account\SummaryInventoryCurrency;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class AdvisorActivityExtendedOrder
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityExtendedOrder
{
    use ModelTrait;

    /**
     * @var AdvisorActivityExtendedOrderItem
     */
    private $item;

    /**
     * @var int
     */
    private $vendorItemIndex;

    /**
     * @var int
     */
    private $itemStatus;

    /**
     * SummaryInventoryCurrency
     * @var Collection
     */
    private $costs;

    /**
     * Int
     * @var Collection
     */
    private $requiredUnlockFlags;

    /**
     * Int
     * @var Collection
     */
    private $failureIndexes;

    /**
     * @return AdvisorActivityExtendedOrderItem
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param AdvisorActivityExtendedOrderItem $item
     * @return AdvisorActivityExtendedOrder
     */
    public function setItem(AdvisorActivityExtendedOrderItem $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return int
     */
    public function getVendorItemIndex()
    {
        return $this->vendorItemIndex;
    }

    /**
     * @param int $vendorItemIndex
     * @return AdvisorActivityExtendedOrder
     */
    public function setVendorItemIndex($vendorItemIndex)
    {
        $this->vendorItemIndex = (int) $vendorItemIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemStatus()
    {
        return $this->itemStatus;
    }

    /**
     * @param int $itemStatus
     * @return AdvisorActivityExtendedOrder
     */
    public function setItemStatus($itemStatus)
    {
        $this->itemStatus = (int) $itemStatus;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getCosts()
    {
        return $this->costs;
    }

    /**
     * @param Collection $costs
     * @return AdvisorActivityExtendedOrder
     */
    public function setCosts(Collection $costs)
    {
        $this->costs = $costs;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getRequiredUnlockFlags()
    {
        return $this->requiredUnlockFlags;
    }

    /**
     * @param Collection $requiredUnlockFlags
     * @return AdvisorActivityExtendedOrder
     */
    public function setRequiredUnlockFlags(Collection $requiredUnlockFlags)
    {
        $this->requiredUnlockFlags = $requiredUnlockFlags;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getFailureIndexes()
    {
        return $this->failureIndexes;
    }

    /**
     * @param Collection $failureIndexes
     * @return AdvisorActivityExtendedOrder
     */
    public function setFailureIndexes(Collection $failureIndexes)
    {
        $this->failureIndexes = $failureIndexes;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorActivityExtendedOrder
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('item', null, AdvisorActivityExtendedOrderItem::class . '::toObject')
            ->add('vendorItemIndex')
            ->add('itemStatus')
            ->add('costs', null, SummaryInventoryCurrency::class . '::toCollection')
            ->add('requiredUnlockFlags', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('failureIndexes', null, MapperHelper::class . '::mapArrayToCollectionInt');
        return $mapper->map($val);
    }
}
