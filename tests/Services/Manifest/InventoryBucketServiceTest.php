<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;

/**
 * Class InventoryBucketServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class InventoryBucketServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Bucket
     */
    public function testGetBucket()
    {
        $bucket = (new InventoryBucketService())->getBucket(953998645);

        $this->assertEquals(953998645, $bucket->getBucketHash());
        $this->assertEquals('Heavy Weapons', $bucket->getBucketName());
        $this->assertEquals('Machine guns and rocket launchers.', $bucket->getBucketDescription());
        $this->assertEquals(0, $bucket->getScope());
        $this->assertEquals(3, $bucket->getCategory());
        $this->assertEquals(40, $bucket->getBucketOrder());
        $this->assertEquals('BUCKET_HEAVY_WEAPON', $bucket->getBucketIdentifier());
        $this->assertEquals(10, $bucket->getItemCount());
        $this->assertEquals(1, $bucket->getLocation());
        $this->assertEquals(true, $bucket->getHasTransferDestination());
        $this->assertEquals(true, $bucket->getEnabled());
        $this->assertEquals(953998645, $bucket->getHash());
        $this->assertEquals(0, $bucket->getIndex());
    }

    /**
     * Test Get Bucket Exception
     */
    public function testGetBucketException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $bucket = (new InventoryBucketService())->getBucket('Fail');
    }
}
