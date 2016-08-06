<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class VendorSummary
 * @package Necowebs\Destiny\Models\Manifest
 */
class VendorSummary
{
    use ModelTrait;

    /**
     * @var int
     */
    private $vendorHash;

    /**
     * @var string
     */
    private $vendorName;

    /**
     * @var string
     */
    private $vendorDescription;

    /**
     * @var string
     */
    private $vendorIcon;

    /**
     * @var int
     */
    private $vendorOrder;

    /**
     * @var string
     */
    private $factionName;

    /**
     * @var string
     */
    private $factionIcon;

    /**
     * @var int
     */
    private $factionHash;

    /**
     * @var string
     */
    private $factionDescription;

    /**
     * @var int
     */
    private $resetIntervalMinutes;

    /**
     * @var int
     */
    private $resetOffsetMinutes;

    /**
     * @var string
     */
    private $vendorIdentifier;

    /**
     * @var int
     */
    private $positionX;

    /**
     * @var int
     */
    private $positionY;

    /**
     * @var string
     */
    private $transitionNodeIdentifier;

    /**
     * @var bool
     */
    private $visible;

    /**
     * @var int
     */
    private $progressionHash;

    /**
     * @var string
     */
    private $sellString;

    /**
     * @var string
     */
    private $buyString;

    /**
     * @var string
     */
    private $vendorPortrait;

    /**
     * @var string
     */
    private $vendorBanner;

    /**
     * @var Collection
     */
    private $unlockFlagHashes;

    /**
     * @var Collection
     */
    private $enabledUnlockFlagHashes;

    /**
     * @var string
     */
    private $mapSectionIdentifier;

    /**
     * @var string
     */
    private $mapSectionName;

    /**
     * @var int
     */
    private $mapSectionOrder;

    /**
     * @var bool
     */
    private $showOnMap;

    /**
     * @var int
     */
    private $eventHash;

    /**
     * @var int
     */
    private $vendorCategoryHash;

    /**
     * @var Collection
     */
    private $vendorCategoryHashes;

    /**
     * @var int
     */
    private $vendorSubcategoryHash;

    /**
     * @var bool
     */
    private $inhibitBuying;

    /**
     * @return int
     */
    public function getVendorHash()
    {
        return $this->vendorHash;
    }

