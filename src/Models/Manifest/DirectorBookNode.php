<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class DirectorBookNode
 * @package Necowebs\Destiny\Models\Manifest
 */
class DirectorBookNode
{
    /**
     * @var int
     */
    private $nodeDefinitionHash;

    /**
     * @var int
     */
    private $styleHash;

    /**
     * @var int
     */
    private $positionX;

    /**
     * @var int
     */
    private $positionY;

    /**
     * @var int
     */
    private $positionZ;

    /**
     * @var Collection
     */
    private $activityBundleHashes;

    /**
     * @var Collection
     */
    private $states;

    /**
     * @var int
     */
    private $uiModifier;

    /**
     * @return int
     */
    public function getNodeDefinitionHash()
    {
        return $this->nodeDefinitionHash;
    }

    /**
     * @param int $nodeDefinitionHash
     * @return DirectorBookNode
     */
    public function setNodeDefinitionHash($nodeDefinitionHash)
    {
        $this->nodeDefinitionHash = (int) $nodeDefinitionHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getStyleHash()
    {
        return $this->styleHash;
    }

    /**
     * @param int $styleHash
     * @return DirectorBookNode
     */
    public function setStyleHash($styleHash)
    {
        $this->styleHash = (int) $styleHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getPositionX()
    {
        return $this->positionX;
    }

    /**
     * @param int $positionX
     * @return DirectorBookNode
     */
    public function setPositionX($positionX)
    {
        $this->positionX = (int) $positionX;
        return $this;
    }

    /**
     * @return int
     */
    public function getPositionY()
    {
        return $this->positionY;
    }

    /**
     * @param int $positionY
     * @return DirectorBookNode
     */
    public function setPositionY($positionY)
    {
        $this->positionY = (int) $positionY;
        return $this;
    }

    /**
     * @return int
     */
    public function getPositionZ()
    {
        return $this->positionZ;
    }

    /**
     * @param int $positionZ
     * @return DirectorBookNode
     */
    public function setPositionZ($positionZ)
    {
        $this->positionZ = (int) $positionZ;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getActivityBundleHashes()
    {
        return $this->activityBundleHashes;
    }

    /**
     * @param Collection $activityBundleHashes
     * @return DirectorBookNode
     */
    public function setActivityBundleHashes(Collection $activityBundleHashes)
    {
        $this->activityBundleHashes = $activityBundleHashes;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getStates()
    {
        return $this->states;
    }

    /**
     * @param Collection $states
     * @return DirectorBookNode
     */
    public function setStates(Collection $states)
    {
        $this->states = $states;
        return $this;
    }

    /**
     * @return int
     */
    public function getUiModifier()
    {
        return $this->uiModifier;
    }

    /**
     * @param int $uiModifier
     * @return DirectorBookNode
     */
    public function setUiModifier($uiModifier)
    {
        $this->uiModifier = (int) $uiModifier;
        return $this;
    }
}
