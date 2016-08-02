<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;

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
     * Test Get Destination Exception
     */
    public function testGetDestinationException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $destination = (new DestinationService())->getDestination('Fail');
    }
}
