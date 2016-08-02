<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;

/**
 * Class ArtDyeChannelServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class ArtDyeChannelServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Art Dye Channel
     */
    public function testGetArtDyeChannel()
    {
        $channel = (new ArtDyeChannelService())->getArtDyeChannel(662199250);

        $this->assertEquals(662199250, $channel->getChannelHash());
        $this->assertEquals(0, $channel->getIndex());
        $this->assertEquals('armor', $channel->getChannelName());
        $this->assertEquals(662199250, $channel->getHash());
    }

    /**
     * Test Get Art Dye Channel Exception
     */
    public function testGetArtDyeChannelException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $channel = (new ArtDyeChannelService())->getArtDyeChannel('Fail');
    }
}
