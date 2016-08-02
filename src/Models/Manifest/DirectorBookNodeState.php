<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class DirectorBookNodeState
 * @package Necowebs\Destiny\Models\Manifest
 */
class DirectorBookNodeState
{
    /**
     * @var int
     */
    private $state;

    /**
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param int $state
     * @return DirectorBookNodeState
     */
    public function setState($state)
    {
        $this->state = (int) $state;
        return $this;
    }
}
