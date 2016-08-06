<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;

/**
 * Class AdvisorBountyTest
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorBountyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $bounty = (new AdvisorBounty())
            ->setQuestHash(187864721)
            ->setStepHash(187864721)
            ->setStepObjectives(new Collection('int'))
            ->setTracked(187864721)
            ->setItemInstanceId('0')
            ->setCompleted(false)
            ->setStarted(false)
            ->setVendorHash(3658200622);

        $this->assertEquals(187864721, $bounty->getQuestHash());
        $this->assertEquals(187864721, $bounty->getStepHash());
        $this->assertEquals(new Collection('int'), $bounty->getStepObjectives());
        $this->assertEquals(187864721, $bounty->getTracked());
        $this->assertEquals('0', $bounty->getItemInstanceId());
        $this->assertEquals(false, $bounty->getCompleted());
        $this->assertEquals(false, $bounty->getStarted());
        $this->assertEquals(3658200622, $bounty->getVendorHash());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AdvisorBounty::toObject(null, [
            'questHash' => 187864721,
            'stepHash' => 187864721,
            'stepObjectives' => [],
            'tracked' => 187864721,
            'itemInstanceId' => '0',
            'completed' => false,
            'started' => false,
            'vendorHash' => 3658200622
        ]);

        $expected = (new AdvisorBounty())
            ->setQuestHash(187864721)
            ->setStepHash(187864721)
            ->setStepObjectives(new Collection('int'))
            ->setTracked(187864721)
            ->setItemInstanceId('0')
            ->setCompleted(false)
            ->setStarted(false)
            ->setVendorHash(3658200622);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AdvisorBounty::toCollection(null, [
            [
                'questHash' => 187864721,
                'stepHash' => 187864721,
                'stepObjectives' => [],
                'tracked' => 187864721,
                'itemInstanceId' => '0',
                'completed' => false,
                'started' => false,
                'vendorHash' => 3658200622
            ]
        ]);

        $expected = new Collection(AdvisorBounty::class, [
            (new AdvisorBounty())
                ->setQuestHash(187864721)
                ->setStepHash(187864721)
                ->setStepObjectives(new Collection('int'))
                ->setTracked(187864721)
                ->setItemInstanceId('0')
                ->setCompleted(false)
                ->setStarted(false)
                ->setVendorHash(3658200622)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
