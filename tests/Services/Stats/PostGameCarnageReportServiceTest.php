<?php

namespace Necowebs\Destiny\Services\Stats;

use Necowebs\Destiny\Exceptions\StatsNotFoundException;
use Necowebs\Destiny\Models\Stats\ActivityDetails;
use Necowebs\Destiny\Models\Stats\PostGameCarnageReportEntry;
use Necowebs\Destiny\Models\Stats\PostGameCarnageReportTeam;

/**
 * Class PostGameCarnageReportServiceTest
 * @package Necowebs\Destiny\Services\Stats
 */
class PostGameCarnageReportServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Post Game Carnage Report
     */
    public function testGetPostGameCarnageReport()
    {
        $report = (new PostGameCarnageReportService())->getPostGameCarnageReport('5234554709');

        $this->assertEquals('2016-07-13T23:15:00Z', $report->getPeriod());
        $this->assertInstanceOf(ActivityDetails::class, $report->getActivityDetails());
        $this->assertContainsOnlyInstancesOf(PostGameCarnageReportEntry::class, $report->getEntries());
        $this->assertContainsOnlyInstancesOf(PostGameCarnageReportTeam::class, $report->getTeams());
    }

    /**
     * Test Get Post Game Carnage Report Exception
     */
    public function testGetPostGameCarnageReportException()
    {
        $this->expectException(StatsNotFoundException::class);

        $report = (new PostGameCarnageReportService())->getPostGameCarnageReport('Fail');
    }
}
