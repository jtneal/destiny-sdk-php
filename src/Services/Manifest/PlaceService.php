<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\Place;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class PlaceService
 * @package Necowebs\Destiny\Services\Manifest
 */
class PlaceService extends BaseService
{
    /**
     * @param int $placeHash
     * @return Place
     * @throws ManifestObjectNotFoundException
     */
    public function getPlace($placeHash)
    {
        $body = $this->get('Manifest/Place/' . $placeHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return Place::toObject(null, $body['Response']['data']['place']);
    }
}
