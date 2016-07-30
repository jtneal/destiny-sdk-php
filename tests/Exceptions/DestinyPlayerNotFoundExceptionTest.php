<?php

namespace Necowebs\Destiny\Exceptions;

/**
 * Class DestinyPlayerNotFoundExceptionTest
 * @package Necowebs\Destiny\Exceptions
 */
class DestinyPlayerNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Destiny Player Not Found Exception
     */
    public function testDestinyPlayerNotFoundException()
    {
        $this->expectException(DestinyPlayerNotFoundException::class);

        throw new DestinyPlayerNotFoundException;
    }
}
