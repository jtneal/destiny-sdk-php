<?php

namespace Necowebs\Destiny\Models\Character;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class AdvisorActivityStatus
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityStatus
{
    use ModelTrait;

    /**
     * @var string
     */
    private $expirationDate;

    /**
     * @var string
     */
    private $startDate;

    /**
     * @var bool
     */
    private $expirationKnown;

    /**
     * @var bool
     */
    private $active;

    /**
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param string $expirationDate
     * @return AdvisorActivityStatus
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = (string) $expirationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     * @return AdvisorActivityStatus
     */
    public function setStartDate($startDate)
    {
        $this->startDate = (string) $startDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getExpirationKnown()
    {
        return $this->expirationKnown;
    }

    /**
     * @param bool $expirationKnown
     * @return AdvisorActivityStatus
     */
    public function setExpirationKnown($expirationKnown)
    {
        $this->expirationKnown = (bool) $expirationKnown;
        return $this;
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return AdvisorActivityStatus
     */
    public function setActive($active)
    {
        $this->active = (bool) $active;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorActivityStatus
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('expirationDate')
            ->add('startDate')
            ->add('expirationKnown')
            ->add('active');
        return $mapper->map($val);
    }
}
