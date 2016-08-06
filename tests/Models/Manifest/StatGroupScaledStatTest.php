<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class StatGroupScaledStatTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class StatGroupScaledStatTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $stat = (new StatGroupScaledStat())
            ->setStatHash(392767087)
            ->setMaximumValue(11)
            ->setDisplayAsNumeric(false)
            ->setDisplayInterpolation(new Collection(StatGroupScaledStatInterpolation::class));

        $this->assertEquals(392767087, $stat->getStatHash());
        $this->assertEquals(11, $stat->getMaximumValue());
        $this->assertEquals(false, $stat->getDisplayAsNumeric());
        $this->assertEquals(new Collection(StatGroupScaledStatInterpolation::class), $stat->getDisplayInterpolation());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = StatGroupScaledStat::toObject(null, [
            'statHash' => 392767087,
            'maximumValue' => 11,
            'displayAsNumeric' => false,
            'displayInterpolation' => []
        ]);

        $expected = (new StatGroupScaledStat())
            ->setStatHash(392767087)
            ->setMaximumValue(11)
            ->setDisplayAsNumeric(false)
            ->setDisplayInterpolation(new Collection(StatGroupScaledStatInterpolation::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = StatGroupScaledStat::toCollection(null, [
            [
                'statHash' => 392767087,
                'maximumValue' => 11,
                'displayAsNumeric' => false,
                'displayInterpolation' => []
            ]
        ]);

        $expected = new Collection(StatGroupScaledStat::class, [
            (new StatGroupScaledStat())
                ->setStatHash(392767087)
                ->setMaximumValue(11)
                ->setDisplayAsNumeric(false)
                ->setDisplayInterpolation(new Collection(StatGroupScaledStatInterpolation::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
