<?php

namespace Necowebs\Destiny\Models\Manifest;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class ArtDyeChannel
 * @package Necowebs\Destiny\Models\Manifest
 */
class ArtDyeChannel
{
    use ModelTrait;

    /**
     * @var int
     */
    private $channelHash;

    /**
     * @var int
     */
    private $index;

    /**
     * @var string
     */
    private $channelName;

    /**
     * @var int
     */
    private $hash;

    /**
     * @return int
     */
    public function getChannelHash()
    {
        return $this->channelHash;
    }

    /**
     * @param int $channelHash
     * @return ArtDyeChannel
     */
    public function setChannelHash($channelHash)
    {
        $this->channelHash = (int) $channelHash;
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
     * @return ArtDyeChannel
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }

    /**
     * @return string
     */
    public function getChannelName()
    {
        return $this->channelName;
    }

    /**
     * @param string $channelName
     * @return ArtDyeChannel
     */
    public function setChannelName($channelName)
    {
        $this->channelName = (string) $channelName;
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
     * @return ArtDyeChannel
     */
    public function setHash($hash)
    {
        $this->hash = (int) $hash;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return ArtDyeChannel
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('channelHash')
            ->add('index')
            ->add('channelName')
            ->add('hash');
        return $mapper->map($val);
    }
}
