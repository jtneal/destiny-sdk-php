<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class ActivityValue
 * @package Necowebs\Destiny\Models\Stats
 */
class ActivityValue
{
    use ModelTrait;

    /**
     * @var string
     */
    private $statId;

    /**
     * @var ActivityValueBasic
     */
    private $basic;

    /**
     * @var ActivityValueBasic
     */
    private $weighted;

    /**
     * @return string
     */
    public function getStatId()
    {
        return $this->statId;
    }

    /**
     * @param string $statId
     * @return ActivityValue
     */
    public function setStatId($statId)
    {
        $this->statId = (string) $statId;
        return $this;
    }

    /**
     * @return ActivityValueBasic
     */
    public function getBasic()
    {
        return $this->basic;
    }

    /**
     * @param ActivityValueBasic $basic
     * @return ActivityValue
     */
    public function setBasic(ActivityValueBasic $basic)
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ActivityValueBasic
     */
    public function getWeighted()
    {
        return $this->weighted;
    }

    /**
     * @param ActivityValueBasic $weighted
     * @return ActivityValue
     */
    public function setWeighted(ActivityValueBasic $weighted)
    {
        $this->weighted = $weighted;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return ActivityValue
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('statId')
            ->add('basic', null, ActivityValueBasic::class . '::toObject')
            ->add('weighted', null, ActivityValueBasic::class . '::toObject');
        return $mapper->map($val);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function toCollectionUsingKey($obj, array $val)
    {
        $map = array_map(function ($val, $key) {
            $val['statId'] = $key;
            return $val;
        }, $val, array_keys($val));

        return self::toCollection($obj, $map);
    }
}
