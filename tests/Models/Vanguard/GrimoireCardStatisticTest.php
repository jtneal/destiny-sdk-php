<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;

/**
 * Class GrimoireCardStatisticTest
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireCardStatisticTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $statistic = (new GrimoireCardStatistic())
            ->setStatNumber(1)
            ->setValue(43640)
            ->setDisplayValue('43640')
            ->setRankCollection(new Collection(GrimoireCardStatisticRank::class));

        $this->assertEquals(1, $statistic->getStatNumber());
        $this->assertEquals(43640, $statistic->getValue());
        $this->assertEquals('43640', $statistic->getDisplayValue());
        $this->assertEquals(new Collection(GrimoireCardStatisticRank::class), $statistic->getRankCollection());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = GrimoireCardStatistic::toObject(null, [
            'statNumber' => 1,
            'value' => 43640,
            'displayValue' => '43640',
            'rankCollection' => []
        ]);

        $expected = (new GrimoireCardStatistic())
            ->setStatNumber(1)
            ->setValue(43640)
            ->setDisplayValue('43640')
            ->setRankCollection(new Collection(GrimoireCardStatisticRank::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = GrimoireCardStatistic::toCollection(null, [
            [
                'statNumber' => 1,
                'value' => 43640,
                'displayValue' => '43640',
                'rankCollection' => []
            ]
        ]);

        $expected = new Collection(GrimoireCardStatistic::class, [
            (new GrimoireCardStatistic())
                ->setStatNumber(1)
                ->setValue(43640)
                ->setDisplayValue('43640')
                ->setRankCollection(new Collection(GrimoireCardStatisticRank::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
