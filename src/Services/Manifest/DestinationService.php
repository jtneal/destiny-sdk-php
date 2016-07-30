<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\DestinationNotFoundException;
use Necowebs\Destiny\Models\Manifest\Destination;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class DestinationService
 * @package Necowebs\Destiny\Services\Manifest
 */
class DestinationService extends BaseService
{
    /**
     * @param int $destinationHash
     * @return Destination
     * @throws DestinationNotFoundException
     */
    public function getDestination($destinationHash)
    {
        $body = $this->get('Manifest/Destination/' . $destinationHash);

        if (!isset($body['Response'])) {
            throw new DestinationNotFoundException;
        }

        $destination = $body['Response']['data']['destination'];

        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\Destination'))
            ->add('destinationHash')
            ->add('destinationName')
            ->add('destinationDescription')
            ->add('icon')
            ->add('placeHash', 'setPlace', function ($obj, $val) {
                return (new PlaceService())->getPlace($val);
            })
            ->add('destinationIdentifier')
            ->add('mentorVendorIdentifier')
            ->add('hash')
            ->add('index');

        return $mapper->map($destination);
    }
}
