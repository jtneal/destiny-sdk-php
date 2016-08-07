<?php

namespace Necowebs\Destiny\Services\Vanguard;

use Necowebs\Destiny\Exceptions\VanguardNotFoundException;
use Necowebs\Destiny\Models\Vanguard\Grimoire;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class GrimoireService
 * @package Necowebs\Destiny\Services\Vanguard
 */
class GrimoireService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $membershipId
     * @return Grimoire
     * @throws VanguardNotFoundException
     */
    public function getGrimoire($membershipType, $membershipId)
    {
        $body = $this->get('Vanguard/Grimoire/' . $membershipType . '/' . $membershipId);

        if (!isset($body['Response'])) {
            throw new VanguardNotFoundException;
        }

        return Grimoire::toObject(null, $body['Response']['data']);
    }
}
