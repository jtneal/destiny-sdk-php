<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class TalentGridExclusiveSet
 * @package Necowebs\Destiny\Models\Manifest
 */
class TalentGridExclusiveSet
{
    use ModelTrait;

    /**
     * @var Collection
     */
    private $nodeIndexes;

    /**
     * @return Collection
     */
    public function getNodeIndexes()
    {
        return $this->nodeIndexes;
    }

    /**
     * @param Collection $nodeIndexes
     * @return TalentGridExclusiveSet
     */
    public function setNodeIndexes(Collection $nodeIndexes)
    {
        $this->nodeIndexes = $nodeIndexes;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return TalentGridExclusiveSet
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('nodeIndexes', null, MapperHelper::class . '::mapArrayToCollectionInt');
        return $mapper->map($val);
    }
}
