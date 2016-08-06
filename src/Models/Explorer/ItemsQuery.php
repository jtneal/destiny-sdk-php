<?php

namespace Necowebs\Destiny\Models\Explorer;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class ItemsQuery
 * @package Necowebs\Destiny\Models\Explorer
 */
class ItemsQuery
{
    use ModelTrait;

    /**
     * @var int
     */
    private $itemsPerPage;

    /**
     * @var int
     */
    private $currentPage;

    /**
     * @return int
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }

    /**
     * @param int $itemsPerPage
     * @return ItemsQuery
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = (int) $itemsPerPage;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @param int $currentPage
     * @return ItemsQuery
     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage = (int) $currentPage;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return ItemsQuery
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('itemsPerPage')
            ->add('currentPage');
        return $mapper->map($val);
    }
}
