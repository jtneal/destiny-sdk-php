<?php

namespace Necowebs\Destiny\Models\Stats;

/**
 * Class ActivityValuesTest
 * @package Necowebs\Destiny\Models\Stats
 */
class ActivityValuesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $values = (new ActivityValues())
            ->setAssists(new ActivityValue())
            ->setKills(new ActivityValue())
            ->setAverageScorePerKill(new ActivityValue())
            ->setDeaths(new ActivityValue())
            ->setAverageScorePerLife(new ActivityValue())
            ->setCompleted(new ActivityValue())
            ->setKillsDeathsRatio(new ActivityValue())
            ->setKillsDeathsAssists(new ActivityValue())
            ->setActivityDurationSeconds(new ActivityValue())
            ->setCompletionReason(new ActivityValue())
            ->setFireTeamId(new ActivityValue())
            ->setPlayerCount(new ActivityValue())
            ->setLeaveRemainingSeconds(new ActivityValue());

        $this->assertEquals(new ActivityValue(), $values->getAssists());
        $this->assertEquals(new ActivityValue(), $values->getKills());
        $this->assertEquals(new ActivityValue(), $values->getAverageScorePerKill());
        $this->assertEquals(new ActivityValue(), $values->getDeaths());
        $this->assertEquals(new ActivityValue(), $values->getAverageScorePerLife());
        $this->assertEquals(new ActivityValue(), $values->getCompleted());
        $this->assertEquals(new ActivityValue(), $values->getKillsDeathsRatio());
        $this->assertEquals(new ActivityValue(), $values->getKillsDeathsAssists());
        $this->assertEquals(new ActivityValue(), $values->getActivityDurationSeconds());
        $this->assertEquals(new ActivityValue(), $values->getCompletionReason());
        $this->assertEquals(new ActivityValue(), $values->getFireTeamId());
        $this->assertEquals(new ActivityValue(), $values->getPlayerCount());
        $this->assertEquals(new ActivityValue(), $values->getLeaveRemainingSeconds());
    }
}
