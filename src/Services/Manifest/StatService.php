<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\Stat;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

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

        $stat = $body['Response']['data']['stat'];

        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\Stat'))
            ->add('statHash')
            ->add('statName')
            ->add('statDescription')
            ->add('icon')
            ->add('statIdentifier')
            ->add('interpolate')
            ->add('hash')
            ->add('index');

        return $mapper->map($stat);
    }
}
