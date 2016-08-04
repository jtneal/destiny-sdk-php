<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

/**
 * Class SummaryInventoryTest
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryInventoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     * @todo: Try to find actual definition for items because mine is empty: "items": []
     */
    public function testGettersAndSetters()
    {
        $inventory = (new SummaryInventory())
            ->setItems(new Collection('int'))
            ->setCurrencies(new Collection(SummaryInventoryCurrency::class));

        $this->assertEquals(new Collection('int'), $inventory->getItems());
        $this->assertEquals(new Collection(SummaryInventoryCurrency::class), $inventory->getCurrencies());
    }
}
