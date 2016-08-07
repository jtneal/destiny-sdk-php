<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Account\SummaryCharacterBaseStat;

/**
 * Class InventoryItemNodeStatTest
 * @package Necowebs\Destiny\Models\Character
 */
class InventoryItemNodeStatTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $stat = (new InventoryItemNodeStat())
            ->setCurrentNodeStats(new Collection(SummaryCharacterBaseStat::class))
            ->setNextNodeStats(new Collection(SummaryCharacterBaseStat::class));

        $this->assertEquals(new Collection(SummaryCharacterBaseStat::class), $stat->getCurrentNodeStats());
        $this->assertEquals(new Collection(SummaryCharacterBaseStat::class), $stat->getNextNodeStats());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = InventoryItemNodeStat::toObject(null, [
            'currentNodeStats' => [],
            'nextNodeStats' => []
        ]);

        $expected = (new InventoryItemNodeStat())
            ->setCurrentNodeStats(new Collection(SummaryCharacterBaseStat::class))
            ->setNextNodeStats(new Collection(SummaryCharacterBaseStat::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = InventoryItemNodeStat::toCollection(null, [
            [
                'currentNodeStats' => [],
                'nextNodeStats' => []
            ]
        ]);

        $expected = new Collection(InventoryItemNodeStat::class, [
            (new InventoryItemNodeStat())
                ->setCurrentNodeStats(new Collection(SummaryCharacterBaseStat::class))
                ->setNextNodeStats(new Collection(SummaryCharacterBaseStat::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
