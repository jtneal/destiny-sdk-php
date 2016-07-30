<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ArtDyeChannelNotFoundException;
use Necowebs\Destiny\Models\Manifest\ArtDyeChannel;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class ArtDyeChannelService
 * @package Necowebs\Destiny\Services\Manifest
 */
class ArtDyeChannelService extends BaseService
{
    /**
     * @param int $channelHash
     * @return ArtDyeChannel
     * @throws ArtDyeChannelNotFoundException
     */
    public function getArtDyeChannel($channelHash)
    {
        $body = $this->get('Manifest/ArtDyeChannel/' . $channelHash);

        if (!isset($body['Response'])) {
            throw new ArtDyeChannelNotFoundException;
        }

        $channel = $body['Response']['data']['artDyeChannel'];

        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\ArtDyeChannel'))
            ->add('channelHash')
            ->add('index')
            ->add('channelName')
            ->add('hash');

        return $mapper->map($channel);
    }
}
