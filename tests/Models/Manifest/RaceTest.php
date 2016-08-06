<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class RaceTest
 * @package Necowebs\Destiny\Models\Manifest
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

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Race::toObject(null, [
            'raceHash' => 3887404748,
            'raceType' => 0,
            'raceName' => 'Human',
            'raceNameMale' => 'Human Male',
            'raceNameFemale' => 'Human Female',
            'raceDescription' => 'Human',
            'hash' => 3887404748,
            'index' => 0
        ]);

        $expected = (new Race())
            ->setRaceHash(3887404748)
            ->setRaceType(0)
            ->setRaceName('Human')
            ->setRaceNameMale('Human Male')
            ->setRaceNameFemale('Human Female')
            ->setRaceDescription('Human')
            ->setHash(3887404748)
            ->setIndex(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Race::toCollection(null, [
            [
                'raceHash' => 3887404748,
                'raceType' => 0,
                'raceName' => 'Human',
                'raceNameMale' => 'Human Male',
                'raceNameFemale' => 'Human Female',
                'raceDescription' => 'Human',
                'hash' => 3887404748,
                'index' => 0
            ]
        ]);

        $expected = new Collection(Race::class, [
            (new Race())
                ->setRaceHash(3887404748)
                ->setRaceType(0)
                ->setRaceName('Human')
                ->setRaceNameMale('Human Male')
                ->setRaceNameFemale('Human Female')
                ->setRaceDescription('Human')
                ->setHash(3887404748)
                ->setIndex(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
