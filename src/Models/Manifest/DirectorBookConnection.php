<?php

namespace Necowebs\Destiny\Models\Manifest;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class DirectorBookConnection
 * @package Necowebs\Destiny\Models\Manifest
 */
class DirectorBookConnection
{
    use ModelTrait;

    /**
     * @var int
     */
    private $sourceNodeIndex;

    /**
     * @var int
     */
    private $destinationNodeIndex;

    /**
     * @return int
     */
    public function getSourceNodeIndex()
    {
        return $this->sourceNodeIndex;
    }

    /**
     * @param int $sourceNodeIndex
     * @return DirectorBookConnection
     */
    public function setSourceNodeIndex($sourceNodeIndex)
    {
        $this->sourceNodeIndex = (int) $sourceNodeIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getDestinationNodeIndex()
    {
        return $this->destinationNodeIndex;
    }

    /**
     * @param int $destinationNodeIndex
     * @return DirectorBookConnection
     */
    public function setDestinationNodeIndex($destinationNodeIndex)
    {
        $this->destinationNodeIndex = (int) $destinationNodeIndex;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return DirectorBookConnection
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('sourceNodeIndex')
            ->add('destinationNodeIndex');
        return $mapper->map($val);
    }
}
