<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\Destination;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class DestinationService
 * @package Necowebs\Destiny\Services\Manifest
 */
class DestinationService extends BaseService
{
    /**
     * @param int $destinationHash
     * @return Destination
     * @throws ManifestObjectNotFoundException
     */
    public function getDestination($destinationHash)
    {
        $body = $this->get('Manifest/Destination/' . $destinationHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return Destination::toObject(null, $body['Response']['data']['destination']);
    }
}
