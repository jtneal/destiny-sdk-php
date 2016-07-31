<?php

namespace Necowebs\Destiny\Exceptions;

/**
 * Class ManifestObjectNotFoundExceptionTest
 * @package Necowebs\Destiny\Exceptions
 */
class ManifestObjectNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Manifest Object Not Found Exception
     */
    public function testManifestObjectNotFoundException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        throw new ManifestObjectNotFoundException;
    }
}
