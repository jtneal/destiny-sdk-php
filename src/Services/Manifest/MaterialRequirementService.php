<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\MaterialRequirement;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class MaterialRequirementService
 * @package Necowebs\Destiny\Services\Manifest
 */
class MaterialRequirementService extends BaseService
{
    /**
     * @param int $setHash
     * @return MaterialRequirement
     * @throws ManifestObjectNotFoundException
     */
    public function getMaterialRequirement($setHash)
    {
        $body = $this->get('Manifest/MaterialRequirement/' . $setHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return MaterialRequirement::toObject(null, $body['Response']['data']['materialRequirementSet']);
    }
}
