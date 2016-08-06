<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\Stat;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class StatService
 * @package Necowebs\Destiny\Services\Manifest
 */
class StatService extends BaseService
{
    /**
     * @param int $statHash
     * @return Stat
     * @throws ManifestObjectNotFoundException
     */
    public function getStat($statHash)
    {
        $body = $this->get('Manifest/Stat/' . $statHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return Stat::toObject(null, $body['Response']['data']['stat']);
    }
}
