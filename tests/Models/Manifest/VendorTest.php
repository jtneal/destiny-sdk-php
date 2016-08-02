<?php

namespace Necowebs\Destiny\Models\Manifest;
use Collections\Collection;

/**
 * Class VendorTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class VendorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $vendor = (new Vendor())
            ->setSummary(new VendorSummary())
            ->setAcceptedItems(new Collection('int'))
            ->setCategories(new Collection('Necowebs\Destiny\Models\Manifest\VendorCategory'))
            ->setFailureStrings([])
            ->setUnlockValueHash(0)
            ->setHash(1575820975)
            ->setIndex(0);

        $this->assertEquals(new VendorSummary(), $vendor->getSummary());
        $this->assertEquals(new Collection('int'), $vendor->getAcceptedItems());
        $this->assertEquals(new Collection('Necowebs\Destiny\Models\Manifest\VendorCategory'), $vendor->getCategories());
        $this->assertEquals([], $vendor->getFailureStrings());
        $this->assertEquals(0, $vendor->getUnlockValueHash());
        $this->assertEquals(1575820975, $vendor->getHash());
        $this->assertEquals(0, $vendor->getIndex());
    }
}
