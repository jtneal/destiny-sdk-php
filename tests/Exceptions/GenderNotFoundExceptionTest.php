<?php

namespace Necowebs\Destiny\Exceptions;

/**
 * Class GenderNotFoundExceptionTest
 * @package Necowebs\Destiny\Exceptions
 */
class GenderNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Gender Not Found Exception
     */
    public function testGenderNotFoundException()
    {
        $this->expectException(GenderNotFoundException::class);

        throw new GenderNotFoundException;
    }
}
