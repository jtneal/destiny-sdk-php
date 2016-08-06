<?php

namespace Necowebs\Destiny\Models\Manifest;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class VendorCategory
 * @package Necowebs\Destiny\Models\Manifest
 */
class VendorCategory
{
    use ModelTrait;

    /**
     * @var int
     */
    private $categoryHash;

    /**
     * @var string
     */
    private $displayTitle;

    /**
     * @var int
     */
    private $overlayCurrencyItemHash;

    /**
     * @var int
     */
    private $quantityAvailable;

    /**
     * @var bool
     */
    private $showUnavailableItems;

    /**
     * @var bool
     */
    private $hideIfNoCurrency;

    /**
     * @var string
     */
    private $buyStringOverride;

    /**
     * @var string
     */
    private $overlayTitle;

    /**
     * @var string
     */
    private $overlayDescription;

    /**
     * @var string
     */
    private $overlayChoice;

    /**
     * @var string
     */
    private $overlayIcon;

    /**
     * @var bool
     */
    private $hasOverlay;

    /**
     * @var bool
     */
    private $hideFromRegularPurchase;

    /**
     * @return int
     */
    public function getCategoryHash()
    {
        return $this->categoryHash;
    }

    /**
     * @param int $categoryHash
     * @return VendorCategory
     */
    public function setCategoryHash($categoryHash)
    {
        $this->categoryHash = (int) $categoryHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayTitle()
    {
        return $this->displayTitle;
    }

    /**
     * @param string $displayTitle
     * @return VendorCategory
     */
    public function setDisplayTitle($displayTitle)
    {
        $this->displayTitle = (string) $displayTitle;
        return $this;
    }

    /**
     * @return int
     */
    public function getOverlayCurrencyItemHash()
    {
        return $this->overlayCurrencyItemHash;
    }

    /**
     * @param int $overlayCurrencyItemHash
     * @return VendorCategory
     */
    public function setOverlayCurrencyItemHash($overlayCurrencyItemHash)
    {
        $this->overlayCurrencyItemHash = (int) $overlayCurrencyItemHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantityAvailable()
    {
        return $this->quantityAvailable;
    }

    /**
     * @param int $quantityAvailable
     * @return VendorCategory
     */
    public function setQuantityAvailable($quantityAvailable)
    {
        $this->quantityAvailable = (int) $quantityAvailable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowUnavailableItems()
    {
        return $this->showUnavailableItems;
    }

    /**
     * @param bool $showUnavailableItems
     * @return VendorCategory
     */
    public function setShowUnavailableItems($showUnavailableItems)
    {
        $this->showUnavailableItems = (bool) $showUnavailableItems;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHideIfNoCurrency()
    {
        return $this->hideIfNoCurrency;
    }

    /**
     * @param bool $hideIfNoCurrency
     * @return VendorCategory
     */
    public function setHideIfNoCurrency($hideIfNoCurrency)
    {
        $this->hideIfNoCurrency = (bool) $hideIfNoCurrency;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuyStringOverride()
    {
        return $this->buyStringOverride;
    }

    /**
     * @param string $buyStringOverride
     * @return VendorCategory
     */
    public function setBuyStringOverride($buyStringOverride)
    {
        $this->buyStringOverride = (string) $buyStringOverride;
        return $this;
    }

    /**
     * @return string
     */
    public function getOverlayTitle()
    {
        return $this->overlayTitle;
    }

    /**
     * @param string $overlayTitle
     * @return VendorCategory
     */
    public function setOverlayTitle($overlayTitle)
    {
        $this->overlayTitle = (string) $overlayTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getOverlayDescription()
    {
        return $this->overlayDescription;
    }

    /**
     * @param string $overlayDescription
     * @return VendorCategory
     */
    public function setOverlayDescription($overlayDescription)
    {
        $this->overlayDescription = (string) $overlayDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getOverlayChoice()
    {
        return $this->overlayChoice;
    }

    /**
     * @param string $overlayChoice
     * @return VendorCategory
     */
    public function setOverlayChoice($overlayChoice)
    {
        $this->overlayChoice = (string) $overlayChoice;
        return $this;
    }

    /**
     * @return string
     */
    public function getOverlayIcon()
    {
        return $this->overlayIcon;
    }

    /**
     * @param string $overlayIcon
     * @return VendorCategory
     */
    public function setOverlayIcon($overlayIcon)
    {
        $this->overlayIcon = (string) $overlayIcon;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasOverlay()
    {
        return $this->hasOverlay;
    }

    /**
     * @param bool $hasOverlay
     * @return VendorCategory
     */
    public function setHasOverlay($hasOverlay)
    {
        $this->hasOverlay = (bool) $hasOverlay;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHideFromRegularPurchase()
    {
        return $this->hideFromRegularPurchase;
    }

    /**
     * @param bool $hideFromRegularPurchase
     * @return VendorCategory
     */
    public function setHideFromRegularPurchase($hideFromRegularPurchase)
    {
        $this->hideFromRegularPurchase = (bool) $hideFromRegularPurchase;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return VendorCategory
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('categoryHash')
            ->add('displayTitle')
            ->add('overlayCurrencyItemHash')
            ->add('quantityAvailable')
            ->add('showUnavailableItems')
            ->add('hideIfNoCurrency')
            ->add('buyStringOverride')
            ->add('overlayTitle')
            ->add('overlayDescription')
            ->add('overlayChoice')
            ->add('overlayIcon')
            ->add('hasOverlay')
            ->add('hideFromRegularPurchase');
        return $mapper->map($val);
    }
}
