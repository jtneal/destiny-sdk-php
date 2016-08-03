<?php

namespace Necowebs\Destiny\Models\Manifest;

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
}
