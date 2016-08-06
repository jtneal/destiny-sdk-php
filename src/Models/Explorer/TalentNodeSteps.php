<?php

namespace Necowebs\Destiny\Models\Explorer;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class TalentNodeSteps
 * @package Necowebs\Destiny\Models\Explorer
 */
class TalentNodeSteps
{
    use ModelTrait;

    /**
     * @var Collection
     */
    private $stepHashes;

    /**
     * @var int
     */
    private $totalResults;

    /**
     * @var bool
     */
    private $hasMore;

    /**
     * @var ItemsQuery
     */
    private $query;

    /**
     * @var bool
     */
    private $useTotalResults;

    /**
     * @return Collection
     */
    public function getStepHashes()
    {
        return $this->stepHashes;
    }

    /**
     * @param Collection $stepHashes
     * @return TalentNodeSteps
     */
    public function setStepHashes(Collection $stepHashes)
    {
        $this->stepHashes = $stepHashes;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }

    /**
     * @param int $totalResults
     * @return TalentNodeSteps
     */
    public function setTotalResults($totalResults)
    {
        $this->totalResults = (int) $totalResults;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasMore()
    {
        return $this->hasMore;
    }

    /**
     * @param bool $hasMore
     * @return TalentNodeSteps
     */
    public function setHasMore($hasMore)
    {
        $this->hasMore = (bool) $hasMore;
        return $this;
    }

    /**
     * @return ItemsQuery
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param ItemsQuery $query
     * @return TalentNodeSteps
     */
    public function setQuery(ItemsQuery $query)
    {
        $this->query = $query;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUseTotalResults()
    {
        return $this->useTotalResults;
    }

    /**
     * @param bool $useTotalResults
     * @return TalentNodeSteps
     */
    public function setUseTotalResults($useTotalResults)
    {
        $this->useTotalResults = (bool) $useTotalResults;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return TalentNodeSteps
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('stepHashes', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('totalResults')
            ->add('hasMore')
            ->add('query', null, ItemsQuery::class . '::toObject')
            ->add('useTotalResults');
        return $mapper->map($val);
    }
}
