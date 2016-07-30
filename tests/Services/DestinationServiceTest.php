<?php

namespace Necowebs\Destiny\Services;

use Necowebs\Destiny\Models\Destination;
use Necowebs\Destiny\Models\Place;

/**
 * Class DestinationServiceTest
 * @package Necowebs\Destiny\Services
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
        $this->expectException('\Exception');

        $destination = (new DestinationService())->getDestination('Fail');
    }
}
