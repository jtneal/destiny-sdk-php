<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\Progression;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class ProgressionService
 * @package Necowebs\Destiny\Services\Manifest
 */
class ProgressionService extends BaseService
{
    /**
     * @param int $progressionHash
     * @return Progression
     * @throws ManifestObjectNotFoundException
     */
    public function getProgression($progressionHash)
    {
        $body = $this->get('Manifest/Progression/' . $progressionHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return Progression::toObject(null, $body['Response']['data']['progression']);
    }
}
