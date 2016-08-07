<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class GrimoireDefinitionThemePageCardBrief
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireDefinitionThemePageCardBrief
{
    use ModelTrait;

    /**
     * @var int
     */
    private $cardId;

    /**
     * @var int
     */
    private $points;

    /**
     * @var int
     */
    private $totalPoints;

    /**
     * @return int
     */
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * @param int $cardId
     * @return GrimoireDefinitionThemePageCardBrief
     */
    public function setCardId($cardId)
    {
        $this->cardId = (int) $cardId;
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
     * @return GrimoireDefinitionThemePageCardBrief
     */
    public function setPoints($points)
    {
        $this->points = (int) $points;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPoints()
    {
        return $this->totalPoints;
    }

    /**
     * @param int $totalPoints
     * @return GrimoireDefinitionThemePageCardBrief
     */
    public function setTotalPoints($totalPoints)
    {
        $this->totalPoints = (int) $totalPoints;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return GrimoireDefinitionThemePageCardBrief
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('cardId')
            ->add('points')
            ->add('totalPoints');
        return $mapper->map($val);
    }
}
