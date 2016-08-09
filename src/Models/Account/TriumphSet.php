<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class TriumphSet
 * @package Necowebs\Destiny\Models\Account
 */
class TriumphSet
{
    use ModelTrait;

    /**
     * @var int
     */
    private $triumphSetHash;

    /**
     * @var Collection
     */
    private $triumphs;

    /**
     * @return int
     */
    public function getTriumphSetHash()
    {
        return $this->triumphSetHash;
    }

    /**
     * @param int $triumphSetHash
     * @return TriumphSet
     */
    public function setTriumphSetHash($triumphSetHash)
    {
        $this->triumphSetHash = (int) $triumphSetHash;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getTriumphs()
    {
        return $this->triumphs;
    }

    /**
     * @param Collection $triumphs
     * @return TriumphSet
     */
    public function setTriumphs(Collection $triumphs)
    {
        $this->triumphs = $triumphs;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return TriumphSet
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('triumphSetHash')
            ->add('triumphs', null, Triumph::class . '::toCollection');
        return $mapper->map($val);
    }
}
