<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class StatGroupTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class StatGroupTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $group = (new StatGroup())
            ->setStatGroupHash(1997970403)
            ->setMaximumValue(11)
            ->setUiPosition(0)
            ->setScaledStats(new Collection(StatGroupScaledStat::class))
            ->setOverrides(new Collection(StatGroupOverride::class))
            ->setHash(1997970403)
            ->setIndex(0);

        $this->assertEquals(1997970403, $group->getStatGroupHash());
        $this->assertEquals(11, $group->getMaximumValue());
        $this->assertEquals(0, $group->getUiPosition());
        $this->assertEquals(new Collection(StatGroupScaledStat::class), $group->getScaledStats());
        $this->assertEquals(new Collection(StatGroupOverride::class), $group->getOverrides());
        $this->assertEquals(1997970403, $group->getHash());
        $this->assertEquals(0, $group->getIndex());
    }
}
