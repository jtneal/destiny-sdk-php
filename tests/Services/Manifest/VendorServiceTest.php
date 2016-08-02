<?php

namespace Necowebs\Destiny\Services\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\VendorSummary;
use Necowebs\Destiny\Models\Manifest\VendorCategory;

/**
 * Class VendorServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class VendorServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Vendor
     */
    public function testGetVendor()
    {
        $vendor = (new VendorService())->getVendor(1575820975);

        $this->assertInstanceOf(VendorSummary::class, $vendor->getSummary());
        $this->assertEquals(new Collection('int'), $vendor->getAcceptedItems());
        $this->assertContainsOnlyInstancesOf(VendorCategory::class, $vendor->getCategories());
        $this->assertEquals([null], $vendor->getFailureStrings());
        $this->assertEquals(0, $vendor->getUnlockValueHash());
        $this->assertEquals(1575820975, $vendor->getHash());
        $this->assertEquals(0, $vendor->getIndex());
    }

    /**
     * Test Get Vendor Exception
     */
    public function testGetVendorException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $vendor = (new VendorService())->getVendor('Fail');
    }
}
