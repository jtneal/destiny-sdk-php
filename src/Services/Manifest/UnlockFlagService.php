<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\UnlockFlag;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class UnlockFlagService
 * @package Necowebs\Destiny\Services\Manifest
 */
class UnlockFlagService extends BaseService
{
    /**
     * @param int $flagHash
     * @return UnlockFlag
     * @throws ManifestObjectNotFoundException
     */
    public function getUnlockFlag($flagHash)
    {
        $body = $this->get('Manifest/UnlockFlag/' . $flagHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return UnlockFlag::toObject(null, $body['Response']['data']['unlockFlag']);
    }
}
