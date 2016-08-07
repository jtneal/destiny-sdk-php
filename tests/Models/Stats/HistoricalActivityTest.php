<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;

/**
 * Class HistoricalActivityTest
 * @package Necowebs\Destiny\Models\Stats
 */
class HistoricalActivityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $activity = (new HistoricalActivity())
            ->setAllTime(new Collection(ActivityValue::class));

        $this->assertEquals(new Collection(ActivityValue::class), $activity->getAllTime());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = HistoricalActivity::toObject(null, [
            'allTime' => []
        ]);

        $expected = (new HistoricalActivity())
            ->setAllTime(new Collection(ActivityValue::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = HistoricalActivity::toCollection(null, [
            [
                'allTime' => []
            ]
        ]);

        $expected = new Collection(HistoricalActivity::class, [
            (new HistoricalActivity())
                ->setAllTime(new Collection(ActivityValue::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
