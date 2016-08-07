<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class Grimoire
 * @package Necowebs\Destiny\Models\Vanguard
 */
class Grimoire
{
    use ModelTrait;

    /**
     * @var int
     */
    private $score;

    /**
     * @var Collection
     */
    private $cardCollection;

    /**
     * @var Collection
     */
    private $cardsToHide;

    /**
     * @var Collection
     */
    private $bonuses;

    /**
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param int $score
     * @return Grimoire
     */
    public function setScore($score)
    {
        $this->score = (int) $score;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getCardCollection()
    {
        return $this->cardCollection;
    }

    /**
     * @param Collection $cardCollection
     * @return Grimoire
     */
    public function setCardCollection(Collection $cardCollection)
    {
        $this->cardCollection = $cardCollection;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getCardsToHide()
    {
        return $this->cardsToHide;
    }

    /**
     * @param Collection $cardsToHide
     * @return Grimoire
     */
    public function setCardsToHide(Collection $cardsToHide)
    {
        $this->cardsToHide = $cardsToHide;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getBonuses()
    {
        return $this->bonuses;
    }

    /**
     * @param Collection $bonuses
     * @return Grimoire
     */
    public function setBonuses(Collection $bonuses)
    {
        $this->bonuses = $bonuses;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Grimoire
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('score')
            ->add('cardCollection', null, GrimoireCard::class . '::toCollection')
            ->add('cardsToHide', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('bonuses', null, GrimoireBonus::class . '::toCollection');
        return $mapper->map($val);
    }
}
