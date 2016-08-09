<?php

namespace Necowebs\Destiny\Services\Account;

use Necowebs\Destiny\Exceptions\AccountNotFoundException;
use Necowebs\Destiny\Models\Account\Item;
use Necowebs\Destiny\Models\Account\SummaryCharacter;

/**
 * Class AllItemsSummaryServiceTest
 * @package Necowebs\Destiny\Services\Account
 */
class AllItemsSummaryServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get All Items Summary
     */
    public function testGetAllItemsSummary()
    {
        $items = (new AllItemsSummaryService())->getAllItemsSummary(2, '4611686018450406180');

        $this->assertContainsOnlyInstancesOf(Item::class, $items->getItems());
        $this->assertContainsOnlyInstancesOf(SummaryCharacter::class, $items->getCharacters());
    }

    /**
     * Test Get All Items Summary Exception
     */
    public function testGetAllItemsSummaryException()
    {
        $this->expectException(AccountNotFoundException::class);

        $items = (new AllItemsSummaryService())->getAllItemsSummary(0, 'Fail');
    }
}
