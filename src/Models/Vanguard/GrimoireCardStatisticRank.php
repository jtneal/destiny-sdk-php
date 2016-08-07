<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class GrimoireCardStatisticRank
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireCardStatisticRank
{
    use ModelTrait;

    /**
     * @var int
     */
    private $rank;

    /**
     * @var int
     */
    private $points;

    /**
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @param int $rank
     * @return GrimoireCardStatisticRank
     */
    public function setRank($rank)
    {
        $this->rank = (int) $rank;
        return $this;
    }

    /**
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param int $points
     * @return GrimoireCardStatisticRank
     */
    public function setPoints($points)
    {
        $this->points = (int) $points;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return GrimoireCardStatisticRank
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('rank')
            ->add('points');
        return $mapper->map($val);
    }
}
