<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\ActivityType;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class ActivityTypeService
 * @package Necowebs\Destiny\Services\Manifest
 */
class ActivityTypeService extends BaseService
{
    /**
     * @param int $activityTypeHash
     * @return ActivityType
     * @throws ManifestObjectNotFoundException
     */
    public function getActivityType($activityTypeHash)
    {
        $body = $this->get('Manifest/ActivityType/' . $activityTypeHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return ActivityType::toObject(null, $body['Response']['data']['activityType']);
    }
}
