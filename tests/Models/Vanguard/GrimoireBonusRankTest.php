<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;

/**
 * Class GrimoireBonusRankTest
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireBonusRankTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $rank = (new GrimoireBonusRank())
            ->setStatId(1)
            ->setRank(2);

        $this->assertEquals(1, $rank->getStatId());
        $this->assertEquals(2, $rank->getRank());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = GrimoireBonusRank::toObject(null, [
            'statId' => 1,
            'rank' => 2
        ]);

        $expected = (new GrimoireBonusRank())
            ->setStatId(1)
            ->setRank(2);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = GrimoireBonusRank::toCollection(null, [
            [
                'statId' => 1,
                'rank' => 2
            ]
        ]);

        $expected = new Collection(GrimoireBonusRank::class, [
            (new GrimoireBonusRank())
                ->setStatId(1)
                ->setRank(2)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
