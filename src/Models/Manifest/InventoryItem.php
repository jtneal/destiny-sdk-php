<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class InventoryItem
 * @package Necowebs\Destiny\Models\Manifest
 */
class InventoryItem
{
    use ModelTrait;

    /**
     * @var int
     */
    private $itemHash;

    /**
     * @var string
     */
    private $itemName;

    /**
     * @var string
     */
    private $itemDescription;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var bool
     */
    private $hasIcon;

    /**
     * @var string
     */
    private $secondaryIcon;

    /**
     * @var string
     */
    private $actionName;

    /**
     * @var bool
     */
    private $hasAction;

    /**
     * @var bool
     */
    private $deleteOnAction;

    /**
     * @var string
     */
    private $tierTypeName;

    /**
     * @var int
     */
    private $tierType;

    /**
     * @var string
     */
    private $itemTypeName;

    /**
     * @var int
     */
    private $bucketTypeHash;

    /**
     * @var int
     */
    private $primaryBaseStatHash;

    /**
     * @var Collection
     */
    private $stats;

    /**
     * @var Collection
     */
    private $perkHashes;

    /**
     * @var int
     */
    private $specialItemType;

    /**
     * @var int
     */
    private $talentGridHash;

    /**
     * @var InventoryItemEquippingBlock
     */
    private $equippingBlock;

    /**
     * @var bool
     */
    private $hasGeometry;

    /**
     * @var int
     */
    private $statGroupHash;

    /**
     * @var Collection
     */
    private $itemLevels;

    /**
     * @var int
     */
    private $qualityLevel;

    /**
     * @var bool
     */
    private $equippable;

    /**
     * @var bool
     */
    private $instanced;

    /**
     * @var int
     */
    private $rewardItemHash;

    /**
     * @var array
     */
    private $values;

    /**
     * @var int
     */
    private $itemType;

    /**
     * @var int
     */
    private $itemSubType;

    /**
     * @var int
     */
    private $classType;

    /**
     * @var Collection
     */
    private $sources;

    /**
     * @var Collection
     */
    private $itemCategoryHashes;

    /**
     * @var Collection
     */
    private $sourceHashes;

    /**
     * @var bool
     */
    private $nonTransferrable;

    /**
     * @var int
     */
    private $exclusive;

    /**
     * @var int
     */
    private $maxStackSize;

    /**
     * @var int
     */
    private $itemIndex;

    /**
     * @var Collection
     */
    private $setItemHashes;

    /**
     * @var string
     */
    private $tooltipStyle;

    /**
     * @var int
     */
    private $questlineItemHash;

    /**
     * @var bool
     */
    private $needsFullCompletion;

    /**
     * @var Collection
     */
    private $objectiveHashes;

    /**
     * @var bool
     */
    private $allowActions;

    /**
     * @var int
     */
    private $questTrackingUnlockValueHash;

    /**
     * @var int
     */
    private $bountyResetUnlockHash;

    /**
     * @var int
     */
    private $uniquenessHash;

    /**
     * @var bool
     */
    private $showActiveNodesInTooltip;

    /**
     * @var Collection
     */
    private $damageTypes;

    /**
     * @var int
     */
    private $hash;

    /**
     * @var int
     */
    private $index;

    /**
     * @return int
     */
    public function getItemHash()
    {
        return $this->itemHash;
    }

