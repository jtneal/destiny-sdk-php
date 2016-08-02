<?php

namespace Necowebs\Destiny\Utils;

use Collections\Collection;
use Necowebs\Destiny\Models\Manifest\MaterialRequirementItem;
use Necowebs\Destiny\Models\Manifest\ProgressionStep;
use Necowebs\Destiny\Models\Manifest\Reward;
use Necowebs\Destiny\Models\Manifest\RewardItem;
use Necowebs\Destiny\Models\Manifest\SandboxPerkGroup;
use Necowebs\Destiny\Models\Manifest\Skull;
use Necowebs\Destiny\Models\Manifest\TalentGridActivationRequirement;
use Necowebs\Destiny\Models\Manifest\TalentGridExclusiveSet;
use Necowebs\Destiny\Models\Manifest\TalentGridNode;
use Necowebs\Destiny\Models\Manifest\TalentGridStep;

/**
 * Class MapperHelperTest
 * @package Necowebs\Destiny\Utils
 */
class MapperHelperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Map Array To Progression Steps
     */
    public function testMapArrayToProgressionSteps()
    {
        $steps = MapperHelper::mapArrayToProgressionSteps(null, [
            [
                'progressTotal' => 0,
                'rewardItems' => []
            ],
            [
                'progressTotal' => 9000,
                'rewardItems' => []
            ]
        ]);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\ProgressionStep', [
            (new ProgressionStep())
                ->setProgressTotal(0)
                ->setRewardItems(new Collection('Necowebs\Destiny\Models\Manifest\RewardItem')),
            (new ProgressionStep())
                ->setProgressTotal(9000)
                ->setRewardItems(new Collection('Necowebs\Destiny\Models\Manifest\RewardItem'))
        ]);

        $this->assertEquals($expected, $steps);
    }

    /**
     * Test Map Empty Array To Progression Steps
     */
    public function testMapEmptyArrayToProgressionSteps()
    {
        $steps = MapperHelper::mapArrayToProgressionSteps(null, []);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\ProgressionStep', []);

        $this->assertEquals($expected, $steps);
    }

    /**
     * Test Map Array To Rewards
     */
    public function testMapArrayToRewards()
    {
        $rewards = MapperHelper::mapArrayToRewards(null, [
            [
                'rewardItems' => [
                    [
                        'itemHash' => 1772473720,
                        'value' => 0
                    ],
                    [
                        'itemHash' => 1743040968,
                        'value' => 0
                    ]
                ]
            ]
        ]);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\Reward', [
            (new Reward())
                ->setRewardItems((new Collection('Necowebs\Destiny\Models\Manifest\RewardItem'))
                    ->add((new RewardItem())->setItemHash(1772473720)->setValue(0))
                    ->add((new RewardItem())->setItemHash(1743040968)->setValue(0))
                )
        ]);

        $this->assertEquals($expected, $rewards);
    }

    /**
     * Test Map Empty Array To Rewards
     */
    public function testMapEmptyArrayToRewards()
    {
        $rewards = MapperHelper::mapArrayToRewards(null, []);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\Reward', []);

        $this->assertEquals($expected, $rewards);
    }

    /**
     * Test Map Array To Reward Items
     */
    public function testMapArrayToRewardItems()
    {
        $items = MapperHelper::mapArrayToRewardItems(null, [
            [
                'itemHash' => 1772473720,
                'value' => 0
            ],
            [
                'itemHash' => 1743040968,
                'value' => 0
            ]
        ]);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\RewardItem', [
            (new RewardItem())
                ->setItemHash(1772473720)->setValue(0),
            (new RewardItem())
                ->setItemHash(1743040968)->setValue(0)
        ]);

        $this->assertEquals($expected, $items);
    }

    /**
     * Test Map Empty Array To Reward Items
     */
    public function testMapEmptyArrayToRewardItems()
    {
        $items = MapperHelper::mapArrayToRewardItems(null, []);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\RewardItem', []);

        $this->assertEquals($expected, $items);
    }

    /**
     * Test Map Array To Skulls
     */
    public function testMapArrayToSkulls()
    {
        $skulls = MapperHelper::mapArrayToSkulls(null, [
            [
                'displayName' => 'Heroic',
                'description' => 'Enemies appear in greater numbers and are more aggressive.',
                'icon' => '/common/destiny_content/icons/b6e2de98abc156752c751060fd0f3255.png'
            ]
        ]);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\Skull', [
            (new Skull())
                ->setDisplayName('Heroic')
                ->setDescription('Enemies appear in greater numbers and are more aggressive.')
                ->setIcon('/common/destiny_content/icons/b6e2de98abc156752c751060fd0f3255.png')
        ]);

        $this->assertEquals($expected, $skulls);
    }

    /**
     * Test Map Empty Array To Skulls
     */
    public function testMapEmptyArrayToSkulls()
    {
        $skulls = MapperHelper::mapArrayToSkulls(null, []);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\Skull', []);

        $this->assertEquals($expected, $skulls);
    }

    /**
     * Test Map Array To Ints
     */
    public function testMapArrayToInts()
    {
        $ints = MapperHelper::mapArrayToInts(null, [1, 2, 3, 4]);

        $expected = new Collection('int', [1, 2, 3, 4]);

        $this->assertEquals($expected, $ints);
    }

    /**
     * Test Map Empty Array To Ints
     */
    public function testMapEmptyArrayToInts()
    {
        $ints = MapperHelper::mapArrayToInts(null, []);

        $expected = new Collection('int', []);

        $this->assertEquals($expected, $ints);
    }

    /**
     * Test Map Array To Material Requirement Items
     */
    public function testMapArrayToMaterialRequirementItems()
    {
        $items = MapperHelper::mapArrayToMaterialRequirementItems(null, [
            [
                'itemHash' => 2254123540,
                'deleteOnAction' => true,
                'count' => 5,
                'omitFromRequirements' => false
            ]
        ]);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\MaterialRequirementItem', [
            (new MaterialRequirementItem())
                ->setItemHash(2254123540)
                ->setDeleteOnAction(true)
                ->setCount(5)
                ->setOmitFromRequirements(false)
        ]);

        $this->assertEquals($expected, $items);
    }

    /**
     * Test Map Empty Array To Material Requirement Items
     */
    public function testMapEmptyArrayToMaterialRequirementItems()
    {
        $items = MapperHelper::mapArrayToMaterialRequirementItems(null, []);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\MaterialRequirementItem', []);

        $this->assertEquals($expected, $items);
    }

    /**
     * Test Map Array To Talent Grid Exclusive Sets
     */
    public function testMapArrayToTalentGridExclusiveSets()
    {
        $sets = MapperHelper::mapArrayToTalentGridExclusiveSets(null, [
            ['nodeIndexes' => [1, 2, 3, 4]],
            ['nodeIndexes' => [5, 6, 7, 8]]
        ]);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\TalentGridExclusiveSet', [
            (new TalentGridExclusiveSet())
                ->setNodeIndexes(new Collection('int', [1, 2, 3, 4])),
            (new TalentGridExclusiveSet())
                ->setNodeIndexes(new Collection('int', [5, 6, 7, 8]))
        ]);

        $this->assertEquals($expected, $sets);
    }

    /**
     * Test Map Empty Array To Talent Grid Exclusive Sets
     */
    public function testMapEmptyArrayToTalentGridExclusiveSets()
    {
        $sets = MapperHelper::mapArrayToTalentGridExclusiveSets(null, []);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\TalentGridExclusiveSet', []);

        $this->assertEquals($expected, $sets);
    }

    /**
     * Test Map Array To Talent Grid Nodes
     */
    public function testMapArrayToTalentGridNodes()
    {
        $nodes = MapperHelper::mapArrayToTalentGridNodes(null, [
            [
                'nodeIndex' => 0,
                'nodeHash' => 0,
                'row' => 0,
                'column' => 0,
                'prerequisiteNodeIndexes' => [1, 2, 3, 4],
                'binaryPairNodeIndex' => -1,
                'autoUnlocks' => true,
                'lastStepRepeats' => false,
                'isRandom' => false,
                'isRandomRepurchasable' => false,
                'steps' => [],
                'exlusiveWithNodes' => [5, 6, 7, 8],
                'randomStartProgressionBarAtProgression' => 0,
                'originalNodeHash' => 0
            ]
        ]);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\TalentGridNode', [
            (new TalentGridNode())
                ->setNodeIndex(0)
                ->setNodeHash(0)
                ->setRow(0)
                ->setColumn(0)
                ->setPrerequisiteNodeIndexes(new Collection('int', [1, 2, 3, 4]))
                ->setBinaryPairNodeIndex(-1)
                ->setAutoUnlocks(true)
                ->setLastStepRepeats(false)
                ->setIsRandom(false)
                ->setIsRandomRepurchasable(false)
                ->setSteps(new Collection('Necowebs\Destiny\Models\Manifest\TalentGridStep'))
                ->setExlusiveWithNodes(new Collection('int', [5, 6, 7, 8]))
                ->setRandomStartProgressionBarAtProgression(0)
                ->setOriginalNodeHash(0)
        ]);

        $this->assertEquals($expected, $nodes);
    }

    /**
     * Test Map Empty Array To Talent Grid Nodes
     */
    public function testMapEmptyArrayToTalentGridNodes()
    {
        $nodes = MapperHelper::mapArrayToTalentGridNodes(null, []);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\TalentGridNode', []);

        $this->assertEquals($expected, $nodes);
    }

    /**
     * Test Map Array To Talent Grid Steps
     */
    public function testMapArrayToTalentGridSteps()
    {
        $steps = MapperHelper::mapArrayToTalentGridSteps(null, [
            [
                'stepIndex' => 0,
                'nodeStepHash' => 3528431156,
                'nodeStepName' => 'Hidden Hand',
                'nodeStepDescription' => 'This weapon gains better target acquisition.',
                'interactionDescription' => 'Upgrade',
                'icon' => '/common/destiny_content/icons/15b516f1995f38de050e20b234c7b8c0.png',
                'damageType' => 2,
                'damageTypeHash' => 2303181850,
                'activationRequirement' => [
                    'gridLevel' => 3,
                    'materialRequirementHashes' => [1, 2, 3, 4]
                ],
                'canActivateNextStep' => false,
                'nextStepIndex' => -1,
                'isNextStepRandom' => false,
                'perkHashes' => [1, 2, 3, 4],
                'startProgressionBarAtProgress' => 0,
                'statHashes' => [1, 2, 3, 4],
                'affectsQuality' => false,
                'stepGroups' => [
                    'weaponPerformance' => 1,
                    'impactEffects' => 2,
                    'guardianAttributes' => 3,
                    'lightAbilities' => 4,
                    'damageTypes' => 5
                ],
                'trueStepIndex' => 0,
                'truePropertyIndex' => 0,
                'affectsLevel' => false
            ]
        ]);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\TalentGridStep', [
            (new TalentGridStep())
                ->setStepIndex(0)
                ->setNodeStepHash(3528431156)
                ->setNodeStepName('Hidden Hand')
                ->setNodeStepDescription('This weapon gains better target acquisition.')
                ->setInteractionDescription('Upgrade')
                ->setIcon('/common/destiny_content/icons/15b516f1995f38de050e20b234c7b8c0.png')
                ->setDamageType(2)
                ->setDamageTypeHash(2303181850)
                ->setActivationRequirement((new TalentGridActivationRequirement())
                    ->setGridLevel(3)
                    ->setMaterialRequirementHashes(new Collection('int', [1, 2, 3, 4]))
                )
                ->setCanActivateNextStep(false)
                ->setNextStepIndex(-1)
                ->setIsNextStepRandom(false)
                ->setPerkHashes(new Collection('int', [1, 2, 3, 4]))
                ->setStartProgressionBarAtProgress(0)
                ->setStatHashes(new Collection('int', [1, 2, 3, 4]))
                ->setAffectsQuality(false)
                ->setStepGroups((new SandboxPerkGroup())
                    ->setWeaponPerformance(1)
                    ->setImpactEffects(2)
                    ->setGuardianAttributes(3)
                    ->setLightAbilities(4)
                    ->setDamageTypes(5)
                )
                ->setTrueStepIndex(0)
                ->setTruePropertyIndex(0)
                ->setAffectsLevel(false)
        ]);

        $this->assertEquals($expected, $steps);
    }

    /**
     * Test Map Empty Array To Talent Grid Steps
     */
    public function testMapEmptyArrayToTalentGridSteps()
    {
        $steps = MapperHelper::mapArrayToTalentGridSteps(null, []);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\TalentGridStep', []);

        $this->assertEquals($expected, $steps);
    }

    /**
     * Test Map Array To Talent Grid Activation Requirement
     */
    public function testMapArrayToTalentGridActivationRequirement()
    {
        $requirement = MapperHelper::mapArrayToTalentGridActivationRequirement(null, [
            'gridLevel' => 3,
            'materialRequirementHashes' => [2627491173, 2627491172, 2627491175, 2627491174]
        ]);

        $expected = (new TalentGridActivationRequirement())
            ->setGridLevel(3)
            ->setMaterialRequirementHashes(new Collection('int', [2627491173, 2627491172, 2627491175, 2627491174]));

        $this->assertEquals($expected, $requirement);
    }

    /**
     * Test Map Empty Array To Talent Grid Activation Requirement
     */
    public function testMapEmptyArrayToTalentGridActivationRequirement()
    {
        $requirement = MapperHelper::mapArrayToTalentGridActivationRequirement(null, []);

        $expected = new TalentGridActivationRequirement();

        $this->assertEquals($expected, $requirement);
    }

    /**
     * Test Map Array To Sandbox Perk Group
     */
    public function testMapArrayToSandboxPerkGroup()
    {
        $group = MapperHelper::mapArrayToSandboxPerkGroup(null, [
            'weaponPerformance' => 1,
            'impactEffects' => 2,
            'guardianAttributes' => 3,
            'lightAbilities' => 4,
            'damageTypes' => 5
        ]);

        $expected = (new SandboxPerkGroup())
            ->setWeaponPerformance(1)
            ->setImpactEffects(2)
            ->setGuardianAttributes(3)
            ->setLightAbilities(4)
            ->setDamageTypes(5);

        $this->assertEquals($expected, $group);
    }

    /**
     * Test Map Empty Array To Sandbox Perk Group
     */
    public function testMapEmptyArrayToSandboxPerkGroup()
    {
        $group = MapperHelper::mapArrayToSandboxPerkGroup(null, []);

        $expected = new SandboxPerkGroup();

        $this->assertEquals($expected, $group);
    }
}
