<?php

namespace Necowebs\Destiny\Models\Manifest;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class DirectorBookNodeState
 * @package Necowebs\Destiny\Models\Manifest
 */
class DirectorBookNodeState
{
    use ModelTrait;

    /**
     * @var int
     */
    private $state;

    /**
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param int $state
     * @return DirectorBookNodeState
     */
    public function setState($state)
    {
        $this->state = (int) $state;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return DirectorBookNodeState
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('state');
        return $mapper->map($val);
    }
}
