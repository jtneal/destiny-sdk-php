<?php

namespace Necowebs\Destiny\Services\Vanguard;

use Necowebs\Destiny\Exceptions\VanguardNotFoundException;
use Necowebs\Destiny\Models\Vanguard\Grimoire;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class GrimoireByMembershipService
 * @package Necowebs\Destiny\Services\Vanguard
 */
class GrimoireByMembershipService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $membershipId
     * @return Grimoire
     * @throws VanguardNotFoundException
     */
    public function getGrimoireByMembership($membershipType, $membershipId)
    {
        $body = $this->get('Vanguard/Grimoire/' . $membershipType . '/' . $membershipId);

        if (!isset($body['Response'])) {
            throw new VanguardNotFoundException;
        }

        return Grimoire::toObject(null, $body['Response']['data']);
    }
}
