<?php

namespace Necowebs\Destiny\Models\Character;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class AdvisorActivityExtendedScoreCard
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityExtendedScoreCard
{
    use ModelTrait;

    /**
     * @var bool
     */
    private $hasTicket;

    /**
     * @var int
     */
    private $maxWins;

    /**
     * @var int
     */
    private $maxLosses;

    /**
     * @var int
     */
    private $wins;

    /**
     * @var int
     */
    private $losses;

    /**
     * @return bool
     */
    public function getHasTicket()
    {
        return $this->hasTicket;
    }

    /**
     * @param bool $hasTicket
     * @return AdvisorActivityExtendedScoreCard
     */
    public function setHasTicket($hasTicket)
    {
        $this->hasTicket = (bool) $hasTicket;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxWins()
    {
        return $this->maxWins;
    }

    /**
     * @param int $maxWins
     * @return AdvisorActivityExtendedScoreCard
     */
    public function setMaxWins($maxWins)
    {
        $this->maxWins = (int) $maxWins;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxLosses()
    {
        return $this->maxLosses;
    }

    /**
     * @param int $maxLosses
     * @return AdvisorActivityExtendedScoreCard
     */
    public function setMaxLosses($maxLosses)
    {
        $this->maxLosses = (int) $maxLosses;
        return $this;
    }

    /**
     * @return int
     */
    public function getWins()
    {
        return $this->wins;
    }

    /**
     * @param int $wins
     * @return AdvisorActivityExtendedScoreCard
     */
    public function setWins($wins)
    {
        $this->wins = (int) $wins;
        return $this;
    }

    /**
     * @return int
     */
    public function getLosses()
    {
        return $this->losses;
    }

    /**
     * @param int $losses
     * @return AdvisorActivityExtendedScoreCard
     */
    public function setLosses($losses)
    {
        $this->losses = (int) $losses;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorActivityExtendedScoreCard
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('hasTicket')
            ->add('maxWins')
            ->add('maxLosses')
            ->add('wins')
            ->add('losses');
        return $mapper->map($val);
    }
}
