<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\RaceNotFoundException;
use Necowebs\Destiny\Models\Manifest\Race;

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

        $expected = (new Race())
            ->setRaceHash(3887404748)
            ->setRaceType(0)
            ->setRaceName('Human')
            ->setRaceNameMale('Human Male')
            ->setRaceNameFemale('Human Female')
            ->setRaceDescription('Human')
            ->setHash(3887404748)
            ->setIndex(0);

        $this->assertEquals($expected, $race);
    }

    /**
     * Test Get Race Exception
     */
    public function testGetRaceException()
    {
        $this->expectException(RaceNotFoundException::class);

        $race = (new RaceService())->getRace('Fail');
    }
}
