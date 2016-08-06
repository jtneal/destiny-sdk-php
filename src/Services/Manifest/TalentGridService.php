<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\TalentGrid;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class TalentGridService
 * @package Necowebs\Destiny\Services\Manifest
 */
class TalentGridService extends BaseService
{
    /**
     * @param int $gridHash
     * @return TalentGrid
     * @throws ManifestObjectNotFoundException
     */
    public function getTalentGrid($gridHash)
    {
        $body = $this->get('Manifest/TalentGrid/' . $gridHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return TalentGrid::toObject(null, $body['Response']['data']['talentGrid']);
    }
}
