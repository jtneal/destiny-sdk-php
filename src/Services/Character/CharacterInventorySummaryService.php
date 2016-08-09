<?php

namespace Necowebs\Destiny\Services\Character;

use Necowebs\Destiny\Exceptions\CharacterNotFoundException;
use Necowebs\Destiny\Models\Character\InventorySummary;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class CharacterInventorySummaryService
 * @package Necowebs\Destiny\Services\Character
 */
class CharacterInventorySummaryService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $membershipId
     * @param string $characterId
     * @return InventorySummary
     * @throws CharacterNotFoundException
     */
    public function getCharacterInventorySummary($membershipType, $membershipId, $characterId)
    {
        $body = $this->get($membershipType . '/Account/' . $membershipId . '/Character/' . $characterId . '/Inventory/Summary');

        if (!isset($body['Response'])) {
            throw new CharacterNotFoundException;
        }

        return InventorySummary::toObject(null, $body['Response']['data']);
    }
}
