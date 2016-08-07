<?php

namespace Necowebs\Destiny\Services\Character;

use Necowebs\Destiny\Exceptions\CharacterNotFoundException;
use Necowebs\Destiny\Models\Character\ItemReference;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class ItemReferenceService
 * @package Necowebs\Destiny\Services\Character
 */
class ItemReferenceService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $membershipId
     * @param string $characterId
     * @param int $itemHash
     * @return ItemReference
     * @throws CharacterNotFoundException
     */
    public function getItemReference($membershipType, $membershipId, $characterId, $itemHash)
    {
        $endpoint = '%s/Account/%s/Character/%s/ItemReference/%s';
        $body = $this->get(sprintf($endpoint, $membershipType, $membershipId, $characterId, $itemHash));

        if (!isset($body['Response'])) {
            throw new CharacterNotFoundException;
        }

        return ItemReference::toObject(null, $body['Response']['data']);
    }
}
