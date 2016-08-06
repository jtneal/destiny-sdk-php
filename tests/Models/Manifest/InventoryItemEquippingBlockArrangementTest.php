<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class InventoryItemEquippingBlockArrangementTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class InventoryItemEquippingBlockArrangementTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $arrangement = (new InventoryItemEquippingBlockArrangement())
            ->setClassHash(0)
            ->setGearArtArrangementIndex(1229);

        $this->assertEquals(0, $arrangement->getClassHash());
        $this->assertEquals(1229, $arrangement->getGearArtArrangementIndex());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = InventoryItemEquippingBlockArrangement::toObject(null, [
            'classHash' => 0,
            'gearArtArrangementIndex' => 2983
        ]);

        $expected = (new InventoryItemEquippingBlockArrangement())
            ->setClassHash(0)
            ->setGearArtArrangementIndex(2983);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = InventoryItemEquippingBlockArrangement::toCollection(null, [
            [
                'classHash' => 0,
                'gearArtArrangementIndex' => 2983
            ]
        ]);

        $expected = new Collection(InventoryItemEquippingBlockArrangement::class, [
            (new InventoryItemEquippingBlockArrangement())
                ->setClassHash(0)
                ->setGearArtArrangementIndex(2983)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
