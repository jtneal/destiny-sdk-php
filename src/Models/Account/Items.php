<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class Items
 * @package Necowebs\Destiny\Models\Account
 */
class Items
{
    use ModelTrait;

    /**
     * @var Collection
     */
    private $items;

    /**
     * @var Collection
     */
    private $characters;

    /**
     * @return Collection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param Collection $items
     * @return Items
     */
    public function setItems(Collection $items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getCharacters()
    {
        return $this->characters;
    }

    /**
     * @param Collection $characters
     * @return Items
     */
    public function setCharacters(Collection $characters)
    {
        $this->characters = $characters;
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
            ->add('items', null, Item::class . '::toCollection')
            ->add('characters', null, SummaryCharacter::class . '::toCollection');
        return $mapper->map($val);
    }
}
