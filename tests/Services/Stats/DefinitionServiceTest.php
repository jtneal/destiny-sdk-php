<?php

namespace Necowebs\Destiny\Services\Stats;

use Necowebs\Destiny\Models\Stats\Definition;

/**
 * Class DefinitionServiceTest
 * @package Necowebs\Destiny\Services\Stats
 */
class DefinitionServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Historical Stats
     */
    public function testGetDefinition()
    {
        $definition = (new DefinitionService())->getDefinition();

        $this->assertContainsOnlyInstancesOf(Definition::class, $definition);
    }
}
