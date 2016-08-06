<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Account\Item;
use Necowebs\Destiny\Models\Account\SummaryInventoryCurrency;

/**
 * Class InventorySummaryTest
 * @package Necowebs\Destiny\Models\Character
 */
class InventorySummaryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $summary = (new InventorySummary())
            ->setItems(new Collection(Item::class))
            ->setCurrencies(new Collection(SummaryInventoryCurrency::class));

        $this->assertEquals(new Collection(Item::class), $summary->getItems());
        $this->assertEquals(new Collection(SummaryInventoryCurrency::class), $summary->getCurrencies());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = InventorySummary::toObject(null, [
            'items' => [],
            'currencies' => []
        ]);

        $expected = (new InventorySummary())
            ->setItems(new Collection(Item::class))
            ->setCurrencies(new Collection(SummaryInventoryCurrency::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = InventorySummary::toCollection(null, [
            [
                'items' => [],
                'currencies' => []
            ]
        ]);

        $expected = new Collection(InventorySummary::class, [
            (new InventorySummary())
                ->setItems(new Collection(Item::class))
                ->setCurrencies(new Collection(SummaryInventoryCurrency::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
