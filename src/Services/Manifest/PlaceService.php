<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\PlaceNotFoundException;
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
     * @throws \Exception
     */
    public function getPlace($placeHash)
    {
        $body = $this->get('Manifest/Place/' . $placeHash);

        if (!isset($body['Response'])) {
            throw new PlaceNotFoundException;
        }

        $place = $body['Response']['data']['place'];

        return (new Place())
            ->setPlaceHash($place['placeHash'])
            ->setPlaceName($place['placeName'])
            ->setPlaceDescription($place['placeDescription'])
            ->setIcon($place['icon'])
            ->setHash($place['hash'])
            ->setIndex($place['index']);
    }
}
