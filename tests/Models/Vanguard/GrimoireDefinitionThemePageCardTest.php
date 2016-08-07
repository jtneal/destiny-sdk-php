<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;

/**
 * Class GrimoireDefinitionThemePageCardTest
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireDefinitionThemePageCardTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $card = (new GrimoireDefinitionThemePageCard())
            ->setCardId(103020)
            ->setCardName('The Traveler')
            ->setCardIntro('<b>Tess Everis</b>')
            ->setCardDescription("Everything changed with the coming of the Traveler.<br/><br/>\nIt gave us gifts that transformed the solar system and the nature of human life. It ushered in the Golden Age, a time of miracles. But it never shared its deepest secrets.<br/><br/>\nWhere did the Traveler come from? Why did it offer us so much? Did it know it was being hunted across the stars? And why, when the Darkness came, did it choose to stay and fight for us?<br/><br/>\nNow the Traveler hangs, silent, above humanity&#39;s final sanctuary. It may be healing. It may be dying. It gave everything it had to save us. And now its power lies with us, its Guardians.")
            ->setUnlockHowToText('Unlock this card by playing Destiny.')
            ->setCardLabel('H1')
            ->setRarity(3)
            ->setUnlockFlagHash(0)
            ->setPoints(0)
            ->setNormalResolution(new GrimoireResolution())
            ->setHighResolution(new GrimoireResolution())
            ->setStatisticCollection(new Collection(GrimoireCardStatistic::class));

        $this->assertEquals(103020, $card->getCardId());
        $this->assertEquals('The Traveler', $card->getCardName());
        $this->assertEquals('<b>Tess Everis</b>', $card->getCardIntro());
        $this->assertEquals("Everything changed with the coming of the Traveler.<br/><br/>\nIt gave us gifts that transformed the solar system and the nature of human life. It ushered in the Golden Age, a time of miracles. But it never shared its deepest secrets.<br/><br/>\nWhere did the Traveler come from? Why did it offer us so much? Did it know it was being hunted across the stars? And why, when the Darkness came, did it choose to stay and fight for us?<br/><br/>\nNow the Traveler hangs, silent, above humanity&#39;s final sanctuary. It may be healing. It may be dying. It gave everything it had to save us. And now its power lies with us, its Guardians.", $card->getCardDescription());
        $this->assertEquals('Unlock this card by playing Destiny.', $card->getUnlockHowToText());
        $this->assertEquals('H1', $card->getCardLabel());
        $this->assertEquals(3, $card->getRarity());
        $this->assertEquals(0, $card->getUnlockFlagHash());
        $this->assertEquals(0, $card->getPoints());
        $this->assertEquals(new GrimoireResolution(), $card->getNormalResolution());
        $this->assertEquals(new GrimoireResolution(), $card->getHighResolution());
        $this->assertEquals(new Collection(GrimoireCardStatistic::class), $card->getStatisticCollection());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = GrimoireDefinitionThemePageCard::toObject(null, [
            'cardId' => 103020,
            'cardName' => 'The Traveler',
            'cardIntro' => '<b>Tess Everis</b>',
            'cardDescription' => "Everything changed with the coming of the Traveler.<br/><br/>\nIt gave us gifts that transformed the solar system and the nature of human life. It ushered in the Golden Age, a time of miracles. But it never shared its deepest secrets.<br/><br/>\nWhere did the Traveler come from? Why did it offer us so much? Did it know it was being hunted across the stars? And why, when the Darkness came, did it choose to stay and fight for us?<br/><br/>\nNow the Traveler hangs, silent, above humanity&#39;s final sanctuary. It may be healing. It may be dying. It gave everything it had to save us. And now its power lies with us, its Guardians.",
            'unlockHowToText' => 'Unlock this card by playing Destiny.',
            'cardLabel' => 'H1',
            'rarity' => 3,
            'unlockFlagHash' => 0,
            'points' => 0,
            'normalResolution' => [],
            'highResolution' => [],
            'statisticCollection' => []
        ]);

        $expected = (new GrimoireDefinitionThemePageCard())
            ->setCardId(103020)
            ->setCardName('The Traveler')
            ->setCardIntro('<b>Tess Everis</b>')
            ->setCardDescription("Everything changed with the coming of the Traveler.<br/><br/>\nIt gave us gifts that transformed the solar system and the nature of human life. It ushered in the Golden Age, a time of miracles. But it never shared its deepest secrets.<br/><br/>\nWhere did the Traveler come from? Why did it offer us so much? Did it know it was being hunted across the stars? And why, when the Darkness came, did it choose to stay and fight for us?<br/><br/>\nNow the Traveler hangs, silent, above humanity&#39;s final sanctuary. It may be healing. It may be dying. It gave everything it had to save us. And now its power lies with us, its Guardians.")
            ->setUnlockHowToText('Unlock this card by playing Destiny.')
            ->setCardLabel('H1')
            ->setRarity(3)
            ->setUnlockFlagHash(0)
            ->setPoints(0)
            ->setNormalResolution(new GrimoireResolution())
            ->setHighResolution(new GrimoireResolution())
            ->setStatisticCollection(new Collection(GrimoireCardStatistic::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = GrimoireDefinitionThemePageCard::toCollection(null, [
            [
                'cardId' => 103020,
                'cardName' => 'The Traveler',
                'cardIntro' => '<b>Tess Everis</b>',
                'cardDescription' => "Everything changed with the coming of the Traveler.<br/><br/>\nIt gave us gifts that transformed the solar system and the nature of human life. It ushered in the Golden Age, a time of miracles. But it never shared its deepest secrets.<br/><br/>\nWhere did the Traveler come from? Why did it offer us so much? Did it know it was being hunted across the stars? And why, when the Darkness came, did it choose to stay and fight for us?<br/><br/>\nNow the Traveler hangs, silent, above humanity&#39;s final sanctuary. It may be healing. It may be dying. It gave everything it had to save us. And now its power lies with us, its Guardians.",
                'unlockHowToText' => 'Unlock this card by playing Destiny.',
                'cardLabel' => 'H1',
                'rarity' => 3,
                'unlockFlagHash' => 0,
                'points' => 0,
                'normalResolution' => [],
                'highResolution' => [],
                'statisticCollection' => []
            ]
        ]);

        $expected = new Collection(GrimoireDefinitionThemePageCard::class, [
            (new GrimoireDefinitionThemePageCard())
                ->setCardId(103020)
                ->setCardName('The Traveler')
                ->setCardIntro('<b>Tess Everis</b>')
                ->setCardDescription("Everything changed with the coming of the Traveler.<br/><br/>\nIt gave us gifts that transformed the solar system and the nature of human life. It ushered in the Golden Age, a time of miracles. But it never shared its deepest secrets.<br/><br/>\nWhere did the Traveler come from? Why did it offer us so much? Did it know it was being hunted across the stars? And why, when the Darkness came, did it choose to stay and fight for us?<br/><br/>\nNow the Traveler hangs, silent, above humanity&#39;s final sanctuary. It may be healing. It may be dying. It gave everything it had to save us. And now its power lies with us, its Guardians.")
                ->setUnlockHowToText('Unlock this card by playing Destiny.')
                ->setCardLabel('H1')
                ->setRarity(3)
                ->setUnlockFlagHash(0)
                ->setPoints(0)
                ->setNormalResolution(new GrimoireResolution())
                ->setHighResolution(new GrimoireResolution())
                ->setStatisticCollection(new Collection(GrimoireCardStatistic::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
