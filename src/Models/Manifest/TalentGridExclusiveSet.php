<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class TalentGridExclusiveSet
 * @package Necowebs\Destiny\Models\Manifest
 */
class TalentGridExclusiveSet
{
    /**
     * @var Collection
     */
    private $nodeIndexes;

    /**
     * @return Collection
     */
    public function getNodeIndexes()
    {
        return $this->nodeIndexes;
    }

    /**
     * @param Collection $nodeIndexes
     * @return TalentGridExclusiveSet
     */
    public function setNodeIndexes(Collection $nodeIndexes)
    {
        $this->nodeIndexes = $nodeIndexes;
        return $this;
    }
}
