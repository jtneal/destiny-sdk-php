<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class StatGroupScaledStatInterpolationTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class StatGroupScaledStatInterpolationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $interpolation = (new StatGroupScaledStatInterpolation())
            ->setValue(100)
            ->setWeight(100);

        $this->assertEquals(100, $interpolation->getValue());
        $this->assertEquals(100, $interpolation->getWeight());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = StatGroupScaledStatInterpolation::toObject(null, [
            'value' => 100,
            'weight' => 100
        ]);

        $expected = (new StatGroupScaledStatInterpolation())
            ->setValue(100)
            ->setWeight(100);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = StatGroupScaledStatInterpolation::toCollection(null, [
            [
                'value' => 100,
                'weight' => 100
            ]
        ]);

        $expected = new Collection(StatGroupScaledStatInterpolation::class, [
            (new StatGroupScaledStatInterpolation())
                ->setValue(100)
                ->setWeight(100)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
