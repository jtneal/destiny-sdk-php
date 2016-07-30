<?php

namespace Necowebs\Destiny\Services;

use Necowebs\Destiny\Models\Place;

/**
 * Class PlaceService
 * @package Necowebs\Destiny\Services
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
            throw new \Exception('Place not found.');
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
