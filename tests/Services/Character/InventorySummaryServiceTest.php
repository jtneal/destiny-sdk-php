<?php

namespace Necowebs\Destiny\Services\Character;

use Necowebs\Destiny\Exceptions\CharacterNotFoundException;
use Necowebs\Destiny\Models\Account\Item;
use Necowebs\Destiny\Models\Account\SummaryInventoryCurrency;


/**
 * Class InventorySummaryServiceTest
 * @package Necowebs\Destiny\Services\Character
 */
class InventorySummaryServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Inventory Summary
     */
    public function testGetInventorySummary()
    {
        $summary = (new InventorySummaryService())->getInventorySummary(2, '4611686018450406180', '2305843009310128298');

        $this->assertContainsOnlyInstancesOf(Item::class, $summary->getItems());
        $this->assertContainsOnlyInstancesOf(SummaryInventoryCurrency::class, $summary->getCurrencies());
    }

    /**
     * Test Get Inventory Summary Exception
     */
    public function testGetInventorySummaryException()
    {
        $this->expectException(CharacterNotFoundException::class);

        $summary = (new InventorySummaryService())->getInventorySummary(0, 'Fail', 'Fail');
    }
}
