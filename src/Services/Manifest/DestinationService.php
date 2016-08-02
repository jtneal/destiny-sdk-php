<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
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
     * @throws ManifestObjectNotFoundException
     */
    public function getDestination($destinationHash)
    {
        $body = $this->get('Manifest/Destination/' . $destinationHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        $destination = $body['Response']['data']['destination'];

        $mapper = (new ArrayObjectMapper(Destination::class))
            ->add('destinationHash')
            ->add('destinationName')
            ->add('destinationDescription')
            ->add('icon')
            ->add('placeHash')
            ->add('destinationIdentifier')
            ->add('mentorVendorIdentifier')
            ->add('hash')
            ->add('index');

        return $mapper->map($destination);
    }
}
