<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\ActivityBundle;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class ActivityBundleService
 * @package Necowebs\Destiny\Services\Manifest
 */
class ActivityBundleService extends BaseService
{
    /**
     * @param int $bundleHash
     * @return ActivityBundle
     * @throws ManifestObjectNotFoundException
     */
    public function getActivityBundle($bundleHash)
    {
        $body = $this->get('Manifest/ActivityBundle/' . $bundleHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return ActivityBundle::toObject(null, $body['Response']['data']['activityBundle']);
    }
}
