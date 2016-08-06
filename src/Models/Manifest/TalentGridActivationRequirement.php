<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class TalentGridActivationRequirement
 * @package Necowebs\Destiny\Models\Manifest
 */
class TalentGridActivationRequirement
{
    use ModelTrait;

    /**
     * @var int
     */
    private $gridLevel;

    /**
     * @var Collection
     */
    private $materialRequirementHashes;

    /**
     * @return int
     */
    public function getGridLevel()
    {
        return $this->gridLevel;
    }

    /**
     * @param int $gridLevel
     * @return TalentGridActivationRequirement
     */
    public function setGridLevel($gridLevel)
    {
        $this->gridLevel = (int) $gridLevel;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getMaterialRequirementHashes()
    {
        return $this->materialRequirementHashes;
    }

    /**
     * @param Collection $materialRequirementHashes
     * @return TalentGridActivationRequirement
     */
    public function setMaterialRequirementHashes(Collection $materialRequirementHashes)
    {
        $this->materialRequirementHashes = $materialRequirementHashes;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return TalentGridActivationRequirement
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('gridLevel')
            ->add('materialRequirementHashes', null, MapperHelper::class . '::mapArrayToCollectionInt');
        return $mapper->map($val);
    }
}
