<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;

/**
 * Class AggregateActivityTest
 * @package Necowebs\Destiny\Models\Stats
 */
class AggregateActivityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $activity = (new AggregateActivity())
            ->setActivityHash(2151413729)
            ->setValues(new AggregateActivityValues());

        $this->assertEquals(2151413729, $activity->getActivityHash());
        $this->assertEquals(new AggregateActivityValues(), $activity->getValues());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AggregateActivity::toObject(null, [
            'activityHash' => 2151413729,
            'values' => []
        ]);

        $expected = (new AggregateActivity())
            ->setActivityHash(2151413729)
            ->setValues(new AggregateActivityValues());

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AggregateActivity::toCollection(null, [
            [
                'activityHash' => 2151413729,
                'values' => []
            ]
        ]);

        $expected = new Collection(AggregateActivity::class, [
            (new AggregateActivity())
                ->setActivityHash(2151413729)
                ->setValues(new AggregateActivityValues())
        ]);

        $this->assertEquals($expected, $collection);
    }
}
