<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;

/**
 * Class GrimoireCardTest
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireCardTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $card = (new GrimoireCard())
            ->setCardId(101010)
            ->setScore(20)
            ->setPoints(0)
            ->setStatisticCollection(new Collection(GrimoireCardStatistic::class));

        $this->assertEquals(101010, $card->getCardId());
        $this->assertEquals(20, $card->getScore());
        $this->assertEquals(0, $card->getPoints());
        $this->assertEquals(new Collection(GrimoireCardStatistic::class), $card->getStatisticCollection());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = GrimoireCard::toObject(null, [
            'cardId' => 101010,
            'score' => 20,
            'points' => 0,
            'statisticCollection' => []
        ]);

        $expected = (new GrimoireCard())
            ->setCardId(101010)
            ->setScore(20)
            ->setPoints(0)
            ->setStatisticCollection(new Collection(GrimoireCardStatistic::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = GrimoireCard::toCollection(null, [
            [
                'cardId' => 101010,
                'score' => 20,
                'points' => 0,
                'statisticCollection' => []
            ]
        ]);

        $expected = new Collection(GrimoireCard::class, [
            (new GrimoireCard())
                ->setCardId(101010)
                ->setScore(20)
                ->setPoints(0)
                ->setStatisticCollection(new Collection(GrimoireCardStatistic::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
