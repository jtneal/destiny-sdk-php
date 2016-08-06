<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

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

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = ArtDyeChannel::toObject(null, [
            'channelHash' => 662199250,
            'index' => 0,
            'channelName' => 'armor',
            'hash' => 662199250
        ]);

        $expected = (new ArtDyeChannel())
            ->setChannelHash(662199250)
            ->setIndex(0)
            ->setChannelName('armor')
            ->setHash(662199250);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = ArtDyeChannel::toCollection(null, [
            [
                'channelHash' => 662199250,
                'index' => 0,
                'channelName' => 'armor',
                'hash' => 662199250
            ]
        ]);

        $expected = new Collection(ArtDyeChannel::class, [
            (new ArtDyeChannel())
                ->setChannelHash(662199250)
                ->setIndex(0)
                ->setChannelName('armor')
                ->setHash(662199250)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
