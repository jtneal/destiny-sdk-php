<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\InventoryItemNotFoundException;
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
     * @throws \Exception
     */
    public function getItem($itemHash)
    {
        $body = $this->get('Manifest/InventoryItem/' . $itemHash);

        if (!isset($body['Response'])) {
            throw new InventoryItemNotFoundException;
        }

        $item = $body['Response']['data']['inventoryItem'];

        return (new InventoryItem())
            ->setItemHash($item['itemHash'])
            ->setItemName($item['itemName'])
            ->setItemDescription($item['itemDescription'])
            ->setIcon($item['icon'])
            ->setHasIcon($item['hasIcon'])
            ->setSecondaryIcon($item['secondaryIcon'])
            ->setTierTypeName($item['tierTypeName'])
            ->setTierType($item['tierType'])
            ->setItemTypeName($item['itemTypeName'])
            ->setBucket((new InventoryBucketService())->getBucket($item['bucketTypeHash']));
    }
}
