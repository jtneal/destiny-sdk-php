<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class PostGameCarnageReportEntryExtended
 * @package Necowebs\Destiny\Models\Stats
 */
class PostGameCarnageReportEntryExtended
{
    use ModelTrait;

    /**
     * @var Collection
     */
    private $weapons;

    /**
     * @var Collection
     */
    private $values;

    /**
     * @return Collection
     */
    public function getWeapons()
    {
        return $this->weapons;
    }

    /**
     * @param Collection $weapons
     * @return PostGameCarnageReportEntryExtended
     */
    public function setWeapons(Collection $weapons)
    {
        $this->weapons = $weapons;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param Collection $values
     * @return PostGameCarnageReportEntryExtended
     */
    public function setValues(Collection $values)
    {
        $this->values = $values;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return PostGameCarnageReportEntryExtended
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('weapons', null, PostGameCarnageReportEntryExtendedWeapon::class . '::toCollection')
            ->add('values', null, ActivityValue::class . '::toCollectionUsingKey');
        return $mapper->map($val);
    }
}
