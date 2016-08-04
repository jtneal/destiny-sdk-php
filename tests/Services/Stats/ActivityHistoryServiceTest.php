<?php

namespace Necowebs\Destiny\Services\Stats;

use Necowebs\Destiny\Exceptions\StatsNotFoundException;
use Necowebs\Destiny\Models\Stats\Activity;


/**
 * Class ActivityHistoryServiceTest
 * @package Necowebs\Destiny\Services\Stats
 */
class ActivityHistoryServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Activity History
     */
    public function testGetActivityHistory()
    {
        $history = (new ActivityHistoryService())->getActivityHistory(2, '4611686018450406180', '2305843009310128298');

        $this->assertContainsOnlyInstancesOf(Activity::class, $history);
    }

    /**
     * Test Get Activity History Exception
     */
    public function testGetActivityHistoryException()
    {
        $this->expectException(StatsNotFoundException::class);

        $history = (new ActivityHistoryService())->getActivityHistory(0, 'Fail', 'Fail');
    }
}
