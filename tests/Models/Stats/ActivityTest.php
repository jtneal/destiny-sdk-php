<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;

/**
 * Class ActivityTest
 * @package Necowebs\Destiny\Models\Stats
 */
class ActivityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $activity = (new Activity())
            ->setPeriod('2016-07-26T02:03:00')
            ->setActivityDetails(new ActivityDetails())
            ->setValues(new ActivityValues());

        $this->assertEquals('2016-07-26T02:03:00', $activity->getPeriod());
        $this->assertEquals(new ActivityDetails(), $activity->getActivityDetails());
        $this->assertEquals(new ActivityValues(), $activity->getValues());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Activity::toObject(null, [
            'period' => '2016-07-26T02:03:00',
            'activityDetails' => [],
            'values' => []
        ]);

        $expected = (new Activity())
            ->setPeriod('2016-07-26T02:03:00')
            ->setActivityDetails(new ActivityDetails())
            ->setValues(new ActivityValues());

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Activity::toCollection(null, [
            [
                'period' => '2016-07-26T02:03:00',
                'activityDetails' => [],
                'values' => []
            ]
        ]);

        $expected = new Collection(Activity::class, [
            (new Activity())
                ->setPeriod('2016-07-26T02:03:00')
                ->setActivityDetails(new ActivityDetails())
                ->setValues(new ActivityValues())
        ]);

        $this->assertEquals($expected, $collection);
    }
}
