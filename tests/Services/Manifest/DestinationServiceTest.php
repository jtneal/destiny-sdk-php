<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\Destination;
use Necowebs\Destiny\Models\Manifest\Place;

/**
 * Class DestinationServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class DestinationServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Destination
     */
    public function testGetDestination()
    {
        $destination = (new DestinationService())->getDestination(2777041980);

        $expected = (new Destination())
            ->setDestinationHash(2777041980)
            ->setDestinationName('The Crucible')
            ->setDestinationDescription('Hone your skills and win glory in battle against other Guardians.')
            ->setIcon('/common/destiny_content/icons/9a838566008cf8a8298e286d1162b185.jpg')
            ->setPlace((new Place())
                ->setPlaceHash(4088006058)
                ->setPlaceName('The Crucible')
                ->setPlaceDescription('Hone your skills and win glory in battle against other Guardians.')
                ->setIcon('/img/misc/missing_icon.png')
                ->setHash(4088006058)
                ->setIndex(0)
            )
            ->setDestinationIdentifier('DESTINATION_CRUCIBLE')
            ->setHash(2777041980)
            ->setIndex(0);

        $this->assertEquals($expected, $destination);
    }

    /**
     * Test Get Destination Exception
     */
    public function testGetDestinationException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $destination = (new DestinationService())->getDestination('Fail');
    }
}
