<?php

namespace Necowebs\Destiny\Services\Character;

use Necowebs\Destiny\Exceptions\CharacterNotFoundException;
use Necowebs\Destiny\Models\Character\Activities;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class CharacterActivitiesService
 * @package Necowebs\Destiny\Services\Character
 */
class CharacterActivitiesService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $membershipId
     * @param string $characterId
     * @return Activities
     * @throws CharacterNotFoundException
     */
    public function getCharacterActivities($membershipType, $membershipId, $characterId)
    {
        $body = $this->get($membershipType . '/Account/' . $membershipId . '/Character/' . $characterId . '/Activities');

        if (!isset($body['Response'])) {
            throw new CharacterNotFoundException;
        }

        return Activities::toObject(null, $body['Response']['data']);
    }
}
