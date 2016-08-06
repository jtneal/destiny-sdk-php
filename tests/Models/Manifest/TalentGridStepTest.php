<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class TalentGridStepTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class TalentGridStepTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $step = (new TalentGridStep())
            ->setStepIndex(0)
            ->setNodeStepHash(3528431156)
            ->setNodeStepName('Hidden Hand')
            ->setNodeStepDescription('This weapon gains better target acquisition.')
            ->setInteractionDescription('Upgrade')
            ->setIcon('/common/destiny_content/icons/15b516f1995f38de050e20b234c7b8c0.png')
            ->setDamageType(0)
            ->setDamageTypeHash(0)
            ->setActivationRequirement(new TalentGridActivationRequirement())
            ->setCanActivateNextStep(false)
            ->setNextStepIndex(-1)
            ->setIsNextStepRandom(false)
            ->setPerkHashes(new Collection('int'))
            ->setStartProgressionBarAtProgress(0)
            ->setStatHashes(new Collection('int'))
            ->setAffectsQuality(false)
            ->setStepGroups(new SandboxPerkGroup())
            ->setTrueStepIndex(0)
            ->setTruePropertyIndex(0)
            ->setAffectsLevel(false);

        $this->assertEquals(0, $step->getStepIndex());
        $this->assertEquals(3528431156, $step->getNodeStepHash());
        $this->assertEquals('Hidden Hand', $step->getNodeStepName());
        $this->assertEquals('This weapon gains better target acquisition.', $step->getNodeStepDescription());
        $this->assertEquals('Upgrade', $step->getInteractionDescription());
        $this->assertEquals('/common/destiny_content/icons/15b516f1995f38de050e20b234c7b8c0.png', $step->getIcon());
        $this->assertEquals(0, $step->getDamageType());
        $this->assertEquals(0, $step->getDamageTypeHash());
        $this->assertEquals(new TalentGridActivationRequirement(), $step->getActivationRequirement());
        $this->assertEquals(false, $step->getCanActivateNextStep());
        $this->assertEquals(-1, $step->getNextStepIndex());
        $this->assertEquals(false, $step->getIsNextStepRandom());
        $this->assertEquals(new Collection('int'), $step->getPerkHashes());
        $this->assertEquals(0, $step->getStartProgressionBarAtProgress());
        $this->assertEquals(new Collection('int'), $step->getStatHashes());
        $this->assertEquals(false, $step->getAffectsQuality());
        $this->assertEquals(new SandboxPerkGroup(), $step->getStepGroups());
        $this->assertEquals(0, $step->getTrueStepIndex());
        $this->assertEquals(0, $step->getTruePropertyIndex());
        $this->assertEquals(false, $step->getAffectsLevel());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = TalentGridStep::toObject(null, [
            'stepIndex' => 0,
            'nodeStepHash' => 3528431156,
            'nodeStepName' => 'Hidden Hand',
            'nodeStepDescription' => 'This weapon gains better target acquisition.',
            'interactionDescription' => 'Upgrade',
            'icon' => '/common/destiny_content/icons/15b516f1995f38de050e20b234c7b8c0.png',
            'damageType' => 2,
            'damageTypeHash' => 2303181850,
            'activationRequirement' => [],
            'canActivateNextStep' => false,
            'nextStepIndex' => -1,
            'isNextStepRandom' => false,
            'perkHashes' => [1, 2, 3, 4],
            'startProgressionBarAtProgress' => 0,
            'statHashes' => [1, 2, 3, 4],
            'affectsQuality' => false,
            'stepGroups' => [],
            'trueStepIndex' => 0,
            'truePropertyIndex' => 0,
            'affectsLevel' => false
        ]);

        $expected = (new TalentGridStep())
            ->setStepIndex(0)
            ->setNodeStepHash(3528431156)
            ->setNodeStepName('Hidden Hand')
            ->setNodeStepDescription('This weapon gains better target acquisition.')
            ->setInteractionDescription('Upgrade')
            ->setIcon('/common/destiny_content/icons/15b516f1995f38de050e20b234c7b8c0.png')
            ->setDamageType(2)
            ->setDamageTypeHash(2303181850)
            ->setActivationRequirement((new TalentGridActivationRequirement()))
            ->setCanActivateNextStep(false)
            ->setNextStepIndex(-1)
            ->setIsNextStepRandom(false)
            ->setPerkHashes(new Collection('int', [1, 2, 3, 4]))
            ->setStartProgressionBarAtProgress(0)
            ->setStatHashes(new Collection('int', [1, 2, 3, 4]))
            ->setAffectsQuality(false)
            ->setStepGroups((new SandboxPerkGroup()))
            ->setTrueStepIndex(0)
            ->setTruePropertyIndex(0)
            ->setAffectsLevel(false);


        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = TalentGridStep::toCollection(null, [
            [
                'stepIndex' => 0,
                'nodeStepHash' => 3528431156,
                'nodeStepName' => 'Hidden Hand',
                'nodeStepDescription' => 'This weapon gains better target acquisition.',
                'interactionDescription' => 'Upgrade',
                'icon' => '/common/destiny_content/icons/15b516f1995f38de050e20b234c7b8c0.png',
                'damageType' => 2,
                'damageTypeHash' => 2303181850,
                'activationRequirement' => [],
                'canActivateNextStep' => false,
                'nextStepIndex' => -1,
                'isNextStepRandom' => false,
                'perkHashes' => [1, 2, 3, 4],
                'startProgressionBarAtProgress' => 0,
                'statHashes' => [1, 2, 3, 4],
                'affectsQuality' => false,
                'stepGroups' => [],
                'trueStepIndex' => 0,
                'truePropertyIndex' => 0,
                'affectsLevel' => false
            ]
        ]);

        $expected = new Collection(TalentGridStep::class, [
            (new TalentGridStep())
                ->setStepIndex(0)
                ->setNodeStepHash(3528431156)
                ->setNodeStepName('Hidden Hand')
                ->setNodeStepDescription('This weapon gains better target acquisition.')
                ->setInteractionDescription('Upgrade')
                ->setIcon('/common/destiny_content/icons/15b516f1995f38de050e20b234c7b8c0.png')
                ->setDamageType(2)
                ->setDamageTypeHash(2303181850)
                ->setActivationRequirement((new TalentGridActivationRequirement()))
                ->setCanActivateNextStep(false)
                ->setNextStepIndex(-1)
                ->setIsNextStepRandom(false)
                ->setPerkHashes(new Collection('int', [1, 2, 3, 4]))
                ->setStartProgressionBarAtProgress(0)
                ->setStatHashes(new Collection('int', [1, 2, 3, 4]))
                ->setAffectsQuality(false)
                ->setStepGroups((new SandboxPerkGroup()))
                ->setTrueStepIndex(0)
                ->setTruePropertyIndex(0)
                ->setAffectsLevel(false)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
