<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;
use Necowebs\Destiny\Models\DestinyPlayer;

/**
 * Class PostGameCarnageReportEntryPlayerTest
 * @package Necowebs\Destiny\Models\Stats
 */
class PostGameCarnageReportEntryPlayerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $object = (new PostGameCarnageReportEntryPlayer())
            ->setDestinyUserInfo(new DestinyPlayer())
            ->setCharacterClass('Warlock')
            ->setCharacterLevel(40)
            ->setLightLevel(335)
            ->setBungieNetUserInfo(new DestinyPlayer())
            ->setClanName('Char Wash')
            ->setClanTag('CHAR');

        $this->assertEquals(new DestinyPlayer(), $object->getDestinyUserInfo());
        $this->assertEquals('Warlock', $object->getCharacterClass());
        $this->assertEquals(40, $object->getCharacterLevel());
        $this->assertEquals(335, $object->getLightLevel());
        $this->assertEquals(new DestinyPlayer(), $object->getBungieNetUserInfo());
        $this->assertEquals('Char Wash', $object->getClanName());
        $this->assertEquals('CHAR', $object->getClanTag());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = PostGameCarnageReportEntryPlayer::toObject(null, [
            'destinyUserInfo' => [],
            'characterClass' => 'Warlock',
            'characterLevel' => 40,
            'lightLevel' => 335,
            'bungieNetUserInfo' => [],
            'clanName' => 'Char Wash',
            'clanTag' => 'CHAR'
        ]);

        $expected = (new PostGameCarnageReportEntryPlayer())
            ->setDestinyUserInfo(new DestinyPlayer())
            ->setCharacterClass('Warlock')
            ->setCharacterLevel(40)
            ->setLightLevel(335)
            ->setBungieNetUserInfo(new DestinyPlayer())
            ->setClanName('Char Wash')
            ->setClanTag('CHAR');

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = PostGameCarnageReportEntryPlayer::toCollection(null, [
            [
                'destinyUserInfo' => [],
                'characterClass' => 'Warlock',
                'characterLevel' => 40,
                'lightLevel' => 335,
                'bungieNetUserInfo' => [],
                'clanName' => 'Char Wash',
                'clanTag' => 'CHAR'
            ]
        ]);

        $expected = new Collection(PostGameCarnageReportEntryPlayer::class, [
            (new PostGameCarnageReportEntryPlayer())
                ->setDestinyUserInfo(new DestinyPlayer())
                ->setCharacterClass('Warlock')
                ->setCharacterLevel(40)
                ->setLightLevel(335)
                ->setBungieNetUserInfo(new DestinyPlayer())
                ->setClanName('Char Wash')
                ->setClanTag('CHAR')
        ]);

        $this->assertEquals($expected, $collection);
    }
}
