<?php

namespace Necowebs\Destiny\Services\Stats;

use Necowebs\Destiny\Models\Stats\Definition;

/**
 * Class HistoricalStatsDefinitionServiceTest
 * @package Necowebs\Destiny\Services\Stats
 */
class HistoricalStatsDefinitionServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Historical Stats Definition
     */
    public function testGetHistoricalStatsDefinition()
    {
        $definition = (new HistoricalStatsDefinitionService())->getHistoricalStatsDefinition();

        $this->assertContainsOnlyInstancesOf(Definition::class, $definition);
    }
}
