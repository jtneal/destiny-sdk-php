<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class SummaryCharacterBasePeerView
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryCharacterBasePeerView
{
    use ModelTrait;

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

    /**
     * @param mixed $obj
     * @param array $val
     * @return SummaryCharacterBasePeerView
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('equipment', null, SummaryCharacterBasePeerViewEquipment::class . '::toCollection');
        return $mapper->map($val);
    }
}
