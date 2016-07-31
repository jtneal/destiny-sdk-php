<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class MaterialRequirementItem
 * @package Necowebs\Destiny\Models\Manifest
 */
class MaterialRequirementItem
{
    /**
     * @var int
     */
    private $itemHash;

    /**
     * @var bool
     */
    private $deleteOnAction;

    /**
     * @var int
     */
    private $count;

    /**
     * @var bool
     */
    private $omitFromRequirements;

    /**
     * @return int
     */
    public function getItemHash()
    {
        return $this->itemHash;
    }

    /**
     * @param int $itemHash
     * @return MaterialRequirementItem
     */
    public function setItemHash($itemHash)
    {
        $this->itemHash = (int) $itemHash;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDeleteOnAction()
    {
        return $this->deleteOnAction;
    }

    /**
     * @param bool $deleteOnAction
     * @return MaterialRequirementItem
     */
    public function setDeleteOnAction($deleteOnAction)
    {
        $this->deleteOnAction = (bool) $deleteOnAction;
        return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return MaterialRequirementItem
     */
    public function setCount($count)
    {
        $this->count = (int) $count;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOmitFromRequirements()
    {
        return $this->omitFromRequirements;
    }

    /**
     * @param bool $omitFromRequirements
     * @return MaterialRequirementItem
     */
    public function setOmitFromRequirements($omitFromRequirements)
    {
        $this->omitFromRequirements = (bool) $omitFromRequirements;
        return $this;
    }
}
