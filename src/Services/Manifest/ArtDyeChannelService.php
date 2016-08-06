<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
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
     * @throws ManifestObjectNotFoundException
     */
    public function getArtDyeChannel($channelHash)
    {
        $body = $this->get('Manifest/ArtDyeChannel/' . $channelHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return ArtDyeChannel::toObject(null, $body['Response']['data']['artDyeChannel']);
    }
}
