<?php

namespace Necowebs\Destiny\Services\Stats;

use Necowebs\Destiny\Exceptions\StatsNotFoundException;
use Necowebs\Destiny\Models\Stats\AggregateActivity;

/**
 * Class DestinyAggregateActivityStatsServiceTest
 * @package Necowebs\Destiny\Services\Stats
 */
class DestinyAggregateActivityStatsServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Destiny Aggregate Activity Stats
     */
    public function testGetDestinyAggregateActivityStats()
    {
        $stats = (new DestinyAggregateActivityStatsService())->getDestinyAggregateActivityStats(2, '4611686018450406180', '2305843009310128298');

        $this->assertContainsOnlyInstancesOf(AggregateActivity::class, $stats);
    }

    /**
     * Test Get Destiny Aggregate Activity Stats Exception
     */
    public function testGetDestinyAggregateActivityStatsException()
    {
        $this->expectException(StatsNotFoundException::class);

        $stats = (new DestinyAggregateActivityStatsService())->getDestinyAggregateActivityStats(0, 'Fail', 'Fail');
    }
}
