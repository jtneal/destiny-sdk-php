<?php

namespace Necowebs\Destiny\Models\Account;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class SummaryInventoryCurrency
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryInventoryCurrency
{
    use ModelTrait;

    /**
     * @var int
     */
    private $itemHash;

    /**
     * @var int
     */
    private $value;

    /**
     * @return int
     */
    public function getItemHash()
    {
        return $this->itemHash;
    }

    /**
     * @param int $itemHash
     * @return SummaryInventoryCurrency
     */
    public function setItemHash($itemHash)
    {
        $this->itemHash = (int) $itemHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     * @return SummaryInventoryCurrency
     */
    public function setValue($value)
    {
        $this->value = (int) $value;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return SummaryInventoryCurrency
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('itemHash')
            ->add('value');
        return $mapper->map($val);
    }
}
