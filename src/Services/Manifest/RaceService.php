<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\RaceNotFoundException;
use Necowebs\Destiny\Models\Manifest\Race;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class RaceService
 * @package Necowebs\Destiny\Services\Manifest
 */
class RaceService extends BaseService
{
    /**
     * @param int $raceHash
     * @return Race
     * @throws RaceNotFoundException
     */
    public function getRace($raceHash)
    {
        $body = $this->get('Manifest/Race/' . $raceHash);

        if (!isset($body['Response'])) {
            throw new RaceNotFoundException;
        }

        $race = $body['Response']['data']['race'];

        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\Race'))
            ->add('raceHash')
            ->add('raceType')
            ->add('raceName')
            ->add('raceNameMale')
            ->add('raceNameFemale')
            ->add('raceDescription')
            ->add('hash')
            ->add('index');

        return $mapper->map($race);
    }
}