    /**
     * @param int $itemHash
     * @return InventoryItem
     */
    public function setItemHash($itemHash)
    {
        $this->itemHash = (int) $itemHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * @param string $itemName
     * @return InventoryItem
     */
    public function setItemName($itemName)
    {
        $this->itemName = (string) $itemName;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemDescription()
    {
        return $this->itemDescription;
    }

    /**
     * @param string $itemDescription
     * @return InventoryItem
     */
    public function setItemDescription($itemDescription)
    {
        $this->itemDescription = (string) $itemDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     * @return InventoryItem
     */
    public function setIcon($icon)
    {
        $this->icon = (string) $icon;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasIcon()
    {
        return $this->hasIcon;
    }

    /**
     * @param bool $hasIcon
     * @return InventoryItem
     */
    public function setHasIcon($hasIcon)
    {
        $this->hasIcon = (bool) $hasIcon;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecondaryIcon()
    {
        return $this->secondaryIcon;
    }

    /**
     * @param string $secondaryIcon
     * @return InventoryItem
     */
    public function setSecondaryIcon($secondaryIcon)
    {
        $this->secondaryIcon = (string) $secondaryIcon;
        return $this;
    }

    /**
     * @return string
     */
    public function getActionName()
    {
        return $this->actionName;
    }

    /**
     * @param string $actionName
     * @return InventoryItem
     */
    public function setActionName($actionName)
    {
        $this->actionName = (string) $actionName;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasAction()
    {
        return $this->hasAction;
    }

    /**
     * @param bool $hasAction
     * @return InventoryItem
     */
    public function setHasAction($hasAction)
    {
        $this->hasAction = (bool) $hasAction;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDeleteOnAction()
    {
        return $this->deleteOnAction;
    }

    /**
     * @param bool $deleteOnAction
     * @return InventoryItem
     */
    public function setDeleteOnAction($deleteOnAction)
    {
        $this->deleteOnAction = (bool) $deleteOnAction;
        return $this;
    }

    /**
     * @return string
     */
    public function getTierTypeName()
    {
        return $this->tierTypeName;
    }

    /**
     * @param string $tierTypeName
     * @return InventoryItem
     */
    public function setTierTypeName($tierTypeName)
    {
        $this->tierTypeName = (string) $tierTypeName;
        return $this;
    }

    /**
     * @return int
     */
    public function getTierType()
    {
        return $this->tierType;
    }

    /**
     * @param int $tierType
     * @return InventoryItem
     */
    public function setTierType($tierType)
    {
        $this->tierType = (int) $tierType;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemTypeName()
    {
        return $this->itemTypeName;
    }

    /**
     * @param string $itemTypeName
     * @return InventoryItem
     */
    public function setItemTypeName($itemTypeName)
    {
        $this->itemTypeName = (string) $itemTypeName;
        return $this;
    }

    /**
     * @return int
     */
    public function getBucketTypeHash()
    {
        return $this->bucketTypeHash;
    }

    /**
     * @param int $bucketTypeHash
     * @return InventoryItem
     */
    public function setBucketTypeHash($bucketTypeHash)
    {
        $this->bucketTypeHash = (int) $bucketTypeHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrimaryBaseStatHash()
    {
        return $this->primaryBaseStatHash;
    }

    /**
     * @param int $primaryBaseStatHash
     * @return InventoryItem
     */
    public function setPrimaryBaseStatHash($primaryBaseStatHash)
    {
        $this->primaryBaseStatHash = (int) $primaryBaseStatHash;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @param Collection $stats
     * @return InventoryItem
     */
    public function setStats(Collection $stats)
    {
        $this->stats = $stats;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getPerkHashes()
    {
        return $this->perkHashes;
    }

    /**
     * @param Collection $perkHashes
     * @return InventoryItem
     */
    public function setPerkHashes(Collection $perkHashes)
    {
        $this->perkHashes = $perkHashes;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpecialItemType()
    {
        return $this->specialItemType;
    }

    /**
     * @param int $specialItemType
     * @return InventoryItem
     */
    public function setSpecialItemType($specialItemType)
    {
        $this->specialItemType = (int) $specialItemType;
        return $this;
    }

    /**
     * @return int
     */
    public function getTalentGridHash()
    {
        return $this->talentGridHash;
    }

    /**
     * @param int $talentGridHash
     * @return InventoryItem
     */
    public function setTalentGridHash($talentGridHash)
    {
        $this->talentGridHash = (int) $talentGridHash;
        return $this;
    }

    /**
     * @return InventoryItemEquippingBlock
     */
    public function getEquippingBlock()
    {
        return $this->equippingBlock;
    }

    /**
     * @param InventoryItemEquippingBlock $equippingBlock
     * @return InventoryItem
     */
    public function setEquippingBlock(InventoryItemEquippingBlock $equippingBlock)
    {
        $this->equippingBlock = $equippingBlock;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasGeometry()
    {
        return $this->hasGeometry;
    }

    /**
     * @param bool $hasGeometry
     * @return InventoryItem
     */
    public function setHasGeometry($hasGeometry)
    {
        $this->hasGeometry = (bool) $hasGeometry;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatGroupHash()
    {
        return $this->statGroupHash;
    }

    /**
     * @param int $statGroupHash
     * @return InventoryItem
     */
    public function setStatGroupHash($statGroupHash)
    {
        $this->statGroupHash = (int) $statGroupHash;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getItemLevels()
    {
        return $this->itemLevels;
    }

    /**
     * @param Collection $itemLevels
     * @return InventoryItem
     */
    public function setItemLevels(Collection $itemLevels)
    {
        $this->itemLevels = $itemLevels;
        return $this;
    }

    /**
     * @return int
     */
    public function getQualityLevel()
    {
        return $this->qualityLevel;
    }

    /**
     * @param int $qualityLevel
     * @return InventoryItem
     */
    public function setQualityLevel($qualityLevel)
    {
        $this->qualityLevel = (int) $qualityLevel;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEquippable()
    {
        return $this->equippable;
    }

    /**
     * @param bool $equippable
     * @return InventoryItem
     */
    public function setEquippable($equippable)
    {
        $this->equippable = (bool) $equippable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getInstanced()
    {
        return $this->instanced;
    }

    /**
     * @param bool $instanced
     * @return InventoryItem
     */
    public function setInstanced($instanced)
    {
        $this->instanced = (bool) $instanced;
        return $this;
    }

    /**
     * @return int
     */
    public function getRewardItemHash()
    {
        return $this->rewardItemHash;
    }

    /**
     * @param int $rewardItemHash
     * @return InventoryItem
     */
    public function setRewardItemHash($rewardItemHash)
    {
        $this->rewardItemHash = (int) $rewardItemHash;
        return $this;
    }

    /**
     * @return array
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param array $values
     * @return InventoryItem
     */
    public function setValues(array $values)
    {
        $this->values = $values;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * @param int $itemType
     * @return InventoryItem
     */
    public function setItemType($itemType)
    {
        $this->itemType = (int) $itemType;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemSubType()
    {
        return $this->itemSubType;
    }

    /**
     * @param int $itemSubType
     * @return InventoryItem
     */
    public function setItemSubType($itemSubType)
    {
        $this->itemSubType = (int) $itemSubType;
        return $this;
    }

    /**
     * @return int
     */
    public function getClassType()
    {
        return $this->classType;
    }

    /**
     * @param int $classType
     * @return InventoryItem
     */
    public function setClassType($classType)
    {
        $this->classType = (int) $classType;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * @param Collection $sources
     * @return InventoryItem
     */
    public function setSources(Collection $sources)
    {
        $this->sources = $sources;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getItemCategoryHashes()
    {
        return $this->itemCategoryHashes;
    }

    /**
     * @param Collection $itemCategoryHashes
     * @return InventoryItem
     */
    public function setItemCategoryHashes(Collection $itemCategoryHashes)
    {
        $this->itemCategoryHashes = $itemCategoryHashes;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getSourceHashes()
    {
        return $this->sourceHashes;
    }

    /**
     * @param Collection $sourceHashes
     * @return InventoryItem
     */
    public function setSourceHashes(Collection $sourceHashes)
    {
        $this->sourceHashes = $sourceHashes;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNonTransferrable()
    {
        return $this->nonTransferrable;
    }

    /**
     * @param bool $nonTransferrable
     * @return InventoryItem
     */
    public function setNonTransferrable($nonTransferrable)
    {
        $this->nonTransferrable = (bool) $nonTransferrable;
        return $this;
    }

    /**
     * @return int
     */
    public function getExclusive()
    {
        return $this->exclusive;
    }

    /**
     * @param int $exclusive
     * @return InventoryItem
     */
    public function setExclusive($exclusive)
    {
        $this->exclusive = (int) $exclusive;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxStackSize()
    {
        return $this->maxStackSize;
    }

    /**
     * @param int $maxStackSize
     * @return InventoryItem
     */
    public function setMaxStackSize($maxStackSize)
    {
        $this->maxStackSize = (int) $maxStackSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemIndex()
    {
        return $this->itemIndex;
    }

    /**
     * @param int $itemIndex
     * @return InventoryItem
     */
    public function setItemIndex($itemIndex)
    {
        $this->itemIndex = (int) $itemIndex;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getSetItemHashes()
    {
        return $this->setItemHashes;
    }

    /**
     * @param Collection $setItemHashes
     * @return InventoryItem
     */
    public function setSetItemHashes(Collection $setItemHashes)
    {
        $this->setItemHashes = $setItemHashes;
        return $this;
    }

    /**
     * @return string
     */
    public function getTooltipStyle()
    {
        return $this->tooltipStyle;
    }

    /**
     * @param string $tooltipStyle
     * @return InventoryItem
     */
    public function setTooltipStyle($tooltipStyle)
    {
        $this->tooltipStyle = (string) $tooltipStyle;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuestlineItemHash()
    {
        return $this->questlineItemHash;
    }

    /**
     * @param int $questlineItemHash
     * @return InventoryItem
     */
    public function setQuestlineItemHash($questlineItemHash)
    {
        $this->questlineItemHash = (int) $questlineItemHash;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedsFullCompletion()
    {
        return $this->needsFullCompletion;
    }

    /**
     * @param bool $needsFullCompletion
     * @return InventoryItem
     */
    public function setNeedsFullCompletion($needsFullCompletion)
    {
        $this->needsFullCompletion = (bool) $needsFullCompletion;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getObjectiveHashes()
    {
        return $this->objectiveHashes;
    }

    /**
     * @param Collection $objectiveHashes
     * @return InventoryItem
     */
    public function setObjectiveHashes(Collection $objectiveHashes)
    {
        $this->objectiveHashes = $objectiveHashes;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowActions()
    {
        return $this->allowActions;
    }

    /**
     * @param bool $allowActions
     * @return InventoryItem
     */
    public function setAllowActions($allowActions)
    {
        $this->allowActions = (bool) $allowActions;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuestTrackingUnlockValueHash()
    {
        return $this->questTrackingUnlockValueHash;
    }

    /**
     * @param int $questTrackingUnlockValueHash
     * @return InventoryItem
     */
    public function setQuestTrackingUnlockValueHash($questTrackingUnlockValueHash)
    {
        $this->questTrackingUnlockValueHash = (int) $questTrackingUnlockValueHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getBountyResetUnlockHash()
    {
        return $this->bountyResetUnlockHash;
    }

    /**
     * @param int $bountyResetUnlockHash
     * @return InventoryItem
     */
    public function setBountyResetUnlockHash($bountyResetUnlockHash)
    {
        $this->bountyResetUnlockHash = (int) $bountyResetUnlockHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getUniquenessHash()
    {
        return $this->uniquenessHash;
    }

    /**
     * @param int $uniquenessHash
     * @return InventoryItem
     */
    public function setUniquenessHash($uniquenessHash)
    {
        $this->uniquenessHash = (int) $uniquenessHash;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowActiveNodesInTooltip()
    {
        return $this->showActiveNodesInTooltip;
    }

    /**
     * @param bool $showActiveNodesInTooltip
     * @return InventoryItem
     */
    public function setShowActiveNodesInTooltip($showActiveNodesInTooltip)
    {
        $this->showActiveNodesInTooltip = (bool) $showActiveNodesInTooltip;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getDamageTypes()
    {
        return $this->damageTypes;
    }

    /**
     * @param Collection $damageTypes
     * @return InventoryItem
     */
    public function setDamageTypes(Collection $damageTypes)
    {
        $this->damageTypes = $damageTypes;
        return $this;
    }

    /**
     * @return int
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param int $hash
     * @return InventoryItem
     */
    public function setHash($hash)
    {
        $this->hash = (int) $hash;
        return $this;
    }

    /**
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param int $index
     * @return InventoryItem
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return InventoryItem
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
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
            ->add('stats', null, InventoryItemStat::class . '::toCollection')
            ->add('perkHashes', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('specialItemType')
            ->add('talentGridHash')
            ->add('equippingBlock', null, InventoryItemEquippingBlock::class . '::toObject')
            ->add('hasGeometry')
            ->add('statGroupHash')
            ->add('itemLevels', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('qualityLevel')
            ->add('equippable')
            ->add('instanced')
            ->add('rewardItemHash')
            ->add('values')
            ->add('itemType')
            ->add('itemSubType')
            ->add('classType')
            ->add('sources', null, InventoryItemSource::class . '::toCollection')
            ->add('itemCategoryHashes', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('sourceHashes', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('nonTransferrable')
            ->add('exclusive')
            ->add('maxStackSize')
            ->add('itemIndex')
            ->add('setItemHashes', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('tooltipStyle')
            ->add('questlineItemHash')
            ->add('needsFullCompletion')
            ->add('objectiveHashes', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('allowActions')
            ->add('questTrackingUnlockValueHash')
            ->add('bountyResetUnlockHash')
            ->add('uniquenessHash')
            ->add('showActiveNodesInTooltip')
            ->add('damageTypes', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('hash')
            ->add('index');
        return $mapper->map($val);
    }
}
