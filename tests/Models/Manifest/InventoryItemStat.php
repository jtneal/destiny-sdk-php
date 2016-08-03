<?php

namespace Necowebs\Destiny\Models\Manifest;

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
}
