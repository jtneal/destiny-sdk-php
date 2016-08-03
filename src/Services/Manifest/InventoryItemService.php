<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\InventoryItem;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

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

        $mapper = (new ArrayObjectMapper(InventoryItem::class))
            ->add('itemHash')
            ->add('itemName')
            ->add('itemDescription')
            ->add('icon')
            ->add('hasIcon')
            ->add('secondaryIcon')
            ->add('actionName')
            ->add('hasAction')
            ->add('deleteOnAction')
            ->add('tierTypeName')
            ->add('tierType')
            ->add('itemTypeName')
            ->add('bucketTypeHash')
            ->add('primaryBaseStatHash')
            ->add('stats', null, MapperHelper::class . '::mapArrayToInventoryItemStats')
            ->add('perkHashes', null, MapperHelper::class . '::mapArrayToInts')
            ->add('specialItemType')
            ->add('talentGridHash')
            ->add('equippingBlock', null, MapperHelper::class . '::mapArrayToInventoryItemEquippingBlock')
            ->add('hasGeometry')
            ->add('statGroupHash')
            ->add('itemLevels', null, MapperHelper::class . '::mapArrayToInts')
            ->add('qualityLevel')
            ->add('equippable')
            ->add('instanced')
            ->add('rewardItemHash')
            ->add('values')
            ->add('itemType')
            ->add('itemSubType')
            ->add('classType')
            ->add('sources', null, MapperHelper::class . '::mapArrayToInventoryItemSources')
            ->add('itemCategoryHashes', null, MapperHelper::class . '::mapArrayToInts')
            ->add('sourceHashes', null, MapperHelper::class . '::mapArrayToInts')
            ->add('nonTransferrable')
            ->add('exclusive')
            ->add('maxStackSize')
            ->add('itemIndex')
            ->add('setItemHashes', null, MapperHelper::class . '::mapArrayToInts')
            ->add('tooltipStyle')
            ->add('questlineItemHash')
            ->add('needsFullCompletion')
            ->add('objectiveHashes', null, MapperHelper::class . '::mapArrayToInts')
            ->add('allowActions')
            ->add('questTrackingUnlockValueHash')
            ->add('bountyResetUnlockHash')
            ->add('uniquenessHash')
            ->add('showActiveNodesInTooltip')
            ->add('damageTypes', null, MapperHelper::class . '::mapArrayToInts')
            ->add('hash')
            ->add('index');

        return $mapper->map($item);
    }
}
