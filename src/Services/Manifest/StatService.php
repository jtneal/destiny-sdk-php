<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\StatNotFoundException;
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
     * @throws \Exception
     */
    public function getStat($statHash)
    {
        $body = $this->get('Manifest/Stat/' . $statHash);

        if (!isset($body['Response'])) {
            throw new StatNotFoundException;
        }

        $stat = $body['Response']['data']['stat'];

        return (new Stat())
            ->setStatHash($stat['statHash'])
            ->setStatName($stat['statName'])
            ->setStatDescription($stat['statDescription'])
            ->setIcon($stat['icon'])
            ->setStatIdentifier($stat['statIdentifier'])
            ->setInterpolate($stat['interpolate'])
            ->setHash($stat['hash'])
            ->setIndex($stat['index']);
    }
}