    /**
     * @param int $vendorHash
     * @return VendorSummary
     */
    public function setVendorHash($vendorHash)
    {
        $this->vendorHash = (int) $vendorHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorName()
    {
        return $this->vendorName;
    }

    /**
     * @param string $vendorName
     * @return VendorSummary
     */
    public function setVendorName($vendorName)
    {
        $this->vendorName = (string) $vendorName;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorDescription()
    {
        return $this->vendorDescription;
    }

    /**
     * @param string $vendorDescription
     * @return VendorSummary
     */
    public function setVendorDescription($vendorDescription)
    {
        $this->vendorDescription = (string) $vendorDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorIcon()
    {
        return $this->vendorIcon;
    }

    /**
     * @param string $vendorIcon
     * @return VendorSummary
     */
    public function setVendorIcon($vendorIcon)
    {
        $this->vendorIcon = (string) $vendorIcon;
        return $this;
    }

    /**
     * @return int
     */
    public function getVendorOrder()
    {
        return $this->vendorOrder;
    }

    /**
     * @param int $vendorOrder
     * @return VendorSummary
     */
    public function setVendorOrder($vendorOrder)
    {
        $this->vendorOrder = (int) $vendorOrder;
        return $this;
    }

    /**
     * @return string
     */
    public function getFactionName()
    {
        return $this->factionName;
    }

    /**
     * @param string $factionName
     * @return VendorSummary
     */
    public function setFactionName($factionName)
    {
        $this->factionName = (string) $factionName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFactionIcon()
    {
        return $this->factionIcon;
    }

    /**
     * @param string $factionIcon
     * @return VendorSummary
     */
    public function setFactionIcon($factionIcon)
    {
        $this->factionIcon = (string) $factionIcon;
        return $this;
    }

    /**
     * @return int
     */
    public function getFactionHash()
    {
        return $this->factionHash;
    }

    /**
     * @param int $factionHash
     * @return VendorSummary
     */
    public function setFactionHash($factionHash)
    {
        $this->factionHash = (int) $factionHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getFactionDescription()
    {
        return $this->factionDescription;
    }

    /**
     * @param string $factionDescription
     * @return VendorSummary
     */
    public function setFactionDescription($factionDescription)
    {
        $this->factionDescription = (string) $factionDescription;
        return $this;
    }

    /**
     * @return int
     */
    public function getResetIntervalMinutes()
    {
        return $this->resetIntervalMinutes;
    }

    /**
     * @param int $resetIntervalMinutes
     * @return VendorSummary
     */
    public function setResetIntervalMinutes($resetIntervalMinutes)
    {
        $this->resetIntervalMinutes = (int) $resetIntervalMinutes;
        return $this;
    }

    /**
     * @return int
     */
    public function getResetOffsetMinutes()
    {
        return $this->resetOffsetMinutes;
    }

    /**
     * @param int $resetOffsetMinutes
     * @return VendorSummary
     */
    public function setResetOffsetMinutes($resetOffsetMinutes)
    {
        $this->resetOffsetMinutes = (int) $resetOffsetMinutes;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorIdentifier()
    {
        return $this->vendorIdentifier;
    }

    /**
     * @param string $vendorIdentifier
     * @return VendorSummary
     */
    public function setVendorIdentifier($vendorIdentifier)
    {
        $this->vendorIdentifier = (string) $vendorIdentifier;
        return $this;
    }

    /**
     * @return int
     */
    public function getPositionX()
    {
        return $this->positionX;
    }

    /**
     * @param int $positionX
     * @return VendorSummary
     */
    public function setPositionX($positionX)
    {
        $this->positionX = (int) $positionX;
        return $this;
    }

    /**
     * @return int
     */
    public function getPositionY()
    {
        return $this->positionY;
    }

    /**
     * @param int $positionY
     * @return VendorSummary
     */
    public function setPositionY($positionY)
    {
        $this->positionY = (int) $positionY;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransitionNodeIdentifier()
    {
        return $this->transitionNodeIdentifier;
    }

    /**
     * @param string $transitionNodeIdentifier
     * @return VendorSummary
     */
    public function setTransitionNodeIdentifier($transitionNodeIdentifier)
    {
        $this->transitionNodeIdentifier = (string) $transitionNodeIdentifier;
        return $this;
    }

    /**
     * @return bool
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * @param bool $visible
     * @return VendorSummary
     */
    public function setVisible($visible)
    {
        $this->visible = (bool) $visible;
        return $this;
    }

    /**
     * @return int
     */
    public function getProgressionHash()
    {
        return $this->progressionHash;
    }

    /**
     * @param int $progressionHash
     * @return VendorSummary
     */
    public function setProgressionHash($progressionHash)
    {
        $this->progressionHash = (int) $progressionHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellString()
    {
        return $this->sellString;
    }

    /**
     * @param string $sellString
     * @return VendorSummary
     */
    public function setSellString($sellString)
    {
        $this->sellString = (string) $sellString;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuyString()
    {
        return $this->buyString;
    }

    /**
     * @param string $buyString
     * @return VendorSummary
     */
    public function setBuyString($buyString)
    {
        $this->buyString = (string) $buyString;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorPortrait()
    {
        return $this->vendorPortrait;
    }

    /**
     * @param string $vendorPortrait
     * @return VendorSummary
     */
    public function setVendorPortrait($vendorPortrait)
    {
        $this->vendorPortrait = (string) $vendorPortrait;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorBanner()
    {
        return $this->vendorBanner;
    }

    /**
     * @param string $vendorBanner
     * @return VendorSummary
     */
    public function setVendorBanner($vendorBanner)
    {
        $this->vendorBanner = (string) $vendorBanner;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getUnlockFlagHashes()
    {
        return $this->unlockFlagHashes;
    }

    /**
     * @param Collection $unlockFlagHashes
     * @return VendorSummary
     */
    public function setUnlockFlagHashes(Collection $unlockFlagHashes)
    {
        $this->unlockFlagHashes = $unlockFlagHashes;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getEnabledUnlockFlagHashes()
    {
        return $this->enabledUnlockFlagHashes;
    }

    /**
     * @param Collection $enabledUnlockFlagHashes
     * @return VendorSummary
     */
    public function setEnabledUnlockFlagHashes(Collection $enabledUnlockFlagHashes)
    {
        $this->enabledUnlockFlagHashes = $enabledUnlockFlagHashes;
        return $this;
    }

    /**
     * @return string
     */
    public function getMapSectionIdentifier()
    {
        return $this->mapSectionIdentifier;
    }

    /**
     * @param string $mapSectionIdentifier
     * @return VendorSummary
     */
    public function setMapSectionIdentifier($mapSectionIdentifier)
    {
        $this->mapSectionIdentifier = (string) $mapSectionIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getMapSectionName()
    {
        return $this->mapSectionName;
    }

    /**
     * @param string $mapSectionName
     * @return VendorSummary
     */
    public function setMapSectionName($mapSectionName)
    {
        $this->mapSectionName = (string) $mapSectionName;
        return $this;
    }

    /**
     * @return int
     */
    public function getMapSectionOrder()
    {
        return $this->mapSectionOrder;
    }

    /**
     * @param int $mapSectionOrder
     * @return VendorSummary
     */
    public function setMapSectionOrder($mapSectionOrder)
    {
        $this->mapSectionOrder = (int) $mapSectionOrder;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowOnMap()
    {
        return $this->showOnMap;
    }

    /**
     * @param bool $showOnMap
     * @return VendorSummary
     */
    public function setShowOnMap($showOnMap)
    {
        $this->showOnMap = (bool) $showOnMap;
        return $this;
    }

    /**
     * @return int
     */
    public function getEventHash()
    {
        return $this->eventHash;
    }

    /**
     * @param int $eventHash
     * @return VendorSummary
     */
    public function setEventHash($eventHash)
    {
        $this->eventHash = (int) $eventHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getVendorCategoryHash()
    {
        return $this->vendorCategoryHash;
    }

    /**
     * @param int $vendorCategoryHash
     * @return VendorSummary
     */
    public function setVendorCategoryHash($vendorCategoryHash)
    {
        $this->vendorCategoryHash = (int) $vendorCategoryHash;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getVendorCategoryHashes()
    {
        return $this->vendorCategoryHashes;
    }

    /**
     * @param Collection $vendorCategoryHashes
     * @return VendorSummary
     */
    public function setVendorCategoryHashes(Collection $vendorCategoryHashes)
    {
        $this->vendorCategoryHashes = $vendorCategoryHashes;
        return $this;
    }

    /**
     * @return int
     */
    public function getVendorSubcategoryHash()
    {
        return $this->vendorSubcategoryHash;
    }

    /**
     * @param int $vendorSubcategoryHash
     * @return VendorSummary
     */
    public function setVendorSubcategoryHash($vendorSubcategoryHash)
    {
        $this->vendorSubcategoryHash = (int) $vendorSubcategoryHash;
        return $this;
    }

    /**
     * @return bool
     */
    public function getInhibitBuying()
    {
        return $this->inhibitBuying;
    }

    /**
     * @param bool $inhibitBuying
     * @return VendorSummary
     */
    public function setInhibitBuying($inhibitBuying)
    {
        $this->inhibitBuying = (bool) $inhibitBuying;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return VendorSummary
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('vendorHash')
            ->add('vendorName')
            ->add('vendorDescription')
            ->add('vendorIcon')
            ->add('vendorOrder')
            ->add('factionName')
            ->add('factionIcon')
            ->add('factionHash')
            ->add('factionDescription')
            ->add('resetIntervalMinutes')
            ->add('resetOffsetMinutes')
            ->add('vendorIdentifier')
            ->add('positionX')
            ->add('positionY')
            ->add('transitionNodeIdentifier')
            ->add('visible')
            ->add('progressionHash')
            ->add('sellString')
            ->add('buyString')
            ->add('vendorPortrait')
            ->add('vendorBanner')
            ->add('unlockFlagHashes', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('enabledUnlockFlagHashes', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('mapSectionIdentifier')
            ->add('mapSectionName')
            ->add('mapSectionOrder')
            ->add('showOnMap')
            ->add('eventHash')
            ->add('vendorCategoryHash')
            ->add('vendorCategoryHashes', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('vendorSubcategoryHash')
            ->add('inhibitBuying');
        return $mapper->map($val);
    }
}
