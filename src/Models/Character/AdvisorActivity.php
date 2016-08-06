<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class AdvisorActivity
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivity
{
    use ModelTrait;

    /**
     * @var string
     */
    private $identifier;

    /**
     * @var AdvisorActivityStatus
     */
    private $status;

    /**
     * @var AdvisorActivityDisplay
     */
    private $display;

    /**
     * @var AdvisorActivityCompletion
     */
    private $completion;

    /**
     * @var int
     */
    private $vendorHash;

    /**
     * @var int
     */
    private $progressionHash;

    /**
     * Int
     * @var Collection
     */
    private $bountyHashes;

    /**
     * Int
     * @var Collection
     */
    private $questHashes;

    /**
     * AdvisorActivityTier
     * @var Collection
     */
    private $activityTiers;

    /**
     * AdvisorActivityExtended
     * @var AdvisorActivityExtended
     */
    private $extended;

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     * @return AdvisorActivity
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = (string) $identifier;
        return $this;
    }

    /**
     * @return AdvisorActivityStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param AdvisorActivityStatus $status
     * @return AdvisorActivity
     */
    public function setStatus(AdvisorActivityStatus $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return AdvisorActivityDisplay
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @param AdvisorActivityDisplay $display
     * @return AdvisorActivity
     */
    public function setDisplay(AdvisorActivityDisplay $display)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * @return AdvisorActivityCompletion
     */
    public function getCompletion()
    {
        return $this->completion;
    }

    /**
     * @param AdvisorActivityCompletion $completion
     * @return AdvisorActivity
     */
    public function setCompletion(AdvisorActivityCompletion $completion)
    {
        $this->completion = $completion;
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
     * @return AdvisorActivity
     */
    public function setVendorHash($vendorHash)
    {
        $this->vendorHash = (int) $vendorHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getProgressionHash()
    {
        return $this->progressionHash;
    }

    /**
     * @param int $progressionHash
     * @return AdvisorActivity
     */
    public function setProgressionHash($progressionHash)
    {
        $this->progressionHash = (int) $progressionHash;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getBountyHashes()
    {
        return $this->bountyHashes;
    }

    /**
     * @param Collection $bountyHashes
     * @return AdvisorActivity
     */
    public function setBountyHashes(Collection $bountyHashes)
    {
        $this->bountyHashes = $bountyHashes;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getQuestHashes()
    {
        return $this->questHashes;
    }

    /**
     * @param Collection $questHashes
     * @return AdvisorActivity
     */
    public function setQuestHashes(Collection $questHashes)
    {
        $this->questHashes = $questHashes;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getActivityTiers()
    {
        return $this->activityTiers;
    }

    /**
     * @param Collection $activityTiers
     * @return AdvisorActivity
     */
    public function setActivityTiers(Collection $activityTiers)
    {
        $this->activityTiers = $activityTiers;
        return $this;
    }

    /**
     * @return AdvisorActivityExtended
     */
    public function getExtended()
    {
        return $this->extended;
    }

    /**
     * @param AdvisorActivityExtended $extended
     * @return AdvisorActivity
     */
    public function setExtended(AdvisorActivityExtended $extended)
    {
        $this->extended = $extended;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorActivity
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('identifier')
            ->add('status', null, AdvisorActivityStatus::class . '::toObject')
            ->add('display', null, AdvisorActivityDisplay::class . '::toObject')
            ->add('completion', null, AdvisorActivityCompletion::class . '::toObject')
            ->add('vendorHash')
            ->add('progressionHash')
            ->add('bountyHashes', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('questHashes', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('activityTiers', null, AdvisorActivityTier::class . '::toCollection')
            ->add('extended', null, AdvisorActivityExtended::class . '::toObject');
        return $mapper->map($val);
    }
}
