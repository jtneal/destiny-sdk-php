<?php

namespace Necowebs\Destiny\Models\Manifest;
use Collections\Collection;

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

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = VendorCategory::toObject(null, [
            'categoryHash' => 3788886265,
            'displayTitle' => 'Mission Reward',
            'overlayCurrencyItemHash' => 4187908026,
            'quantityAvailable' => 0,
            'showUnavailableItems' => false,
            'hideIfNoCurrency' => true,
            'buyStringOverride' => 'Select',
            'overlayTitle' => 'Mission Reward',
            'overlayDescription' => 'Your renown grows. The city factions have been asking for you by name.',
            'overlayChoice' => 'Select a reward:',
            'overlayIcon' => '/img/misc/missing_icon.png',
            'hasOverlay' => true,
            'hideFromRegularPurchase' => false
        ]);

        $expected = (new VendorCategory())
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


        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = VendorCategory::toCollection(null, [
            [
                'categoryHash' => 3788886265,
                'displayTitle' => 'Mission Reward',
                'overlayCurrencyItemHash' => 4187908026,
                'quantityAvailable' => 0,
                'showUnavailableItems' => false,
                'hideIfNoCurrency' => true,
                'buyStringOverride' => 'Select',
                'overlayTitle' => 'Mission Reward',
                'overlayDescription' => 'Your renown grows. The city factions have been asking for you by name.',
                'overlayChoice' => 'Select a reward:',
                'overlayIcon' => '/img/misc/missing_icon.png',
                'hasOverlay' => true,
                'hideFromRegularPurchase' => false
            ]
        ]);

        $expected = new Collection(VendorCategory::class, [
            (new VendorCategory())
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
                ->setHideFromRegularPurchase(false)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
