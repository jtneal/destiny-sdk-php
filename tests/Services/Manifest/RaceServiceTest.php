<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;

/**
 * Class RaceServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class RaceServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Race
     */
    public function testGetRace()
    {
        $race = (new RaceService())->getRace(3887404748);

        $this->assertEquals(3887404748, $race->getRaceHash());
        $this->assertEquals(0, $race->getRaceType());
        $this->assertEquals('Human', $race->getRaceName());
        $this->assertEquals('Human Male', $race->getRaceNameMale());
        $this->assertEquals('Human Female', $race->getRaceNameFemale());
        $this->assertEquals('Human', $race->getRaceDescription());
        $this->assertEquals(3887404748, $race->getHash());
        $this->assertEquals(0, $race->getIndex());
    }

    /**
     * Test Get Race Exception
     */
    public function testGetRaceException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $race = (new RaceService())->getRace('Fail');
    }
}
