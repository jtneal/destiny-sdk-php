<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\SandboxPerk;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class SandboxPerkService
 * @package Necowebs\Destiny\Services\Manifest
 */
class SandboxPerkService extends BaseService
{
    /**
     * @param int $perkHash
     * @return SandboxPerk
     * @throws ManifestObjectNotFoundException
     */
    public function getSandboxPerk($perkHash)
    {
        $body = $this->get('Manifest/SandboxPerk/' . $perkHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return SandboxPerk::toObject(null, $body['Response']['data']['sandboxPerk']);
    }
}
