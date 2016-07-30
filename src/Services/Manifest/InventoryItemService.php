<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\InventoryItemNotFoundException;
use Necowebs\Destiny\Models\Manifest\InventoryItem;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class InventoryItemService
 * @package Necowebs\Destiny\Services\Manifest
 */
class InventoryItemService extends BaseService
{
    /**
     * @param int $itemHash
     * @return InventoryItem
     * @throws InventoryItemNotFoundException
     */
    public function getItem($itemHash)
    {
        $body = $this->get('Manifest/InventoryItem/' . $itemHash);

        if (!isset($body['Response'])) {
            throw new InventoryItemNotFoundException;
        }

        $item = $body['Response']['data']['inventoryItem'];

        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\InventoryItem'))
            ->add('itemHash')
            ->add('itemName')
            ->add('itemDescription')
            ->add('icon')
            ->add('hasIcon')
            ->add('secondaryIcon')
            ->add('tierTypeName')
            ->add('tierType')
            ->add('itemTypeName')
            ->add('bucketTypeHash', 'setBucket', function ($obj, $val) {
                return (new InventoryBucketService())->getBucket($val);
            });

        return $mapper->map($item);
    }
}
