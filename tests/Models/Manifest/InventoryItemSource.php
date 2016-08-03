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
}
