<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;

/**
 * Class GrimoireDefinitionTest
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireDefinitionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $definition = (new GrimoireDefinition())
            ->setThemeCollection(new Collection(GrimoireDefinitionTheme::class));

        $this->assertEquals(new Collection(GrimoireDefinitionTheme::class), $definition->getThemeCollection());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = GrimoireDefinition::toObject(null, [
            'themeCollection' => []
        ]);

        $expected = (new GrimoireDefinition())
            ->setThemeCollection(new Collection(GrimoireDefinitionTheme::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = GrimoireDefinition::toCollection(null, [
            [
                'themeCollection' => []
            ]
        ]);

        $expected = new Collection(GrimoireDefinition::class, [
            (new GrimoireDefinition())
                ->setThemeCollection(new Collection(GrimoireDefinitionTheme::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
