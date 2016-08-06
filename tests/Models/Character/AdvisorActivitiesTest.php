<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;

/**
 * Class AdvisorActivitiesTest
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivitiesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $activities = (new AdvisorActivities())
            ->setPrisonOfElders(new AdvisorActivity())
            ->setElderChallenge(new AdvisorActivity())
            ->setTrials(new AdvisorActivity())
            ->setArmsDay(new AdvisorActivity())
            ->setWeeklyCrucible(new AdvisorActivity())
            ->setKingsFall(new AdvisorActivity())
            ->setVaultOfGlass(new AdvisorActivity())
            ->setCrota(new AdvisorActivity())
            ->setNightfall(new AdvisorActivity())
            ->setHeroicStrike(new AdvisorActivity())
            ->setDailyChapter(new AdvisorActivity())
            ->setDailyCrucible(new AdvisorActivity())
            ->setPrisonOfEldersPlaylist(new AdvisorActivity())
            ->setIronBanner(new AdvisorActivity())
            ->setXur(new AdvisorActivity())
            ->setSrl(new AdvisorActivity());

        $this->assertEquals(new AdvisorActivity(), $activities->getPrisonOfElders());
        $this->assertEquals(new AdvisorActivity(), $activities->getElderChallenge());
        $this->assertEquals(new AdvisorActivity(), $activities->getTrials());
        $this->assertEquals(new AdvisorActivity(), $activities->getArmsDay());
        $this->assertEquals(new AdvisorActivity(), $activities->getWeeklyCrucible());
        $this->assertEquals(new AdvisorActivity(), $activities->getKingsFall());
        $this->assertEquals(new AdvisorActivity(), $activities->getVaultOfGlass());
        $this->assertEquals(new AdvisorActivity(), $activities->getCrota());
        $this->assertEquals(new AdvisorActivity(), $activities->getNightfall());
        $this->assertEquals(new AdvisorActivity(), $activities->getHeroicStrike());
        $this->assertEquals(new AdvisorActivity(), $activities->getDailyChapter());
        $this->assertEquals(new AdvisorActivity(), $activities->getDailyCrucible());
        $this->assertEquals(new AdvisorActivity(), $activities->getPrisonOfEldersPlaylist());
        $this->assertEquals(new AdvisorActivity(), $activities->getIronBanner());
        $this->assertEquals(new AdvisorActivity(), $activities->getXur());
        $this->assertEquals(new AdvisorActivity(), $activities->getSrl());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AdvisorActivities::toObject(null, [
            'prisonofelders' => [],
            'elderchallenge' => [],
            'trials' => [],
            'armsday' => [],
            'weeklycrucible' => [],
            'kingsfall' => [],
            'vaultofglass' => [],
            'crota' => [],
            'nightfall' => [],
            'heroicstrike' => [],
            'dailychapter' => [],
            'dailycrucible' => [],
            'prisonofelders-playlist' => [],
            'ironbanner' => [],
            'xur' => [],
            'srl' => []
        ]);

        $expected = (new AdvisorActivities())
            ->setPrisonOfElders(new AdvisorActivity())
            ->setElderChallenge(new AdvisorActivity())
            ->setTrials(new AdvisorActivity())
            ->setArmsDay(new AdvisorActivity())
            ->setWeeklyCrucible(new AdvisorActivity())
            ->setKingsFall(new AdvisorActivity())
            ->setVaultOfGlass(new AdvisorActivity())
            ->setCrota(new AdvisorActivity())
            ->setNightfall(new AdvisorActivity())
            ->setHeroicStrike(new AdvisorActivity())
            ->setDailyChapter(new AdvisorActivity())
            ->setDailyCrucible(new AdvisorActivity())
            ->setPrisonOfEldersPlaylist(new AdvisorActivity())
            ->setIronBanner(new AdvisorActivity())
            ->setXur(new AdvisorActivity())
            ->setSrl(new AdvisorActivity());

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AdvisorActivities::toCollection(null, [
            [
                'prisonofelders' => [],
                'elderchallenge' => [],
                'trials' => [],
                'armsday' => [],
                'weeklycrucible' => [],
                'kingsfall' => [],
                'vaultofglass' => [],
                'crota' => [],
                'nightfall' => [],
                'heroicstrike' => [],
                'dailychapter' => [],
                'dailycrucible' => [],
                'prisonofelders-playlist' => [],
                'ironbanner' => [],
                'xur' => [],
                'srl' => []
            ]
        ]);

        $expected = new Collection(AdvisorActivities::class, [
            (new AdvisorActivities())
                ->setPrisonOfElders(new AdvisorActivity())
                ->setElderChallenge(new AdvisorActivity())
                ->setTrials(new AdvisorActivity())
                ->setArmsDay(new AdvisorActivity())
                ->setWeeklyCrucible(new AdvisorActivity())
                ->setKingsFall(new AdvisorActivity())
                ->setVaultOfGlass(new AdvisorActivity())
                ->setCrota(new AdvisorActivity())
                ->setNightfall(new AdvisorActivity())
                ->setHeroicStrike(new AdvisorActivity())
                ->setDailyChapter(new AdvisorActivity())
                ->setDailyCrucible(new AdvisorActivity())
                ->setPrisonOfEldersPlaylist(new AdvisorActivity())
                ->setIronBanner(new AdvisorActivity())
                ->setXur(new AdvisorActivity())
                ->setSrl(new AdvisorActivity())
        ]);

        $this->assertEquals($expected, $collection);
    }
}
