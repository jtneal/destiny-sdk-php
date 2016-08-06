<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;

/**
 * Class ActivityDetailsTest
 * @package Necowebs\Destiny\Models\Stats
 */
class ActivityDetailsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $details = (new ActivityDetails())
            ->setReferenceId(3711414564)
            ->setInstanceId('5277571041')
            ->setMode(2)
            ->setActivityTypeHashOverride(0);

        $this->assertEquals(3711414564, $details->getReferenceId());
        $this->assertEquals('5277571041', $details->getInstanceId());
        $this->assertEquals(2, $details->getMode());
        $this->assertEquals(0, $details->getActivityTypeHashOverride());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = ActivityDetails::toObject(null, [
            'referenceId' => 3711414564,
            'instanceId' => '5277571041',
            'mode' => 2,
            'activityTypeHashOverride' => 0
        ]);

        $expected = (new ActivityDetails())
            ->setReferenceId(3711414564)
            ->setInstanceId('5277571041')
            ->setMode(2)
            ->setActivityTypeHashOverride(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = ActivityDetails::toCollection(null, [
            [
                'referenceId' => 3711414564,
                'instanceId' => '5277571041',
                'mode' => 2,
                'activityTypeHashOverride' => 0
            ]
        ]);

        $expected = new Collection(ActivityDetails::class, [
            (new ActivityDetails())
                ->setReferenceId(3711414564)
                ->setInstanceId('5277571041')
                ->setMode(2)
                ->setActivityTypeHashOverride(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
