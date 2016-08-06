<?php

namespace Necowebs\Destiny\Models\Stats;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class AggregateActivity
 * @package Necowebs\Destiny\Models\Stats
 */
class AggregateActivity
{
    use ModelTrait;

    /**
     * @var int
     */
    private $activityHash;

    /**
     * @var AggregateActivityValues
     */
    private $values;

    /**
     * @return int
     */
    public function getActivityHash()
    {
        return $this->activityHash;
    }

    /**
     * @param int $activityHash
     * @return AggregateActivity
     */
    public function setActivityHash($activityHash)
    {
        $this->activityHash = (int) $activityHash;
        return $this;
    }

    /**
     * @return AggregateActivityValues
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param AggregateActivityValues $values
     * @return AggregateActivity
     */
    public function setValues(AggregateActivityValues $values)
    {
        $this->values = $values;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AggregateActivity
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('activityHash')
            ->add('values', null, AggregateActivityValues::class . '::toObject');
        return $mapper->map($val);
    }
}
