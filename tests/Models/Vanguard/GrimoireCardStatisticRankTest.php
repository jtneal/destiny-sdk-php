<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;

/**
 * Class GrimoireCardStatisticRankTest
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireCardStatisticRankTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $rank = (new GrimoireCardStatisticRank())
            ->setRank(1)
            ->setThreshold(2500)
            ->setUnlockFlagHash(0)
            ->setPoints(5);

        $this->assertEquals(1, $rank->getRank());
        $this->assertEquals(2500, $rank->getThreshold());
        $this->assertEquals(0, $rank->getUnlockFlagHash());
        $this->assertEquals(5, $rank->getPoints());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = GrimoireCardStatisticRank::toObject(null, [
            'rank' => 1,
            'threshold' => 2500,
            'unlockFlagHash' => 0,
            'points' => 5
        ]);

        $expected = (new GrimoireCardStatisticRank())
            ->setRank(1)
            ->setThreshold(2500)
            ->setUnlockFlagHash(0)
            ->setPoints(5);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = GrimoireCardStatisticRank::toCollection(null, [
            [
                'rank' => 1,
                'threshold' => 2500,
                'unlockFlagHash' => 0,
                'points' => 5
            ]
        ]);

        $expected = new Collection(GrimoireCardStatisticRank::class, [
            (new GrimoireCardStatisticRank())
                ->setRank(1)
                ->setThreshold(2500)
                ->setUnlockFlagHash(0)
                ->setPoints(5)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
