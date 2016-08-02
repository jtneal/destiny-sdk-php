<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class DirectorBookExpression
 * @package Necowebs\Destiny\Models\Manifest
 */
class DirectorBookExpression
{
    /**
     * @var Collection
     */
    private $steps;

    /**
     * @return Collection
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @param Collection $steps
     * @return DirectorBookExpression
     */
    public function setSteps(Collection $steps)
    {
        $this->steps = $steps;
        return $this;
    }
}
