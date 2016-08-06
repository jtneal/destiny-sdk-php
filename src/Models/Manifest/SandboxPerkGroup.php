<?php

namespace Necowebs\Destiny\Models\Manifest;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class SandboxPerkGroup
 * @package Necowebs\Destiny\Models\Manifest
 */
class SandboxPerkGroup
{
    use ModelTrait;

    /**
     * @var int
     */
    private $weaponPerformance;

    /**
     * @var int
     */
    private $impactEffects;

    /**
     * @var int
     */
    private $guardianAttributes;

    /**
     * @var int
     */
    private $lightAbilities;

    /**
     * @var int
     */
    private $damageTypes;

    /**
     * @return int
     */
    public function getWeaponPerformance()
    {
        return $this->weaponPerformance;
    }

    /**
     * @param int $weaponPerformance
     * @return SandboxPerkGroup
     */
    public function setWeaponPerformance($weaponPerformance)
    {
        $this->weaponPerformance = (int) $weaponPerformance;
        return $this;
    }

    /**
     * @return int
     */
    public function getImpactEffects()
    {
        return $this->impactEffects;
    }

    /**
     * @param int $impactEffects
     * @return SandboxPerkGroup
     */
    public function setImpactEffects($impactEffects)
    {
        $this->impactEffects = (int) $impactEffects;
        return $this;
    }

    /**
     * @return int
     */
    public function getGuardianAttributes()
    {
        return $this->guardianAttributes;
    }

    /**
     * @param int $guardianAttributes
     * @return SandboxPerkGroup
     */
    public function setGuardianAttributes($guardianAttributes)
    {
        $this->guardianAttributes = (int) $guardianAttributes;
        return $this;
    }

    /**
     * @return int
     */
    public function getLightAbilities()
    {
        return $this->lightAbilities;
    }

    /**
     * @param int $lightAbilities
     * @return SandboxPerkGroup
     */
    public function setLightAbilities($lightAbilities)
    {
        $this->lightAbilities = (int) $lightAbilities;
        return $this;
    }

    /**
     * @return int
     */
    public function getDamageTypes()
    {
        return $this->damageTypes;
    }

    /**
     * @param int $damageTypes
     * @return SandboxPerkGroup
     */
    public function setDamageTypes($damageTypes)
    {
        $this->damageTypes = (int) $damageTypes;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return SandboxPerkGroup
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('weaponPerformance')
            ->add('impactEffects')
            ->add('guardianAttributes')
            ->add('lightAbilities')
            ->add('damageTypes');
        return $mapper->map($val);
    }
}
