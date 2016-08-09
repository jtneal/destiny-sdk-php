<?php

namespace Necowebs\Destiny\Services\Character;

use Necowebs\Destiny\Exceptions\CharacterNotFoundException;
use Necowebs\Destiny\Models\Character\InventoryItem;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class ItemDetailService
 * @package Necowebs\Destiny\Services\Character
 */
class ItemDetailService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $membershipId
     * @param string $characterId
     * @param string $itemId
     * @return InventoryItem
     * @throws CharacterNotFoundException
     */
    public function getItemDetail($membershipType, $membershipId, $characterId, $itemId)
    {
        $body = $this->get($membershipType . '/Account/' . $membershipId . '/Character/' . $characterId . '/Inventory/' . $itemId);

        if (!isset($body['Response'])) {
            throw new CharacterNotFoundException;
        }

        return InventoryItem::toObject(null, $body['Response']['data']);
    }
}
