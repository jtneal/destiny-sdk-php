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
            ->setCategories(new Collection(VendorCategory::class))
            ->setFailureStrings([])
            ->setUnlockValueHash(0)
            ->setHash(1575820975)
            ->setIndex(0);

        $this->assertEquals(new VendorSummary(), $vendor->getSummary());
        $this->assertEquals(new Collection('int'), $vendor->getAcceptedItems());
        $this->assertEquals(new Collection(VendorCategory::class), $vendor->getCategories());
        $this->assertEquals([], $vendor->getFailureStrings());
        $this->assertEquals(0, $vendor->getUnlockValueHash());
        $this->assertEquals(1575820975, $vendor->getHash());
        $this->assertEquals(0, $vendor->getIndex());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Vendor::toObject(null, [
            'summary' => [],
            'acceptedItems' => [],
            'categories' => [],
            'failureStrings' => [],
            'unlockValueHash' => 0,
            'hash' => 1575820975,
            'index' => 0
        ]);

        $expected = (new Vendor())
            ->setSummary(new VendorSummary())
            ->setAcceptedItems(new Collection('int'))
            ->setCategories(new Collection(VendorCategory::class))
            ->setFailureStrings([])
            ->setUnlockValueHash(0)
            ->setHash(1575820975)
            ->setIndex(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Vendor::toCollection(null, [
            [
                'summary' => [],
                'acceptedItems' => [],
                'categories' => [],
                'failureStrings' => [],
                'unlockValueHash' => 0,
                'hash' => 1575820975,
                'index' => 0
            ]
        ]);

        $expected = new Collection(Vendor::class, [
            (new Vendor())
                ->setSummary(new VendorSummary())
                ->setAcceptedItems(new Collection('int'))
                ->setCategories(new Collection(VendorCategory::class))
                ->setFailureStrings([])
                ->setUnlockValueHash(0)
                ->setHash(1575820975)
                ->setIndex(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
