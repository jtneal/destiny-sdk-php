<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Account\SummaryCharacterLevelProgression;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class Progression
 * @package Necowebs\Destiny\Models\Character
 */
class Progression
{
    use ModelTrait;

    /**
     * @var Collection
     */
    private $progressions;

    /**
     * @var SummaryCharacterLevelProgression
     */
    private $levelProgression;

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
    private $factionProgressionHash;

    /**
     * @var int
     */
    private $percentToNextLevel;

    /**
     * @return Collection
     */
    public function getProgressions()
    {
        return $this->progressions;
    }

    /**
     * @param Collection $progressions
     * @return Progression
     */
    public function setProgressions(Collection $progressions)
    {
        $this->progressions = $progressions;
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
     * @return Progression
     */
    public function setLevelProgression(SummaryCharacterLevelProgression $levelProgression)
    {
        $this->levelProgression = $levelProgression;
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
     * @return Progression
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
     * @return Progression
     */
    public function setIsPrestigeLevel($isPrestigeLevel)
    {
        $this->isPrestigeLevel = (bool) $isPrestigeLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getFactionProgressionHash()
    {
        return $this->factionProgressionHash;
    }

    /**
     * @param int $factionProgressionHash
     * @return Progression
     */
    public function setFactionProgressionHash($factionProgressionHash)
    {
        $this->factionProgressionHash = (int) $factionProgressionHash;
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
     * @return Progression
     */
    public function setPercentToNextLevel($percentToNextLevel)
    {
        $this->percentToNextLevel = (int) $percentToNextLevel;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Progression
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('progressions', null, SummaryCharacterLevelProgression::class . '::toCollection')
            ->add('levelProgression', null, SummaryCharacterLevelProgression::class . '::toObject')
            ->add('baseCharacterLevel')
            ->add('isPrestigeLevel')
            ->add('factionProgressionHash')
            ->add('percentToNextLevel');
        return $mapper->map($val);
    }
}
