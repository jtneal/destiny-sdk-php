<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\PlaceNotFoundException;
use Necowebs\Destiny\Models\Manifest\Place;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class PlaceService
 * @package Necowebs\Destiny\Services\Manifest
 */
class PlaceService extends BaseService
{
    /**
     * @param int $placeHash
     * @return Place
     * @throws PlaceNotFoundException
     */
    public function getPlace($placeHash)
    {
        $body = $this->get('Manifest/Place/' . $placeHash);

        if (!isset($body['Response'])) {
            throw new PlaceNotFoundException;
        }

        $place = $body['Response']['data']['place'];

        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\Place'))
            ->add('placeHash')
            ->add('placeName')
            ->add('placeDescription')
            ->add('icon')
            ->add('hash')
            ->add('index');

        return $mapper->map($place);
    }
}
