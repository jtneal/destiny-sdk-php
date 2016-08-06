<?php

namespace Necowebs\Destiny\Models\Manifest;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class SandboxPerk
 * @package Necowebs\Destiny\Models\Manifest
 */
class SandboxPerk
{
    use ModelTrait;

    /**
     * @var int
     */
    private $perkHash;

    /**
     * @var string
     */
    private $displayName;

    /**
     * @var string
     */
    private $displayDescription;

    /**
     * @var string
     */
    private $displayIcon;

    /**
     * @var bool
     */
    private $isDisplayable;

    /**
     * @var SandboxPerkGroup
     */
    private $perkGroups;

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
    public function getPerkHash()
    {
        return $this->perkHash;
    }

    /**
     * @param int $perkHash
     * @return SandboxPerk
     */
    public function setPerkHash($perkHash)
    {
        $this->perkHash = (int) $perkHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return SandboxPerk
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = (string) $displayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayDescription()
    {
        return $this->displayDescription;
    }

    /**
     * @param string $displayDescription
     * @return SandboxPerk
     */
    public function setDisplayDescription($displayDescription)
    {
        $this->displayDescription = (string) $displayDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayIcon()
    {
        return $this->displayIcon;
    }

    /**
     * @param string $displayIcon
     * @return SandboxPerk
     */
    public function setDisplayIcon($displayIcon)
    {
        $this->displayIcon = (string) $displayIcon;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDisplayable()
    {
        return $this->isDisplayable;
    }

    /**
     * @param bool $isDisplayable
     * @return SandboxPerk
     */
    public function setIsDisplayable($isDisplayable)
    {
        $this->isDisplayable = (bool) $isDisplayable;
        return $this;
    }

    /**
     * @return SandboxPerkGroup
     */
    public function getPerkGroups()
    {
        return $this->perkGroups;
    }

    /**
     * @param SandboxPerkGroup $perkGroups
     * @return SandboxPerk
     */
    public function setPerkGroups(SandboxPerkGroup $perkGroups)
    {
        $this->perkGroups = $perkGroups;
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
     * @return SandboxPerk
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
     * @return SandboxPerk
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return SandboxPerk
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('perkHash')
            ->add('displayName')
            ->add('displayDescription')
            ->add('displayIcon')
            ->add('isDisplayable')
            ->add('perkGroups', null, SandboxPerkGroup::class . '::toObject')
            ->add('hash')
            ->add('index');
        return $mapper->map($val);
    }
}
