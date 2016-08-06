<?php

namespace Necowebs\Destiny\Models\Manifest;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class Place
 * @package Necowebs\Destiny\Models\Manifest
 */
class Place
{
    use ModelTrait;

    /**
     * @var int
     */
    private $placeHash;

    /**
     * @var string
     */
    private $placeName;

    /**
     * @var string
     */
    private $placeDescription;

    /**
     * @var string
     */
    private $icon;

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
    public function getPlaceHash()
    {
        return $this->placeHash;
    }

    /**
     * @param int $placeHash
     * @return Place
     */
    public function setPlaceHash($placeHash)
    {
        $this->placeHash = (int) $placeHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlaceName()
    {
        return $this->placeName;
    }

    /**
     * @param string $placeName
     * @return Place
     */
    public function setPlaceName($placeName)
    {
        $this->placeName = (string) $placeName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlaceDescription()
    {
        return $this->placeDescription;
    }

    /**
     * @param string $placeDescription
     * @return Place
     */
    public function setPlaceDescription($placeDescription)
    {
        $this->placeDescription = (string) $placeDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     * @return Place
     */
    public function setIcon($icon)
    {
        $this->icon = (string) $icon;
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
     * @return Place
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
     * @return Place
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Place
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('placeHash')
            ->add('placeName')
            ->add('placeDescription')
            ->add('icon')
            ->add('hash')
            ->add('index');
        return $mapper->map($val);
    }
}
