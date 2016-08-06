<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;
use Necowebs\Destiny\Models\Manifest\InventoryItemDye;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class SummaryCharacterBasePeerViewEquipment
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryCharacterBasePeerViewEquipment
{
    use ModelTrait;

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

    /**
     * @param mixed $obj
     * @param array $val
     * @return SummaryCharacterBasePeerViewEquipment
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('itemHash')
            ->add('dyes', null, InventoryItemDye::class . '::toCollection');
        return $mapper->map($val);
    }
}
