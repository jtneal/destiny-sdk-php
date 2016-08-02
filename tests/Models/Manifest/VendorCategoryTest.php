<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class VendorCategoryTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class VendorCategoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $category = (new VendorCategory())
            ->setCategoryHash(3788886265)
            ->setDisplayTitle('Mission Reward')
            ->setOverlayCurrencyItemHash(4187908026)
            ->setQuantityAvailable(0)
            ->setShowUnavailableItems(false)
            ->setHideIfNoCurrency(true)
            ->setBuyStringOverride('Select')
            ->setOverlayTitle('Mission Reward')
            ->setOverlayDescription('Your renown grows. The city factions have been asking for you by name.')
            ->setOverlayChoice('Select a reward:')
            ->setOverlayIcon('/img/misc/missing_icon.png')
            ->setHasOverlay(true)
            ->setHideFromRegularPurchase(false);

        $this->assertEquals(3788886265, $category->getCategoryHash());
        $this->assertEquals('Mission Reward', $category->getDisplayTitle());
        $this->assertEquals(4187908026, $category->getOverlayCurrencyItemHash());
        $this->assertEquals(0, $category->getQuantityAvailable());
        $this->assertEquals(false, $category->getShowUnavailableItems());
        $this->assertEquals(true, $category->getHideIfNoCurrency());
        $this->assertEquals('Select', $category->getBuyStringOverride());
        $this->assertEquals('Mission Reward', $category->getOverlayTitle());
        $this->assertEquals('Your renown grows. The city factions have been asking for you by name.', $category->getOverlayDescription());
        $this->assertEquals('Select a reward:', $category->getOverlayChoice());
        $this->assertEquals('/img/misc/missing_icon.png', $category->getOverlayIcon());
        $this->assertEquals(true, $category->getHasOverlay());
        $this->assertEquals(false, $category->getHideFromRegularPurchase());
    }
}
