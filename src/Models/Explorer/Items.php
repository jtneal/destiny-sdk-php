<?php

namespace Necowebs\Destiny\Models\Explorer;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class Items
 * @package Necowebs\Destiny\Models\Explorer
 */
class Items
{
    use ModelTrait;

    /**
     * @var Collection
     */
    private $itemHashes;

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
    public function getItemHashes()
    {
        return $this->itemHashes;
    }

    /**
     * @param Collection $itemHashes
     * @return Items
     */
    public function setItemHashes(Collection $itemHashes)
    {
        $this->itemHashes = $itemHashes;
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
     * @return Items
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
     * @return Items
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
     * @return Items
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
     * @return Items
     */
    public function setUseTotalResults($useTotalResults)
    {
        $this->useTotalResults = (bool) $useTotalResults;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Items
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('itemHashes', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('totalResults')
            ->add('hasMore')
            ->add('query', null, ItemsQuery::class . '::toObject')
            ->add('useTotalResults');
        return $mapper->map($val);
    }
}
