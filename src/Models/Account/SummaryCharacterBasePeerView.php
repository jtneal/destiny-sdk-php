<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

/**
 * Class SummaryCharacterBasePeerView
 * @package Necowebs\Destiny\Models\Manifest
 */
class SummaryCharacterBasePeerView
{
    /**
     * @var Collection
     */
    private $equipment;

    /**
     * @return Collection
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * @param Collection $equipment
     * @return SummaryCharacterBasePeerView
     */
    public function setEquipment(Collection $equipment)
    {
        $this->equipment = $equipment;
        return $this;
    }
}
