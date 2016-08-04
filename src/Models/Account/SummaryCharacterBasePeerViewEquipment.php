<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

/**
 * Class SummaryCharacterBasePeerViewEquipment
 * @package Necowebs\Destiny\Models\Manifest
 */
class SummaryCharacterBasePeerViewEquipment
{
    /**
     * @var int
     */
    private $itemHash;

    /**
     * @var Collection
     */
    private $dyes;

    /**
     * @return int
     */
    public function getItemHash()
    {
        return $this->itemHash;
    }

    /**
     * @param int $itemHash
     * @return SummaryCharacterBasePeerViewEquipment
     */
    public function setItemHash($itemHash)
    {
        $this->itemHash = (int) $itemHash;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getDyes()
    {
        return $this->dyes;
    }

    /**
     * @param Collection $dyes
     * @return SummaryCharacterBasePeerViewEquipment
     */
    public function setDyes(Collection $dyes)
    {
        $this->dyes = $dyes;
        return $this;
    }
}
