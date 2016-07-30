<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class RaceTest
 * @package Necowebs\Destiny\Models
 */
class RaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $race = (new Race())
            ->setRaceHash(3887404748)
            ->setRaceType(0)
            ->setRaceName('Human')
            ->setRaceNameMale('Human Male')
            ->setRaceNameFemale('Human Female')
            ->setRaceDescription('Human')
            ->setHash(3887404748)
            ->setIndex(0);

        $this->assertEquals(3887404748, $race->getRaceHash());
        $this->assertEquals(0, $race->getRaceType());
        $this->assertEquals('Human', $race->getRaceName());
        $this->assertEquals('Human Male', $race->getRaceNameMale());
        $this->assertEquals('Human Female', $race->getRaceNameFemale());
        $this->assertEquals('Human', $race->getRaceDescription());
        $this->assertEquals(3887404748, $race->getHash());
        $this->assertEquals(0, $race->getIndex());
    }
}
