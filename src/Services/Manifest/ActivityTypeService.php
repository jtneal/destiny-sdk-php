<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\ActivityType;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

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

        $activityType = $body['Response']['data']['activityType'];

        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\ActivityType'))
            ->add('activityTypeHash')
            ->add('identifier')
            ->add('activityTypeName')
            ->add('activityTypeDescription')
            ->add('icon')
            ->add('activeBackgroundVirtualPath')
            ->add('completedBackgroundVirtualPath')
            ->add('hiddenOverrideVirtualPath')
            ->add('tooltipBackgroundVirtualPath')
            ->add('enlargedActiveBackgroundVirtualPath')
            ->add('enlargedCompletedBackgroundVirtualPath')
            ->add('enlargedHiddenOverrideVirtualPath')
            ->add('enlargedTooltipBackgroundVirtualPath')
            ->add('order')
            ->add('statGroup')
            ->add('friendlyUrlId')
            ->add('hash')
            ->add('index');

        return $mapper->map($activityType);
    }
}
