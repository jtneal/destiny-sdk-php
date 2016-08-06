<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;

/**
 * Class ActivityValueTest
 * @package Necowebs\Destiny\Models\Stats
 */
class ActivityValueTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $value = (new ActivityValue())
            ->setStatId('assists')
            ->setBasic(new ActivityValueBasic());

        $this->assertEquals('assists', $value->getStatId());
        $this->assertEquals(new ActivityValueBasic(), $value->getBasic());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = ActivityValue::toObject(null, [
            'statId' => 'assists',
            'basic' => []
        ]);

        $expected = (new ActivityValue())
            ->setStatId('assists')
            ->setBasic(new ActivityValueBasic());

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = ActivityValue::toCollection(null, [
            [
                'statId' => 'assists',
                'basic' => []
            ]
        ]);

        $expected = new Collection(ActivityValue::class, [
            (new ActivityValue())
                ->setStatId('assists')
                ->setBasic(new ActivityValueBasic())
        ]);

        $this->assertEquals($expected, $collection);
    }
}
