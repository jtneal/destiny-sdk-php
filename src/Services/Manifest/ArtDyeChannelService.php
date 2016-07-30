<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ArtDyeChannelNotFoundException;
use Necowebs\Destiny\Models\Manifest\ArtDyeChannel;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class ArtDyeChannelService
 * @package Necowebs\Destiny\Services\Manifest
 */
class ArtDyeChannelService extends BaseService
{
    /**
     * @param int $channelHash
     * @return ArtDyeChannel
     * @throws \Exception
     */
    public function getArtDyeChannel($channelHash)
    {
        $body = $this->get('Manifest/ArtDyeChannel/' . $channelHash);

        if (!isset($body['Response'])) {
            throw new ArtDyeChannelNotFoundException;
        }

        $channel = $body['Response']['data']['artDyeChannel'];

        return (new ArtDyeChannel())
            ->setChannelHash($channel['channelHash'])
            ->setIndex($channel['index'])
            ->setChannelName($channel['channelName'])
            ->setHash($channel['hash']);
    }
}
