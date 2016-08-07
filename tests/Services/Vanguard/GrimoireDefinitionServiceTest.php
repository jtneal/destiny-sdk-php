<?php

namespace Necowebs\Destiny\Services\Vanguard;

use Necowebs\Destiny\Models\Vanguard\GrimoireDefinitionTheme;

/**
 * Class GrimoireDefinitionServiceTest
 * @package Necowebs\Destiny\Services\Vanguard
 */
class GrimoireDefinitionServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Grimoire Definition
     */
    public function testGetGrimoireDefinition()
    {
        $definition = (new GrimoireDefinitionService())->getGrimoireDefinition();

        $this->assertContainsOnlyInstancesOf(GrimoireDefinitionTheme::class, $definition->getThemeCollection());
    }
}
