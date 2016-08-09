<?php

namespace Necowebs\Destiny\Services\Character;

use Necowebs\Destiny\Exceptions\CharacterNotFoundException;
use Necowebs\Destiny\Models\Account\SummaryCharacter;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class CharacterSummaryService
 * @package Necowebs\Destiny\Services\Character
 */
class CharacterSummaryService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $membershipId
     * @param string $characterId
     * @return SummaryCharacter
     * @throws CharacterNotFoundException
     */
    public function getCharacterSummary($membershipType, $membershipId, $characterId)
    {
        $body = $this->get($membershipType . '/Account/' . $membershipId . '/Character/' . $characterId);

        if (!isset($body['Response'])) {
            throw new CharacterNotFoundException;
        }

        return SummaryCharacter::toObject(null, $body['Response']['data']);
    }
}
