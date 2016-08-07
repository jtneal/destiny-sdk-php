<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;

/**
 * Class PostGameCarnageReportTeamTest
 * @package Necowebs\Destiny\Models\Stats
 */
class PostGameCarnageReportTeamTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $object = (new PostGameCarnageReportTeam())
            ->setTeamId(16)
            ->setStanding(new ActivityValue())
            ->setScore(new ActivityValue())
            ->setTeamName('Alpha');

        $this->assertEquals(16, $object->getTeamId());
        $this->assertEquals(new ActivityValue(), $object->getStanding());
        $this->assertEquals(new ActivityValue(), $object->getScore());
        $this->assertEquals('Alpha', $object->getTeamName());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = PostGameCarnageReportTeam::toObject(null, [
            'teamId' => 16,
            'standing' => [],
            'score' => [],
            'teamName' => 'Alpha'
        ]);

        $expected = (new PostGameCarnageReportTeam())
            ->setTeamId(16)
            ->setStanding(new ActivityValue())
            ->setScore(new ActivityValue())
            ->setTeamName('Alpha');

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = PostGameCarnageReportTeam::toCollection(null, [
            [
                'teamId' => 16,
                'standing' => [],
                'score' => [],
                'teamName' => 'Alpha'
            ]
        ]);

        $expected = new Collection(PostGameCarnageReportTeam::class, [
            (new PostGameCarnageReportTeam())
                ->setTeamId(16)
                ->setStanding(new ActivityValue())
                ->setScore(new ActivityValue())
                ->setTeamName('Alpha')
        ]);

        $this->assertEquals($expected, $collection);
    }
}
