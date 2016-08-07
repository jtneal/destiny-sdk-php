<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class Activities
 * @package Necowebs\Destiny\Models\Character
 */
class Activities
{
    use ModelTrait;

    /**
     * @var string
     */
    private $dateActivityStarted;

    /**
     * @var Collection
     */
    private $available;

    /**
     * @return string
     */
    public function getDateActivityStarted()
    {
        return $this->dateActivityStarted;
    }

    /**
     * @param string $dateActivityStarted
     * @return Activities
     */
    public function setDateActivityStarted($dateActivityStarted)
    {
        $this->dateActivityStarted = (string) $dateActivityStarted;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param Collection $available
     * @return Activities
     */
    public function setAvailable(Collection $available)
    {
        $this->available = $available;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Activities
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('dateActivityStarted')
            ->add('available', null, AdvisorActivityData::class . '::toCollection');
        return $mapper->map($val);
    }
}
