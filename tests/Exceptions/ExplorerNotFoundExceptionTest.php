<?php

namespace Necowebs\Destiny\Exceptions;

/**
 * Class ExplorerNotFoundExceptionTest
 * @package Necowebs\Destiny\Exceptions
 */
class ExplorerNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Explorer Not Found Exception
     */
    public function testExplorerNotFoundException()
    {
        $this->expectException(ExplorerNotFoundException::class);

        throw new ExplorerNotFoundException;
    }
}
