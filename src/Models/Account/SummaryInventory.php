<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

/**
 * Class SummaryInventory
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryInventory
{
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
}
