<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Account\SummaryCharacterBaseStat;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class InventoryItem
 * @package Necowebs\Destiny\Models\Character
 */
class InventoryItem
{
    use ModelTrait;

    /**
     * @var AdvisorActivityExtendedOrderItem
     */
    private $item;

    /**
     * @var Collection
     */
    private $talentNodes;

    /**
     * @var Collection
     */
    private $statsOnNodes;

    /**
     * @var Collection
     */
    private $characterStatsToDisplay;

    /**
     * @var Collection
     */
    private $materialItemHashes;

    /**
     * @var array
     */
    private $materialQuantities;

    /**
     * @return AdvisorActivityExtendedOrderItem
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param AdvisorActivityExtendedOrderItem $item
     * @return InventoryItem
     */
    public function setItem(AdvisorActivityExtendedOrderItem $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getTalentNodes()
    {
        return $this->talentNodes;
    }

    /**
     * @param Collection $talentNodes
     * @return InventoryItem
     */
    public function setTalentNodes(Collection $talentNodes)
    {
        $this->talentNodes = $talentNodes;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getStatsOnNodes()
    {
        return $this->statsOnNodes;
    }

    /**
     * @param Collection $statsOnNodes
     * @return InventoryItem
     */
    public function setStatsOnNodes(Collection $statsOnNodes)
    {
        $this->statsOnNodes = $statsOnNodes;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getCharacterStatsToDisplay()
    {
        return $this->characterStatsToDisplay;
    }

    /**
     * @param Collection $characterStatsToDisplay
     * @return InventoryItem
     */
    public function setCharacterStatsToDisplay(Collection $characterStatsToDisplay)
    {
        $this->characterStatsToDisplay = $characterStatsToDisplay;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getMaterialItemHashes()
    {
        return $this->materialItemHashes;
    }

    /**
     * @param Collection $materialItemHashes
     * @return InventoryItem
     */
    public function setMaterialItemHashes(Collection $materialItemHashes)
    {
        $this->materialItemHashes = $materialItemHashes;
        return $this;
    }

    /**
     * @return array
     */
    public function getMaterialQuantities()
    {
        return $this->materialQuantities;
    }

    /**
     * @param array $materialQuantities
     * @return InventoryItem
     */
    public function setMaterialQuantities(array $materialQuantities)
    {
        $this->materialQuantities = $materialQuantities;
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
            ->add('item', null, AdvisorActivityExtendedOrderItem::class . '::toObject')
            ->add('talentNodes', null, InventoryItemTalentNode::class . '::toCollection')
            ->add('statsOnNodes', null, InventoryItemNodeStat::class . '::toCollection')
            ->add('characterStatsToDisplay', null, SummaryCharacterBaseStat::class . '::toCollection')
            ->add('materialItemHashes', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('materialQuantities');
        return $mapper->map($val);
    }
}
