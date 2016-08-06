<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\InventoryItem;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class InventoryItemService
 * @package Necowebs\Destiny\Services\Manifest
 */
class InventoryItemService extends BaseService
{
    /**
     * @param int $itemHash
     * @return InventoryItem
     * @throws ManifestObjectNotFoundException
     */
    public function getItem($itemHash)
    {
        $body = $this->get('Manifest/InventoryItem/' . $itemHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return InventoryItem::toObject(null, $body['Response']['data']['inventoryItem']);
    }
}
