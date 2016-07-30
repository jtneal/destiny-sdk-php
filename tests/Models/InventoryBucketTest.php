<?php

namespace Necowebs\Destiny\Models;

/**
 * Class InventoryBucketTest
 * @package Necowebs\Destiny\Models
 */
class InventoryBucketTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $bucket = (new InventoryBucket())
            ->setBucketHash(953998645)
            ->setBucketName('Heavy Weapons')
            ->setBucketDescription('Machine guns and rocket launchers.')
            ->setScope(0)
            ->setCategory(3)
            ->setBucketOrder(40)
            ->setBucketIdentifier('BUCKET_HEAVY_WEAPON')
            ->setItemCount(10)
            ->setLocation(1)
            ->setHasTransferDestination(true)
            ->setEnabled(true)
            ->setHash(953998645)
            ->setIndex(0);

        $this->assertEquals(953998645, $bucket->getBucketHash();
        $this->assertEquals('Heavy Weapons', $bucket->getBucketName();
        $this->assertEquals('Machine guns and rocket launchers.', $bucket->getBucketDescription();
        $this->assertEquals(0, $bucket->getScope();
        $this->assertEquals(3, $bucket->getCategory();
        $this->assertEquals(40, $bucket->getBucketOrder();
        $this->assertEquals('BUCKET_HEAVY_WEAPON', $bucket->getBucketIdentifier();
        $this->assertEquals(10, $bucket->getItemCount();
        $this->assertEquals(1, $bucket->getLocation();
        $this->assertEquals(true, $bucket->getHasTransferDestination();
        $this->assertEquals(true, $bucket->getEnabled();
        $this->assertEquals(953998645, $bucket->getHash();
        $this->assertEquals(0, $bucket->getIndex();
    }
}
