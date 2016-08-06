<?php

namespace Necowebs\Destiny\Exceptions;

/**
 * Class StatsNotFoundExceptionTest
 * @package Necowebs\Destiny\Exceptions
 */
class StatsNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Stats Not Found Exception
     */
    public function testStatsNotFoundException()
    {
        $this->expectException(StatsNotFoundException::class);

        throw new StatsNotFoundException;
    }
}
