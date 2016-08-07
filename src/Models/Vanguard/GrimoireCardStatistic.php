<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class GrimoireCardStatistic
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireCardStatistic
{
    use ModelTrait;

    /**
     * @var int
     */
    private $statNumber;

    /**
     * @var int
     */
    private $value;

    /**
     * @var string
     */
    private $displayValue;

    /**
     * @var Collection
     */
    private $rankCollection;

    /**
     * @return int
     */
    public function getStatNumber()
    {
        return $this->statNumber;
    }

    /**
     * @param int $statNumber
     * @return GrimoireCardStatistic
     */
    public function setStatNumber($statNumber)
    {
        $this->statNumber = (int) $statNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     * @return GrimoireCardStatistic
     */
    public function setValue($value)
    {
        $this->value = (int) $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayValue()
    {
        return $this->displayValue;
    }

    /**
     * @param string $displayValue
     * @return GrimoireCardStatistic
     */
    public function setDisplayValue($displayValue)
    {
        $this->displayValue = (string) $displayValue;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getRankCollection()
    {
        return $this->rankCollection;
    }

    /**
     * @param Collection $rankCollection
     * @return GrimoireCardStatistic
     */
    public function setRankCollection(Collection $rankCollection)
    {
        $this->rankCollection = $rankCollection;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return GrimoireCardStatistic
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('statNumber')
            ->add('value')
            ->add('displayValue')
            ->add('rankCollection', null, GrimoireCardStatisticRank::class . '::toCollection');
        return $mapper->map($val);
    }
}
