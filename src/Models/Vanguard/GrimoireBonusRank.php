<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class GrimoireBonusRank
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireBonusRank
{
    use ModelTrait;

    /**
     * @var int
     */
    private $statId;

    /**
     * @var int
     */
    private $rank;

    /**
     * @return int
     */
    public function getStatId()
    {
        return $this->statId;
    }

    /**
     * @param int $statId
     * @return GrimoireBonusRank
     */
    public function setStatId($statId)
    {
        $this->statId = (int) $statId;
        return $this;
    }

    /**
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @param int $rank
     * @return GrimoireBonusRank
     */
    public function setRank($rank)
    {
        $this->rank = (int) $rank;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return GrimoireBonusRank
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('statId')
            ->add('rank');
        return $mapper->map($val);
    }
}
