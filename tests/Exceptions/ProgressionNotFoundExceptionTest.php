<?php

namespace Necowebs\Destiny\Exceptions;

/**
 * Class ProgressionNotFoundExceptionTest
 * @package Necowebs\Destiny\Exceptions
 */
class ProgressionNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Progression Not Found Exception
     */
    public function testProgressionNotFoundException()
    {
        $this->expectException(ProgressionNotFoundException::class);

        throw new ProgressionNotFoundException;
    }
}
