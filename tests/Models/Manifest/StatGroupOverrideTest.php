<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class StatGroupOverrideTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class StatGroupOverrideTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $override = (new StatGroupOverride())
            ->setStatHash(144602215)
            ->setDisplayName('')
            ->setDisplayDescription('')
            ->setDisplayIcon('/img/misc/missing_icon.png');

        $this->assertEquals(144602215, $override->getStatHash());
        $this->assertEquals('', $override->getDisplayName());
        $this->assertEquals('', $override->getDisplayDescription());
        $this->assertEquals('/img/misc/missing_icon.png', $override->getDisplayIcon());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = StatGroupOverride::toObject(null, [
            'statHash' => 144602215,
            'displayName' => '',
            'displayDescription' => '',
            'displayIcon' => '/img/misc/missing_icon.png'
        ]);

        $expected = (new StatGroupOverride())
            ->setStatHash(144602215)
            ->setDisplayName('')
            ->setDisplayDescription('')
            ->setDisplayIcon('/img/misc/missing_icon.png');

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = StatGroupOverride::toCollection(null, [
            '144602215' => [
                'statHash' => 144602215,
                'displayName' => '',
                'displayDescription' => '',
                'displayIcon' => '/img/misc/missing_icon.png'
            ]
        ]);

        $expected = new Collection(StatGroupOverride::class, [
            (new StatGroupOverride())
                ->setStatHash(144602215)
                ->setDisplayName('')
                ->setDisplayDescription('')
                ->setDisplayIcon('/img/misc/missing_icon.png')
        ]);

        $this->assertEquals($expected, $collection);
    }
}
