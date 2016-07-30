<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\RaceNotFoundException;
use Necowebs\Destiny\Models\Manifest\Race;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class RaceService
 * @package Necowebs\Destiny\Services\Manifest
 */
class RaceService extends BaseService
{
    /**
     * @param int $raceHash
     * @return Race
     * @throws \Exception
     */
    public function getRace($raceHash)
    {
        $body = $this->get('Manifest/Race/' . $raceHash);

        if (!isset($body['Response'])) {
            throw new RaceNotFoundException;
        }

        $race = $body['Response']['data']['race'];

        return (new Race())
            ->setRaceHash($race['raceHash'])
            ->setRaceType($race['raceType'])
            ->setRaceName($race['raceName'])
            ->setRaceNameMale($race['raceNameMale'])
            ->setRaceNameFemale($race['raceNameFemale'])
            ->setRaceDescription($race['raceDescription'])
            ->setHash($race['hash'])
            ->setIndex($race['index']);
    }
}
