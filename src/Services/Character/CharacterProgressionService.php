<?php

namespace Necowebs\Destiny\Services\Character;

use Necowebs\Destiny\Exceptions\CharacterNotFoundException;
use Necowebs\Destiny\Models\Character\Progression;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class CharacterProgressionService
 * @package Necowebs\Destiny\Services\Character
 */
class CharacterProgressionService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $membershipId
     * @param string $characterId
     * @return Progression
     * @throws CharacterNotFoundException
     */
    public function getCharacterProgression($membershipType, $membershipId, $characterId)
    {
        $body = $this->get($membershipType . '/Account/' . $membershipId . '/Character/' . $characterId . '/Progression');

        if (!isset($body['Response'])) {
            throw new CharacterNotFoundException;
        }

        return Progression::toObject(null, $body['Response']['data']);
    }
}
