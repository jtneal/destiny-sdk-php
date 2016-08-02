<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class TalentGridActivationRequirement
 * @package Necowebs\Destiny\Models\Manifest
 */
class TalentGridActivationRequirement
{
    /**
     * @var int
     */
    private $gridLevel;

    /**
     * @var Collection
     */
    private $materialRequirementHashes;

    /**
     * @return int
     */
    public function getGridLevel()
    {
        return $this->gridLevel;
    }

    /**
     * @param int $gridLevel
     * @return TalentGridActivationRequirement
     */
    public function setGridLevel($gridLevel)
    {
        $this->gridLevel = (int) $gridLevel;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getMaterialRequirementHashes()
    {
        return $this->materialRequirementHashes;
    }

    /**
     * @param Collection $materialRequirementHashes
     * @return TalentGridActivationRequirement
     */
    public function setMaterialRequirementHashes(Collection $materialRequirementHashes)
    {
        $this->materialRequirementHashes = $materialRequirementHashes;
        return $this;
    }
}
