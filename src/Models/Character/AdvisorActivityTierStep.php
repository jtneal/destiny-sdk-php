<?php

namespace Necowebs\Destiny\Models\Character;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class AdvisorActivityTierStep
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityTierStep
{
    use ModelTrait;

    /**
     * @var bool
     */
    private $complete;

    /**
     * @return bool
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * @param bool $complete
     * @return AdvisorActivityTierStep
     */
    public function setComplete($complete)
    {
        $this->complete = (bool) $complete;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorActivityTierStep
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('complete');
        return $mapper->map($val);
    }
}
