<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class AdvisorBounty
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorBounty
{
    use ModelTrait;

    /**
     * @var int
     */
    private $questHash;

    /**
     * @var int
     */
    private $stepHash;

    /**
     * @var Collection
     */
    private $stepObjectives;

    /**
     * @var bool
     */
    private $tracked;

    /**
     * @var string
     */
    private $itemInstanceId;

    /**
     * @var bool
     */
    private $completed;

    /**
     * @var bool
     */
    private $started;

    /**
     * @var int
     */
    private $vendorHash;

    /**
     * @return int
     */
    public function getQuestHash()
    {
        return $this->questHash;
    }

    /**
     * @param int $questHash
     * @return AdvisorBounty
     */
    public function setQuestHash($questHash)
    {
        $this->questHash = (int) $questHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getStepHash()
    {
        return $this->stepHash;
    }

    /**
     * @param int $stepHash
     * @return AdvisorBounty
     */
    public function setStepHash($stepHash)
    {
        $this->stepHash = (int) $stepHash;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getStepObjectives()
    {
        return $this->stepObjectives;
    }

    /**
     * @param Collection $stepObjectives
     * @return AdvisorBounty
     */
    public function setStepObjectives(Collection $stepObjectives)
    {
        $this->stepObjectives = $stepObjectives;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTracked()
    {
        return $this->tracked;
    }

    /**
     * @param bool $tracked
     * @return AdvisorBounty
     */
    public function setTracked($tracked)
    {
        $this->tracked = (bool) $tracked;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemInstanceId()
    {
        return $this->itemInstanceId;
    }

    /**
     * @param string $itemInstanceId
     * @return AdvisorBounty
     */
    public function setItemInstanceId($itemInstanceId)
    {
        $this->itemInstanceId = (string) $itemInstanceId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCompleted()
    {
        return $this->completed;
    }

    /**
     * @param bool $completed
     * @return AdvisorBounty
     */
    public function setCompleted($completed)
    {
        $this->completed = (bool) $completed;
        return $this;
    }

    /**
     * @return bool
     */
    public function getStarted()
    {
        return $this->started;
    }

    /**
     * @param bool $started
     * @return AdvisorBounty
     */
    public function setStarted($started)
    {
        $this->started = (bool) $started;
        return $this;
    }

    /**
     * @return int
     */
    public function getVendorHash()
    {
        return $this->vendorHash;
    }

    /**
     * @param int $vendorHash
     * @return AdvisorBounty
     */
    public function setVendorHash($vendorHash)
    {
        $this->vendorHash = (int) $vendorHash;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorBounty
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('questHash')
            ->add('stepHash')
            ->add('stepObjectives', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('tracked')
            ->add('itemInstanceId')
            ->add('completed')
            ->add('started')
            ->add('vendorHash');
        return $mapper->map($val);
    }
}
