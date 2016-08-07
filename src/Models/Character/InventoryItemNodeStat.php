<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Account\SummaryCharacterBaseStat;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class InventoryItemNodeStat
 * @package Necowebs\Destiny\Models\Character
 */
class InventoryItemNodeStat
{
    use ModelTrait;

    /**
     * @var Collection
     */
    private $currentNodeStats;

    /**
     * @var Collection
     */
    private $nextNodeStats;

    /**
     * @return Collection
     */
    public function getCurrentNodeStats()
    {
        return $this->currentNodeStats;
    }

    /**
     * @param Collection $currentNodeStats
     * @return InventoryItemNodeStat
     */
    public function setCurrentNodeStats(Collection $currentNodeStats)
    {
        $this->currentNodeStats = $currentNodeStats;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getNextNodeStats()
    {
        return $this->nextNodeStats;
    }

    /**
     * @param Collection $nextNodeStats
     * @return InventoryItemNodeStat
     */
    public function setNextNodeStats(Collection $nextNodeStats)
    {
        $this->nextNodeStats = $nextNodeStats;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return InventoryItemNodeStat
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('currentNodeStats', null, SummaryCharacterBaseStat::class . '::toCollection')
            ->add('nextNodeStats', null, SummaryCharacterBaseStat::class . '::toCollection');
        return $mapper->map($val);
    }
}
