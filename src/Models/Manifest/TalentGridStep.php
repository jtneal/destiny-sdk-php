<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class TalentGridStep
 * @package Necowebs\Destiny\Models\Manifest
 */
class TalentGridStep
{
    use ModelTrait;

    /**
     * @var int
     */
    private $stepIndex;

    /**
     * @var int
     */
    private $nodeStepHash;

    /**
     * @var string
     */
    private $nodeStepName;

    /**
     * @var string
     */
    private $nodeStepDescription;

    /**
     * @var string
     */
    private $interactionDescription;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var int
     */
    private $damageType;

    /**
     * @var int
     */
    private $damageTypeHash;

    /**
     * @var TalentGridActivationRequirement
     */
    private $activationRequirement;

    /**
     * @var bool
     */
    private $canActivateNextStep;

    /**
     * @var int
     */
    private $nextStepIndex;

    /**
     * @var bool
     */
    private $isNextStepRandom;

    /**
     * @var Collection
     */
    private $perkHashes;

    /**
     * @var int
     */
    private $startProgressionBarAtProgress;

    /**
     * @var Collection
     */
    private $statHashes;

    /**
     * @var bool
     */
    private $affectsQuality;

    /**
     * @var SandboxPerkGroup
     */
    private $stepGroups;

    /**
     * @var int
     */
    private $trueStepIndex;

    /**
     * @var int
     */
    private $truePropertyIndex;

    /**
     * @var bool
     */
    private $affectsLevel;

    /**
     * @return int
     */
    public function getStepIndex()
    {
        return $this->stepIndex;
    }

