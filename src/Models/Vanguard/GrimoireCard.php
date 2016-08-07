<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class GrimoireCard
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireCard
{
    use ModelTrait;

    /**
     * @var int
     */
    private $cardId;

    /**
     * @var int
     */
    private $score;

    /**
     * @var int
     */
    private $points;

    /**
     * @var Collection
     */
    private $statisticCollection;

    /**
     * @return int
     */
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * @param int $cardId
     * @return GrimoireCard
     */
    public function setCardId($cardId)
    {
        $this->cardId = (int) $cardId;
        return $this;
    }

    /**
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param int $score
     * @return GrimoireCard
     */
    public function setScore($score)
    {
        $this->score = (int) $score;
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
     * @return GrimoireCard
     */
    public function setPoints($points)
    {
        $this->points = (int) $points;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getStatisticCollection()
    {
        return $this->statisticCollection;
    }

    /**
     * @param Collection $statisticCollection
     * @return GrimoireCard
     */
    public function setStatisticCollection(Collection $statisticCollection)
    {
        $this->statisticCollection = $statisticCollection;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return GrimoireCard
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('cardId')
            ->add('score')
            ->add('points')
            ->add('statisticCollection', null, GrimoireCardStatistic::class . '::toCollection');
        return $mapper->map($val);
    }
}
