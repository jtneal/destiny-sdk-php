<?php

namespace Necowebs\Destiny\Models\Character;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class InventoryItemTalentNode
 * @package Necowebs\Destiny\Models\Character
 */
class InventoryItemTalentNode
{
    use ModelTrait;

    /**
     * @var int
     */
    private $nodeIndex;

    /**
     * @var int
     */
    private $nodeHash;

    /**
     * @var int
     */
    private $state;

    /**
     * @var string
     */
    private $stateId;

    /**
     * @var bool
     */
    private $isActivated;

    /**
     * @var int
     */
    private $stepIndex;

    /**
     * @var array
     */
    private $materialsToUpgrade;

    /**
     * @var int
     */
    private $activationGridLevel;

    /**
     * @var int
     */
    private $progressPercent;

    /**
     * @var bool
     */
    private $hidden;

    /**
     * @return int
     */
    public function getNodeIndex()
    {
        return $this->nodeIndex;
    }

    /**
     * @param int $nodeIndex
     * @return InventoryItemTalentNode
     */
    public function setNodeIndex($nodeIndex)
    {
        $this->nodeIndex = (int) $nodeIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getNodeHash()
    {
        return $this->nodeHash;
    }

    /**
     * @param int $nodeHash
     * @return InventoryItemTalentNode
     */
    public function setNodeHash($nodeHash)
    {
        $this->nodeHash = (int) $nodeHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param int $state
     * @return InventoryItemTalentNode
     */
    public function setState($state)
    {
        $this->state = (int) $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getStateId()
    {
        return $this->stateId;
    }

    /**
     * @param string $stateId
     * @return InventoryItemTalentNode
     */
    public function setStateId($stateId)
    {
        $this->stateId = (string) $stateId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsActivated()
    {
        return $this->isActivated;
    }

    /**
     * @param bool $isActivated
     * @return InventoryItemTalentNode
     */
    public function setIsActivated($isActivated)
    {
        $this->isActivated = (bool) $isActivated;
        return $this;
    }

    /**
     * @return int
     */
    public function getStepIndex()
    {
        return $this->stepIndex;
    }

    /**
     * @param int $stepIndex
     * @return InventoryItemTalentNode
     */
    public function setStepIndex($stepIndex)
    {
        $this->stepIndex = (int) $stepIndex;
        return $this;
    }

    /**
     * @return array
     */
    public function getMaterialsToUpgrade()
    {
        return $this->materialsToUpgrade;
    }

    /**
     * @param array $materialsToUpgrade
     * @return InventoryItemTalentNode
     */
    public function setMaterialsToUpgrade(array $materialsToUpgrade)
    {
        $this->materialsToUpgrade = $materialsToUpgrade;
        return $this;
    }

    /**
     * @return int
     */
    public function getActivationGridLevel()
    {
        return $this->activationGridLevel;
    }

    /**
     * @param int $activationGridLevel
     * @return InventoryItemTalentNode
     */
    public function setActivationGridLevel($activationGridLevel)
    {
        $this->activationGridLevel = (int) $activationGridLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getProgressPercent()
    {
        return $this->progressPercent;
    }

    /**
     * @param int $progressPercent
     * @return InventoryItemTalentNode
     */
    public function setProgressPercent($progressPercent)
    {
        $this->progressPercent = (int) $progressPercent;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * @param bool $hidden
     * @return InventoryItemTalentNode
     */
    public function setHidden($hidden)
    {
        $this->hidden = (bool) $hidden;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return InventoryItemTalentNode
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('nodeIndex')
            ->add('nodeHash')
            ->add('state')
            ->add('stateId')
            ->add('isActivated')
            ->add('stepIndex')
            ->add('materialsToUpgrade')
            ->add('activationGridLevel')
            ->add('progressPercent')
            ->add('hidden');
        return $mapper->map($val);
    }
}
