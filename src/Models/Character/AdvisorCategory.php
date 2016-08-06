<?php

namespace Necowebs\Destiny\Models\Character;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class AdvisorCategory
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorCategory
{
    use ModelTrait;

    /**
     * @var int
     */
    private $categoryHash;

    /**
     * @return int
     */
    public function getCategoryHash()
    {
        return $this->categoryHash;
    }

    /**
     * @param int $categoryHash
     * @return AdvisorCategory
     */
    public function setCategoryHash($categoryHash)
    {
        $this->categoryHash = (int) $categoryHash;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorCategory
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('categoryHash');
        return $mapper->map($val);
    }
}
