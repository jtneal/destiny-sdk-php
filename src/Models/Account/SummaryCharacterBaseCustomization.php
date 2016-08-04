<?php

namespace Necowebs\Destiny\Models\Account;

/**
 * Class SummaryCharacterBaseCustomization
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryCharacterBaseCustomization
{
    /**
     * @var int
     */
    private $personality;

    /**
     * @var int
     */
    private $face;

    /**
     * @var int
     */
    private $skinColor;

    /**
     * @var int
     */
    private $lipColor;

    /**
     * @var int
     */
    private $eyeColor;

    /**
     * @var int
     */
    private $hairColor;

    /**
     * @var int
     */
    private $featureColor;

    /**
     * @var int
     */
    private $decalColor;

    /**
     * @var int
     */
    private $wearHelmet;

    /**
     * @var int
     */
    private $hairIndex;

    /**
     * @var int
     */
    private $featureIndex;

    /**
     * @var int
     */
    private $decalIndex;

    /**
     * @return int
     */
    public function getPersonality()
    {
        return $this->personality;
    }

    /**
     * @param int $personality
     * @return SummaryCharacterBaseCustomization
     */
    public function setPersonality($personality)
    {
        $this->personality = (int) $personality;
        return $this;
    }

    /**
     * @return int
     */
    public function getFace()
    {
        return $this->face;
    }

    /**
     * @param int $face
     * @return SummaryCharacterBaseCustomization
     */
    public function setFace($face)
    {
        $this->face = (int) $face;
        return $this;
    }

    /**
     * @return int
     */
    public function getSkinColor()
    {
        return $this->skinColor;
    }

    /**
     * @param int $skinColor
     * @return SummaryCharacterBaseCustomization
     */
    public function setSkinColor($skinColor)
    {
        $this->skinColor = (int) $skinColor;
        return $this;
    }

    /**
     * @return int
     */
    public function getLipColor()
    {
        return $this->lipColor;
    }

    /**
     * @param int $lipColor
     * @return SummaryCharacterBaseCustomization
     */
    public function setLipColor($lipColor)
    {
        $this->lipColor = (int) $lipColor;
        return $this;
    }

    /**
     * @return int
     */
    public function getEyeColor()
    {
        return $this->eyeColor;
    }

    /**
     * @param int $eyeColor
     * @return SummaryCharacterBaseCustomization
     */
    public function setEyeColor($eyeColor)
    {
        $this->eyeColor = (int) $eyeColor;
        return $this;
    }

    /**
     * @return int
     */
    public function getHairColor()
    {
        return $this->hairColor;
    }

    /**
     * @param int $hairColor
     * @return SummaryCharacterBaseCustomization
     */
    public function setHairColor($hairColor)
    {
        $this->hairColor = (int) $hairColor;
        return $this;
    }

    /**
     * @return int
     */
    public function getFeatureColor()
    {
        return $this->featureColor;
    }

    /**
     * @param int $featureColor
     * @return SummaryCharacterBaseCustomization
     */
    public function setFeatureColor($featureColor)
    {
        $this->featureColor = (int) $featureColor;
        return $this;
    }

    /**
     * @return int
     */
    public function getDecalColor()
    {
        return $this->decalColor;
    }

    /**
     * @param int $decalColor
     * @return SummaryCharacterBaseCustomization
     */
    public function setDecalColor($decalColor)
    {
        $this->decalColor = (int) $decalColor;
        return $this;
    }

    /**
     * @return int
     */
    public function getWearHelmet()
    {
        return $this->wearHelmet;
    }

    /**
     * @param int $wearHelmet
     * @return SummaryCharacterBaseCustomization
     */
    public function setWearHelmet($wearHelmet)
    {
        $this->wearHelmet = (int) $wearHelmet;
        return $this;
    }

    /**
     * @return int
     */
    public function getHairIndex()
    {
        return $this->hairIndex;
    }

    /**
     * @param int $hairIndex
     * @return SummaryCharacterBaseCustomization
     */
    public function setHairIndex($hairIndex)
    {
        $this->hairIndex = (int) $hairIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getFeatureIndex()
    {
        return $this->featureIndex;
    }

    /**
     * @param int $featureIndex
     * @return SummaryCharacterBaseCustomization
     */
    public function setFeatureIndex($featureIndex)
    {
        $this->featureIndex = (int) $featureIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getDecalIndex()
    {
        return $this->decalIndex;
    }

    /**
     * @param int $decalIndex
     * @return SummaryCharacterBaseCustomization
     */
    public function setDecalIndex($decalIndex)
    {
        $this->decalIndex = (int) $decalIndex;
        return $this;
    }
}
