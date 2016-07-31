<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\ActivityBundle;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

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

        $bundle = $body['Response']['data']['activityBundle'];

        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\ActivityBundle'))
            ->add('bundleHash')
            ->add('activityName')
            ->add('activityDescription')
            ->add('icon')
            ->add('releaseIcon')
            ->add('releaseTime')
            ->add('destinationHash')
            ->add('placeHash')
            ->add('activityTypeHash')
            ->add('activityHashes', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToInts')
            ->add('hash')
            ->add('index');

        return $mapper->map($bundle);
    }
}
