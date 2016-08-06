<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
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
     * @throws ManifestObjectNotFoundException
     */
    public function getRace($raceHash)
    {
        $body = $this->get('Manifest/Race/' . $raceHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return Race::toObject(null, $body['Response']['data']['race']);
    }
}
