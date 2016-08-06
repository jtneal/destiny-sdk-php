<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Account\AdvisorRecordBookRecordObjective;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class AdvisorActivityExtended
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityExtended
{
    use ModelTrait;

    /**
     * @var AdvisorActivityExtendedScoreCard
     */
    private $scoreCard;

    /**
     * @var array
     */
    private $winRewardDetails;

    /**
     * @var int
     */
    private $highestWinRank;

    /**
     * AdvisorActivityExtendedOrder
     * @var Collection
     */
    private $orders;

    /**
     * AdvisorActivitySkullCategory
     * @var Collection
     */
    private $skullCategories;

    /**
     * Necowebs\Destiny\Models\Account\AdvisorRecordBookRecordObjective
     * @var Collection
     */
    private $objectives;

    /**
     * AdvisorActivityExtendedRound
     * @var Collection
     */
    private $rounds;

    /**
     * @return AdvisorActivityExtendedScoreCard
     */
    public function getScoreCard()
    {
        return $this->scoreCard;
    }

    /**
     * @param AdvisorActivityExtendedScoreCard $scoreCard
     * @return AdvisorActivityExtended
     */
    public function setScoreCard(AdvisorActivityExtendedScoreCard $scoreCard)
    {
        $this->scoreCard = $scoreCard;
        return $this;
    }

    /**
     * @return array
     */
    public function getWinRewardDetails()
    {
        return $this->winRewardDetails;
    }

    /**
     * @param array $winRewardDetails
     * @return AdvisorActivityExtended
     */
    public function setWinRewardDetails(array $winRewardDetails)
    {
        $this->winRewardDetails = $winRewardDetails;
        return $this;
    }

    /**
     * @return int
     */
    public function getHighestWinRank()
    {
        return $this->highestWinRank;
    }

    /**
     * @param int $highestWinRank
     * @return AdvisorActivityExtended
     */
    public function setHighestWinRank($highestWinRank)
    {
        $this->highestWinRank = (int) $highestWinRank;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param Collection $orders
     * @return AdvisorActivityExtended
     */
    public function setOrders(Collection $orders)
    {
        $this->orders = $orders;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getSkullCategories()
    {
        return $this->skullCategories;
    }

    /**
     * @param Collection $skullCategories
     * @return AdvisorActivityExtended
     */
    public function setSkullCategories(Collection $skullCategories)
    {
        $this->skullCategories = $skullCategories;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getObjectives()
    {
        return $this->objectives;
    }

    /**
     * @param Collection $objectives
     * @return AdvisorActivityExtended
     */
    public function setObjectives(Collection $objectives)
    {
        $this->objectives = $objectives;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getRounds()
    {
        return $this->rounds;
    }

    /**
     * @param Collection $rounds
     * @return AdvisorActivityExtended
     */
    public function setRounds(Collection $rounds)
    {
        $this->rounds = $rounds;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorActivityExtended
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('scoreCard', null, AdvisorActivityExtendedScoreCard::class . '::toObject')
            ->add('winRewardDetails')
            ->add('highestWinRank')
            ->add('orders', null, AdvisorActivityExtendedOrder::class . '::toCollection')
            ->add('skullCategories', null, AdvisorActivitySkullCategory::class . '::toCollection')
            ->add('objectives', null, AdvisorRecordBookRecordObjective::class . '::toCollection')
            ->add('rounds', null, AdvisorActivityExtendedRound::class . '::toCollection');
        return $mapper->map($val);
    }
}
