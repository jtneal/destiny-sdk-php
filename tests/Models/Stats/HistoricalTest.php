<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;

/**
 * Class HistoricalTest
 * @package Necowebs\Destiny\Models\Stats
 */
class HistoricalTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $historical = (new Historical())
            ->setAllPvP(new HistoricalActivity())
            ->setPatrol(new HistoricalActivity())
            ->setRaid(new HistoricalActivity())
            ->setStory(new HistoricalActivity())
            ->setAllStrikes(new HistoricalActivity())
            ->setAllArena(new HistoricalActivity());

        $this->assertEquals(new HistoricalActivity(), $historical->getAllPvP());
        $this->assertEquals(new HistoricalActivity(), $historical->getPatrol());
        $this->assertEquals(new HistoricalActivity(), $historical->getRaid());
        $this->assertEquals(new HistoricalActivity(), $historical->getStory());
        $this->assertEquals(new HistoricalActivity(), $historical->getAllStrikes());
        $this->assertEquals(new HistoricalActivity(), $historical->getAllArena());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Historical::toObject(null, [
            'allPvP' => [],
            'patrol' => [],
            'raid' => [],
            'story' => [],
            'allStrikes' => [],
            'allArena' => []
        ]);

        $expected = (new Historical())
            ->setAllPvP(new HistoricalActivity())
            ->setPatrol(new HistoricalActivity())
            ->setRaid(new HistoricalActivity())
            ->setStory(new HistoricalActivity())
            ->setAllStrikes(new HistoricalActivity())
            ->setAllArena(new HistoricalActivity());

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Historical::toCollection(null, [
            [
                'allPvP' => [],
                'patrol' => [],
                'raid' => [],
                'story' => [],
                'allStrikes' => [],
                'allArena' => []
            ]
        ]);

        $expected = new Collection(Historical::class, [
            (new Historical())
                ->setAllPvP(new HistoricalActivity())
                ->setPatrol(new HistoricalActivity())
                ->setRaid(new HistoricalActivity())
                ->setStory(new HistoricalActivity())
                ->setAllStrikes(new HistoricalActivity())
                ->setAllArena(new HistoricalActivity())
        ]);

        $this->assertEquals($expected, $collection);
    }
}
