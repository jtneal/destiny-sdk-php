<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ArtDyeChannelNotFoundException;
use Necowebs\Destiny\Models\Manifest\ArtDyeChannel;

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

        $expected = (new ArtDyeChannel())
            ->setChannelHash(662199250)
            ->setIndex(0)
            ->setChannelName('armor')
            ->setHash(662199250);

        $this->assertEquals($expected, $channel);
    }

    /**
     * Test Get Art Dye Channel Exception
     */
    public function testGetArtDyeChannelException()
    {
        $this->expectException(ArtDyeChannelNotFoundException::class);

        $channel = (new ArtDyeChannelService())->getArtDyeChannel('Fail');
    }
}
