<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\Activity;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class ActivityService
 * @package Necowebs\Destiny\Services\Manifest
 */
class ActivityService extends BaseService
{
    /**
     * @param int $activityHash
     * @return Activity
     * @throws ManifestObjectNotFoundException
     */
    public function getActivity($activityHash)
    {
        $body = $this->get('Manifest/Activity/' . $activityHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return Activity::toObject(null, $body['Response']['data']['activity']);
    }
}
