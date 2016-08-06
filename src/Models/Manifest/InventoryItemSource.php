<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class InventoryItemSource
 * @package Necowebs\Destiny\Models\Manifest
 */
class InventoryItemSource
{
    use ModelTrait;

    /**
     * @var int
     */
    private $expansionIndex;

    /**
     * @var int
     */
    private $level;

    /**
     * @var int
     */
    private $minQuality;

    /**
     * @var int
     */
    private $maxQuality;

    /**
     * @var int
     */
    private $minLevelRequired;

    /**
     * @var int
     */
    private $maxLevelRequired;

    /**
     * @var int
     */
    private $exclusivity;

    /**
     * @var Collection
     */
    private $computedStats;

    /**
     * @var Collection
     */
    private $sourceHashes;

    /**
     * @var Collection
     */
    private $spawnIndexes;

    /**
     * @return int
     */
    public function getExpansionIndex()
    {
        return $this->expansionIndex;
    }

    /**
     * @param int $expansionIndex
     * @return InventoryItemSource
     */
    public function setExpansionIndex($expansionIndex)
    {
        $this->expansionIndex = (int) $expansionIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param int $level
     * @return InventoryItemSource
     */
    public function setLevel($level)
    {
        $this->level = (int) $level;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinQuality()
    {
        return $this->minQuality;
    }

    /**
     * @param int $minQuality
     * @return InventoryItemSource
     */
    public function setMinQuality($minQuality)
    {
        $this->minQuality = (int) $minQuality;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxQuality()
    {
        return $this->maxQuality;
    }

    /**
     * @param int $maxQuality
     * @return InventoryItemSource
     */
    public function setMaxQuality($maxQuality)
    {
        $this->maxQuality = (int) $maxQuality;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinLevelRequired()
    {
        return $this->minLevelRequired;
    }

    /**
     * @param int $minLevelRequired
     * @return InventoryItemSource
     */
    public function setMinLevelRequired($minLevelRequired)
    {
        $this->minLevelRequired = (int) $minLevelRequired;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxLevelRequired()
    {
        return $this->maxLevelRequired;
    }

    /**
     * @param int $maxLevelRequired
     * @return InventoryItemSource
     */
    public function setMaxLevelRequired($maxLevelRequired)
    {
        $this->maxLevelRequired = (int) $maxLevelRequired;
        return $this;
    }

    /**
     * @return int
     */
    public function getExclusivity()
    {
        return $this->exclusivity;
    }

    /**
     * @param int $exclusivity
     * @return InventoryItemSource
     */
    public function setExclusivity($exclusivity)
    {
        $this->exclusivity = (int) $exclusivity;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getComputedStats()
    {
        return $this->computedStats;
    }

    /**
     * @param Collection $computedStats
     * @return InventoryItemSource
     */
    public function setComputedStats(Collection $computedStats)
    {
        $this->computedStats = $computedStats;
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
     * @return InventoryItemSource
     */
    public function setSourceHashes(Collection $sourceHashes)
    {
        $this->sourceHashes = $sourceHashes;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getSpawnIndexes()
    {
        return $this->spawnIndexes;
    }

    /**
     * @param Collection $spawnIndexes
     * @return InventoryItemSource
     */
    public function setSpawnIndexes(Collection $spawnIndexes)
    {
        $this->spawnIndexes = $spawnIndexes;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return InventoryItemSource
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('expansionIndex')
            ->add('level')
            ->add('minQuality')
            ->add('maxQuality')
            ->add('minLevelRequired')
            ->add('maxLevelRequired')
            ->add('exclusivity')
            ->add('computedStats', null, InventoryItemStat::class . '::toCollection')
            ->add('sourceHashes', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('spawnIndexes', null, MapperHelper::class . '::mapArrayToCollectionInt');
        return $mapper->map($val);
    }
}
