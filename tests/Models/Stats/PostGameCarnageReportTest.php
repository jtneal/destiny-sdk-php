<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;

/**
 * Class PostGameCarnageReportTest
 * @package Necowebs\Destiny\Models\Stats
 */
class PostGameCarnageReportTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $object = (new PostGameCarnageReport())
            ->setPeriod('2016-07-13T23:15:00Z')
            ->setActivityDetails(new ActivityDetails())
            ->setEntries(new Collection(PostGameCarnageReportEntry::class))
            ->setTeams(new Collection(PostGameCarnageReportTeam::class));

        $this->assertEquals('2016-07-13T23:15:00Z', $object->getPeriod());
        $this->assertEquals(new ActivityDetails(), $object->getActivityDetails());
        $this->assertEquals(new Collection(PostGameCarnageReportEntry::class), $object->getEntries());
        $this->assertEquals(new Collection(PostGameCarnageReportTeam::class), $object->getTeams());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = PostGameCarnageReport::toObject(null, [
            'period' => '2016-07-13T23:15:00Z',
            'activityDetails' => [],
            'entries' => [],
            'teams' => []
        ]);

        $expected = (new PostGameCarnageReport())
            ->setPeriod('2016-07-13T23:15:00Z')
            ->setActivityDetails(new ActivityDetails())
            ->setEntries(new Collection(PostGameCarnageReportEntry::class))
            ->setTeams(new Collection(PostGameCarnageReportTeam::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = PostGameCarnageReport::toCollection(null, [
            [
                'period' => '2016-07-13T23:15:00Z',
                'activityDetails' => [],
                'entries' => [],
                'teams' => []
            ]
        ]);

        $expected = new Collection(PostGameCarnageReport::class, [
            (new PostGameCarnageReport())
                ->setPeriod('2016-07-13T23:15:00Z')
                ->setActivityDetails(new ActivityDetails())
                ->setEntries(new Collection(PostGameCarnageReportEntry::class))
                ->setTeams(new Collection(PostGameCarnageReportTeam::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
