<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;

/**
 * Class GrimoireImageTest
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireImageTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $image = (new GrimoireImage())
            ->setRect(new GrimoireImageRect())
            ->setSheetPath('/common/destiny_content/grimoire/hr_images/Hive-csprites-sm_4d3662cd1df76fc758f5375deba5c270.jpg')
            ->setSheetSize(new GrimoireImageRect());

        $this->assertEquals(new GrimoireImageRect(), $image->getRect());
        $this->assertEquals('/common/destiny_content/grimoire/hr_images/Hive-csprites-sm_4d3662cd1df76fc758f5375deba5c270.jpg', $image->getSheetPath());
        $this->assertEquals(new GrimoireImageRect(), $image->getSheetSize());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = GrimoireImage::toObject(null, [
            'rect' => [],
            'sheetPath' => '/common/destiny_content/grimoire/hr_images/Hive-csprites-sm_4d3662cd1df76fc758f5375deba5c270.jpg',
            'sheetSize' => []
        ]);

        $expected = (new GrimoireImage())
            ->setRect(new GrimoireImageRect())
            ->setSheetPath('/common/destiny_content/grimoire/hr_images/Hive-csprites-sm_4d3662cd1df76fc758f5375deba5c270.jpg')
            ->setSheetSize(new GrimoireImageRect());

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = GrimoireImage::toCollection(null, [
            [
                'rect' => [],
                'sheetPath' => '/common/destiny_content/grimoire/hr_images/Hive-csprites-sm_4d3662cd1df76fc758f5375deba5c270.jpg',
                'sheetSize' => []
            ]
        ]);

        $expected = new Collection(GrimoireImage::class, [
            (new GrimoireImage())
                ->setRect(new GrimoireImageRect())
                ->setSheetPath('/common/destiny_content/grimoire/hr_images/Hive-csprites-sm_4d3662cd1df76fc758f5375deba5c270.jpg')
                ->setSheetSize(new GrimoireImageRect())
        ]);

        $this->assertEquals($expected, $collection);
    }
}
