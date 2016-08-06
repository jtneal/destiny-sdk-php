<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class InventoryItemStatTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class InventoryItemStatTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $stat = (new InventoryItemStat())
            ->setStatHash(144602215)
            ->setValue(30)
            ->setMinimum(30)
            ->setMaximum(60);

        $this->assertEquals(144602215, $stat->getStatHash());
        $this->assertEquals(30, $stat->getValue());
        $this->assertEquals(30, $stat->getMinimum());
        $this->assertEquals(60, $stat->getMaximum());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = InventoryItemStat::toObject(null, [
            'statHash' => 155624089,
            'value' => 53,
            'minimum' => 53,
            'maximum' => 68
        ]);

        $expected = (new InventoryItemStat())
            ->setStatHash(155624089)
            ->setValue(53)
            ->setMinimum(53)
            ->setMaximum(68);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = InventoryItemStat::toCollection(null, [
            '155624089' => [
                'statHash' => 155624089,
                'value' => 53,
                'minimum' => 53,
                'maximum' => 68
            ]
        ]);

        $expected = new Collection(InventoryItemStat::class, [
            (new InventoryItemStat())
                ->setStatHash(155624089)
                ->setValue(53)
                ->setMinimum(53)
                ->setMaximum(68)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
