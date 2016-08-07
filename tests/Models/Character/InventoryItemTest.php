<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Account\SummaryCharacterBaseStat;

/**
 * Class InventoryItemTest
 * @package Necowebs\Destiny\Models\Character
 */
class InventoryItemTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $item = (new InventoryItem())
            ->setItem(new AdvisorActivityExtendedOrderItem())
            ->setTalentNodes(new Collection(InventoryItemTalentNode::class))
            ->setStatsOnNodes(new Collection(InventoryItemNodeStat::class))
            ->setCharacterStatsToDisplay(new Collection(SummaryCharacterBaseStat::class))
            ->setMaterialItemHashes(new Collection('int'))
            ->setMaterialQuantities([]);

        $this->assertEquals(new AdvisorActivityExtendedOrderItem(), $item->getItem());
        $this->assertEquals(new Collection(InventoryItemTalentNode::class), $item->getTalentNodes());
        $this->assertEquals(new Collection(InventoryItemNodeStat::class), $item->getStatsOnNodes());
        $this->assertEquals(new Collection(SummaryCharacterBaseStat::class), $item->getCharacterStatsToDisplay());
        $this->assertEquals(new Collection('int'), $item->getMaterialItemHashes());
        $this->assertEquals([], $item->getMaterialQuantities());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = InventoryItem::toObject(null, [
            'item' => [],
            'talentNodes' => [],
            'statsOnNodes' => [],
            'characterStatsToDisplay' => [],
            'materialItemHashes' => [],
            'materialQuantities' => []
        ]);

        $expected = (new InventoryItem())
            ->setItem(new AdvisorActivityExtendedOrderItem())
            ->setTalentNodes(new Collection(InventoryItemTalentNode::class))
            ->setStatsOnNodes(new Collection(InventoryItemNodeStat::class))
            ->setCharacterStatsToDisplay(new Collection(SummaryCharacterBaseStat::class))
            ->setMaterialItemHashes(new Collection('int'))
            ->setMaterialQuantities([]);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = InventoryItem::toCollection(null, [
            [
                'item' => [],
                'talentNodes' => [],
                'statsOnNodes' => [],
                'characterStatsToDisplay' => [],
                'materialItemHashes' => [],
                'materialQuantities' => []
            ]
        ]);

        $expected = new Collection(InventoryItem::class, [
            (new InventoryItem())
                ->setItem(new AdvisorActivityExtendedOrderItem())
                ->setTalentNodes(new Collection(InventoryItemTalentNode::class))
                ->setStatsOnNodes(new Collection(InventoryItemNodeStat::class))
                ->setCharacterStatsToDisplay(new Collection(SummaryCharacterBaseStat::class))
                ->setMaterialItemHashes(new Collection('int'))
                ->setMaterialQuantities([])
        ]);

        $this->assertEquals($expected, $collection);
    }
}
