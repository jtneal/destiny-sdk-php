<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class Definition
 * @package Necowebs\Destiny\Models\Stats
 */
class Definition
{
    use ModelTrait;

    /**
     * @var string
     */
    private $statId;

    /**
     * @var int
     */
    private $group;

    /**
     * @var Collection
     */
    private $periodTypes;

    /**
     * @var Collection
     */
    private $modes;

    /**
     * @var int
     */
    private $category;

    /**
     * @var string
     */
    private $statName;

    /**
     * @var string
     */
    private $statDescription;

    /**
     * @var int
     */
    private $unitType;

    /**
     * @var string
     */
    private $unitLabel;

    /**
     * @var int
     */
    private $weight;

    /**
     * @return string
     */
    public function getStatId()
    {
        return $this->statId;
    }

    /**
     * @param string $statId
     * @return Definition
     */
    public function setStatId($statId)
    {
        $this->statId = (string) $statId;
        return $this;
    }

    /**
     * @return int
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param int $group
     * @return Definition
     */
    public function setGroup($group)
    {
        $this->group = (int) $group;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getPeriodTypes()
    {
        return $this->periodTypes;
    }

    /**
     * @param Collection $periodTypes
     * @return Definition
     */
    public function setPeriodTypes(Collection $periodTypes)
    {
        $this->periodTypes = $periodTypes;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getModes()
    {
        return $this->modes;
    }

    /**
     * @param Collection $modes
     * @return Definition
     */
    public function setModes(Collection $modes)
    {
        $this->modes = $modes;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param int $category
     * @return Definition
     */
    public function setCategory($category)
    {
        $this->category = (int) $category;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatName()
    {
        return $this->statName;
    }

    /**
     * @param string $statName
     * @return Definition
     */
    public function setStatName($statName)
    {
        $this->statName = (string) $statName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatDescription()
    {
        return $this->statDescription;
    }

    /**
     * @param string $statDescription
     * @return Definition
     */
    public function setStatDescription($statDescription)
    {
        $this->statDescription = (string) $statDescription;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnitType()
    {
        return $this->unitType;
    }

    /**
     * @param int $unitType
     * @return Definition
     */
    public function setUnitType($unitType)
    {
        $this->unitType = (int) $unitType;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitLabel()
    {
        return $this->unitLabel;
    }

    /**
     * @param string $unitLabel
     * @return Definition
     */
    public function setUnitLabel($unitLabel)
    {
        $this->unitLabel = (string) $unitLabel;
        return $this;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     * @return Definition
     */
    public function setWeight($weight)
    {
        $this->weight = (int) $weight;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Definition
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('statId')
            ->add('group')
            ->add('periodTypes', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('modes', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('category')
            ->add('statName')
            ->add('statDescription')
            ->add('unitType')
            ->add('unitLabel')
            ->add('weight');
        return $mapper->map($val);
    }
}
