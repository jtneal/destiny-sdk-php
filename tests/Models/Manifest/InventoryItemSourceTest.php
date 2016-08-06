<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class InventoryItemSourceTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class InventoryItemSourceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $arrangement = (new InventoryItemSource())
            ->setExpansionIndex(0)
            ->setLevel(50)
            ->setMinQuality(0)
            ->setMaxQuality(35)
            ->setMinLevelRequired(40)
            ->setMaxLevelRequired(40)
            ->setExclusivity(0)
            ->setComputedStats(new Collection(InventoryItemStat::class))
            ->setSourceHashes(new Collection('int', [1882189853, 460228854]))
            ->setSpawnIndexes(new Collection('int', [0, 1, 2, 3, 4, 5]));

        $this->assertEquals(0, $arrangement->getExpansionIndex());
        $this->assertEquals(50, $arrangement->getLevel());
        $this->assertEquals(0, $arrangement->getMinQuality());
        $this->assertEquals(35, $arrangement->getMaxQuality());
        $this->assertEquals(40, $arrangement->getMinLevelRequired());
        $this->assertEquals(40, $arrangement->getMaxLevelRequired());
        $this->assertEquals(0, $arrangement->getExclusivity());
        $this->assertEquals(new Collection(InventoryItemStat::class), $arrangement->getComputedStats());
        $this->assertEquals(new Collection('int', [1882189853, 460228854]), $arrangement->getSourceHashes());
        $this->assertEquals(new Collection('int', [0, 1, 2, 3, 4, 5]), $arrangement->getSpawnIndexes());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = InventoryItemSource::toObject(null, [
            'expansionIndex' => 0,
            'level' => 50,
            'minQuality' => 0,
            'maxQuality' => 35,
            'minLevelRequired' => 40,
            'maxLevelRequired' => 40,
            'exclusivity' => 0,
            'computedStats' => [],
            'sourceHashes' => [1882189853, 460228854],
            'spawnIndexes' => [0, 1, 2, 3, 4, 5]
        ]);

        $expected = (new InventoryItemSource())
            ->setExpansionIndex(0)
            ->setLevel(50)
            ->setMinQuality(0)
            ->setMaxQuality(35)
            ->setMinLevelRequired(40)
            ->setMaxLevelRequired(40)
            ->setExclusivity(0)
            ->setComputedStats(new Collection(InventoryItemStat::class))
            ->setSourceHashes(new Collection('int', [1882189853, 460228854]))
            ->setSpawnIndexes(new Collection('int', [0, 1, 2, 3, 4, 5]));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = InventoryItemSource::toCollection(null, [
            [
                'expansionIndex' => 0,
                'level' => 50,
                'minQuality' => 0,
                'maxQuality' => 35,
                'minLevelRequired' => 40,
                'maxLevelRequired' => 40,
                'exclusivity' => 0,
                'computedStats' => [],
                'sourceHashes' => [1882189853, 460228854],
                'spawnIndexes' => [0, 1, 2, 3, 4, 5]
            ]
        ]);

        $expected = new Collection(InventoryItemSource::class, [
            (new InventoryItemSource())
                ->setExpansionIndex(0)
                ->setLevel(50)
                ->setMinQuality(0)
                ->setMaxQuality(35)
                ->setMinLevelRequired(40)
                ->setMaxLevelRequired(40)
                ->setExclusivity(0)
                ->setComputedStats(new Collection(InventoryItemStat::class))
                ->setSourceHashes(new Collection('int', [1882189853, 460228854]))
                ->setSpawnIndexes(new Collection('int', [0, 1, 2, 3, 4, 5]))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
