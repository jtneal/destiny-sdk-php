<?php

namespace Necowebs\Destiny\Services\Character;

use Necowebs\Destiny\Exceptions\CharacterNotFoundException;
use Necowebs\Destiny\Models\Account\Item;
use Necowebs\Destiny\Models\Account\SummaryInventoryCurrency;

/**
 * Class CharacterInventorySummaryServiceTest
 * @package Necowebs\Destiny\Services\Character
 */
class CharacterInventorySummaryServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Character Inventory Summary
     */
    public function testGetCharacterInventorySummary()
    {
        $summary = (new CharacterInventorySummaryService())->getCharacterInventorySummary(2, '4611686018450406180', '2305843009310128298');

        $this->assertContainsOnlyInstancesOf(Item::class, $summary->getItems());
        $this->assertContainsOnlyInstancesOf(SummaryInventoryCurrency::class, $summary->getCurrencies());
    }

    /**
     * Test Get Character Inventory Summary Exception
     */
    public function testGetCharacterInventorySummaryException()
    {
        $this->expectException(CharacterNotFoundException::class);

        $summary = (new CharacterInventorySummaryService())->getCharacterInventorySummary(0, 'Fail', 'Fail');
    }
}
