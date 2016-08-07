<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;

/**
 * Class PostGameCarnageReportEntryTest
 * @package Necowebs\Destiny\Models\Stats
 */
class PostGameCarnageReportEntryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $object = (new PostGameCarnageReportEntry())
            ->setStanding(1)
            ->setScore(new ActivityValue())
            ->setPlayer(new PostGameCarnageReportEntryPlayer())
            ->setCharacterId('2305843009220592590')
            ->setValues(new ActivityValues())
            ->setExtended(new PostGameCarnageReportEntryExtended());

        $this->assertEquals(1, $object->getStanding());
        $this->assertEquals(new ActivityValue(), $object->getScore());
        $this->assertEquals(new PostGameCarnageReportEntryPlayer(), $object->getPlayer());
        $this->assertEquals('2305843009220592590', $object->getCharacterId());
        $this->assertEquals(new ActivityValues(), $object->getValues());
        $this->assertEquals(new PostGameCarnageReportEntryExtended(), $object->getExtended());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = PostGameCarnageReportEntry::toObject(null, [
            'standing' => 1,
            'score' => [],
            'player' => [],
            'characterId' => '2305843009220592590',
            'values' => [],
            'extended' => []
        ]);

        $expected = (new PostGameCarnageReportEntry())
            ->setStanding(1)
            ->setScore(new ActivityValue())
            ->setPlayer(new PostGameCarnageReportEntryPlayer())
            ->setCharacterId('2305843009220592590')
            ->setValues(new ActivityValues())
            ->setExtended(new PostGameCarnageReportEntryExtended());

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = PostGameCarnageReportEntry::toCollection(null, [
            [
                'standing' => 1,
                'score' => [],
                'player' => [],
                'characterId' => '2305843009220592590',
                'values' => [],
                'extended' => []
            ]
        ]);

        $expected = new Collection(PostGameCarnageReportEntry::class, [
            (new PostGameCarnageReportEntry())
                ->setStanding(1)
                ->setScore(new ActivityValue())
                ->setPlayer(new PostGameCarnageReportEntryPlayer())
                ->setCharacterId('2305843009220592590')
                ->setValues(new ActivityValues())
                ->setExtended(new PostGameCarnageReportEntryExtended())
        ]);

        $this->assertEquals($expected, $collection);
    }
}
