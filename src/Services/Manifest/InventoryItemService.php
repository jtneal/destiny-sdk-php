<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
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
     * @throws ManifestObjectNotFoundException
     */
    public function getItem($itemHash)
    {
        $body = $this->get('Manifest/InventoryItem/' . $itemHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
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
            ->add('bucketTypeHash');

        return $mapper->map($item);
    }
}
