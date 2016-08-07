<?php

namespace Necowebs\Destiny\Models\Stats;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class Historical
 * @package Necowebs\Destiny\Models\Stats
 */
class Historical
{
    use ModelTrait;

    /**
     * @var HistoricalActivity
     */
    private $allPvP;

    /**
     * @var HistoricalActivity
     */
    private $patrol;

    /**
     * @var HistoricalActivity
     */
    private $raid;

    /**
     * @var HistoricalActivity
     */
    private $story;

    /**
     * @var HistoricalActivity
     */
    private $allStrikes;

    /**
     * @var HistoricalActivity
     */
    private $allArena;

    /**
     * @return HistoricalActivity
     */
    public function getAllPvP()
    {
        return $this->allPvP;
    }

    /**
     * @param HistoricalActivity $allPvP
     * @return Historical
     */
    public function setAllPvP(HistoricalActivity $allPvP)
    {
        $this->allPvP = $allPvP;
        return $this;
    }

    /**
     * @return HistoricalActivity
     */
    public function getPatrol()
    {
        return $this->patrol;
    }

    /**
     * @param HistoricalActivity $patrol
     * @return Historical
     */
    public function setPatrol(HistoricalActivity $patrol)
    {
        $this->patrol = $patrol;
        return $this;
    }

    /**
     * @return HistoricalActivity
     */
    public function getRaid()
    {
        return $this->raid;
    }

    /**
     * @param HistoricalActivity $raid
     * @return Historical
     */
    public function setRaid(HistoricalActivity $raid)
    {
        $this->raid = $raid;
        return $this;
    }

    /**
     * @return HistoricalActivity
     */
    public function getStory()
    {
        return $this->story;
    }

    /**
     * @param HistoricalActivity $story
     * @return Historical
     */
    public function setStory(HistoricalActivity $story)
    {
        $this->story = $story;
        return $this;
    }

    /**
     * @return HistoricalActivity
     */
    public function getAllStrikes()
    {
        return $this->allStrikes;
    }

    /**
     * @param HistoricalActivity $allStrikes
     * @return Historical
     */
    public function setAllStrikes(HistoricalActivity $allStrikes)
    {
        $this->allStrikes = $allStrikes;
        return $this;
    }

    /**
     * @return HistoricalActivity
     */
    public function getAllArena()
    {
        return $this->allArena;
    }

    /**
     * @param HistoricalActivity $allArena
     * @return Historical
     */
    public function setAllArena(HistoricalActivity $allArena)
    {
        $this->allArena = $allArena;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Historical
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('allPvP', null, HistoricalActivity::class . '::toObject')
            ->add('patrol', null, HistoricalActivity::class . '::toObject')
            ->add('raid', null, HistoricalActivity::class . '::toObject')
            ->add('story', null, HistoricalActivity::class . '::toObject')
            ->add('allStrikes', null, HistoricalActivity::class . '::toObject')
            ->add('allArena', null, HistoricalActivity::class . '::toObject');
        return $mapper->map($val);
    }
}
