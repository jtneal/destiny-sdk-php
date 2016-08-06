<?php

namespace Necowebs\Destiny\Models\Account;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class SummaryCharacter
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryCharacter
{
    use ModelTrait;

    /**
     * @var SummaryCharacterBase
     */
    private $characterBase;

    /**
     * @var SummaryCharacterLevelProgression
     */
    private $levelProgression;

    /**
     * @var string
     */
    private $emblemPath;

    /**
     * @var string
     */
    private $backgroundPath;

    /**
     * @var int
     */
    private $emblemHash;

    /**
     * @var int
     */
    private $characterLevel;

    /**
     * @var int
     */
    private $baseCharacterLevel;

    /**
     * @var bool
     */
    private $isPrestigeLevel;

    /**
     * @var int
     */
    private $percentToNextLevel;

    /**
     * @return SummaryCharacterBase
     */
    public function getCharacterBase()
    {
        return $this->characterBase;
    }

    /**
     * @param SummaryCharacterBase $characterBase
     * @return SummaryCharacter
     */
    public function setCharacterBase(SummaryCharacterBase $characterBase)
    {
        $this->characterBase = $characterBase;
        return $this;
    }

    /**
     * @return SummaryCharacterLevelProgression
     */
    public function getLevelProgression()
    {
        return $this->levelProgression;
    }

    /**
     * @param SummaryCharacterLevelProgression $levelProgression
     * @return SummaryCharacter
     */
    public function setLevelProgression(SummaryCharacterLevelProgression $levelProgression)
    {
        $this->levelProgression = $levelProgression;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmblemPath()
    {
        return $this->emblemPath;
    }

    /**
     * @param string $emblemPath
     * @return SummaryCharacter
     */
    public function setEmblemPath($emblemPath)
    {
        $this->emblemPath = (string) $emblemPath;
        return $this;
    }

    /**
     * @return string
     */
    public function getBackgroundPath()
    {
        return $this->backgroundPath;
    }

    /**
     * @param string $backgroundPath
     * @return SummaryCharacter
     */
    public function setBackgroundPath($backgroundPath)
    {
        $this->backgroundPath = (string) $backgroundPath;
        return $this;
    }

    /**
     * @return int
     */
    public function getEmblemHash()
    {
        return $this->emblemHash;
    }

    /**
     * @param int $emblemHash
     * @return SummaryCharacter
     */
    public function setEmblemHash($emblemHash)
    {
        $this->emblemHash = (int) $emblemHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getCharacterLevel()
    {
        return $this->characterLevel;
    }

    /**
     * @param int $characterLevel
     * @return SummaryCharacter
     */
    public function setCharacterLevel($characterLevel)
    {
        $this->characterLevel = (int) $characterLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getBaseCharacterLevel()
    {
        return $this->baseCharacterLevel;
    }

    /**
     * @param int $baseCharacterLevel
     * @return SummaryCharacter
     */
    public function setBaseCharacterLevel($baseCharacterLevel)
    {
        $this->baseCharacterLevel = (int) $baseCharacterLevel;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPrestigeLevel()
    {
        return $this->isPrestigeLevel;
    }

    /**
     * @param bool $isPrestigeLevel
     * @return SummaryCharacter
     */
    public function setIsPrestigeLevel($isPrestigeLevel)
    {
        $this->isPrestigeLevel = (bool) $isPrestigeLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getPercentToNextLevel()
    {
        return $this->percentToNextLevel;
    }

    /**
     * @param int $percentToNextLevel
     * @return SummaryCharacter
     */
    public function setPercentToNextLevel($percentToNextLevel)
    {
        $this->percentToNextLevel = (int) $percentToNextLevel;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return SummaryCharacter
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('characterBase', null, SummaryCharacterBase::class . '::toObject')
            ->add('levelProgression', null, SummaryCharacterLevelProgression::class . '::toObject')
            ->add('emblemPath')
            ->add('backgroundPath')
            ->add('emblemHash')
            ->add('characterLevel')
            ->add('baseCharacterLevel')
            ->add('isPrestigeLevel')
            ->add('percentToNextLevel');
        return $mapper->map($val);
    }
}
