<?php

namespace Necowebs\Destiny\Services;

use Necowebs\Destiny\Exceptions\DestinyPlayerNotFoundException;
use Necowebs\Destiny\Models\DestinyPlayer;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class DestinyPlayerService
 * @package Necowebs\Destiny\Services
 */
class DestinyPlayerService extends BaseService
{
    /**
     * @param string $displayName
     * @param string $membershipType
     * @return DestinyPlayer
     * @throws DestinyPlayerNotFoundException
     */
    public function search($displayName, $membershipType = 'All')
    {
        $body = $this->get('SearchDestinyPlayer/' . $membershipType . '/' . $displayName);

        if (!isset($body['Response'][0])) {
            throw new DestinyPlayerNotFoundException;
        }

        $player = $body['Response'][0];

        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\DestinyPlayer'))
            ->add('iconPath')
            ->add('membershipType')
            ->add('membershipId')
            ->add('displayName');

        return $mapper->map($player);
    }
}
