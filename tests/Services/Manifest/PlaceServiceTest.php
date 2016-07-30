<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\PlaceNotFoundException;
use Necowebs\Destiny\Models\Manifest\Place;

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

        $expected = (new Place())
            ->setPlaceHash(4088006058)
            ->setPlaceName('The Crucible')
            ->setPlaceDescription('Hone your skills and win glory in battle against other Guardians.')
            ->setIcon('/img/misc/missing_icon.png')
            ->setHash(4088006058)
            ->setIndex(0);

        $this->assertEquals($expected, $place);
    }

    /**
     * Test Get Place Exception
     */
    public function testGetPlaceException()
    {
        $this->expectException(PlaceNotFoundException::class);

        $place = (new PlaceService())->getPlace('Fail');
    }
}
