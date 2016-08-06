<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;

/**
 * Class ActivitiesTest
 * @package Necowebs\Destiny\Models\Character
 */
class ActivitiesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $activities = (new Activities())
            ->setDateActivityStarted('2016-07-26T02:15:32Z')
            ->setAvailable(new Collection(AdvisorActivityData::class));

        $this->assertEquals('2016-07-26T02:15:32Z', $activities->getDateActivityStarted());
        $this->assertEquals(new Collection(AdvisorActivityData::class), $activities->getAvailable());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Activities::toObject(null, [
            'dateActivityStarted' => '2016-07-26T02:15:32Z',
            'available' => []
        ]);

        $expected = (new Activities())
            ->setDateActivityStarted('2016-07-26T02:15:32Z')
            ->setAvailable(new Collection(AdvisorActivityData::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Activities::toCollection(null, [
            [
                'dateActivityStarted' => '2016-07-26T02:15:32Z',
                'available' => []
            ]
        ]);

        $expected = new Collection(Activities::class, [
            (new Activities())
                ->setDateActivityStarted('2016-07-26T02:15:32Z')
                ->setAvailable(new Collection(AdvisorActivityData::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
