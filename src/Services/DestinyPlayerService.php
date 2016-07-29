<?php

namespace Necowebs\Destiny\Services;

use GuzzleHttp\Client;
use Necowebs\Destiny\Models\DestinyPlayer;

class DestinyPlayerService extends BaseService
{
    /**
     * @param string $displayName
     * @param string $membershipType
     * @return DestinyPlayer
     * @throws \Exception
     */
    public function search($displayName, $membershipType = 'All')
    {
        $body = $this->get('SearchDestinyPlayer/' . $membershipType . '/' . $displayName);

        if (!isset($body['Response'][0])) {
            throw new \Exception('Player not found.');
        }

        $player = $body['Response'][0];

        return (new DestinyPlayer())
            ->setIconPath($player['iconPath'])
            ->setMembershipType($player['membershipType'])
            ->setMembershipId($player['membershipId'])
            ->setDisplayName($player['displayName']);
    }
}
