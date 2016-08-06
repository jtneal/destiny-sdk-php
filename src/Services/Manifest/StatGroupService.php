<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\StatGroup;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class StatGroupService
 * @package Necowebs\Destiny\Services\Manifest
 */
class StatGroupService extends BaseService
{
    /**
     * @param int $statGroupHash
     * @return StatGroup
     * @throws ManifestObjectNotFoundException
     */
    public function getStatGroup($statGroupHash)
    {
        $body = $this->get('Manifest/StatGroup/' . $statGroupHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return StatGroup::toObject(null, $body['Response']['data']['statGroup']);
    }
}
