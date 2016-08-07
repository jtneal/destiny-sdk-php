<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;

/**
 * Class GrimoireTest
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $grimoire = (new Grimoire())
            ->setScore(4620)
            ->setCardCollection(new Collection(GrimoireCard::class))
            ->setCardsToHide(new Collection('int'))
            ->setBonuses(new Collection(GrimoireBonus::class));

        $this->assertEquals(4620, $grimoire->getScore());
        $this->assertEquals(new Collection(GrimoireCard::class), $grimoire->getCardCollection());
        $this->assertEquals(new Collection('int'), $grimoire->getCardsToHide());
        $this->assertEquals(new Collection(GrimoireBonus::class), $grimoire->getBonuses());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Grimoire::toObject(null, [
            'score' => 4620,
            'cardCollection' => [],
            'cardsToHide' => [],
            'bonuses' => []
        ]);

        $expected = (new Grimoire())
            ->setScore(4620)
            ->setCardCollection(new Collection(GrimoireCard::class))
            ->setCardsToHide(new Collection('int'))
            ->setBonuses(new Collection(GrimoireBonus::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Grimoire::toCollection(null, [
            [
                'score' => 4620,
                'cardCollection' => [],
                'cardsToHide' => [],
                'bonuses' => []
            ]
        ]);

        $expected = new Collection(Grimoire::class, [
            (new Grimoire())
                ->setScore(4620)
                ->setCardCollection(new Collection(GrimoireCard::class))
                ->setCardsToHide(new Collection('int'))
                ->setBonuses(new Collection(GrimoireBonus::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
