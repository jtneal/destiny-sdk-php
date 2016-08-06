<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class SummaryInventory
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryInventory
{
    use ModelTrait;

    /**
     * @var Collection
     */
    private $items;

    /**
     * @var Collection
     */
    private $currencies;

    /**
     * @return Collection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param Collection $items
     * @return SummaryInventory
     */
    public function setItems(Collection $items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getCurrencies()
    {
        return $this->currencies;
    }

    /**
     * @param Collection $currencies
     * @return SummaryInventory
     */
    public function setCurrencies(Collection $currencies)
    {
        $this->currencies = $currencies;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return SummaryInventory
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('items', null, MapperHelper::class . '::mapArrayToCollectionInt')
            ->add('currencies', null, SummaryInventoryCurrency::class . '::toCollection');
        return $mapper->map($val);
    }
}
