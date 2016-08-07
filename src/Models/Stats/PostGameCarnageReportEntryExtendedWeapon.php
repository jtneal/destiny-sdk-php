<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class PostGameCarnageReportEntryExtendedWeapon
 * @package Necowebs\Destiny\Models\Stats
 */
class PostGameCarnageReportEntryExtendedWeapon
{
    use ModelTrait;

    /**
     * @var int
     */
    private $referenceId;

    /**
     * @var Collection
     */
    private $values;

    /**
     * @return int
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * @param int $referenceId
     * @return PostGameCarnageReportEntryExtendedWeapon
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = (int) $referenceId;
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
     * @return PostGameCarnageReportEntryExtendedWeapon
     */
    public function setValues(Collection $values)
    {
        $this->values = $values;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return PostGameCarnageReportEntryExtendedWeapon
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('referenceId')
            ->add('values', null, ActivityValue::class . '::toCollectionUsingKey');
        return $mapper->map($val);
    }
}
