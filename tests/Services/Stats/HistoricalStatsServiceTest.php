<?php

namespace Necowebs\Destiny\Services\Stats;

use Necowebs\Destiny\Exceptions\StatsNotFoundException;
use Necowebs\Destiny\Models\Stats\HistoricalActivity;

/**
 * Class HistoricalStatsServiceTest
 * @package Necowebs\Destiny\Services\Stats
 */
class HistoricalStatsServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Historical Stats
     */
    public function testGetHistoricalStats()
    {
        $stats = (new HistoricalStatsService())->getHistoricalStats(2, '4611686018450406180', '2305843009310128298');

        $this->assertInstanceOf(HistoricalActivity::class, $stats->getAllPvP());
        $this->assertInstanceOf(HistoricalActivity::class, $stats->getPatrol());
        $this->assertInstanceOf(HistoricalActivity::class, $stats->getRaid());
        $this->assertInstanceOf(HistoricalActivity::class, $stats->getStory());
        $this->assertInstanceOf(HistoricalActivity::class, $stats->getAllStrikes());
        $this->assertInstanceOf(HistoricalActivity::class, $stats->getAllArena());
    }

    /**
     * Test Get Historical Stats Exception
     */
    public function testGetHistoricalStatsException()
    {
        $this->expectException(StatsNotFoundException::class);

        $stats = (new HistoricalStatsService())->getHistoricalStats(0, 'Fail', 'Fail');
    }
}
