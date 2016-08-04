<?php

namespace Necowebs\Destiny\Models\Stats;

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
}
