<?php

namespace Necowebs\Destiny\Models\Manifest;

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
}
