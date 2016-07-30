<?php

namespace Necowebs\Destiny\Exceptions;

/**
 * Class StatNotFoundExceptionTest
 * @package Necowebs\Destiny\Exceptions
 */
class StatNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Stat Not Found Exception
     */
    public function testStatNotFoundException()
    {
        $this->expectException(StatNotFoundException::class);

        throw new StatNotFoundException;
    }
}
