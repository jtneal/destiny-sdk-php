<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\DestinationNotFoundException;
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
     * @throws \Exception
     */
    public function getDestination($destinationHash)
    {
        $body = $this->get('Manifest/Destination/' . $destinationHash);

        if (!isset($body['Response'])) {
            throw new DestinationNotFoundException;
        }

        $destination = $body['Response']['data']['destination'];

        return (new Destination())
            ->setDestinationHash($destination['destinationHash'])
            ->setDestinationName($destination['destinationName'])
            ->setDestinationDescription($destination['destinationDescription'])
            ->setIcon($destination['icon'])
            ->setPlace((new PlaceService())->getPlace($destination['placeHash']))
            ->setDestinationIdentifier($destination['destinationIdentifier'])
            ->setHash($destination['hash'])
            ->setIndex($destination['index']);
    }
}
