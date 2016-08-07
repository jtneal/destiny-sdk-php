<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class GrimoireBonus
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireBonus
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
    private $statName;

    /**
     * @var string
     */
    private $bonusName;

    /**
     * @var string
     */
    private $bonusDescription;

    /**
     * @var GrimoireBonusRank
     */
    private $bonusRank;

    /**
     * @var int
     */
    private $value;

    /**
     * @var int
     */
    private $threshold;

    /**
     * @var GrimoireBonusSmallImage
     */
    private $smallImage;

    /**
     * @return int
     */
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * @param int $cardId
     * @return GrimoireBonus
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
     * @return GrimoireBonus
     */
    public function setCardName($cardName)
    {
        $this->cardName = (string) $cardName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatName()
    {
        return $this->statName;
    }

    /**
     * @param string $statName
     * @return GrimoireBonus
     */
    public function setStatName($statName)
    {
        $this->statName = (string) $statName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBonusName()
    {
        return $this->bonusName;
    }

    /**
     * @param string $bonusName
     * @return GrimoireBonus
     */
    public function setBonusName($bonusName)
    {
        $this->bonusName = (string) $bonusName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBonusDescription()
    {
        return $this->bonusDescription;
    }

    /**
     * @param string $bonusDescription
     * @return GrimoireBonus
     */
    public function setBonusDescription($bonusDescription)
    {
        $this->bonusDescription = (string) $bonusDescription;
        return $this;
    }

    /**
     * @return GrimoireBonusRank
     */
    public function getBonusRank()
    {
        return $this->bonusRank;
    }

    /**
     * @param GrimoireBonusRank $bonusRank
     * @return GrimoireBonus
     */
    public function setBonusRank(GrimoireBonusRank $bonusRank)
    {
        $this->bonusRank = $bonusRank;
        return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     * @return GrimoireBonus
     */
    public function setValue($value)
    {
        $this->value = (int) $value;
        return $this;
    }

    /**
     * @return int
     */
    public function getThreshold()
    {
        return $this->threshold;
    }

    /**
     * @param int $threshold
     * @return GrimoireBonus
     */
    public function setThreshold($threshold)
    {
        $this->threshold = (int) $threshold;
        return $this;
    }

    /**
     * @return GrimoireBonusSmallImage
     */
    public function getSmallImage()
    {
        return $this->smallImage;
    }

    /**
     * @param GrimoireBonusSmallImage $smallImage
     * @return GrimoireBonus
     */
    public function setSmallImage(GrimoireBonusSmallImage $smallImage)
    {
        $this->smallImage = $smallImage;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return GrimoireBonus
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('cardId')
            ->add('cardName')
            ->add('statName')
            ->add('bonusName')
            ->add('bonusDescription')
            ->add('bonusRank', null, GrimoireBonusRank::class . '::toObject')
            ->add('value')
            ->add('threshold')
            ->add('smallImage', null, GrimoireBonusSmallImage::class . '::toObject');
        return $mapper->map($val);
    }
}
