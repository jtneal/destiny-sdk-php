<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;

/**
 * Class AggregateActivityValuesTest
 * @package Necowebs\Destiny\Models\Stats
 */
class AggregateActivityValuesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $activity = (new AggregateActivityValues())
            ->setFastestCompletionSecondsForActivity(new ActivityValue())
            ->setActivityCompletions(new ActivityValue())
            ->setActivityDeaths(new ActivityValue())
            ->setActivityKills(new ActivityValue())
            ->setActivitySecondsPlayed(new ActivityValue())
            ->setActivityWins(new ActivityValue())
            ->setActivityKillsDeathsRatio(new ActivityValue())
            ->setActivityAssists(new ActivityValue())
            ->setActivityKillsDeathsAssists(new ActivityValue())
            ->setActivityPrecisionKills(new ActivityValue())
            ->setActivityGatesHit(new ActivityValue());

        $this->assertEquals(new ActivityValue(), $activity->getFastestCompletionSecondsForActivity());
        $this->assertEquals(new ActivityValue(), $activity->getActivityCompletions());
        $this->assertEquals(new ActivityValue(), $activity->getActivityDeaths());
        $this->assertEquals(new ActivityValue(), $activity->getActivityKills());
        $this->assertEquals(new ActivityValue(), $activity->getActivitySecondsPlayed());
        $this->assertEquals(new ActivityValue(), $activity->getActivityWins());
        $this->assertEquals(new ActivityValue(), $activity->getActivityKillsDeathsRatio());
        $this->assertEquals(new ActivityValue(), $activity->getActivityAssists());
        $this->assertEquals(new ActivityValue(), $activity->getActivityKillsDeathsAssists());
        $this->assertEquals(new ActivityValue(), $activity->getActivityPrecisionKills());
        $this->assertEquals(new ActivityValue(), $activity->getActivityGatesHit());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AggregateActivityValues::toObject(null, [
            'fastestCompletionSecondsForActivity' => [],
            'activityCompletions' => [],
            'activityDeaths' => [],
            'activityKills' => [],
            'activitySecondsPlayed' => [],
            'activityWins' => [],
            'activityKillsDeathsRatio' => [],
            'activityAssists' => [],
            'activityKillsDeathsAssists' => [],
            'activityPrecisionKills' => [],
            'activityGatesHit' => []
        ]);

        $expected = (new AggregateActivityValues())
            ->setFastestCompletionSecondsForActivity(new ActivityValue())
            ->setActivityCompletions(new ActivityValue())
            ->setActivityDeaths(new ActivityValue())
            ->setActivityKills(new ActivityValue())
            ->setActivitySecondsPlayed(new ActivityValue())
            ->setActivityWins(new ActivityValue())
            ->setActivityKillsDeathsRatio(new ActivityValue())
            ->setActivityAssists(new ActivityValue())
            ->setActivityKillsDeathsAssists(new ActivityValue())
            ->setActivityPrecisionKills(new ActivityValue())
            ->setActivityGatesHit(new ActivityValue());

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AggregateActivityValues::toCollection(null, [
            [
                'fastestCompletionSecondsForActivity' => [],
                'activityCompletions' => [],
                'activityDeaths' => [],
                'activityKills' => [],
                'activitySecondsPlayed' => [],
                'activityWins' => [],
                'activityKillsDeathsRatio' => [],
                'activityAssists' => [],
                'activityKillsDeathsAssists' => [],
                'activityPrecisionKills' => [],
                'activityGatesHit' => []
            ]
        ]);

        $expected = new Collection(AggregateActivityValues::class, [
            (new AggregateActivityValues())
                ->setFastestCompletionSecondsForActivity(new ActivityValue())
                ->setActivityCompletions(new ActivityValue())
                ->setActivityDeaths(new ActivityValue())
                ->setActivityKills(new ActivityValue())
                ->setActivitySecondsPlayed(new ActivityValue())
                ->setActivityWins(new ActivityValue())
                ->setActivityKillsDeathsRatio(new ActivityValue())
                ->setActivityAssists(new ActivityValue())
                ->setActivityKillsDeathsAssists(new ActivityValue())
                ->setActivityPrecisionKills(new ActivityValue())
                ->setActivityGatesHit(new ActivityValue())
        ]);

        $this->assertEquals($expected, $collection);
    }
}
