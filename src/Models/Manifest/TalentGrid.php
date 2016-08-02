<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class TalentGrid
 * @package Necowebs\Destiny\Models\Manifest
 */
class TalentGrid
{
    /**
     * @var int
     */
    private $gridHash;

    /**
     * @var int
     */
    private $maxGridLevel;

    /**
     * @var int
     */
    private $gridLevelPerColumn;

    /**
     * @var int
     */
    private $progressionHash;

    /**
     * @var Collection
     */
    private $nodes;

    /**
     * @var int
     */
    private $calcMaxGridLevel;

    /**
     * @var int
     */
    private $calcProgressToMaxLevel;

    /**
     * @var Collection
     */
    private $exclusiveSets;

    /**
     * @var Collection
     */
    private $independentNodeIndexes;

    /**
     * @var int
     */
    private $hash;

    /**
     * @var int
     */
    private $index;

    /**
     * @return int
     */
    public function getGridHash()
    {
        return $this->gridHash;
    }

    /**
     * @param int $gridHash
     * @return TalentGrid
     */
    public function setGridHash($gridHash)
    {
        $this->gridHash = (int) $gridHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxGridLevel()
    {
        return $this->maxGridLevel;
    }

    /**
     * @param int $maxGridLevel
     * @return TalentGrid
     */
    public function setMaxGridLevel($maxGridLevel)
    {
        $this->maxGridLevel = (int) $maxGridLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getGridLevelPerColumn()
    {
        return $this->gridLevelPerColumn;
    }

    /**
     * @param int $gridLevelPerColumn
     * @return TalentGrid
     */
    public function setGridLevelPerColumn($gridLevelPerColumn)
    {
        $this->gridLevelPerColumn = (int) $gridLevelPerColumn;
        return $this;
    }

    /**
     * @return int
     */
    public function getProgressionHash()
    {
        return $this->progressionHash;
    }

    /**
     * @param int $progressionHash
     * @return TalentGrid
     */
    public function setProgressionHash($progressionHash)
    {
        $this->progressionHash = (int) $progressionHash;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * @param Collection $nodes
     * @return TalentGrid
     */
    public function setNodes(Collection $nodes)
    {
        $this->nodes = $nodes;
        return $this;
    }

    /**
     * @return int
     */
    public function getCalcMaxGridLevel()
    {
        return $this->calcMaxGridLevel;
    }

    /**
     * @param int $calcMaxGridLevel
     * @return TalentGrid
     */
    public function setCalcMaxGridLevel($calcMaxGridLevel)
    {
        $this->calcMaxGridLevel = (int) $calcMaxGridLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getCalcProgressToMaxLevel()
    {
        return $this->calcProgressToMaxLevel;
    }

    /**
     * @param int $calcProgressToMaxLevel
     * @return TalentGrid
     */
    public function setCalcProgressToMaxLevel($calcProgressToMaxLevel)
    {
        $this->calcProgressToMaxLevel = (int) $calcProgressToMaxLevel;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getExclusiveSets()
    {
        return $this->exclusiveSets;
    }

    /**
     * @param Collection $exclusiveSets
     * @return TalentGrid
     */
    public function setExclusiveSets(Collection $exclusiveSets)
    {
        $this->exclusiveSets = $exclusiveSets;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getIndependentNodeIndexes()
    {
        return $this->independentNodeIndexes;
    }

    /**
     * @param Collection $independentNodeIndexes
     * @return TalentGrid
     */
    public function setIndependentNodeIndexes(Collection $independentNodeIndexes)
    {
        $this->independentNodeIndexes = $independentNodeIndexes;
        return $this;
    }

    /**
     * @return int
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param int $hash
     * @return TalentGrid
     */
    public function setHash($hash)
    {
        $this->hash = (int) $hash;
        return $this;
    }

    /**
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param int $index
     * @return TalentGrid
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }
}
