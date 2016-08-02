<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class TalentGridNode
 * @package Necowebs\Destiny\Models\Manifest
 */
class TalentGridNode
{
    /**
     * @var int
     */
    private $nodeIndex;

    /**
     * @var int
     */
    private $nodeHash;

    /**
     * @var int
     */
    private $row;

    /**
     * @var int
     */
    private $column;

    /**
     * @var Collection
     */
    private $prerequisiteNodeIndexes;

    /**
     * @var int
     */
    private $binaryPairNodeIndex;

    /**
     * @var bool
     */
    private $autoUnlocks;

    /**
     * @var bool
     */
    private $lastStepRepeats;

    /**
     * @var bool
     */
    private $isRandom;

    /**
     * @var TalentGridActivationRequirement
     */
    private $randomActivationRequirement;

    /**
     * @var bool
     */
    private $isRandomRepurchasable;

    /**
     * @var Collection
     */
    private $steps;

    /**
     * @var Collection
     */
    private $exlusiveWithNodes;

    /**
     * @var int
     */
    private $randomStartProgressionBarAtProgression;

    /**
     * @var int
     */
    private $originalNodeHash;

    /**
     * @return int
     */
    public function getNodeIndex()
    {
        return $this->nodeIndex;
    }

    /**
     * @param int $nodeIndex
     * @return TalentGridNode
     */
    public function setNodeIndex($nodeIndex)
    {
        $this->nodeIndex = (int) $nodeIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getNodeHash()
    {
        return $this->nodeHash;
    }

    /**
     * @param int $nodeHash
     * @return TalentGridNode
     */
    public function setNodeHash($nodeHash)
    {
        $this->nodeHash = (int) $nodeHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * @param int $row
     * @return TalentGridNode
     */
    public function setRow($row)
    {
        $this->row = (int) $row;
        return $this;
    }

    /**
     * @return int
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * @param int $column
     * @return TalentGridNode
     */
    public function setColumn($column)
    {
        $this->column = (int) $column;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getPrerequisiteNodeIndexes()
    {
        return $this->prerequisiteNodeIndexes;
    }

    /**
     * @param Collection $prerequisiteNodeIndexes
     * @return TalentGridNode
     */
    public function setPrerequisiteNodeIndexes(Collection $prerequisiteNodeIndexes)
    {
        $this->prerequisiteNodeIndexes = $prerequisiteNodeIndexes;
        return $this;
    }

    /**
     * @return int
     */
    public function getBinaryPairNodeIndex()
    {
        return $this->binaryPairNodeIndex;
    }

    /**
     * @param int $binaryPairNodeIndex
     * @return TalentGridNode
     */
    public function setBinaryPairNodeIndex($binaryPairNodeIndex)
    {
        $this->binaryPairNodeIndex = (int) $binaryPairNodeIndex;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAutoUnlocks()
    {
        return $this->autoUnlocks;
    }

    /**
     * @param bool $autoUnlocks
     * @return TalentGridNode
     */
    public function setAutoUnlocks($autoUnlocks)
    {
        $this->autoUnlocks = (bool) $autoUnlocks;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLastStepRepeats()
    {
        return $this->lastStepRepeats;
    }

    /**
     * @param bool $lastStepRepeats
     * @return TalentGridNode
     */
    public function setLastStepRepeats($lastStepRepeats)
    {
        $this->lastStepRepeats = (bool) $lastStepRepeats;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsRandom()
    {
        return $this->isRandom;
    }

    /**
     * @param bool $isRandom
     * @return TalentGridNode
     */
    public function setIsRandom($isRandom)
    {
        $this->isRandom = (bool) $isRandom;
        return $this;
    }

    /**
     * @return TalentGridActivationRequirement
     */
    public function getRandomActivationRequirement()
    {
        return $this->randomActivationRequirement;
    }

    /**
     * @param TalentGridActivationRequirement $randomActivationRequirement
     * @return TalentGridNode
     */
    public function setRandomActivationRequirement(TalentGridActivationRequirement $randomActivationRequirement)
    {
        $this->randomActivationRequirement = $randomActivationRequirement;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsRandomRepurchasable()
    {
        return $this->isRandomRepurchasable;
    }

    /**
     * @param bool $isRandomRepurchasable
     * @return TalentGridNode
     */
    public function setIsRandomRepurchasable($isRandomRepurchasable)
    {
        $this->isRandomRepurchasable = (bool) $isRandomRepurchasable;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @param Collection $steps
     * @return TalentGridNode
     */
    public function setSteps(Collection $steps)
    {
        $this->steps = $steps;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getExlusiveWithNodes()
    {
        return $this->exlusiveWithNodes;
    }

    /**
     * @param Collection $exlusiveWithNodes
     * @return TalentGridNode
     */
    public function setExlusiveWithNodes(Collection $exlusiveWithNodes)
    {
        $this->exlusiveWithNodes = $exlusiveWithNodes;
        return $this;
    }

    /**
     * @return int
     */
    public function getRandomStartProgressionBarAtProgression()
    {
        return $this->randomStartProgressionBarAtProgression;
    }

    /**
     * @param int $randomStartProgressionBarAtProgression
     * @return TalentGridNode
     */
    public function setRandomStartProgressionBarAtProgression($randomStartProgressionBarAtProgression)
    {
        $this->randomStartProgressionBarAtProgression = (int) $randomStartProgressionBarAtProgression;
        return $this;
    }

    /**
     * @return int
     */
    public function getOriginalNodeHash()
    {
        return $this->originalNodeHash;
    }

    /**
     * @param int $originalNodeHash
     * @return TalentGridNode
     */
    public function setOriginalNodeHash($originalNodeHash)
    {
        $this->originalNodeHash = (int) $originalNodeHash;
        return $this;
    }
}
