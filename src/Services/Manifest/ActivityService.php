<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\Activity;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

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

        $activity = $body['Response']['data']['activity'];

        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\Activity'))
            ->add('activityHash')
            ->add('activityName')
            ->add('activityDescription')
            ->add('icon')
            ->add('releaseIcon')
            ->add('releaseTime')
            ->add('activityLevel')
            ->add('completionFlagHash')
            ->add('activityPower')
            ->add('minParty')
            ->add('maxParty')
            ->add('maxPlayers')
            ->add('destinationHash')
            ->add('placeHash')
            ->add('activityTypeHash')
            ->add('tier')
            ->add('pgcrImage')
            ->add('rewards', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToRewards')
            ->add('skulls', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToSkulls')
            ->add('isPlaylist')
            ->add('isMatchmade')
            ->add('hash')
            ->add('index');

        return $mapper->map($activity);
    }
}
