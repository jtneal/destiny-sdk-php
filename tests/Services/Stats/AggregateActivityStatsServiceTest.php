<?php

namespace Necowebs\Destiny\Services\Stats;

use Necowebs\Destiny\Exceptions\StatsNotFoundException;
use Necowebs\Destiny\Models\Stats\AggregateActivity;

/**
 * Class AggregateActivityStatsServiceTest
 * @package Necowebs\Destiny\Services\Stats
 */
class AggregateActivityStatsServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Aggregate Activity Stats
     */
    public function testGetAggregateActivityStats()
    {
        $stats = (new AggregateActivityStatsService())->getAggregateActivityStats(2, '4611686018450406180', '2305843009310128298');

        $this->assertContainsOnlyInstancesOf(AggregateActivity::class, $stats);
    }

    /**
     * Test Get Aggregate Activity Stats Exception
     */
    public function testGetAggregateActivityStatsException()
    {
        $this->expectException(StatsNotFoundException::class);

        $stats = (new AggregateActivityStatsService())->getAggregateActivityStats(0, 'Fail', 'Fail');
    }
}
