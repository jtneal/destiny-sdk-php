<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class Destination
 * @package Necowebs\Destiny\Models\Manifest
 */
class Destination
{
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
     * @var Place
     */
    private $place;

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
     * @return Place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param Place $place
     * @return Destination
     */
    public function setPlace(Place $place)
    {
        $this->place = $place;
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
}
