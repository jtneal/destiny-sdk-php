<?php

namespace Necowebs\Destiny\Models\Manifest;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class Destination
 * @package Necowebs\Destiny\Models\Manifest
 */
class Destination
{
    use ModelTrait;

    /**
     * @var int
     */
    private $destinationHash;

    /**
     * @var string
     */
    private $destinationName;

    /**
     * @var string
     */
    private $destinationDescription;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var int
     */
    private $placeHash;

    /**
     * @var string
     */
    private $destinationIdentifier;

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
    public function getDestinationHash()
    {
        return $this->destinationHash;
    }

    /**
     * @param int $destinationHash
     * @return Destination
     */
    public function setDestinationHash($destinationHash)
    {
        $this->destinationHash = (int) $destinationHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationName()
    {
        return $this->destinationName;
    }

    /**
     * @param string $destinationName
     * @return Destination
     */
    public function setDestinationName($destinationName)
    {
        $this->destinationName = (string) $destinationName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationDescription()
    {
        return $this->destinationDescription;
    }

    /**
     * @param string $destinationDescription
     * @return Destination
     */
    public function setDestinationDescription($destinationDescription)
    {
        $this->destinationDescription = (string) $destinationDescription;
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
     * @return Destination
     */
    public function setIcon($icon)
    {
        $this->icon = (string) $icon;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlaceHash()
    {
        return $this->placeHash;
    }

    /**
     * @param int $placeHash
     * @return Destination
     */
    public function setPlaceHash($placeHash)
    {
        $this->placeHash = (int) $placeHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationIdentifier()
    {
        return $this->destinationIdentifier;
    }

    /**
     * @param string $destinationIdentifier
     * @return Destination
     */
    public function setDestinationIdentifier($destinationIdentifier)
    {
        $this->destinationIdentifier = (string) $destinationIdentifier;
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
     * @return Destination
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
     * @return Destination
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Destination
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('destinationHash')
            ->add('destinationName')
            ->add('destinationDescription')
            ->add('icon')
            ->add('placeHash')
            ->add('destinationIdentifier')
            ->add('hash')
            ->add('index');
        return $mapper->map($val);
    }
}
