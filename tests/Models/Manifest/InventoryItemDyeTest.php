<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class InventoryItemDyeTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class InventoryItemDyeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $dye = (new InventoryItemDye())
            ->setChannelHash(1667433279)
            ->setDyeHash(2672455039);

        $this->assertEquals(1667433279, $dye->getChannelHash());
        $this->assertEquals(2672455039, $dye->getDyeHash());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = InventoryItemDye::toObject(null, [
            'channelHash' => 218592586,
            'dyeHash' => 310687106
        ]);

        $expected = (new InventoryItemDye())
            ->setChannelHash(218592586)
            ->setDyeHash(310687106);


        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = InventoryItemDye::toCollection(null, [
            [
                'channelHash' => 218592586,
                'dyeHash' => 310687106
            ]
        ]);

        $expected = new Collection(InventoryItemDye::class, [
            (new InventoryItemDye())
                ->setChannelHash(218592586)
                ->setDyeHash(310687106)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
