<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;

/**
 * Class GrimoireBonusSmallImageTest
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireBonusSmallImageTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $image = (new GrimoireBonusSmallImage())
            ->setRect(new GrimoireBonusSmallImageRect())
            ->setSheetPath('/common/destiny_content/grimoire/hr_images/Hive-csprites-sm_4d3662cd1df76fc758f5375deba5c270.jpg')
            ->setSheetSize(new GrimoireBonusSmallImageRect());

        $this->assertEquals(new GrimoireBonusSmallImageRect(), $image->getRect());
        $this->assertEquals('/common/destiny_content/grimoire/hr_images/Hive-csprites-sm_4d3662cd1df76fc758f5375deba5c270.jpg', $image->getSheetPath());
        $this->assertEquals(new GrimoireBonusSmallImageRect(), $image->getSheetSize());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = GrimoireBonusSmallImage::toObject(null, [
            'rect' => [],
            'sheetPath' => '/common/destiny_content/grimoire/hr_images/Hive-csprites-sm_4d3662cd1df76fc758f5375deba5c270.jpg',
            'sheetSize' => []
        ]);

        $expected = (new GrimoireBonusSmallImage())
            ->setRect(new GrimoireBonusSmallImageRect())
            ->setSheetPath('/common/destiny_content/grimoire/hr_images/Hive-csprites-sm_4d3662cd1df76fc758f5375deba5c270.jpg')
            ->setSheetSize(new GrimoireBonusSmallImageRect());

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = GrimoireBonusSmallImage::toCollection(null, [
            [
                'rect' => [],
                'sheetPath' => '/common/destiny_content/grimoire/hr_images/Hive-csprites-sm_4d3662cd1df76fc758f5375deba5c270.jpg',
                'sheetSize' => []
            ]
        ]);

        $expected = new Collection(GrimoireBonusSmallImage::class, [
            (new GrimoireBonusSmallImage())
                ->setRect(new GrimoireBonusSmallImageRect())
                ->setSheetPath('/common/destiny_content/grimoire/hr_images/Hive-csprites-sm_4d3662cd1df76fc758f5375deba5c270.jpg')
                ->setSheetSize(new GrimoireBonusSmallImageRect())
        ]);

        $this->assertEquals($expected, $collection);
    }
}