    /**
     * @param int $stepIndex
     * @return TalentGridStep
     */
    public function setStepIndex($stepIndex)
    {
        $this->stepIndex = (int) $stepIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getNodeStepHash()
    {
        return $this->nodeStepHash;
    }

    /**
     * @param int $nodeStepHash
     * @return TalentGridStep
     */
    public function setNodeStepHash($nodeStepHash)
    {
        $this->nodeStepHash = (int) $nodeStepHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getNodeStepName()
    {
        return $this->nodeStepName;
    }

    /**
     * @param string $nodeStepName
     * @return TalentGridStep
     */
    public function setNodeStepName($nodeStepName)
    {
        $this->nodeStepName = (string) $nodeStepName;
        return $this;
    }

    /**
     * @return string
     */
    public function getNodeStepDescription()
    {
        return $this->nodeStepDescription;
    }

    /**
     * @param string $nodeStepDescription
     * @return TalentGridStep
     */
    public function setNodeStepDescription($nodeStepDescription)
    {
        $this->nodeStepDescription = (string) $nodeStepDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getInteractionDescription()
    {
        return $this->interactionDescription;
    }

    /**
     * @param string $interactionDescription
     * @return TalentGridStep
     */
    public function setInteractionDescription($interactionDescription)
    {
        $this->interactionDescription = (string) $interactionDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     * @return TalentGridStep
     */
    public function setIcon($icon)
    {
        $this->icon = (string) $icon;
        return $this;
    }

    /**
     * @return int
     */
    public function getDamageType()
    {
        return $this->damageType;
    }

    /**
     * @param int $damageType
     * @return TalentGridStep
     */
    public function setDamageType($damageType)
    {
        $this->damageType = (int) $damageType;
        return $this;
    }

    /**
     * @return int
     */
    public function getDamageTypeHash()
    {
        return $this->damageTypeHash;
    }

    /**
     * @param int $damageTypeHash
     * @return TalentGridStep
     */
    public function setDamageTypeHash($damageTypeHash)
    {
        $this->damageTypeHash = (int) $damageTypeHash;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActivationRequirement()
    {
        return $this->activationRequirement;
    }

    /**
     * @param TalentGridActivationRequirement $activationRequirement
     * @return TalentGridStep
     */
    public function setActivationRequirement(TalentGridActivationRequirement $activationRequirement)
    {
        $this->activationRequirement = $activationRequirement;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCanActivateNextStep()
    {
        return $this->canActivateNextStep;
    }

    /**
     * @param bool $canActivateNextStep
     * @return TalentGridStep
     */
    public function setCanActivateNextStep($canActivateNextStep)
    {
        $this->canActivateNextStep = (bool) $canActivateNextStep;
        return $this;
    }

    /**
     * @return int
     */
    public function getNextStepIndex()
    {
        return $this->nextStepIndex;
    }

    /**
     * @param int $nextStepIndex
     * @return TalentGridStep
     */
    public function setNextStepIndex($nextStepIndex)
    {
        $this->nextStepIndex = (int) $nextStepIndex;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsNextStepRandom()
    {
        return $this->isNextStepRandom;
    }

    /**
     * @param bool $isNextStepRandom
     * @return TalentGridStep
     */
    public function setIsNextStepRandom($isNextStepRandom)
    {
        $this->isNextStepRandom = (bool) $isNextStepRandom;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getPerkHashes()
    {
        return $this->perkHashes;
    }

    /**
     * @param Collection $perkHashes
     * @return TalentGridStep
     */
    public function setPerkHashes(Collection $perkHashes)
    {
        $this->perkHashes = $perkHashes;
        return $this;
    }

    /**
     * @return int
     */
    public function getStartProgressionBarAtProgress()
    {
        return $this->startProgressionBarAtProgress;
    }

    /**
     * @param int $startProgressionBarAtProgress
     * @return TalentGridStep
     */
    public function setStartProgressionBarAtProgress($startProgressionBarAtProgress)
    {
        $this->startProgressionBarAtProgress = (int) $startProgressionBarAtProgress;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getStatHashes()
    {
        return $this->statHashes;
    }

    /**
     * @param Collection $statHashes
     * @return TalentGridStep
     */
    public function setStatHashes(Collection $statHashes)
    {
        $this->statHashes = $statHashes;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAffectsQuality()
    {
        return $this->affectsQuality;
    }

    /**
     * @param bool $affectsQuality
     * @return TalentGridStep
     */
    public function setAffectsQuality($affectsQuality)
    {
        $this->affectsQuality = (bool) $affectsQuality;
        return $this;
    }

    /**
     * @return SandboxPerkGroup
     */
    public function getStepGroups()
    {
        return $this->stepGroups;
    }

    /**
     * @param SandboxPerkGroup $stepGroups
     * @return TalentGridStep
     */
    public function setStepGroups(SandboxPerkGroup $stepGroups)
    {
        $this->stepGroups = $stepGroups;
        return $this;
    }

    /**
     * @return int
     */
    public function getTrueStepIndex()
    {
        return $this->trueStepIndex;
    }

    /**
     * @param int $trueStepIndex
     * @return TalentGridStep
     */
    public function setTrueStepIndex($trueStepIndex)
    {
        $this->trueStepIndex = (int) $trueStepIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getTruePropertyIndex()
    {
        return $this->truePropertyIndex;
    }

    /**
     * @param int $truePropertyIndex
     * @return TalentGridStep
     */
    public function setTruePropertyIndex($truePropertyIndex)
    {
        $this->truePropertyIndex = (int) $truePropertyIndex;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAffectsLevel()
    {
        return $this->affectsLevel;
    }

    /**
     * @param bool $affectsLevel
     * @return TalentGridStep
     */
    public function setAffectsLevel($affectsLevel)
    {
        $this->affectsLevel = (bool) $affectsLevel;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return TalentGridStep
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('stepIndex')
            ->add('nodeStepHash')
            ->add('nodeStepName')
            ->add('nodeStepDescription')
            ->add('interactionDescription')
            ->add('icon')
            ->add('damageType')
            ->add('damageTypeHash')
            ->add('activationRequirement', null, TalentGridActivationRequirement::class . '::toObject')
            ->add('canActivateNextStep')
            ->add('nextStepIndex')
            ->add('isNextStepRandom')
            ->add('perkHashes', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('startProgressionBarAtProgress')
            ->add('statHashes', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('affectsQuality')
            ->add('stepGroups', null, SandboxPerkGroup::class . '::toObject')
            ->add('trueStepIndex')
            ->add('truePropertyIndex')
            ->add('affectsLevel');
        return $mapper->map($val);
    }
}
