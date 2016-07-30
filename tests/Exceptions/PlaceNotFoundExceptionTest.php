<?php

namespace Necowebs\Destiny\Exceptions;

/**
 * Class PlaceNotFoundExceptionTest
 * @package Necowebs\Destiny\Exceptions
 */
class PlaceNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Place Not Found Exception
     */
    public function testPlaceNotFoundException()
    {
        $this->expectException(PlaceNotFoundException::class);

        throw new PlaceNotFoundException;
    }
}
