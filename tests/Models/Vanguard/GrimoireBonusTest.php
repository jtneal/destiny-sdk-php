<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;

/**
 * Class GrimoireBonusTest
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireBonusTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $bonus = (new GrimoireBonus())
            ->setCardId(201130)
            ->setCardName('Thrall')
            ->setStatName('Kills')
            ->setBonusName('Glimmer Income Bonus')
            ->setBonusDescription('All characters earn more Glimmer when this combatant is killed with a Glimmer-drop consumable active.')
            ->setBonusRank(new GrimoireBonusRank())
            ->setValue(45776)
            ->setThreshold(750)
            ->setSmallImage(new GrimoireImage());

        $this->assertEquals(201130, $bonus->getCardId());
        $this->assertEquals('Thrall', $bonus->getCardName());
        $this->assertEquals('Kills', $bonus->getStatName());
        $this->assertEquals('Glimmer Income Bonus', $bonus->getBonusName());
        $this->assertEquals('All characters earn more Glimmer when this combatant is killed with a Glimmer-drop consumable active.', $bonus->getBonusDescription());
        $this->assertEquals(new GrimoireBonusRank(), $bonus->getBonusRank());
        $this->assertEquals(45776, $bonus->getValue());
        $this->assertEquals(750, $bonus->getThreshold());
        $this->assertEquals(new GrimoireImage(), $bonus->getSmallImage());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = GrimoireBonus::toObject(null, [
            'cardId' => 201130,
            'cardName' => 'Thrall',
            'statName' => 'Kills',
            'bonusName' => 'Glimmer Income Bonus',
            'bonusDescription' => 'All characters earn more Glimmer when this combatant is killed with a Glimmer-drop consumable active.',
            'bonusRank' => [],
            'value' => 45776,
            'threshold' => 750,
            'smallImage' => []
        ]);

        $expected = (new GrimoireBonus())
            ->setCardId(201130)
            ->setCardName('Thrall')
            ->setStatName('Kills')
            ->setBonusName('Glimmer Income Bonus')
            ->setBonusDescription('All characters earn more Glimmer when this combatant is killed with a Glimmer-drop consumable active.')
            ->setBonusRank(new GrimoireBonusRank())
            ->setValue(45776)
            ->setThreshold(750)
            ->setSmallImage(new GrimoireImage());

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = GrimoireBonus::toCollection(null, [
            [
                'cardId' => 201130,
                'cardName' => 'Thrall',
                'statName' => 'Kills',
                'bonusName' => 'Glimmer Income Bonus',
                'bonusDescription' => 'All characters earn more Glimmer when this combatant is killed with a Glimmer-drop consumable active.',
                'bonusRank' => [],
                'value' => 45776,
                'threshold' => 750,
                'smallImage' => []
            ]
        ]);

        $expected = new Collection(GrimoireBonus::class, [
            (new GrimoireBonus())
                ->setCardId(201130)
                ->setCardName('Thrall')
                ->setStatName('Kills')
                ->setBonusName('Glimmer Income Bonus')
                ->setBonusDescription('All characters earn more Glimmer when this combatant is killed with a Glimmer-drop consumable active.')
                ->setBonusRank(new GrimoireBonusRank())
                ->setValue(45776)
                ->setThreshold(750)
                ->setSmallImage(new GrimoireImage())
        ]);

        $this->assertEquals($expected, $collection);
    }
}
