<?php

namespace Necowebs\Destiny\Models\Account;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class SummaryCharacterBase
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryCharacterBase
{
    use ModelTrait;

    /**
     * @var string
     */
    private $membershipId;

    /**
     * @var int
     */
    private $membershipType;

    /**
     * @var string
     */
    private $characterId;

    /**
     * @var string
     */
    private $dateLastPlayed;

    /**
     * @var string
     */
    private $minutesPlayedThisSession;

    /**
     * @var string
     */
    private $minutesPlayedTotal;

    /**
     * @var int
     */
    private $powerLevel;

    /**
     * @var int
     */
    private $raceHash;

    /**
     * @var int
     */
    private $genderHash;

    /**
     * @var int
     */
    private $classHash;

    /**
     * @var int
     */
    private $currentActivityHash;

    /**
     * @var int
     */
    private $lastCompletedStoryHash;

    /**
     * @var SummaryCharacterBaseStats
     */
    private $stats;

    /**
     * @var SummaryCharacterBaseCustomization
     */
    private $customization;

    /**
     * @var int
     */
    private $grimoireScore;

    /**
     * @var SummaryCharacterBasePeerView
     */
    private $peerView;

    /**
     * @var int
     */
    private $genderType;

    /**
     * @var int
     */
    private $classType;

    /**
     * @var int
     */
    private $buildStatGroupHash;

    /**
     * @return string
     */
    public function getMembershipId()
    {
        return $this->membershipId;
    }

    /**
     * @param string $membershipId
     * @return SummaryCharacterBase
     */
    public function setMembershipId($membershipId)
    {
        $this->membershipId = (string) $membershipId;
        return $this;
    }

    /**
     * @return int
     */
    public function getMembershipType()
    {
        return $this->membershipType;
    }

    /**
     * @param int $membershipType
     * @return SummaryCharacterBase
     */
    public function setMembershipType($membershipType)
    {
        $this->membershipType = (int) $membershipType;
        return $this;
    }

    /**
     * @return string
     */
    public function getCharacterId()
    {
        return $this->characterId;
    }

    /**
     * @param string $characterId
     * @return SummaryCharacterBase
     */
    public function setCharacterId($characterId)
    {
        $this->characterId = (string) $characterId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateLastPlayed()
    {
        return $this->dateLastPlayed;
    }

    /**
     * @param string $dateLastPlayed
     * @return SummaryCharacterBase
     */
    public function setDateLastPlayed($dateLastPlayed)
    {
        $this->dateLastPlayed = (string) $dateLastPlayed;
        return $this;
    }

    /**
     * @return string
     */
    public function getMinutesPlayedThisSession()
    {
        return $this->minutesPlayedThisSession;
    }

    /**
     * @param string $minutesPlayedThisSession
     * @return SummaryCharacterBase
     */
    public function setMinutesPlayedThisSession($minutesPlayedThisSession)
    {
        $this->minutesPlayedThisSession = (string) $minutesPlayedThisSession;
        return $this;
    }

    /**
     * @return string
     */
    public function getMinutesPlayedTotal()
    {
        return $this->minutesPlayedTotal;
    }

    /**
     * @param string $minutesPlayedTotal
     * @return SummaryCharacterBase
     */
    public function setMinutesPlayedTotal($minutesPlayedTotal)
    {
        $this->minutesPlayedTotal = (string) $minutesPlayedTotal;
        return $this;
    }

    /**
     * @return int
     */
    public function getPowerLevel()
    {
        return $this->powerLevel;
    }

    /**
     * @param int $powerLevel
     * @return SummaryCharacterBase
     */
    public function setPowerLevel($powerLevel)
    {
        $this->powerLevel = (int) $powerLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getRaceHash()
    {
        return $this->raceHash;
    }

    /**
     * @param int $raceHash
     * @return SummaryCharacterBase
     */
    public function setRaceHash($raceHash)
    {
        $this->raceHash = (int) $raceHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getGenderHash()
    {
        return $this->genderHash;
    }

    /**
     * @param int $genderHash
     * @return SummaryCharacterBase
     */
    public function setGenderHash($genderHash)
    {
        $this->genderHash = (int) $genderHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getClassHash()
    {
        return $this->classHash;
    }

    /**
     * @param int $classHash
     * @return SummaryCharacterBase
     */
    public function setClassHash($classHash)
    {
        $this->classHash = (int) $classHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrentActivityHash()
    {
        return $this->currentActivityHash;
    }

    /**
     * @param int $currentActivityHash
     * @return SummaryCharacterBase
     */
    public function setCurrentActivityHash($currentActivityHash)
    {
        $this->currentActivityHash = (int) $currentActivityHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getLastCompletedStoryHash()
    {
        return $this->lastCompletedStoryHash;
    }

    /**
     * @param int $lastCompletedStoryHash
     * @return SummaryCharacterBase
     */
    public function setLastCompletedStoryHash($lastCompletedStoryHash)
    {
        $this->lastCompletedStoryHash = (int) $lastCompletedStoryHash;
        return $this;
    }

    /**
     * @return SummaryCharacterBaseStats
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @param SummaryCharacterBaseStats $stats
     * @return SummaryCharacterBase
     */
    public function setStats(SummaryCharacterBaseStats $stats)
    {
        $this->stats = $stats;
        return $this;
    }

    /**
     * @return SummaryCharacterBaseCustomization
     */
    public function getCustomization()
    {
        return $this->customization;
    }

    /**
     * @param SummaryCharacterBaseCustomization $customization
     * @return SummaryCharacterBase
     */
    public function setCustomization(SummaryCharacterBaseCustomization $customization)
    {
        $this->customization = $customization;
        return $this;
    }

    /**
     * @return int
     */
    public function getGrimoireScore()
    {
        return $this->grimoireScore;
    }

    /**
     * @param int $grimoireScore
     * @return SummaryCharacterBase
     */
    public function setGrimoireScore($grimoireScore)
    {
        $this->grimoireScore = (int) $grimoireScore;
        return $this;
    }

    /**
     * @return SummaryCharacterBasePeerView
     */
    public function getPeerView()
    {
        return $this->peerView;
    }

    /**
     * @param SummaryCharacterBasePeerView $peerView
     * @return SummaryCharacterBase
     */
    public function setPeerView(SummaryCharacterBasePeerView $peerView)
    {
        $this->peerView = $peerView;
        return $this;
    }

    /**
     * @return int
     */
    public function getGenderType()
    {
        return $this->genderType;
    }

    /**
     * @param int $genderType
     * @return SummaryCharacterBase
     */
    public function setGenderType($genderType)
    {
        $this->genderType = (int) $genderType;
        return $this;
    }

    /**
     * @return int
     */
    public function getClassType()
    {
        return $this->classType;
    }

    /**
     * @param int $classType
     * @return SummaryCharacterBase
     */
    public function setClassType($classType)
    {
        $this->classType = (int) $classType;
        return $this;
    }

    /**
     * @return int
     */
    public function getBuildStatGroupHash()
    {
        return $this->buildStatGroupHash;
    }

    /**
     * @param int $buildStatGroupHash
     * @return SummaryCharacterBase
     */
    public function setBuildStatGroupHash($buildStatGroupHash)
    {
        $this->buildStatGroupHash = (int) $buildStatGroupHash;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return SummaryCharacterBase
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('membershipId')
            ->add('membershipType')
            ->add('characterId')
            ->add('dateLastPlayed')
            ->add('minutesPlayedThisSession')
            ->add('minutesPlayedTotal')
            ->add('powerLevel')
            ->add('raceHash')
            ->add('genderHash')
            ->add('classHash')
            ->add('currentActivityHash')
            ->add('lastCompletedStoryHash')
            ->add('stats', null, SummaryCharacterBaseStats::class . '::toObject')
            ->add('customization', null, SummaryCharacterBaseCustomization::class . '::toObject')
            ->add('grimoireScore')
            ->add('peerView', null, SummaryCharacterBasePeerView::class . '::toObject')
            ->add('genderType')
            ->add('classType')
            ->add('buildStatGroupHash');
        return $mapper->map($val);
    }
}
