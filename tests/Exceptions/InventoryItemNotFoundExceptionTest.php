<?php

namespace Necowebs\Destiny\Exceptions;

/**
 * Class InventoryItemNotFoundExceptionTest
 * @package Necowebs\Destiny\Exceptions
 */
class InventoryItemNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Inventory Item Not Found Exception
     */
    public function testInventoryItemNotFoundException()
    {
        $this->expectException(InventoryItemNotFoundException::class);

        throw new InventoryItemNotFoundException;
    }
}
