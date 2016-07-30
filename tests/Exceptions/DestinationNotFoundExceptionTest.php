<?php

namespace Necowebs\Destiny\Exceptions;

/**
 * Class DestinationNotFoundExceptionTest
 * @package Necowebs\Destiny\Exceptions
 */
class DestinationNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Destination Not Found Exception
     */
    public function testDestinationNotFoundException()
    {
        $this->expectException(DestinationNotFoundException::class);

        throw new DestinationNotFoundException;
    }
}
