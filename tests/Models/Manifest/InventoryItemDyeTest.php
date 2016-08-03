<?php

namespace Necowebs\Destiny\Models\Manifest;

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
}
