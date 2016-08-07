<?php

namespace Necowebs\Destiny\Exceptions;

/**
 * Class VanguardNotFoundExceptionTest
 * @package Necowebs\Destiny\Exceptions
 */
class VanguardNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Vanguard Not Found Exception
     */
    public function testVanguardNotFoundException()
    {
        $this->expectException(VanguardNotFoundException::class);

        throw new VanguardNotFoundException;
    }
}
