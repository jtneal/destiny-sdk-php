<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class PlaceTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class PlaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $place = (new Place())
            ->setPlaceHash(4088006058)
            ->setPlaceName('The Crucible')
            ->setPlaceDescription('Hone your skills and win glory in battle against other Guardians.')
            ->setIcon('/img/misc/missing_icon.png')
            ->setHash(4088006058)
            ->setIndex(0);

        $this->assertEquals(4088006058, $place->getPlaceHash());
        $this->assertEquals('The Crucible', $place->getPlaceName());
        $this->assertEquals('Hone your skills and win glory in battle against other Guardians.', $place->getPlaceDescription());
        $this->assertEquals('/img/misc/missing_icon.png', $place->getIcon());
        $this->assertEquals(4088006058, $place->getHash());
        $this->assertEquals(0, $place->getIndex());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Place::toObject(null, [
            'placeHash' => 4088006058,
            'placeName' => 'The Crucible',
            'placeDescription' => 'Hone your skills and win glory in battle against other Guardians.',
            'icon' => '/img/misc/missing_icon.png',
            'hash' => 4088006058,
            'index' => 0
        ]);

        $expected = (new Place())
            ->setPlaceHash(4088006058)
            ->setPlaceName('The Crucible')
            ->setPlaceDescription('Hone your skills and win glory in battle against other Guardians.')
            ->setIcon('/img/misc/missing_icon.png')
            ->setHash(4088006058)
            ->setIndex(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Place::toCollection(null, [
            [
                'placeHash' => 4088006058,
                'placeName' => 'The Crucible',
                'placeDescription' => 'Hone your skills and win glory in battle against other Guardians.',
                'icon' => '/img/misc/missing_icon.png',
                'hash' => 4088006058,
                'index' => 0
            ]
        ]);

        $expected = new Collection(Place::class, [
            (new Place())
                ->setPlaceHash(4088006058)
                ->setPlaceName('The Crucible')
                ->setPlaceDescription('Hone your skills and win glory in battle against other Guardians.')
                ->setIcon('/img/misc/missing_icon.png')
                ->setHash(4088006058)
                ->setIndex(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
