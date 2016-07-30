<?php

namespace Necowebs\Destiny\Exceptions;

/**
 * Class ArtDyeChannelNotFoundExceptionTest
 * @package Necowebs\Destiny\Exceptions
 */
class ArtDyeChannelNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test ArtDyeChannel Not Found Exception
     */
    public function testArtDyeChannelNotFoundException()
    {
        $this->expectException(ArtDyeChannelNotFoundException::class);

        throw new ArtDyeChannelNotFoundException;
    }
}
