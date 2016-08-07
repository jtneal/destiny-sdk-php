<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;

/**
 * Class GrimoireDefinitionThemePageTest
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireDefinitionThemePageTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $page = (new GrimoireDefinitionThemePage())
            ->setPageId('Darkness')
            ->setPageName('Darkness')
            ->setNormalResolution(new GrimoireResolution())
            ->setHighResolution(new GrimoireResolution())
            ->setCardCollection(new Collection(GrimoireDefinitionThemePageCard::class))
            ->setCardBriefs(new Collection(GrimoireDefinitionThemePageCardBrief::class));

        $this->assertEquals('Darkness', $page->getPageId());
        $this->assertEquals('Darkness', $page->getPageName());
        $this->assertEquals(new GrimoireResolution(), $page->getNormalResolution());
        $this->assertEquals(new GrimoireResolution(), $page->getHighResolution());
        $this->assertEquals(new Collection(GrimoireDefinitionThemePageCard::class), $page->getCardCollection());
        $this->assertEquals(new Collection(GrimoireDefinitionThemePageCardBrief::class), $page->getCardBriefs());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = GrimoireDefinitionThemePage::toObject(null, [
            'pageId' => 'Darkness',
            'pageName' => 'Darkness',
            'normalResolution' => [],
            'highResolution' => [],
            'cardCollection' => [],
            'cardBriefs' => []
        ]);

        $expected = (new GrimoireDefinitionThemePage())
            ->setPageId('Darkness')
            ->setPageName('Darkness')
            ->setNormalResolution(new GrimoireResolution())
            ->setHighResolution(new GrimoireResolution())
            ->setCardCollection(new Collection(GrimoireDefinitionThemePageCard::class))
            ->setCardBriefs(new Collection(GrimoireDefinitionThemePageCardBrief::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = GrimoireDefinitionThemePage::toCollection(null, [
            [
                'pageId' => 'Darkness',
                'pageName' => 'Darkness',
                'normalResolution' => [],
                'highResolution' => [],
                'cardCollection' => [],
                'cardBriefs' => []
            ]
        ]);

        $expected = new Collection(GrimoireDefinitionThemePage::class, [
            (new GrimoireDefinitionThemePage())
                ->setPageId('Darkness')
                ->setPageName('Darkness')
                ->setNormalResolution(new GrimoireResolution())
                ->setHighResolution(new GrimoireResolution())
                ->setCardCollection(new Collection(GrimoireDefinitionThemePageCard::class))
                ->setCardBriefs(new Collection(GrimoireDefinitionThemePageCardBrief::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
