<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class StatGroup
 * @package Necowebs\Destiny\Models\Manifest
 */
class StatGroup
{
    use ModelTrait;

    /**
     * @var int
     */
    private $statGroupHash;

    /**
     * @var int
     */
    private $maximumValue;

    /**
     * @var int
     */
    private $uiPosition;

    /**
     * @var Collection
     */
    private $scaledStats;

    /**
     * @var Collection
     */
    private $overrides;

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
    public function getStatGroupHash()
    {
        return $this->statGroupHash;
    }

    /**
     * @param int $statGroupHash
     * @return StatGroup
     */
    public function setStatGroupHash($statGroupHash)
    {
        $this->statGroupHash = (int) $statGroupHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaximumValue()
    {
        return $this->maximumValue;
    }

    /**
     * @param int $maximumValue
     * @return StatGroup
     */
    public function setMaximumValue($maximumValue)
    {
        $this->maximumValue = (int) $maximumValue;
        return $this;
    }

    /**
     * @return int
     */
    public function getUiPosition()
    {
        return $this->uiPosition;
    }

    /**
     * @param int $uiPosition
     * @return StatGroup
     */
    public function setUiPosition($uiPosition)
    {
        $this->uiPosition = (int) $uiPosition;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getScaledStats()
    {
        return $this->scaledStats;
    }

    /**
     * @param Collection $scaledStats
     * @return StatGroup
     */
    public function setScaledStats(Collection $scaledStats)
    {
        $this->scaledStats = $scaledStats;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getOverrides()
    {
        return $this->overrides;
    }

    /**
     * @param Collection $overrides
     * @return StatGroup
     */
    public function setOverrides(Collection $overrides)
    {
        $this->overrides = $overrides;
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
     * @return StatGroup
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
     * @return StatGroup
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return StatGroup
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('statGroupHash')
            ->add('maximumValue')
            ->add('uiPosition')
            ->add('scaledStats', null, StatGroupScaledStat::class . '::toCollection')
            ->add('overrides', null, StatGroupOverride::class . '::toCollection')
            ->add('hash')
            ->add('index');
        return $mapper->map($val);
    }
}
