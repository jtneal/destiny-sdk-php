<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class MaterialRequirement
 * @package Necowebs\Destiny\Models\Manifest
 */
class MaterialRequirement
{
    /**
     * @var int
     */
    private $setHash;

    /**
     * @var Collection
     */
    private $materials;

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
    public function getSetHash()
    {
        return $this->setHash;
    }

    /**
     * @param int $setHash
     * @return MaterialRequirement
     */
    public function setSetHash($setHash)
    {
        $this->setHash = (int) $setHash;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getMaterials()
    {
        return $this->materials;
    }

    /**
     * @param Collection $materials
     * @return MaterialRequirement
     */
    public function setMaterials(Collection $materials)
    {
        $this->materials = $materials;
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
     * @return MaterialRequirement
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
     * @return MaterialRequirement
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }
}
