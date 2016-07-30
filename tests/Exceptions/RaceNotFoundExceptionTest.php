<?php

namespace Necowebs\Destiny\Exceptions;

/**
 * Class RaceNotFoundExceptionTest
 * @package Necowebs\Destiny\Exceptions
 */
class RaceNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Race Not Found Exception
     */
    public function testRaceNotFoundException()
    {
        $this->expectException(RaceNotFoundException::class);

        throw new RaceNotFoundException;
    }
}
