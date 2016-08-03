<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\StatGroup;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class StatGroupService
 * @package Necowebs\Destiny\Services\Manifest
 */
class StatGroupService extends BaseService
{
    /**
     * @param int $statGroupHash
     * @return StatGroup
     * @throws ManifestObjectNotFoundException
     */
    public function getStatGroup($statGroupHash)
    {
        $body = $this->get('Manifest/StatGroup/' . $statGroupHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        $group = $body['Response']['data']['stat'];

        $mapper = (new ArrayObjectMapper(StatGroup::class))
            ->add('statGroupHash')
            ->add('maximumValue')
            ->add('uiPosition')
            ->add('scaledStats', null, MapperHelper::class . '::mapArrayToStatGroupScaledStats')
            ->add('overrides', null, MapperHelper::class . '::mapArrayToStatGroupOverrides')
            ->add('hash')
            ->add('index');

        return $mapper->map($group);
    }
}
