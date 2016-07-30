<?php

namespace Necowebs\Destiny\Services;

use Necowebs\Destiny\Models\InventoryBucket;

/**
 * Class InventoryBucketServiceTest
 * @package Necowebs\Destiny\Services
 */
class InventoryBucketServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Bucket
     */
    public function testGetBucket()
    {
        $bucket = (new InventoryBucketService())->getBucket(953998645);

        $expected = (new InventoryBucket())
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

        $this->assertEquals($expected, $bucket);
    }

    /**
     * Test Get Bucket Exception
     */
    public function testGetBucketException()
    {
        $this->expectException('\Exception');

        $bucket = (new InventoryBucketService())->getBucket('Fail');
    }
}
