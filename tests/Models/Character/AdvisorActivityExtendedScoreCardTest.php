<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;

/**
 * Class AdvisorActivityExtendedScoreCardTest
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityExtendedScoreCardTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $card = (new AdvisorActivityExtendedScoreCard())
            ->setHasTicket(false)
            ->setMaxWins(9)
            ->setMaxLosses(3)
            ->setWins(0)
            ->setLosses(0);

        $this->assertEquals(false, $card->getHasTicket());
        $this->assertEquals(9, $card->getMaxWins());
        $this->assertEquals(3, $card->getMaxLosses());
        $this->assertEquals(0, $card->getWins());
        $this->assertEquals(0, $card->getLosses());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AdvisorActivityExtendedScoreCard::toObject(null, [
            'hasTicket' => false,
            'maxWins' => 9,
            'maxLosses' => 3,
            'wins' => 0,
            'losses' => 0
        ]);

        $expected = (new AdvisorActivityExtendedScoreCard())
            ->setHasTicket(false)
            ->setMaxWins(9)
            ->setMaxLosses(3)
            ->setWins(0)
            ->setLosses(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AdvisorActivityExtendedScoreCard::toCollection(null, [
            [
                'hasTicket' => false,
                'maxWins' => 9,
                'maxLosses' => 3,
                'wins' => 0,
                'losses' => 0
            ]
        ]);

        $expected = new Collection(AdvisorActivityExtendedScoreCard::class, [
            (new AdvisorActivityExtendedScoreCard())
                ->setHasTicket(false)
                ->setMaxWins(9)
                ->setMaxLosses(3)
                ->setWins(0)
                ->setLosses(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
