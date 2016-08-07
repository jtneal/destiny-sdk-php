<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;

/**
 * Class GrimoireDefinitionThemeTest
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireDefinitionThemeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $theme = (new GrimoireDefinitionTheme())
            ->setThemeId('Places')
            ->setThemeName('Places')
            ->setThemeDescription('Places')
            ->setNormalResolution(new GrimoireResolution())
            ->setHighResolution(new GrimoireResolution())
            ->setPageCollection(new Collection(GrimoireDefinitionThemePage::class));

        $this->assertEquals('Places', $theme->getThemeId());
        $this->assertEquals('Places', $theme->getThemeName());
        $this->assertEquals('Places', $theme->getThemeDescription());
        $this->assertEquals(new GrimoireResolution(), $theme->getNormalResolution());
        $this->assertEquals(new GrimoireResolution(), $theme->getHighResolution());
        $this->assertEquals(new Collection(GrimoireDefinitionThemePage::class), $theme->getPageCollection());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = GrimoireDefinitionTheme::toObject(null, [
            'themeId' => 'Places',
            'themeName' => 'Places',
            'themeDescription' => 'Places',
            'normalResolution' => [],
            'highResolution' => [],
            'pageCollection' => []
        ]);

        $expected = (new GrimoireDefinitionTheme())
            ->setThemeId('Places')
            ->setThemeName('Places')
            ->setThemeDescription('Places')
            ->setNormalResolution(new GrimoireResolution())
            ->setHighResolution(new GrimoireResolution())
            ->setPageCollection(new Collection(GrimoireDefinitionThemePage::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = GrimoireDefinitionTheme::toCollection(null, [
            [
                'themeId' => 'Places',
                'themeName' => 'Places',
                'themeDescription' => 'Places',
                'normalResolution' => [],
                'highResolution' => [],
                'pageCollection' => []

            ]
        ]);

        $expected = new Collection(GrimoireDefinitionTheme::class, [
            (new GrimoireDefinitionTheme())
                ->setThemeId('Places')
                ->setThemeName('Places')
                ->setThemeDescription('Places')
                ->setNormalResolution(new GrimoireResolution())
                ->setHighResolution(new GrimoireResolution())
                ->setPageCollection(new Collection(GrimoireDefinitionThemePage::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
