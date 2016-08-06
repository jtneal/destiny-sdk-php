<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class DestinationTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class DestinationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $destination = (new Destination())
            ->setDestinationHash(2777041980)
            ->setDestinationName('The Crucible')
            ->setDestinationDescription('Hone your skills and win glory in battle against other Guardians.')
            ->setIcon('/common/destiny_content/icons/9a838566008cf8a8298e286d1162b185.jpg')
            ->setPlaceHash(4088006058)
            ->setDestinationIdentifier('DESTINATION_CRUCIBLE')
            ->setHash(2777041980)
            ->setIndex(0);

        $this->assertEquals(2777041980, $destination->getDestinationHash());
        $this->assertEquals('The Crucible', $destination->getDestinationName());
        $this->assertEquals('Hone your skills and win glory in battle against other Guardians.', $destination->getDestinationDescription());
        $this->assertEquals('/common/destiny_content/icons/9a838566008cf8a8298e286d1162b185.jpg', $destination->getIcon());
        $this->assertEquals(4088006058, $destination->getPlaceHash());
        $this->assertEquals('DESTINATION_CRUCIBLE', $destination->getDestinationIdentifier());
        $this->assertEquals(2777041980, $destination->getHash());
        $this->assertEquals(0, $destination->getIndex());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Destination::toObject(null, [
            'destinationHash' => 2777041980,
            'destinationName' => 'The Crucible',
            'destinationDescription' => 'Hone your skills and win glory in battle against other Guardians.',
            'icon' => '/common/destiny_content/icons/9a838566008cf8a8298e286d1162b185.jpg',
            'placeHash' => 4088006058,
            'destinationIdentifier' => 'DESTINATION_CRUCIBLE',
            'hash' => 2777041980,
            'index' => 0
        ]);

        $expected = (new Destination())
            ->setDestinationHash(2777041980)
            ->setDestinationName('The Crucible')
            ->setDestinationDescription('Hone your skills and win glory in battle against other Guardians.')
            ->setIcon('/common/destiny_content/icons/9a838566008cf8a8298e286d1162b185.jpg')
            ->setPlaceHash(4088006058)
            ->setDestinationIdentifier('DESTINATION_CRUCIBLE')
            ->setHash(2777041980)
            ->setIndex(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Destination::toCollection(null, [
            [
                'destinationHash' => 2777041980,
                'destinationName' => 'The Crucible',
                'destinationDescription' => 'Hone your skills and win glory in battle against other Guardians.',
                'icon' => '/common/destiny_content/icons/9a838566008cf8a8298e286d1162b185.jpg',
                'placeHash' => 4088006058,
                'destinationIdentifier' => 'DESTINATION_CRUCIBLE',
                'hash' => 2777041980,
                'index' => 0
            ]
        ]);

        $expected = new Collection(Destination::class, [
            (new Destination())
                ->setDestinationHash(2777041980)
                ->setDestinationName('The Crucible')
                ->setDestinationDescription('Hone your skills and win glory in battle against other Guardians.')
                ->setIcon('/common/destiny_content/icons/9a838566008cf8a8298e286d1162b185.jpg')
                ->setPlaceHash(4088006058)
                ->setDestinationIdentifier('DESTINATION_CRUCIBLE')
                ->setHash(2777041980)
                ->setIndex(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
