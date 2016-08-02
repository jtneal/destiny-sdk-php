<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;

/**
 * Class PlaceServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class PlaceServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Place
     */
    public function testGetPlace()
    {
        $place = (new PlaceService())->getPlace(4088006058);

        $this->assertEquals(4088006058, $place->getPlaceHash());
        $this->assertEquals('The Crucible', $place->getPlaceName());
        $this->assertEquals('Hone your skills and win glory in battle against other Guardians.', $place->getPlaceDescription());
        $this->assertEquals('/img/misc/missing_icon.png', $place->getIcon());
        $this->assertEquals(4088006058, $place->getHash());
        $this->assertEquals(0, $place->getIndex());
    }

    /**
     * Test Get Place Exception
     */
    public function testGetPlaceException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $place = (new PlaceService())->getPlace('Fail');
    }
}
