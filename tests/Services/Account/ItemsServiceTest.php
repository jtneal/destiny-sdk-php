<?php

namespace Necowebs\Destiny\Services\Account;

use Necowebs\Destiny\Exceptions\AccountNotFoundException;
use Necowebs\Destiny\Models\Account\Item;
use Necowebs\Destiny\Models\Account\SummaryCharacter;


/**
 * Class ItemsServiceTest
 * @package Necowebs\Destiny\Services\Account
 */
class ItemsServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Items
     */
    public function testGetItems()
    {
        $items = (new ItemsService())->getItems(2, '4611686018450406180');

        $this->assertContainsOnlyInstancesOf(Item::class, $items->getItems());
        $this->assertContainsOnlyInstancesOf(SummaryCharacter::class, $items->getCharacters());
    }

    /**
     * Test Get Items Exception
     */
    public function testGetItemsException()
    {
        $this->expectException(AccountNotFoundException::class);

        $items = (new ItemsService())->getItems(0, 'Fail');
    }
}
