<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class HistoricalActivity
 * @package Necowebs\Destiny\Models\Stats
 */
class HistoricalActivity
{
    use ModelTrait;

    /**
     * @var Collection
     */
    private $allTime;

    /**
     * @return Collection
     */
    public function getAllTime()
    {
        return $this->allTime;
    }

    /**
     * @param Collection $allTime
     * @return HistoricalActivity
     */
    public function setAllTime(Collection $allTime)
    {
        $this->allTime = $allTime;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return HistoricalActivity
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('allTime', null, ActivityValue::class . '::toCollection');
        return $mapper->map($val);
    }
}
