<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class GrimoireDefinitionThemePageCard
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireDefinitionThemePageCard
{
    use ModelTrait;

    /**
     * @var int
     */
    private $cardId;

    /**
     * @var string
     */
    private $cardName;

    /**
     * @var string
     */
    private $cardIntro;

    /**
     * @var string
     */
    private $cardDescription;

    /**
     * @var string
     */
    private $unlockHowToText;

    /**
     * @var string
     */
    private $cardLabel;

    /**
     * @var int
     */
    private $rarity;

    /**
     * @var int
     */
    private $unlockFlagHash;

    /**
     * @var int
     */
    private $points;

    /**
     * @var GrimoireResolution
     */
    private $normalResolution;

    /**
     * @var GrimoireResolution
     */
    private $highResolution;

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
     * @return GrimoireDefinitionThemePageCard
     */
    public function setCardId($cardId)
    {
        $this->cardId = (int) $cardId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardName()
    {
        return $this->cardName;
    }

    /**
     * @param string $cardName
     * @return GrimoireDefinitionThemePageCard
     */
    public function setCardName($cardName)
    {
        $this->cardName = (string) $cardName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardIntro()
    {
        return $this->cardIntro;
    }

    /**
     * @param string $cardIntro
     * @return GrimoireDefinitionThemePageCard
     */
    public function setCardIntro($cardIntro)
    {
        $this->cardIntro = (string) $cardIntro;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardDescription()
    {
        return $this->cardDescription;
    }

    /**
     * @param string $cardDescription
     * @return GrimoireDefinitionThemePageCard
     */
    public function setCardDescription($cardDescription)
    {
        $this->cardDescription = (string) $cardDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnlockHowToText()
    {
        return $this->unlockHowToText;
    }

    /**
     * @param string $unlockHowToText
     * @return GrimoireDefinitionThemePageCard
     */
    public function setUnlockHowToText($unlockHowToText)
    {
        $this->unlockHowToText = (string) $unlockHowToText;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardLabel()
    {
        return $this->cardLabel;
    }

    /**
     * @param string $cardLabel
     * @return GrimoireDefinitionThemePageCard
     */
    public function setCardLabel($cardLabel)
    {
        $this->cardLabel = (string) $cardLabel;
        return $this;
    }

    /**
     * @return int
     */
    public function getRarity()
    {
        return $this->rarity;
    }

    /**
     * @param int $rarity
     * @return GrimoireDefinitionThemePageCard
     */
    public function setRarity($rarity)
    {
        $this->rarity = (int) $rarity;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnlockFlagHash()
    {
        return $this->unlockFlagHash;
    }

    /**
     * @param int $unlockFlagHash
     * @return GrimoireDefinitionThemePageCard
     */
    public function setUnlockFlagHash($unlockFlagHash)
    {
        $this->unlockFlagHash = (int) $unlockFlagHash;
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
     * @return GrimoireDefinitionThemePageCard
     */
    public function setPoints($points)
    {
        $this->points = (int) $points;
        return $this;
    }

    /**
     * @return GrimoireResolution
     */
    public function getNormalResolution()
    {
        return $this->normalResolution;
    }

    /**
     * @param GrimoireResolution $normalResolution
     * @return GrimoireDefinitionThemePageCard
     */
    public function setNormalResolution(GrimoireResolution $normalResolution)
    {
        $this->normalResolution = $normalResolution;
        return $this;
    }

    /**
     * @return GrimoireResolution
     */
    public function getHighResolution()
    {
        return $this->highResolution;
    }

    /**
     * @param GrimoireResolution $highResolution
     * @return GrimoireDefinitionThemePageCard
     */
    public function setHighResolution(GrimoireResolution $highResolution)
    {
        $this->highResolution = $highResolution;
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
     * @return GrimoireDefinitionThemePageCard
     */
    public function setStatisticCollection(Collection $statisticCollection)
    {
        $this->statisticCollection = $statisticCollection;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return GrimoireDefinitionThemePageCard
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('cardId')
            ->add('cardName')
            ->add('cardIntro')
            ->add('cardDescription')
            ->add('unlockHowToText')
            ->add('cardLabel')
            ->add('rarity')
            ->add('unlockFlagHash')
            ->add('points')
            ->add('normalResolution', null, GrimoireResolution::class . '::toObject')
            ->add('highResolution', null, GrimoireResolution::class . '::toObject')
            ->add('statisticCollection', null, GrimoireCardStatistic::class . '::toCollection');
        return $mapper->map($val);
    }
}
