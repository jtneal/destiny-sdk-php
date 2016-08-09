<?php

namespace Necowebs\Destiny\Services\Character;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\CharacterNotFoundException;
use Necowebs\Destiny\Models\Account\SummaryCharacterBaseStat;
use Necowebs\Destiny\Models\Character\AdvisorActivityExtendedOrderItem;
use Necowebs\Destiny\Models\Character\InventoryItemNodeStat;
use Necowebs\Destiny\Models\Character\InventoryItemTalentNode;

/**
 * Class ItemDetailServiceTest
 * @package Necowebs\Destiny\Services\Character
 */
class ItemDetailServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Item Detail
     */
    public function testGetItemDetail()
    {
        $item = (new ItemDetailService())->getItemDetail(2, '4611686018450406180', '2305843009310128298', '6917529062368226431');

        $this->assertInstanceOf(AdvisorActivityExtendedOrderItem::class, $item->getItem());
        $this->assertContainsOnlyInstancesOf(InventoryItemTalentNode::class, $item->getTalentNodes());
        $this->assertContainsOnlyInstancesOf(InventoryItemNodeStat::class, $item->getStatsOnNodes());
        $this->assertContainsOnlyInstancesOf(SummaryCharacterBaseStat::class, $item->getCharacterStatsToDisplay());
        $this->assertEquals(new Collection('int'), $item->getMaterialItemHashes());
        $this->assertEquals([], $item->getMaterialQuantities());
    }

    /**
     * Test Get Item Detail Exception
     */
    public function testGetItemDetailException()
    {
        $this->expectException(CharacterNotFoundException::class);

        $item = (new ItemDetailService())->getItemDetail(0, 'Fail', 'Fail', 'Fail');
    }
}
