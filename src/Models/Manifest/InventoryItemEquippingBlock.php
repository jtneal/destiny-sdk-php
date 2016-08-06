<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class InventoryItemEquippingBlock
 * @package Necowebs\Destiny\Models\Manifest
 */
class InventoryItemEquippingBlock
{
    use ModelTrait;

    /**
     * @var int
     */
    private $weaponSandboxPatternIndex;

    /**
     * @var int
     */
    private $gearArtArrangementIndex;

    /**
     * @var Collection
     */
    private $defaultDyes;

    /**
     * @var Collection
     */
    private $lockedDyes;

    /**
     * @var Collection
     */
    private $customDyes;

    /**
     * @var DirectorBookExpression
     */
    private $customDyeExpression;

    /**
     * @var int
     */
    private $weaponPatternHash;

    /**
     * @var Collection
     */
    private $arrangements;

    /**
     * @return int
     */
    public function getWeaponSandboxPatternIndex()
    {
        return $this->weaponSandboxPatternIndex;
    }

    /**
     * @param int $weaponSandboxPatternIndex
     * @return InventoryItemEquippingBlock
     */
    public function setWeaponSandboxPatternIndex($weaponSandboxPatternIndex)
    {
        $this->weaponSandboxPatternIndex = (int) $weaponSandboxPatternIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getGearArtArrangementIndex()
    {
        return $this->gearArtArrangementIndex;
    }

    /**
     * @param int $gearArtArrangementIndex
     * @return InventoryItemEquippingBlock
     */
    public function setGearArtArrangementIndex($gearArtArrangementIndex)
    {
        $this->gearArtArrangementIndex = (int) $gearArtArrangementIndex;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getDefaultDyes()
    {
        return $this->defaultDyes;
    }

    /**
     * @param Collection $defaultDyes
     * @return InventoryItemEquippingBlock
     */
    public function setDefaultDyes(Collection $defaultDyes)
    {
        $this->defaultDyes = $defaultDyes;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getLockedDyes()
    {
        return $this->lockedDyes;
    }

    /**
     * @param Collection $lockedDyes
     * @return InventoryItemEquippingBlock
     */
    public function setLockedDyes(Collection $lockedDyes)
    {
        $this->lockedDyes = $lockedDyes;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getCustomDyes()
    {
        return $this->customDyes;
    }

    /**
     * @param Collection $customDyes
     * @return InventoryItemEquippingBlock
     */
    public function setCustomDyes(Collection $customDyes)
    {
        $this->customDyes = $customDyes;
        return $this;
    }

    /**
     * @return DirectorBookExpression
     */
    public function getCustomDyeExpression()
    {
        return $this->customDyeExpression;
    }

    /**
     * @param DirectorBookExpression $customDyeExpression
     * @return InventoryItemEquippingBlock
     */
    public function setCustomDyeExpression(DirectorBookExpression $customDyeExpression)
    {
        $this->customDyeExpression = $customDyeExpression;
        return $this;
    }

    /**
     * @return int
     */
    public function getWeaponPatternHash()
    {
        return $this->weaponPatternHash;
    }

    /**
     * @param int $weaponPatternHash
     * @return InventoryItemEquippingBlock
     */
    public function setWeaponPatternHash($weaponPatternHash)
    {
        $this->weaponPatternHash = (int) $weaponPatternHash;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getArrangements()
    {
        return $this->arrangements;
    }

    /**
     * @param Collection $arrangements
     * @return InventoryItemEquippingBlock
     */
    public function setArrangements(Collection $arrangements)
    {
        $this->arrangements = $arrangements;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return InventoryItemEquippingBlock
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('weaponSandboxPatternIndex')
            ->add('gearArtArrangementIndex')
            ->add('defaultDyes', null, InventoryItemDye::class . '::toCollection')
            ->add('lockedDyes', null, InventoryItemDye::class . '::toCollection')
            ->add('customDyes', null, InventoryItemDye::class . '::toCollection')
            ->add('customDyeExpression', null, DirectorBookExpression::class . '::toObject')
            ->add('weaponPatternHash')
            ->add('arrangements', null, InventoryItemEquippingBlockArrangement::class . '::toCollection');
        return $mapper->map($val);
    }
}
