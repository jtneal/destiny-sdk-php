<?php

namespace Necowebs\Destiny\Utils;

use Collections\Collection;
use Necowebs\Destiny\Models\Manifest\DirectorBookConnection;
use Necowebs\Destiny\Models\Manifest\DirectorBookExpression;
use Necowebs\Destiny\Models\Manifest\DirectorBookExpressionStep;
use Necowebs\Destiny\Models\Manifest\DirectorBookNode;
use Necowebs\Destiny\Models\Manifest\DirectorBookNodeState;
use Necowebs\Destiny\Models\Manifest\InventoryItem;
use Necowebs\Destiny\Models\Manifest\InventoryItemDye;
use Necowebs\Destiny\Models\Manifest\InventoryItemEquippingBlock;
use Necowebs\Destiny\Models\Manifest\InventoryItemEquippingBlockArrangement;
use Necowebs\Destiny\Models\Manifest\InventoryItemSource;
use Necowebs\Destiny\Models\Manifest\InventoryItemStat;
use Necowebs\Destiny\Models\Manifest\MaterialRequirementItem;
use Necowebs\Destiny\Models\Manifest\ProgressionStep;
use Necowebs\Destiny\Models\Manifest\Reward;
use Necowebs\Destiny\Models\Manifest\RewardItem;
use Necowebs\Destiny\Models\Manifest\SandboxPerkGroup;
use Necowebs\Destiny\Models\Manifest\Skull;
use Necowebs\Destiny\Models\Manifest\StatGroupOverride;
use Necowebs\Destiny\Models\Manifest\StatGroupScaledStat;
use Necowebs\Destiny\Models\Manifest\StatGroupScaledStatInterpolation;
use Necowebs\Destiny\Models\Manifest\TalentGridActivationRequirement;
use Necowebs\Destiny\Models\Manifest\TalentGridExclusiveSet;
use Necowebs\Destiny\Models\Manifest\TalentGridNode;
use Necowebs\Destiny\Models\Manifest\TalentGridStep;
use Necowebs\Destiny\Models\Manifest\VendorCategory;
use Necowebs\Destiny\Models\Manifest\VendorSummary;

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

        $expected = new Collection(ProgressionStep::class, [
            (new ProgressionStep())
                ->setProgressTotal(0)
                ->setRewardItems(new Collection(RewardItem::class)),
            (new ProgressionStep())
                ->setProgressTotal(9000)
                ->setRewardItems(new Collection(RewardItem::class))
        ]);

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

        $expected = new Collection(Reward::class, [
            (new Reward())
                ->setRewardItems((new Collection(RewardItem::class))
                    ->add((new RewardItem())->setItemHash(1772473720)->setValue(0))
                    ->add((new RewardItem())->setItemHash(1743040968)->setValue(0))
                )
        ]);

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

        $expected = new Collection(RewardItem::class, [
            (new RewardItem())
                ->setItemHash(1772473720)->setValue(0),
            (new RewardItem())
                ->setItemHash(1743040968)->setValue(0)
        ]);

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

        $expected = new Collection(Skull::class, [
            (new Skull())
                ->setDisplayName('Heroic')
                ->setDescription('Enemies appear in greater numbers and are more aggressive.')
                ->setIcon('/common/destiny_content/icons/b6e2de98abc156752c751060fd0f3255.png')
        ]);

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
     * Test Map Array To Strings
     */
    public function testMapArrayToStrings()
    {
        $strings = MapperHelper::mapArrayToStrings(null, ['one', 'two', 'three', 'four']);

        $expected = new Collection('string', ['one', 'two', 'three', 'four']);

        $this->assertEquals($expected, $strings);
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

        $expected = new Collection(MaterialRequirementItem::class, [
            (new MaterialRequirementItem())
                ->setItemHash(2254123540)
                ->setDeleteOnAction(true)
                ->setCount(5)
                ->setOmitFromRequirements(false)
        ]);

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

        $expected = new Collection(TalentGridExclusiveSet::class, [
            (new TalentGridExclusiveSet())
                ->setNodeIndexes(new Collection('int', [1, 2, 3, 4])),
            (new TalentGridExclusiveSet())
                ->setNodeIndexes(new Collection('int', [5, 6, 7, 8]))
        ]);

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

        $expected = new Collection(TalentGridNode::class, [
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
                ->setSteps(new Collection(TalentGridStep::class))
                ->setExlusiveWithNodes(new Collection('int', [5, 6, 7, 8]))
                ->setRandomStartProgressionBarAtProgression(0)
                ->setOriginalNodeHash(0)
        ]);

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
     * Test Map Array To Vendor Summary
     */
    public function testMapArrayToVendorSummary()
    {
        $summary = MapperHelper::mapArrayToVendorSummary(null, [
            'vendorHash' => 1575820975,
            'vendorName' => 'Warlock Vanguard',
            'vendorDescription' => 'Respected among all Orders, Ikora Rey tutors new Warlocks with a lifetime of hard-earned knowledge.',
            'vendorIcon' => '/common/destiny_content/icons/627c0986dd67898d292e9da6414d6d2e.png',
            'vendorOrder' => 90,
            'factionName' => 'Vanguard Reputation',
            'factionIcon' => '/common/destiny_content/icons/be454db6edaa4900c9f154909a2fd174.png',
            'factionHash' => 468098704,
            'factionDescription' => 'Complete Vanguard Bounties to unlock powerful gear for purchase.\n\nAchieve high Rank to earn rewards.',
            'resetIntervalMinutes' => 180,
            'resetOffsetMinutes' => 32640,
            'vendorIdentifier' => 'VENDOR_WARLOCK_MENTOR',
            'positionX' => 1116,
            'positionY' => 367,
            'transitionNodeIdentifier' => 'TOWER_NODE',
            'visible' => true,
            'progressionHash' => 3233510749,
            'sellString' => 'Acquire',
            'buyString' => 'Acquire',
            'vendorPortrait' => '/img/destiny_content/vendor/bbffb19be8ea4c18b2d5e68a4ba305bc.png',
            'vendorBanner' => '/img/destiny_content/vendor/VendorBanner.png',
            'unlockFlagHashes' => [],
            'enabledUnlockFlagHashes' => [2678892537],
            'mapSectionIdentifier' => 'VANGUARD',
            'mapSectionName' => 'Vanguard',
            'mapSectionOrder' => 2,
            'showOnMap' => true,
            'eventHash' => 0,
            'vendorCategoryHash' => 2,
            'vendorCategoryHashes' => [2],
            'vendorSubcategoryHash' => 300,
            'inhibitBuying' => false
        ]);

        $expected = (new VendorSummary())
            ->setVendorHash(1575820975)
            ->setVendorName('Warlock Vanguard')
            ->setVendorDescription('Respected among all Orders, Ikora Rey tutors new Warlocks with a lifetime of hard-earned knowledge.')
            ->setVendorIcon('/common/destiny_content/icons/627c0986dd67898d292e9da6414d6d2e.png')
            ->setVendorOrder(90)
            ->setFactionName('Vanguard Reputation')
            ->setFactionIcon('/common/destiny_content/icons/be454db6edaa4900c9f154909a2fd174.png')
            ->setFactionHash(468098704)
            ->setFactionDescription('Complete Vanguard Bounties to unlock powerful gear for purchase.\n\nAchieve high Rank to earn rewards.')
            ->setResetIntervalMinutes(180)
            ->setResetOffsetMinutes(32640)
            ->setVendorIdentifier('VENDOR_WARLOCK_MENTOR')
            ->setPositionX(1116)
            ->setPositionY(367)
            ->setTransitionNodeIdentifier('TOWER_NODE')
            ->setVisible(true)
            ->setProgressionHash(3233510749)
            ->setSellString('Acquire')
            ->setBuyString('Acquire')
            ->setVendorPortrait('/img/destiny_content/vendor/bbffb19be8ea4c18b2d5e68a4ba305bc.png')
            ->setVendorBanner('/img/destiny_content/vendor/VendorBanner.png')
            ->setUnlockFlagHashes(new Collection('int'))
            ->setEnabledUnlockFlagHashes(new Collection('int', [2678892537]))
            ->setMapSectionIdentifier('VANGUARD')
            ->setMapSectionName('Vanguard')
            ->setMapSectionOrder(2)
            ->setShowOnMap(true)
            ->setEventHash(0)
            ->setVendorCategoryHash(2)
            ->setVendorCategoryHashes(new Collection('int', [2]))
            ->setVendorSubcategoryHash(300)
            ->setInhibitBuying(false);

        $this->assertEquals($expected, $summary);
    }

    /**
     * Test Map Array To Vendor Categories
     */
    public function testMapArrayToVendorCategories()
    {
        $categories = MapperHelper::mapArrayToVendorCategories(null, [
            [
                'categoryHash' => 3788886265,
                'displayTitle' => 'Mission Reward',
                'overlayCurrencyItemHash' => 4187908026,
                'quantityAvailable' => 0,
                'showUnavailableItems' => false,
                'hideIfNoCurrency' => true,
                'buyStringOverride' => 'Select',
                'overlayTitle' => 'Mission Reward',
                'overlayDescription' => 'Your renown grows. The city factions have been asking for you by name.',
                'overlayChoice' => 'Select a reward:',
                'overlayIcon' => '/img/misc/missing_icon.png',
                'hasOverlay' => true,
                'hideFromRegularPurchase' => false
            ],
            [
                'categoryHash' => 3788886266,
                'displayTitle' => 'Factions of the City',
                'overlayCurrencyItemHash' => 4187908025,
                'quantityAvailable' => 0,
                'showUnavailableItems' => false,
                'hideIfNoCurrency' => true,
                'buyStringOverride' => 'Accept',
                'overlayTitle' => 'Factions of the City',
                'overlayDescription' => 'You met the full force of the Vex - and you turned them back. Incredible.',
                'overlayChoice' => 'Accept gift:',
                'overlayIcon' => '/img/misc/missing_icon.png',
                'hasOverlay' => true,
                'hideFromRegularPurchase' => false
            ]
        ]);

        $expected = new Collection(VendorCategory::class, [
            (new VendorCategory())
                ->setCategoryHash(3788886265)
                ->setDisplayTitle('Mission Reward')
                ->setOverlayCurrencyItemHash(4187908026)
                ->setQuantityAvailable(0)
                ->setShowUnavailableItems(false)
                ->setHideIfNoCurrency(true)
                ->setBuyStringOverride('Select')
                ->setOverlayTitle('Mission Reward')
                ->setOverlayDescription('Your renown grows. The city factions have been asking for you by name.')
                ->setOverlayChoice('Select a reward:')
                ->setOverlayIcon('/img/misc/missing_icon.png')
                ->setHasOverlay(true)
                ->setHideFromRegularPurchase(false),
            (new VendorCategory())
                ->setCategoryHash(3788886266)
                ->setDisplayTitle('Factions of the City')
                ->setOverlayCurrencyItemHash(4187908025)
                ->setQuantityAvailable(0)
                ->setShowUnavailableItems(false)
                ->setHideIfNoCurrency(true)
                ->setBuyStringOverride('Accept')
                ->setOverlayTitle('Factions of the City')
                ->setOverlayDescription('You met the full force of the Vex - and you turned them back. Incredible.')
                ->setOverlayChoice('Accept gift:')
                ->setOverlayIcon('/img/misc/missing_icon.png')
                ->setHasOverlay(true)
                ->setHideFromRegularPurchase(false)
        ]);

        $this->assertEquals($expected, $categories);
    }

    /**
     * Test Map Array To Director Book Nodes
     */
    public function testMapArrayToDirectorBookNodes()
    {
        $nodes = MapperHelper::mapArrayToDirectorBookNodes(null, [
            [
                'nodeDefinitionHash' => 2925505302,
                'styleHash' => 2166136261,
                'positionX' => 821,
                'positionY' => 722,
                'positionZ' => 0,
                'activityBundleHashes' => [],
                'states' => [
                    [
                        'state' => 0
                    ],
                    [
                        'state' => 4
                    ]
                ],
                'uiModifier' => 0
            ]
        ]);

        $expected = new Collection(DirectorBookNode::class, [
            (new DirectorBookNode())
                ->setNodeDefinitionHash(2925505302)
                ->setStyleHash(2166136261)
                ->setPositionX(821)
                ->setPositionY(722)
                ->setPositionZ(0)
                ->setActivityBundleHashes(new Collection('int'))
                ->setStates(new Collection(DirectorBookNodeState::class, [
                    (new DirectorBookNodeState())->setState(0),
                    (new DirectorBookNodeState())->setState(4)
                ]))
                ->setUiModifier(0)
        ]);

        $this->assertEquals($expected, $nodes);
    }

    /**
     * Test Map Array To Director Book Node States
     */
    public function testMapArrayToDirectorBookNodeStates()
    {
        $states = MapperHelper::mapArrayToDirectorBookNodeStates(null, [
            [
                'state' => 0
            ],
            [
                'state' => 4
            ]
        ]);

        $expected = new Collection(DirectorBookNodeState::class, [
            (new DirectorBookNodeState())
                ->setState(0),
            (new DirectorBookNodeState())
                ->setState(4)
        ]);

        $this->assertEquals($expected, $states);
    }

    /**
     * Test Map Array To Director Book Connections
     */
    public function testMapArrayToDirectorBookConnections()
    {
        $connections = MapperHelper::mapArrayToDirectorBookConnections(null, [
            [
                'sourceNodeIndex' => 9,
                'destinationNodeIndex' => 5
            ],
            [
                'sourceNodeIndex' => 3,
                'destinationNodeIndex' => 2
            ]
        ]);

        $expected = new Collection(DirectorBookConnection::class, [
            (new DirectorBookConnection())
                ->setSourceNodeIndex(9)
                ->setDestinationNodeIndex(5),
            (new DirectorBookConnection())
                ->setSourceNodeIndex(3)
                ->setDestinationNodeIndex(2)
        ]);

        $this->assertEquals($expected, $connections);
    }

    /**
     * Test Map Array To Director Book Expression
     */
    public function testMapArrayToDirectorBookExpression()
    {
        $expression = MapperHelper::mapArrayToDirectorBookExpression(null, [
            'steps' => [
                [
                    'stepOperator' => 1,
                    'flagHash' => 2748347740,
                    'valueHash' => 0,
                    'value' => 3585
                ],
                [
                    'stepOperator' => 1,
                    'flagHash' => 2388787017,
                    'valueHash' => 0,
                    'value' => 170
                ]
            ]
        ]);

        $expected = (new DirectorBookExpression())
            ->setSteps(new Collection(DirectorBookExpressionStep::class, [
                (new DirectorBookExpressionStep())
                    ->setStepOperator(1)
                    ->setFlagHash(2748347740)
                    ->setValueHash(0)
                    ->setValue(3585),
                (new DirectorBookExpressionStep())
                    ->setStepOperator(1)
                    ->setFlagHash(2388787017)
                    ->setValueHash(0)
                    ->setValue(170)
            ]));

        $this->assertEquals($expected, $expression);
    }

    /**
 * Test Map Array To Director Book Expression Steps
 */
    public function testMapArrayToDirectorBookExpressionSteps()
    {
        $steps = MapperHelper::mapArrayToDirectorBookExpressionSteps(null, [
            [
                'stepOperator' => 1,
                'flagHash' => 2748347740,
                'valueHash' => 0,
                'value' => 3585
            ],
            [
                'stepOperator' => 1,
                'flagHash' => 2388787017,
                'valueHash' => 0,
                'value' => 170
            ]
        ]);

        $expected = new Collection(DirectorBookExpressionStep::class, [
            (new DirectorBookExpressionStep())
                ->setStepOperator(1)
                ->setFlagHash(2748347740)
                ->setValueHash(0)
                ->setValue(3585),
            (new DirectorBookExpressionStep())
                ->setStepOperator(1)
                ->setFlagHash(2388787017)
                ->setValueHash(0)
                ->setValue(170)
        ]);

        $this->assertEquals($expected, $steps);
    }

    /**
     * Test Map Array To Inventory Item Stats
     */
    public function testMapArrayToInventoryItemStats()
    {
        $stats = MapperHelper::mapArrayToInventoryItemStats(null, [
            '155624089' => [
                'statHash' => 155624089,
                'value' => 53,
                'minimum' => 53,
                'maximum' => 68
            ],
            '368428387' => [
                'statHash' => 368428387,
                'value' => 155,
                'minimum' => 135,
                'maximum' => 155
            ]
        ]);

        $expected = new Collection(InventoryItemStat::class, [
            (new InventoryItemStat())
                ->setStatHash(155624089)
                ->setValue(53)
                ->setMinimum(53)
                ->setMaximum(68),
            (new InventoryItemStat())
                ->setStatHash(368428387)
                ->setValue(155)
                ->setMinimum(135)
                ->setMaximum(155)
        ]);

        $this->assertEquals($expected, $stats);
    }

    /**
     * Test Map Array To Inventory Item Equipping Block
     */
    public function testMapArrayToInventoryItemEquippingBlock()
    {
        $stats = MapperHelper::mapArrayToInventoryItemEquippingBlock(null, [
            'weaponSandboxPatternIndex' => 39,
            'gearArtArrangementIndex' => 1229,
            'defaultDyes' => [
                [
                    'channelHash' => 1667433271,
                    'dyeHash' => 2215029961
                ],
                [
                    'channelHash' => 1667433272,
                    'dyeHash' => 2215029962
                ]
            ],
            'lockedDyes' => [
                [
                    'channelHash' => 1667433273,
                    'dyeHash' => 2215029963
                ],
                [
                    'channelHash' => 1667433274,
                    'dyeHash' => 2215029964
                ]
            ],
            'customDyes' => [
                [
                    'channelHash' => 1667433275,
                    'dyeHash' => 2215029965
                ],
                [
                    'channelHash' => 1667433276,
                    'dyeHash' => 2215029966
                ]
            ],
            'customDyeExpression' => [
                'steps' => [
                    [
                        'stepOperator' => 1,
                        'flagHash' => 1680320212,
                        'valueHash' => 0,
                        'value' => 2313
                    ]
                ]
            ],
            'weaponPatternHash' => 2786088834,
            'arrangements' => [
                [
                    'classHash' => 0,
                    'gearArtArrangementIndex' => 1229
                ]
            ]
        ]);

        $expected = (new InventoryItemEquippingBlock())
            ->setWeaponSandboxPatternIndex(39)
            ->setGearArtArrangementIndex(1229)
            ->setDefaultDyes(new Collection(InventoryItemDye::class, [
                (new InventoryItemDye())->setChannelHash(1667433271)->setDyeHash(2215029961),
                (new InventoryItemDye())->setChannelHash(1667433272)->setDyeHash(2215029962)
            ]))
            ->setLockedDyes(new Collection(InventoryItemDye::class, [
                (new InventoryItemDye())->setChannelHash(1667433273)->setDyeHash(2215029963),
                (new InventoryItemDye())->setChannelHash(1667433274)->setDyeHash(2215029964)
            ]))
            ->setCustomDyes(new Collection(InventoryItemDye::class, [
                (new InventoryItemDye())->setChannelHash(1667433275)->setDyeHash(2215029965),
                (new InventoryItemDye())->setChannelHash(1667433276)->setDyeHash(2215029966)
            ]))
            ->setCustomDyeExpression((new DirectorBookExpression())
                ->setSteps(new Collection(DirectorBookExpressionStep::class, [
                    (new DirectorBookExpressionStep())
                        ->setStepOperator(1)
                        ->setFlagHash(1680320212)
                        ->setValueHash(0)
                        ->setValue(2313)
                ]))
            )
            ->setWeaponPatternHash(2786088834)
            ->setArrangements(new Collection(InventoryItemEquippingBlockArrangement::class, [
                (new InventoryItemEquippingBlockArrangement())
                    ->setClassHash(0)
                    ->setGearArtArrangementIndex(1229)
            ]));


        $this->assertEquals($expected, $stats);
    }

    /**
     * Test Map Array To Inventory Item Dyes
     */
    public function testMapArrayToInventoryItemDyes()
    {
        $dyes = MapperHelper::mapArrayToInventoryItemDyes(null, [
            [
                'channelHash' => 218592586,
                'dyeHash' => 310687106
            ],
            [
                'channelHash' => 218592587,
                'dyeHash' => 310687107
            ]
        ]);

        $expected = new Collection(InventoryItemDye::class, [
            (new InventoryItemDye())
                ->setChannelHash(218592586)
                ->setDyeHash(310687106),
            (new InventoryItemDye())
                ->setChannelHash(218592587)
                ->setDyeHash(310687107)
        ]);

        $this->assertEquals($expected, $dyes);
    }

    /**
     * Test Map Array To Inventory Item Equipping Block Arrangements
     */
    public function testMapArrayToInventoryItemEquippingBlockArrangements()
    {
        $arrangements = MapperHelper::mapArrayToInventoryItemEquippingBlockArrangements(null, [
            [
                'classHash' => 0,
                'gearArtArrangementIndex' => 2983
            ]
        ]);

        $expected = new Collection(InventoryItemEquippingBlockArrangement::class, [
            (new InventoryItemEquippingBlockArrangement())
                ->setClassHash(0)
                ->setGearArtArrangementIndex(2983)
        ]);

        $this->assertEquals($expected, $arrangements);
    }

    /**
 * Test Map Array To Inventory Item Sources
 */
    public function testMapArrayToInventoryItemSources()
    {
        $sources = MapperHelper::mapArrayToInventoryItemSources(null, [
            [
                'expansionIndex' => 0,
                'level' => 50,
                'minQuality' => 0,
                'maxQuality' => 35,
                'minLevelRequired' => 40,
                'maxLevelRequired' => 40,
                'exclusivity' => 0,
                'computedStats' => [
                    '144602215' => [
                        'statHash' => 144602215,
                        'value' => 30,
                        'minimum' => 30,
                        'maximum' => 60
                    ],
                    '1735777505' => [
                        'statHash' => 1735777505,
                        'value' => 30,
                        'minimum' => 60,
                        'maximum' => 60
                    ]
                ],
                'sourceHashes' => [1882189853, 460228854],
                'spawnIndexes' => [0, 1, 2, 3, 4, 5]
            ]
        ]);

        $expected = new Collection(InventoryItemSource::class, [
            (new InventoryItemSource())
                ->setExpansionIndex(0)
                ->setLevel(50)
                ->setMinQuality(0)
                ->setMaxQuality(35)
                ->setMinLevelRequired(40)
                ->setMaxLevelRequired(40)
                ->setExclusivity(0)
                ->setComputedStats(new Collection(InventoryItemStat::class, [
                    (new InventoryItemStat())->setStatHash(144602215)->setValue(30)->setMinimum(30)->setMaximum(60),
                    (new InventoryItemStat())->setStatHash(1735777505)->setValue(30)->setMinimum(60)->setMaximum(60)
                ]))
                ->setSourceHashes(new Collection('int', [1882189853, 460228854]))
                ->setSpawnIndexes(new Collection('int', [0, 1, 2, 3, 4, 5]))
        ]);

        $this->assertEquals($expected, $sources);
    }

    /**
     * Test Map Array To Stat Group Scaled Stats
     */
    public function testMapArrayToStatGroupScaledStats()
    {
        $stats = MapperHelper::mapArrayToStatGroupScaledStats(null, [
            [
                'statHash' => 392767087,
                'maximumValue' => 11,
                'displayAsNumeric' => false,
                'displayInterpolation' => [
                    [
                        'value' => 0,
                        'weight' => 0
                    ],
                    [
                        'value' => 100,
                        'weight' => 100
                    ]
                ]
            ],
            [
                'statHash' => 1943323491,
                'maximumValue' => 11,
                'displayAsNumeric' => false,
                'displayInterpolation' => [
                    [
                        'value' => 0,
                        'weight' => 0
                    ],
                    [
                        'value' => 100,
                        'weight' => 100
                    ]
                ]
            ]
        ]);

        $expected = new Collection(StatGroupScaledStat::class, [
            (new StatGroupScaledStat())
                ->setStatHash(392767087)
                ->setMaximumValue(11)
                ->setDisplayAsNumeric(false)
                ->setDisplayInterpolation(new Collection(StatGroupScaledStatInterpolation::class, [
                    (new StatGroupScaledStatInterpolation())->setValue(0)->setWeight(0),
                    (new StatGroupScaledStatInterpolation())->setValue(100)->setWeight(100)
                ])),
            (new StatGroupScaledStat())
                ->setStatHash(1943323491)
                ->setMaximumValue(11)
                ->setDisplayAsNumeric(false)
                ->setDisplayInterpolation(new Collection(StatGroupScaledStatInterpolation::class, [
                    (new StatGroupScaledStatInterpolation())->setValue(0)->setWeight(0),
                    (new StatGroupScaledStatInterpolation())->setValue(100)->setWeight(100)
                ]))
        ]);

        $this->assertEquals($expected, $stats);
    }

    /**
     * Test Map Array To Stat Group Scaled Stat Interpolations
     */
    public function testMapArrayToStatGroupScaledStatInterpolations()
    {
        $interpolations = MapperHelper::mapArrayToStatGroupScaledStatInterpolations(null, [
            [
                'value' => 0,
                'weight' => 0
            ],
            [
                'value' => 100,
                'weight' => 100
            ]
        ]);

        $expected = new Collection(StatGroupScaledStatInterpolation::class, [
            (new StatGroupScaledStatInterpolation())->setValue(0)->setWeight(0),
            (new StatGroupScaledStatInterpolation())->setValue(100)->setWeight(100)
        ]);

        $this->assertEquals($expected, $interpolations);
    }

    /**
     * Test Map Array To Stat Group Overrides
     */
    public function testMapArrayToStatGroupOverrides()
    {
        $overrides = MapperHelper::mapArrayToStatGroupOverrides(null, [
            '144602215' => [
                'statHash' => 144602215,
                'displayName' => '',
                'displayDescription' => '',
                'displayIcon' => '/img/misc/missing_icon.png'
            ],
            '1735777505' => [
                'statHash' => 1735777505,
                'displayName' => '',
                'displayDescription' => '',
                'displayIcon' => '/img/misc/missing_icon.png'
            ]
        ]);

        $expected = new Collection(StatGroupOverride::class, [
            (new StatGroupOverride())
                ->setStatHash(144602215)
                ->setDisplayName('')
                ->setDisplayDescription('')
                ->setDisplayIcon('/img/misc/missing_icon.png'),
            (new StatGroupOverride())
                ->setStatHash(1735777505)
                ->setDisplayName('')
                ->setDisplayDescription('')
                ->setDisplayIcon('/img/misc/missing_icon.png')
        ]);

        $this->assertEquals($expected, $overrides);
    }
}
