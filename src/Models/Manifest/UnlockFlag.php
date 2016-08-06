<?php

namespace Necowebs\Destiny\Models\Manifest;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class UnlockFlag
 * @package Necowebs\Destiny\Models\Manifest
 */
class UnlockFlag
{
    use ModelTrait;

    /**
     * @var int
     */
    private $flagHash;

    /**
     * @var bool
     */
    private $isOffer;

    /**
     * @var int
     */
    private $unlockType;

    /**
     * @var int
     */
    private $hash;

    /**
     * @var int
     */
    private $index;

    /**
     * @return int
     */
    public function getFlagHash()
    {
        return $this->flagHash;
    }

    /**
     * @param int $flagHash
     * @return UnlockFlag
     */
    public function setFlagHash($flagHash)
    {
        $this->flagHash = (int) $flagHash;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsOffer()
    {
        return $this->isOffer;
    }

    /**
     * @param bool $isOffer
     * @return UnlockFlag
     */
    public function setIsOffer($isOffer)
    {
        $this->isOffer = (bool) $isOffer;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnlockType()
    {
        return $this->unlockType;
    }

    /**
     * @param int $unlockType
     * @return UnlockFlag
     */
    public function setUnlockType($unlockType)
    {
        $this->unlockType = (int) $unlockType;
        return $this;
    }

    /**
     * @return int
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param int $hash
     * @return UnlockFlag
     */
    public function setHash($hash)
    {
        $this->hash = (int) $hash;
        return $this;
    }

    /**
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param int $index
     * @return UnlockFlag
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return UnlockFlag
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('flagHash')
            ->add('isOffer')
            ->add('unlockType')
            ->add('hash')
            ->add('index');
        return $mapper->map($val);
    }
}
