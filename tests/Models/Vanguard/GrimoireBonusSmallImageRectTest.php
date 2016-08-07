<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;

/**
 * Class GrimoireBonusSmallImageRectTest
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireBonusSmallImageRectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $rect = (new GrimoireBonusSmallImageRect())
            ->setX(145)
            ->setY(0)
            ->setHeight(145)
            ->setWidth(145);

        $this->assertEquals(145, $rect->getX());
        $this->assertEquals(0, $rect->getY());
        $this->assertEquals(145, $rect->getHeight());
        $this->assertEquals(145, $rect->getWidth());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = GrimoireBonusSmallImageRect::toObject(null, [
            'x' => 145,
            'y' => 0,
            'height' => 145,
            'width' => 145
        ]);

        $expected = (new GrimoireBonusSmallImageRect())
            ->setX(145)
            ->setY(0)
            ->setHeight(145)
            ->setWidth(145);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = GrimoireBonusSmallImageRect::toCollection(null, [
            [
                'x' => 145,
                'y' => 0,
                'height' => 145,
                'width' => 145
            ]
        ]);

        $expected = new Collection(GrimoireBonusSmallImageRect::class, [
            (new GrimoireBonusSmallImageRect())
                ->setX(145)
                ->setY(0)
                ->setHeight(145)
                ->setWidth(145)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
