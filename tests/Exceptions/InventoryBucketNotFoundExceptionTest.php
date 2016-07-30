<?php

namespace Necowebs\Destiny\Exceptions;

/**
 * Class InventoryBucketNotFoundExceptionTest
 * @package Necowebs\Destiny\Exceptions
 */
class InventoryBucketNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Inventory Bucket Not Found Exception
     */
    public function testInventoryBucketNotFoundException()
    {
        $this->expectException(InventoryBucketNotFoundException::class);

        throw new InventoryBucketNotFoundException;
    }
}
