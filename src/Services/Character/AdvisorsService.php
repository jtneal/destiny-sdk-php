<?php

namespace Necowebs\Destiny\Services\Character;

use Necowebs\Destiny\Exceptions\CharacterNotFoundException;
use Necowebs\Destiny\Models\Character\Advisor;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class AdvisorsService
 * @package Necowebs\Destiny\Services\Character
 */
class AdvisorsService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $membershipId
     * @param string $characterId
     * @return Advisor
     * @throws CharacterNotFoundException
     */
    public function getAdvisors($membershipType, $membershipId, $characterId)
    {
        $body = $this->get($membershipType . '/Account/' . $membershipId . '/Character/' . $characterId . '/Advisors/V2');

        if (!isset($body['Response'])) {
            throw new CharacterNotFoundException;
        }

        return Advisor::toObject(null, $body['Response']['data']);
    }
}
