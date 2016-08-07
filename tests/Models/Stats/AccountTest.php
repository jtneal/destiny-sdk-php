<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;

/**
 * Class AccountTest
 * @package Necowebs\Destiny\Models\Stats
 */
class AccountTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $account = (new Account())
            ->setMergedDeletedCharacters(new AccountCharacter())
            ->setMergedAllCharacters(new AccountCharacter())
            ->setCharacters(new Collection(AccountCharacter::class));

        $this->assertEquals(new AccountCharacter(), $account->getMergedDeletedCharacters());
        $this->assertEquals(new AccountCharacter(), $account->getMergedAllCharacters());
        $this->assertEquals(new Collection(AccountCharacter::class), $account->getCharacters());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Account::toObject(null, [
            'mergedDeletedCharacters' => [],
            'mergedAllCharacters' => [],
            'characters' => []
        ]);

        $expected = (new Account())
            ->setMergedDeletedCharacters(new AccountCharacter())
            ->setMergedAllCharacters(new AccountCharacter())
            ->setCharacters(new Collection(AccountCharacter::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Account::toCollection(null, [
            [
                'mergedDeletedCharacters' => [],
                'mergedAllCharacters' => [],
                'characters' => []
            ]
        ]);

        $expected = new Collection(Account::class, [
            (new Account())
                ->setMergedDeletedCharacters(new AccountCharacter())
                ->setMergedAllCharacters(new AccountCharacter())
                ->setCharacters(new Collection(AccountCharacter::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
