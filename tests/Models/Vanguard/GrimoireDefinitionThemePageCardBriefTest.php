<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;

/**
 * Class GrimoireDefinitionThemePageCardBriefTest
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireDefinitionThemePageCardBriefTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $brief = (new GrimoireDefinitionThemePageCardBrief())
            ->setCardId(302010)
            ->setPoints(5)
            ->setTotalPoints(20);

        $this->assertEquals(302010, $brief->getCardId());
        $this->assertEquals(5, $brief->getPoints());
        $this->assertEquals(20, $brief->getTotalPoints());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = GrimoireDefinitionThemePageCardBrief::toObject(null, [
            'cardId' => 302010,
            'points' => 5,
            'totalPoints' => 20
        ]);

        $expected = (new GrimoireDefinitionThemePageCardBrief())
            ->setCardId(302010)
            ->setPoints(5)
            ->setTotalPoints(20);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = GrimoireDefinitionThemePageCardBrief::toCollection(null, [
            [
                'cardId' => 302010,
                'points' => 5,
                'totalPoints' => 20
            ]
        ]);

        $expected = new Collection(GrimoireDefinitionThemePageCardBrief::class, [
            (new GrimoireDefinitionThemePageCardBrief())
                ->setCardId(302010)
                ->setPoints(5)
                ->setTotalPoints(20)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
