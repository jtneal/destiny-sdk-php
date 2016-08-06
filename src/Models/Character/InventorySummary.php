<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Account\Item;
use Necowebs\Destiny\Models\Account\SummaryInventoryCurrency;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class InventorySummary
 * @package Necowebs\Destiny\Models\Character
 */
class InventorySummary
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
     * @return InventorySummary
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
     * @return InventorySummary
     */
    public function setCurrencies(Collection $currencies)
    {
        $this->currencies = $currencies;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return InventorySummary
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('items', null, Item::class . '::toCollection')
            ->add('currencies', null, SummaryInventoryCurrency::class . '::toCollection');
        return $mapper->map($val);
    }
}
