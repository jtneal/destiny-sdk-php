<?php

namespace Necowebs\Destiny\Services;

use Necowebs\Destiny\Models\Destination;

/**
 * Class DestinationService
 * @package Necowebs\Destiny\Services
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
            throw new \Exception('Destination not found.');
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
