<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class ArtDyeChannelTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class ArtDyeChannelTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $channel = (new ArtDyeChannel())
            ->setChannelHash(662199250)
            ->setIndex(0)
            ->setChannelName('armor')
            ->setHash(662199250);

        $this->assertEquals(662199250, $channel->getChannelHash());
        $this->assertEquals(0, $channel->getIndex());
        $this->assertEquals('armor', $channel->getChannelName());
        $this->assertEquals(662199250, $channel->getHash());
    }
}
