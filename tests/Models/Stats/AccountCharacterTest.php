<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;

/**
 * Class AccountCharacterTest
 * @package Necowebs\Destiny\Models\Stats
 */
class AccountCharacterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $character = (new AccountCharacter())
            ->setCharacterId('2305843009310128298')
            ->setDeleted(false)
            ->setResults(new Historical())
            ->setMerged(new HistoricalActivity());

        $this->assertEquals('2305843009310128298', $character->getCharacterId());
        $this->assertEquals(false, $character->getDeleted());
        $this->assertEquals(new Historical(), $character->getResults());
        $this->assertEquals(new HistoricalActivity(), $character->getMerged());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AccountCharacter::toObject(null, [
            'characterId' => '2305843009310128298',
            'deleted' => false,
            'results' => [],
            'merged' => []
        ]);

        $expected = (new AccountCharacter())
            ->setCharacterId('2305843009310128298')
            ->setDeleted(false)
            ->setResults(new Historical())
            ->setMerged(new HistoricalActivity());

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AccountCharacter::toCollection(null, [
            [
                'characterId' => '2305843009310128298',
                'deleted' => false,
                'results' => [],
                'merged' => []
            ]
        ]);

        $expected = new Collection(AccountCharacter::class, [
            (new AccountCharacter())
                ->setCharacterId('2305843009310128298')
                ->setDeleted(false)
                ->setResults(new Historical())
                ->setMerged(new HistoricalActivity())
        ]);

        $this->assertEquals($expected, $collection);
    }
}
