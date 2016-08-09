<?php

namespace Necowebs\Destiny\Services;

use Necowebs\Destiny\Exceptions\DestinyPlayerNotFoundException;
use Necowebs\Destiny\Models\DestinyPlayer;

/**
 * Class DestinyPlayerService
 * @package Necowebs\Destiny\Services
 */
class DestinyPlayerService extends BaseService
{
    /**
     * @param string $displayName
     * @param string $membershipType
     * @return DestinyPlayer
     * @throws DestinyPlayerNotFoundException
     */
    public function search($displayName, $membershipType = 'All')
    {
        $body = $this->get('SearchDestinyPlayer/' . $membershipType . '/' . $displayName);

        if (!isset($body['Response'][0])) {
            throw new DestinyPlayerNotFoundException;
        }

        return DestinyPlayer::toObject(null, $body['Response'][0]);
    }
}
