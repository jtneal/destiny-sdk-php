<?php

namespace Necowebs\Destiny\Models\Character;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class AdvisorActivityExtendedOrderItem
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityExtendedOrderItem
{
    use ModelTrait;

    /**
     * @var int
     */
    private $itemHash;

    /**
     * @var int
     */
    private $bindStatus;

    /**
     * @var bool
     */
    private $isEquipped;

    /**
     * @var string
     */
    private $itemInstanceId;

    /**
     * @var int
     */
    private $itemLevel;

    /**
     * @var int
     */
    private $stackSize;

    /**
     * @var int
     */
    private $qualityLevel;

    /**
     * @var array
     */
    private $stats;

    /**
     * @var bool
     */
    private $canEquip;

    /**
     * @var int
     */
    private $equipRequiredLevel;

    /**
     * @var int
     */
    private $unlockFlagHashRequiredToEquip;

    /**
     * @var int
     */
    private $cannotEquipReason;

    /**
     * @var int
     */
    private $damageType;

    /**
     * @var int
     */
    private $damageTypeHash;

    /**
     * @var int
     */
    private $damageTypeNodeIndex;

    /**
     * @var int
     */
    private $damageTypeStepIndex;

    /**
     * @var int
     */
    private $talentGridHash;

    /**
     * @var array
     */
    private $nodes;

    /**
     * @var bool
     */
    private $useCustomDyes;

    /**
     * @var array
     */
    private $artRegions;

    /**
     * @var bool
     */
    private $isEquipment;

    /**
     * @var bool
     */
    private $isGridComplete;

    /**
     * @var array
     */
    private $perks;

    /**
     * @var int
     */
    private $location;

    /**
     * @var int
     */
    private $transferStatus;

    /**
     * @var bool
     */
    private $locked;

    /**
     * @var bool
     */
    private $lockable;

    /**
     * @var array
     */
    private $objectives;

    /**
     * @var int
     */
    private $state;

    /**
     * @return int
     */
    public function getItemHash()
    {
        return $this->itemHash;
    }

    /**
     * @param int $itemHash
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setItemHash($itemHash)
    {
        $this->itemHash = (int) $itemHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getBindStatus()
    {
        return $this->bindStatus;
    }

    /**
     * @param int $bindStatus
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setBindStatus($bindStatus)
    {
        $this->bindStatus = (int) $bindStatus;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsEquipped()
    {
        return $this->isEquipped;
    }

    /**
     * @param bool $isEquipped
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setIsEquipped($isEquipped)
    {
        $this->isEquipped = (bool) $isEquipped;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemInstanceId()
    {
        return $this->itemInstanceId;
    }

    /**
     * @param string $itemInstanceId
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setItemInstanceId($itemInstanceId)
    {
        $this->itemInstanceId = (string) $itemInstanceId;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemLevel()
    {
        return $this->itemLevel;
    }

    /**
     * @param int $itemLevel
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setItemLevel($itemLevel)
    {
        $this->itemLevel = (int) $itemLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getStackSize()
    {
        return $this->stackSize;
    }

    /**
     * @param int $stackSize
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setStackSize($stackSize)
    {
        $this->stackSize = (int) $stackSize;
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
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setQualityLevel($qualityLevel)
    {
        $this->qualityLevel = (int) $qualityLevel;
        return $this;
    }

    /**
     * @return array
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @param array $stats
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setStats(array $stats)
    {
        $this->stats = $stats;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCanEquip()
    {
        return $this->canEquip;
    }

    /**
     * @param bool $canEquip
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setCanEquip($canEquip)
    {
        $this->canEquip = (bool) $canEquip;
        return $this;
    }

    /**
     * @return int
     */
    public function getEquipRequiredLevel()
    {
        return $this->equipRequiredLevel;
    }

    /**
     * @param int $equipRequiredLevel
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setEquipRequiredLevel($equipRequiredLevel)
    {
        $this->equipRequiredLevel = (int) $equipRequiredLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnlockFlagHashRequiredToEquip()
    {
        return $this->unlockFlagHashRequiredToEquip;
    }

    /**
     * @param int $unlockFlagHashRequiredToEquip
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setUnlockFlagHashRequiredToEquip($unlockFlagHashRequiredToEquip)
    {
        $this->unlockFlagHashRequiredToEquip = (int) $unlockFlagHashRequiredToEquip;
        return $this;
    }

    /**
     * @return int
     */
    public function getCannotEquipReason()
    {
        return $this->cannotEquipReason;
    }

    /**
     * @param int $cannotEquipReason
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setCannotEquipReason($cannotEquipReason)
    {
        $this->cannotEquipReason = (int) $cannotEquipReason;
        return $this;
    }

    /**
     * @return int
     */
    public function getDamageType()
    {
        return $this->damageType;
    }

    /**
     * @param int $damageType
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setDamageType($damageType)
    {
        $this->damageType = (int) $damageType;
        return $this;
    }

    /**
     * @return int
     */
    public function getDamageTypeHash()
    {
        return $this->damageTypeHash;
    }

    /**
     * @param int $damageTypeHash
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setDamageTypeHash($damageTypeHash)
    {
        $this->damageTypeHash = (int) $damageTypeHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getDamageTypeNodeIndex()
    {
        return $this->damageTypeNodeIndex;
    }

    /**
     * @param int $damageTypeNodeIndex
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setDamageTypeNodeIndex($damageTypeNodeIndex)
    {
        $this->damageTypeNodeIndex = (int) $damageTypeNodeIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getDamageTypeStepIndex()
    {
        return $this->damageTypeStepIndex;
    }

    /**
     * @param int $damageTypeStepIndex
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setDamageTypeStepIndex($damageTypeStepIndex)
    {
        $this->damageTypeStepIndex = (int) $damageTypeStepIndex;
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
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setTalentGridHash($talentGridHash)
    {
        $this->talentGridHash = (int) $talentGridHash;
        return $this;
    }

    /**
     * @return array
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * @param array $nodes
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setNodes(array $nodes)
    {
        $this->nodes = $nodes;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUseCustomDyes()
    {
        return $this->useCustomDyes;
    }

    /**
     * @param bool $useCustomDyes
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setUseCustomDyes($useCustomDyes)
    {
        $this->useCustomDyes = (bool) $useCustomDyes;
        return $this;
    }

    /**
     * @return array
     */
    public function getArtRegions()
    {
        return $this->artRegions;
    }

    /**
     * @param array $artRegions
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setArtRegions(array $artRegions)
    {
        $this->artRegions = $artRegions;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsEquipment()
    {
        return $this->isEquipment;
    }

    /**
     * @param bool $isEquipment
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setIsEquipment($isEquipment)
    {
        $this->isEquipment = (bool) $isEquipment;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsGridComplete()
    {
        return $this->isGridComplete;
    }

    /**
     * @param bool $isGridComplete
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setIsGridComplete($isGridComplete)
    {
        $this->isGridComplete = (bool) $isGridComplete;
        return $this;
    }

    /**
     * @return array
     */
    public function getPerks()
    {
        return $this->perks;
    }

    /**
     * @param array $perks
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setPerks(array $perks)
    {
        $this->perks = $perks;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param int $location
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setLocation($location)
    {
        $this->location = (int) $location;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransferStatus()
    {
        return $this->transferStatus;
    }

    /**
     * @param int $transferStatus
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setTransferStatus($transferStatus)
    {
        $this->transferStatus = (int) $transferStatus;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * @param bool $locked
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setLocked($locked)
    {
        $this->locked = (bool) $locked;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLockable()
    {
        return $this->lockable;
    }

    /**
     * @param bool $lockable
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setLockable($lockable)
    {
        $this->lockable = (bool) $lockable;
        return $this;
    }

    /**
     * @return array
     */
    public function getObjectives()
    {
        return $this->objectives;
    }

    /**
     * @param array $objectives
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setObjectives(array $objectives)
    {
        $this->objectives = $objectives;
        return $this;
    }

    /**
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param int $state
     * @return AdvisorActivityExtendedOrderItem
     */
    public function setState($state)
    {
        $this->state = (int) $state;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorActivityExtendedOrderItem
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('itemHash')
            ->add('bindStatus')
            ->add('isEquipped')
            ->add('itemInstanceId')
            ->add('itemLevel')
            ->add('stackSize')
            ->add('qualityLevel')
            ->add('stats')
            ->add('canEquip')
            ->add('equipRequiredLevel')
            ->add('unlockFlagHashRequiredToEquip')
            ->add('cannotEquipReason')
            ->add('damageType')
            ->add('damageTypeHash')
            ->add('damageTypeNodeIndex')
            ->add('damageTypeStepIndex')
            ->add('talentGridHash')
            ->add('nodes')
            ->add('useCustomDyes')
            ->add('artRegions')
            ->add('isEquipment')
            ->add('isGridComplete')
            ->add('perks')
            ->add('location')
            ->add('transferStatus')
            ->add('locked')
            ->add('lockable')
            ->add('objectives')
            ->add('state');
        return $mapper->map($val);
    }
}
