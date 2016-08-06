<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Account\SummaryInventoryCurrency;

/**
 * Class AdvisorActivityExtendedOrderTest
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityExtendedOrderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $order = (new AdvisorActivityExtendedOrder())
            ->setItem(new AdvisorActivityExtendedOrderItem())
            ->setVendorItemIndex(395)
            ->setItemStatus(0)
            ->setCosts(new Collection(SummaryInventoryCurrency::class))
            ->setRequiredUnlockFlags(new Collection('int'))
            ->setFailureIndexes(new Collection('int'));

        $this->assertEquals(new AdvisorActivityExtendedOrderItem(), $order->getItem());
        $this->assertEquals(395, $order->getVendorItemIndex());
        $this->assertEquals(0, $order->getItemStatus());
        $this->assertEquals(new Collection(SummaryInventoryCurrency::class), $order->getCosts());
        $this->assertEquals(new Collection('int'), $order->getRequiredUnlockFlags());
        $this->assertEquals(new Collection('int'), $order->getFailureIndexes());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AdvisorActivityExtendedOrder::toObject(null, [
            'item' => [],
            'vendorItemIndex' => 395,
            'itemStatus' => 0,
            'costs' => [],
            'requiredUnlockFlags' => [],
            'failureIndexes' => []
        ]);

        $expected = (new AdvisorActivityExtendedOrder())
            ->setItem(new AdvisorActivityExtendedOrderItem())
            ->setVendorItemIndex(395)
            ->setItemStatus(0)
            ->setCosts(new Collection(SummaryInventoryCurrency::class))
            ->setRequiredUnlockFlags(new Collection('int'))
            ->setFailureIndexes(new Collection('int'));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AdvisorActivityExtendedOrder::toCollection(null, [
            [
                'item' => [],
                'vendorItemIndex' => 395,
                'itemStatus' => 0,
                'costs' => [],
                'requiredUnlockFlags' => [],
                'failureIndexes' => []
            ]
        ]);

        $expected = new Collection(AdvisorActivityExtendedOrder::class, [
            (new AdvisorActivityExtendedOrder())
                ->setItem(new AdvisorActivityExtendedOrderItem())
                ->setVendorItemIndex(395)
                ->setItemStatus(0)
                ->setCosts(new Collection(SummaryInventoryCurrency::class))
                ->setRequiredUnlockFlags(new Collection('int'))
                ->setFailureIndexes(new Collection('int'))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
