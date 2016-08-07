<?php

namespace Necowebs\Destiny\Services\Character;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\CharacterNotFoundException;
use Necowebs\Destiny\Models\Account\SummaryCharacterBaseStat;
use Necowebs\Destiny\Models\Character\AdvisorActivityExtendedOrderItem;
use Necowebs\Destiny\Models\Character\InventoryItemNodeStat;
use Necowebs\Destiny\Models\Character\InventoryItemTalentNode;

/**
 * Class InventoryItemServiceTest
 * @package Necowebs\Destiny\Services\Character
 */
class InventoryItemServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Inventory Item
     */
    public function testGetInventoryItem()
    {
        $item = (new InventoryItemService())->getInventoryItem(2, '4611686018450406180', '2305843009310128298', '6917529062368226431');

        $this->assertInstanceOf(AdvisorActivityExtendedOrderItem::class, $item->getItem());
        $this->assertContainsOnlyInstancesOf(InventoryItemTalentNode::class, $item->getTalentNodes());
        $this->assertContainsOnlyInstancesOf(InventoryItemNodeStat::class, $item->getStatsOnNodes());
        $this->assertContainsOnlyInstancesOf(SummaryCharacterBaseStat::class, $item->getCharacterStatsToDisplay());
        $this->assertEquals(new Collection('int'), $item->getMaterialItemHashes());
        $this->assertEquals([], $item->getMaterialQuantities());
    }

    /**
     * Test Get Inventory Item Exception
     */
    public function testGetInventoryItemException()
    {
        $this->expectException(CharacterNotFoundException::class);

        $item = (new InventoryItemService())->getInventoryItem(0, 'Fail', 'Fail', 'Fail');
    }
}
