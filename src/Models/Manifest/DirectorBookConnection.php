<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class DirectorBookConnection
 * @package Necowebs\Destiny\Models\Manifest
 */
class DirectorBookConnection
{
    /**
     * @var int
     */
    private $sourceNodeIndex;

    /**
     * @var int
     */
    private $destinationNodeIndex;

    /**
     * @return int
     */
    public function getSourceNodeIndex()
    {
        return $this->sourceNodeIndex;
    }

    /**
     * @param int $sourceNodeIndex
     * @return DirectorBookConnection
     */
    public function setSourceNodeIndex($sourceNodeIndex)
    {
        $this->sourceNodeIndex = (int) $sourceNodeIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getDestinationNodeIndex()
    {
        return $this->destinationNodeIndex;
    }

    /**
     * @param int $destinationNodeIndex
     * @return DirectorBookConnection
     */
    public function setDestinationNodeIndex($destinationNodeIndex)
    {
        $this->destinationNodeIndex = (int) $destinationNodeIndex;
        return $this;
    }
}
