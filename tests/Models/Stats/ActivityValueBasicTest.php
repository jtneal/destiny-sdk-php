<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;

/**
 * Class ActivityValueBasicTest
 * @package Necowebs\Destiny\Models\Stats
 */
class ActivityValueBasicTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $basic = (new ActivityValueBasic())
            ->setValue(128)
            ->setDisplayValue('128');

        $this->assertEquals(128, $basic->getValue());
        $this->assertEquals('128', $basic->getDisplayValue());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = ActivityValueBasic::toObject(null, [
            'value' => 128,
            'displayValue' => '128'
        ]);

        $expected = (new ActivityValueBasic())
            ->setValue(128)
            ->setDisplayValue('128');

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = ActivityValueBasic::toCollection(null, [
            [
                'value' => 128,
                'displayValue' => '128'
            ]
        ]);

        $expected = new Collection(ActivityValueBasic::class, [
            (new ActivityValueBasic())
                ->setValue(128)
                ->setDisplayValue('128')
        ]);

        $this->assertEquals($expected, $collection);
    }
}
