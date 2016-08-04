<?php

namespace Necowebs\Destiny\Utils;

use Collections\Collection;
use Necowebs\Destiny\Models\Account\AdvisorRecordBook;
use Necowebs\Destiny\Models\Account\AdvisorRecordBookRecord;
use Necowebs\Destiny\Models\Account\AdvisorRecordBookRecordObjective;
use Necowebs\Destiny\Models\Account\AdvisorRecordBookSpotlight;
use Necowebs\Destiny\Models\Account\SummaryCharacter;
use Necowebs\Destiny\Models\Account\SummaryCharacterBase;
use Necowebs\Destiny\Models\Account\SummaryCharacterBaseCustomization;
use Necowebs\Destiny\Models\Account\SummaryCharacterBasePeerView;
use Necowebs\Destiny\Models\Account\SummaryCharacterBasePeerViewEquipment;
use Necowebs\Destiny\Models\Account\SummaryCharacterBaseStat;
use Necowebs\Destiny\Models\Account\SummaryCharacterBaseStats;
use Necowebs\Destiny\Models\Account\SummaryCharacterLevelProgression;
use Necowebs\Destiny\Models\Account\SummaryInventory;
use Necowebs\Destiny\Models\Account\SummaryInventoryCurrency;
use Necowebs\Destiny\Models\Manifest\DirectorBookConnection;
use Necowebs\Destiny\Models\Manifest\DirectorBookExpression;
use Necowebs\Destiny\Models\Manifest\DirectorBookExpressionStep;
use Necowebs\Destiny\Models\Manifest\DirectorBookNode;
use Necowebs\Destiny\Models\Manifest\DirectorBookNodeState;
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
use Necowebs\Destiny\Models\Stats\ActivityDetails;
use Necowebs\Destiny\Models\Stats\ActivityValue;
use Necowebs\Destiny\Models\Stats\ActivityValueBasic;
use Necowebs\Destiny\Models\Stats\ActivityValues;

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

    /**
     * Test Map Array To Summary Characters
     */
    public function testMapArrayToSummaryCharacters()
    {
        $characters = MapperHelper::mapArrayToSummaryCharacters(null, [
            [
                'characterBase' => [
                    'membershipId' => '4611686018450406180',
                    'membershipType' => 2,
                    'characterId' => '2305843009310128298',
                    'dateLastPlayed' => '2016-07-26T02:17:08Z',
                    'minutesPlayedThisSession' => '22',
                    'minutesPlayedTotal' => '32256',
                    'powerLevel' => 335,
                    'raceHash' => 3887404748,
                    'genderHash' => 2204441813,
                    'classHash' => 2271682572,
                    'currentActivityHash' => 0,
                    'lastCompletedStoryHash' => 0,
                    'stats' => [],
                    'customization' => [],
                    'grimoireScore' => 4620,
                    'peerView' => [],
                    'genderType' => 1,
                    'classType' => 2,
                    'buildStatGroupHash' => 1997970403
                ],
                'levelProgression' => [
                    'dailyProgress' => 0,
                    'weeklyProgress' => 0,
                    'currentProgress' => 346000,
                    'level' => 40,
                    'step' => 0,
                    'progressToNextLevel' => 0,
                    'nextLevelAt' => 0,
                    'progressionHash' => 1716568313
                ],
                'emblemPath' => '/common/destiny_content/icons/f2c6a2edc3e5b89092a43e29695e8539.jpg',
                'backgroundPath' => '/common/destiny_content/icons/1ee9dd7b47105a319e579b16c7520920.jpg',
                'emblemHash' => 2596665931,
                'characterLevel' => 40,
                'baseCharacterLevel' => 40,
                'isPrestigeLevel' => false,
                'percentToNextLevel' => 0
            ]
        ]);

        $expected = new Collection(SummaryCharacter::class, [
            (new SummaryCharacter())
                ->setCharacterBase((new SummaryCharacterBase())
                    ->setMembershipId('4611686018450406180')
                    ->setMembershipType(2)
                    ->setCharacterId('2305843009310128298')
                    ->setDateLastPlayed('2016-07-26T02:17:08Z')
                    ->setMinutesPlayedThisSession('22')
                    ->setMinutesPlayedTotal('32256')
                    ->setPowerLevel(335)
                    ->setRaceHash(3887404748)
                    ->setGenderHash(2204441813)
                    ->setClassHash(2271682572)
                    ->setCurrentActivityHash(0)
                    ->setLastCompletedStoryHash(0)
                    ->setStats(new SummaryCharacterBaseStats())
                    ->setCustomization(new SummaryCharacterBaseCustomization())
                    ->setGrimoireScore(4620)
                    ->setPeerView(new SummaryCharacterBasePeerView())
                    ->setGenderType(1)
                    ->setClassType(2)
                    ->setBuildStatGroupHash(1997970403)
                )
                ->setLevelProgression((new SummaryCharacterLevelProgression())
                    ->setDailyProgress(0)
                    ->setWeeklyProgress(0)
                    ->setCurrentProgress(346000)
                    ->setLevel(40)
                    ->setStep(0)
                    ->setProgressToNextLevel(0)
                    ->setNextLevelAt(0)
                    ->setProgressionHash(1716568313)
                )
                ->setEmblemPath('/common/destiny_content/icons/f2c6a2edc3e5b89092a43e29695e8539.jpg')
                ->setBackgroundPath('/common/destiny_content/icons/1ee9dd7b47105a319e579b16c7520920.jpg')
                ->setEmblemHash(2596665931)
                ->setCharacterLevel(40)
                ->setBaseCharacterLevel(40)
                ->setIsPrestigeLevel(false)
                ->setPercentToNextLevel(0)
        ]);

        $this->assertEquals($expected, $characters);
    }

    /**
     * Test Map Array To Summary Character Base
     */
    public function testMapArrayToSummaryCharacterBase()
    {
        $base = MapperHelper::mapArrayToSummaryCharacterBase(null, [
            'membershipId' => '4611686018450406180',
            'membershipType' => 2,
            'characterId' => '2305843009310128298',
            'dateLastPlayed' => '2016-07-26T02:17:08Z',
            'minutesPlayedThisSession' => '22',
            'minutesPlayedTotal' => '32256',
            'powerLevel' => 335,
            'raceHash' => 3887404748,
            'genderHash' => 2204441813,
            'classHash' => 2271682572,
            'currentActivityHash' => 0,
            'lastCompletedStoryHash' => 0,
            'stats' => [
                'STAT_DEFENSE' => [
                    'statHash' => 3897883278,
                    'value' => 0,
                    'maximumValue' => 0
                ],
                'STAT_INTELLECT' => [
                    'statHash' => 144602215,
                    'value' => 300,
                    'maximumValue' => 0
                ],
                'STAT_DISCIPLINE' => [
                    'statHash' => 1735777505,
                    'value' => 197,
                    'maximumValue' => 0
                ],
                'STAT_STRENGTH' => [
                    'statHash' => 4244567218,
                    'value' => 187,
                    'maximumValue' => 0
                ],
                'STAT_LIGHT' => [
                    'statHash' => 2391494160,
                    'value' => 335,
                    'maximumValue' => 0
                ],
                'STAT_ARMOR' => [
                    'statHash' => 392767087,
                    'value' => 7,
                    'maximumValue' => 0
                ],
                'STAT_AGILITY' => [
                    'statHash' => 2996146975,
                    'value' => 1,
                    'maximumValue' => 0
                ],
                'STAT_RECOVERY' => [
                    'statHash' => 1943323491,
                    'value' => 8,
                    'maximumValue' => 0
                ],
                'STAT_OPTICS' => [
                    'statHash' => 3555269338,
                    'value' => 85,
                    'maximumValue' => 0
                ],
                'STAT_ATTACK_SPEED' => [
                    'statHash' => 2837207746,
                    'value' => 45,
                    'maximumValue' => 0
                ],
                'STAT_DAMAGE_REDUCTION' => [
                    'statHash' => 209426660,
                    'value' => 50,
                    'maximumValue' => 0
                ],
                'STAT_ATTACK_EFFICIENCY' => [
                    'statHash' => 2762071195,
                    'value' => 75,
                    'maximumValue' => 0
                ],
                'STAT_ATTACK_ENERGY' => [
                    'statHash' => 925767036,
                    'value' => 76,
                    'maximumValue' => 0
                ]
            ],
            'customization' => [
                'personality' => 2166136261,
                'face' => 2132087816,
                'skinColor' => 3045033360,
                'lipColor' => 404671486,
                'eyeColor' => 1194006496,
                'hairColor' => 1063498229,
                'featureColor' => 2166136261,
                'decalColor' => 552943744,
                'wearHelmet' => false,
                'hairIndex' => 2,
                'featureIndex' => 0,
                'decalIndex' => 0
            ],
            'grimoireScore' => 4620,
            'peerView' => [
                'equipment' => []
            ],
            'genderType' => 1,
            'classType' => 2,
            'buildStatGroupHash' => 1997970403
        ]);

        $expected = (new SummaryCharacterBase())
            ->setMembershipId('4611686018450406180')
            ->setMembershipType(2)
            ->setCharacterId('2305843009310128298')
            ->setDateLastPlayed('2016-07-26T02:17:08Z')
            ->setMinutesPlayedThisSession('22')
            ->setMinutesPlayedTotal('32256')
            ->setPowerLevel(335)
            ->setRaceHash(3887404748)
            ->setGenderHash(2204441813)
            ->setClassHash(2271682572)
            ->setCurrentActivityHash(0)
            ->setLastCompletedStoryHash(0)
            ->setStats((new SummaryCharacterBaseStats())
                ->setDefense((new SummaryCharacterBaseStat())->setStatHash(3897883278)->setValue(0)->setMaximumValue(0))
                ->setIntellect((new SummaryCharacterBaseStat())->setStatHash(144602215)->setValue(300)->setMaximumValue(0))
                ->setDiscipline((new SummaryCharacterBaseStat())->setStatHash(1735777505)->setValue(197)->setMaximumValue(0))
                ->setStrength((new SummaryCharacterBaseStat())->setStatHash(4244567218)->setValue(187)->setMaximumValue(0))
                ->setLight((new SummaryCharacterBaseStat())->setStatHash(2391494160)->setValue(335)->setMaximumValue(0))
                ->setArmor((new SummaryCharacterBaseStat())->setStatHash(392767087)->setValue(7)->setMaximumValue(0))
                ->setAgility((new SummaryCharacterBaseStat())->setStatHash(2996146975)->setValue(1)->setMaximumValue(0))
                ->setRecovery((new SummaryCharacterBaseStat())->setStatHash(1943323491)->setValue(8)->setMaximumValue(0))
                ->setOptics((new SummaryCharacterBaseStat())->setStatHash(3555269338)->setValue(85)->setMaximumValue(0))
                ->setAttackSpeed((new SummaryCharacterBaseStat())->setStatHash(2837207746)->setValue(45)->setMaximumValue(0))
                ->setDamageReduction((new SummaryCharacterBaseStat())->setStatHash(209426660)->setValue(50)->setMaximumValue(0))
                ->setAttackEfficiency((new SummaryCharacterBaseStat())->setStatHash(2762071195)->setValue(75)->setMaximumValue(0))
                ->setAttackEnergy((new SummaryCharacterBaseStat())->setStatHash(925767036)->setValue(76)->setMaximumValue(0))
            )
            ->setCustomization((new SummaryCharacterBaseCustomization())
                ->setPersonality(2166136261)
                ->setFace(2132087816)
                ->setSkinColor(3045033360)
                ->setLipColor(404671486)
                ->setEyeColor(1194006496)
                ->setHairColor(1063498229)
                ->setFeatureColor(2166136261)
                ->setDecalColor(552943744)
                ->setWearHelmet(false)
                ->setHairIndex(2)
                ->setFeatureIndex(0)
                ->setDecalIndex(0)
            )
            ->setGrimoireScore(4620)
            ->setPeerView((new SummaryCharacterBasePeerView())
                ->setEquipment(new Collection(SummaryCharacterBasePeerViewEquipment::class))
            )
            ->setGenderType(1)
            ->setClassType(2)
            ->setBuildStatGroupHash(1997970403);

        $this->assertEquals($expected, $base);
    }

    /**
     * Test Map Array To Summary Character Base Stats
     */
    public function testMapArrayToSummaryCharacterBaseStats()
    {
        $stats = MapperHelper::mapArrayToSummaryCharacterBaseStats(null, [
            'STAT_DEFENSE' => [
                'statHash' => 3897883278,
                'value' => 0,
                'maximumValue' => 0
            ],
            'STAT_INTELLECT' => [
                'statHash' => 144602215,
                'value' => 300,
                'maximumValue' => 0
            ],
            'STAT_DISCIPLINE' => [
                'statHash' => 1735777505,
                'value' => 197,
                'maximumValue' => 0
            ],
            'STAT_STRENGTH' => [
                'statHash' => 4244567218,
                'value' => 187,
                'maximumValue' => 0
            ],
            'STAT_LIGHT' => [
                'statHash' => 2391494160,
                'value' => 335,
                'maximumValue' => 0
            ],
            'STAT_ARMOR' => [
                'statHash' => 392767087,
                'value' => 7,
                'maximumValue' => 0
            ],
            'STAT_AGILITY' => [
                'statHash' => 2996146975,
                'value' => 1,
                'maximumValue' => 0
            ],
            'STAT_RECOVERY' => [
                'statHash' => 1943323491,
                'value' => 8,
                'maximumValue' => 0
            ],
            'STAT_OPTICS' => [
                'statHash' => 3555269338,
                'value' => 85,
                'maximumValue' => 0
            ],
            'STAT_ATTACK_SPEED' => [
                'statHash' => 2837207746,
                'value' => 45,
                'maximumValue' => 0
            ],
            'STAT_DAMAGE_REDUCTION' => [
                'statHash' => 209426660,
                'value' => 50,
                'maximumValue' => 0
            ],
            'STAT_ATTACK_EFFICIENCY' => [
                'statHash' => 2762071195,
                'value' => 75,
                'maximumValue' => 0
            ],
            'STAT_ATTACK_ENERGY' => [
                'statHash' => 925767036,
                'value' => 76,
                'maximumValue' => 0
            ]
        ]);

        $expected = (new SummaryCharacterBaseStats())
            ->setDefense((new SummaryCharacterBaseStat())->setStatHash(3897883278)->setValue(0)->setMaximumValue(0))
            ->setIntellect((new SummaryCharacterBaseStat())->setStatHash(144602215)->setValue(300)->setMaximumValue(0))
            ->setDiscipline((new SummaryCharacterBaseStat())->setStatHash(1735777505)->setValue(197)->setMaximumValue(0))
            ->setStrength((new SummaryCharacterBaseStat())->setStatHash(4244567218)->setValue(187)->setMaximumValue(0))
            ->setLight((new SummaryCharacterBaseStat())->setStatHash(2391494160)->setValue(335)->setMaximumValue(0))
            ->setArmor((new SummaryCharacterBaseStat())->setStatHash(392767087)->setValue(7)->setMaximumValue(0))
            ->setAgility((new SummaryCharacterBaseStat())->setStatHash(2996146975)->setValue(1)->setMaximumValue(0))
            ->setRecovery((new SummaryCharacterBaseStat())->setStatHash(1943323491)->setValue(8)->setMaximumValue(0))
            ->setOptics((new SummaryCharacterBaseStat())->setStatHash(3555269338)->setValue(85)->setMaximumValue(0))
            ->setAttackSpeed((new SummaryCharacterBaseStat())->setStatHash(2837207746)->setValue(45)->setMaximumValue(0))
            ->setDamageReduction((new SummaryCharacterBaseStat())->setStatHash(209426660)->setValue(50)->setMaximumValue(0))
            ->setAttackEfficiency((new SummaryCharacterBaseStat())->setStatHash(2762071195)->setValue(75)->setMaximumValue(0))
            ->setAttackEnergy((new SummaryCharacterBaseStat())->setStatHash(925767036)->setValue(76)->setMaximumValue(0));

        $this->assertEquals($expected, $stats);
    }

    /**
     * Test Map Array To Summary Character Base Stat
     */
    public function testMapArrayToSummaryCharacterBaseStat()
    {
        $stat = MapperHelper::mapArrayToSummaryCharacterBaseStat(null, [
            'statHash' => 3897883278,
            'value' => 0,
            'maximumValue' => 0
        ]);

        $expected = (new SummaryCharacterBaseStat())->setStatHash(3897883278)->setValue(0)->setMaximumValue(0);

        $this->assertEquals($expected, $stat);
    }

    /**
     * Test Map Array To Summary Character Base Peer View
     */
    public function testMapArrayToSummaryCharacterBasePeerView()
    {
        $view = MapperHelper::mapArrayToSummaryCharacterBasePeerView(null, [
            'equipment' => [
                [
                    'itemHash' => 1846107924,
                    'dyes' => [
                        [
                            'channelHash' => 662199250,
                            'dyeHash' => 1765125716
                        ],
                        [
                            'channelHash' => 1367384683,
                            'dyeHash' => 3993209041
                        ],
                        [
                            'channelHash' => 218592586,
                            'dyeHash' => 3735168696
                        ]
                    ]
                ]
            ]
        ]);

        $expected = (new SummaryCharacterBasePeerView())
            ->setEquipment(new Collection(SummaryCharacterBasePeerViewEquipment::class, [
                (new SummaryCharacterBasePeerViewEquipment())
                    ->setItemHash(1846107924)
                    ->setDyes(new Collection(InventoryItemDye::class, [
                        (new InventoryItemDye())->setChannelHash(662199250)->setDyeHash(1765125716),
                        (new InventoryItemDye())->setChannelHash(1367384683)->setDyeHash(3993209041),
                        (new InventoryItemDye())->setChannelHash(218592586)->setDyeHash(3735168696)
                    ]))
            ]));

        $this->assertEquals($expected, $view);
    }

    /**
     * Test Map Array To Summary Character Base Peer View Equipments
     */
    public function testMapArrayToSummaryCharacterBasePeerViewEquipments()
    {
        $equipments = MapperHelper::mapArrayToSummaryCharacterBasePeerViewEquipments(null, [
            [
                'itemHash' => 1846107924,
                'dyes' => [
                    [
                        'channelHash' => 662199250,
                        'dyeHash' => 1765125716
                    ],
                    [
                        'channelHash' => 1367384683,
                        'dyeHash' => 3993209041
                    ],
                    [
                        'channelHash' => 218592586,
                        'dyeHash' => 3735168696
                    ]
                ]
            ]
        ]);

        $expected = new Collection(SummaryCharacterBasePeerViewEquipment::class, [
            (new SummaryCharacterBasePeerViewEquipment())
                ->setItemHash(1846107924)
                ->setDyes(new Collection(InventoryItemDye::class, [
                    (new InventoryItemDye())->setChannelHash(662199250)->setDyeHash(1765125716),
                    (new InventoryItemDye())->setChannelHash(1367384683)->setDyeHash(3993209041),
                    (new InventoryItemDye())->setChannelHash(218592586)->setDyeHash(3735168696)
                ]))
        ]);

        $this->assertEquals($expected, $equipments);
    }

    /**
     * Test Map Array To Summary Character Base Customization
     */
    public function testMapArrayToSummaryCharacterBaseCustomization()
    {
        $customization = MapperHelper::mapArrayToSummaryCharacterBaseCustomization(null, [
            'personality' => 2166136261,
            'face' => 2132087816,
            'skinColor' => 3045033360,
            'lipColor' => 404671486,
            'eyeColor' => 1194006496,
            'hairColor' => 1063498229,
            'featureColor' => 2166136261,
            'decalColor' => 552943744,
            'wearHelmet' => false,
            'hairIndex' => 2,
            'featureIndex' => 0,
            'decalIndex' => 0
        ]);

        $expected = (new SummaryCharacterBaseCustomization())
            ->setPersonality(2166136261)
            ->setFace(2132087816)
            ->setSkinColor(3045033360)
            ->setLipColor(404671486)
            ->setEyeColor(1194006496)
            ->setHairColor(1063498229)
            ->setFeatureColor(2166136261)
            ->setDecalColor(552943744)
            ->setWearHelmet(false)
            ->setHairIndex(2)
            ->setFeatureIndex(0)
            ->setDecalIndex(0);

        $this->assertEquals($expected, $customization);
    }

    /**
     * Test Map Array To Summary Character Level Progression
     */
    public function testMapArrayToSummaryCharacterLevelProgression()
    {
        $progression = MapperHelper::mapArrayToSummaryCharacterLevelProgression(null, [
            'dailyProgress' => 0,
            'weeklyProgress' => 0,
            'currentProgress' => 346000,
            'level' => 40,
            'step' => 0,
            'progressToNextLevel' => 0,
            'nextLevelAt' => 0,
            'progressionHash' => 1716568313
        ]);

        $expected = (new SummaryCharacterLevelProgression())
            ->setDailyProgress(0)
            ->setWeeklyProgress(0)
            ->setCurrentProgress(346000)
            ->setLevel(40)
            ->setStep(0)
            ->setProgressToNextLevel(0)
            ->setNextLevelAt(0)
            ->setProgressionHash(1716568313);

        $this->assertEquals($expected, $progression);
    }

    /**
     * Test Map Array To Summary Inventory
     */
    public function testMapArrayToSummaryInventory()
    {
        $inventory = MapperHelper::mapArrayToSummaryInventory(null, [
            'items' => [],
            'currencies' => [
                [
                    'itemHash' => 3159615086,
                    'value' => 0
                ],
                [
                    'itemHash' => 2534352370,
                    'value' => 0
                ],
                [
                    'itemHash' => 2749350776,
                    'value' => 0
                ]
            ]
        ]);

        $expected = (new SummaryInventory())
            ->setItems(new Collection('int'))
            ->setCurrencies(new Collection(SummaryInventoryCurrency::class, [
                (new SummaryInventoryCurrency())->setItemHash(3159615086)->setValue(0),
                (new SummaryInventoryCurrency())->setItemHash(2534352370)->setValue(0),
                (new SummaryInventoryCurrency())->setItemHash(2749350776)->setValue(0)
            ]));

        $this->assertEquals($expected, $inventory);
    }

    /**
     * Test Map Array To Summary Inventory Currencies
     */
    public function testMapArrayToSummaryInventoryCurrencies()
    {
        $inventory = MapperHelper::mapArrayToSummaryInventoryCurrencies(null, [
            [
                'itemHash' => 3159615086,
                'value' => 0
            ],
            [
                'itemHash' => 2534352370,
                'value' => 0
            ],
            [
                'itemHash' => 2749350776,
                'value' => 0
            ]
        ]);

        $expected = new Collection(SummaryInventoryCurrency::class, [
            (new SummaryInventoryCurrency())->setItemHash(3159615086)->setValue(0),
            (new SummaryInventoryCurrency())->setItemHash(2534352370)->setValue(0),
            (new SummaryInventoryCurrency())->setItemHash(2749350776)->setValue(0)
        ]);

        $this->assertEquals($expected, $inventory);
    }

    /**
     * Test Map Array To Activity Details
     */
    public function testMapArrayToActivityDetails()
    {
        $details = MapperHelper::mapArrayToActivityDetails(null, [
            'referenceId' => 3711414564,
            'instanceId' => '5277571041',
            'mode' => 2,
            'activityTypeHashOverride' => 0
        ]);

        $expected = (new ActivityDetails())
            ->setReferenceId(3711414564)
            ->setInstanceId('5277571041')
            ->setMode(2)
            ->setActivityTypeHashOverride(0);

        $this->assertEquals($expected, $details);
    }

    /**
     * Test Map Array To Activity Values
     */
    public function testMapArrayToActivityValues()
    {
        $values = MapperHelper::mapArrayToActivityValues(null, [
            'assists' => [
                'statId' => 'assists',
                'basic' => [
                    'value' => 0,
                    'displayValue' => '0'
                ]
            ],
            'kills' => [
                'statId' => 'kills',
                'basic' => [
                    'value' => 128,
                    'displayValue' => '128'
                ]
            ],
            'averageScorePerKill' => [
                'statId' => 'averageScorePerKill',
                'basic' => [
                    'value' => 0,
                    'displayValue' => '0'
                ]
            ],
            'deaths' => [
                'statId' => 'deaths',
                'basic' => [
                    'value' => 5,
                    'displayValue' => '5'
                ]
            ],
            'averageScorePerLife' => [
                'statId' => 'averageScorePerLife',
                'basic' => [
                    'value' => 0,
                    'displayValue' => '0'
                ]
            ],
            'completed' => [
                'statId' => 'completed',
                'basic' => [
                    'value' => 0,
                    'displayValue' => 'No'
                ]
            ],
            'killsDeathsRatio' => [
                'statId' => 'killsDeathsRatio',
                'basic' => [
                    'value' => 25.6,
                    'displayValue' => '25.60'
                ]
            ],
            'killsDeathsAssists' => [
                'statId' => 'killsDeathsAssists',
                'basic' => [
                    'value' => 25.6,
                    'displayValue' => '25.60'
                ]
            ],
            'activityDurationSeconds' => [
                'statId' => 'activityDurationSeconds',
                'basic' => [
                    'value' => 540,
                    'displayValue' => '9m 0s'
                ]
            ],
            'completionReason' => [
                'statId' => 'completionReason',
                'basic' => [
                    'value' => 255,
                    'displayValue' => '255'
                ]
            ],
            'fireTeamId' => [
                'statId' => 'fireTeamId',
                'basic' => [
                    'value' => 0,
                    'displayValue' => ''
                ]
            ],
            'playerCount' => [
                'statId' => 'playerCount',
                'basic' => [
                    'value' => 1,
                    'displayValue' => '1'
                ]
            ],
            'leaveRemainingSeconds' => [
                'statId' => 'leaveRemainingSeconds',
                'basic' => [
                    'value' => 0,
                    'displayValue' => '0m 0s'
                ]
            ]
        ]);

        $expected = (new ActivityValues())
            ->setAssists((new ActivityValue())
                ->setStatId('assists')->setBasic((new ActivityValueBasic())->setValue(0)->setDisplayValue('0'))
            )
            ->setKills((new ActivityValue())
                ->setStatId('kills')->setBasic((new ActivityValueBasic())->setValue(128)->setDisplayValue('128'))
            )
            ->setAverageScorePerKill((new ActivityValue())
                ->setStatId('averageScorePerKill')->setBasic((new ActivityValueBasic())->setValue(0)->setDisplayValue('0'))
            )
            ->setDeaths((new ActivityValue())
                ->setStatId('deaths')->setBasic((new ActivityValueBasic())->setValue(5)->setDisplayValue('5'))
            )
            ->setAverageScorePerLife((new ActivityValue())
                ->setStatId('averageScorePerLife')->setBasic((new ActivityValueBasic())->setValue(0)->setDisplayValue('0'))
            )
            ->setCompleted((new ActivityValue())
                ->setStatId('completed')->setBasic((new ActivityValueBasic())->setValue(0)->setDisplayValue('No'))
            )
            ->setKillsDeathsRatio((new ActivityValue())
                ->setStatId('killsDeathsRatio')->setBasic((new ActivityValueBasic())->setValue(25.6)->setDisplayValue('25.60'))
            )
            ->setKillsDeathsAssists((new ActivityValue())
                ->setStatId('killsDeathsAssists')->setBasic((new ActivityValueBasic())->setValue(25.6)->setDisplayValue('25.60'))
            )
            ->setActivityDurationSeconds((new ActivityValue())
                ->setStatId('activityDurationSeconds')->setBasic((new ActivityValueBasic())->setValue(540)->setDisplayValue('9m 0s'))
            )
            ->setCompletionReason((new ActivityValue())
                ->setStatId('completionReason')->setBasic((new ActivityValueBasic())->setValue(255)->setDisplayValue('255'))
            )
            ->setFireTeamId((new ActivityValue())
                ->setStatId('fireTeamId')->setBasic((new ActivityValueBasic())->setValue(0)->setDisplayValue(''))
            )
            ->setPlayerCount((new ActivityValue())
                ->setStatId('playerCount')->setBasic((new ActivityValueBasic())->setValue(1)->setDisplayValue('1'))
            )
            ->setLeaveRemainingSeconds((new ActivityValue())
                ->setStatId('leaveRemainingSeconds')->setBasic((new ActivityValueBasic())->setValue(0)->setDisplayValue('0m 0s'))
            );

        $this->assertEquals($expected, $values);
    }

    /**
     * Test Map Array To Activity Value
     */
    public function testMapArrayToActivityValue()
    {
        $value = MapperHelper::mapArrayToActivityValue(null, [
            'statId' => 'kills',
            'basic' => [
                'value' => 128,
                'displayValue' => '128'
            ]
        ]);

        $expected = (new ActivityValue())
            ->setStatId('kills')
            ->setBasic((new ActivityValueBasic())->setValue(128)->setDisplayValue('128'));

        $this->assertEquals($expected, $value);
    }

    /**
     * Test Map Array To Activity Value Basic
     */
    public function testMapArrayToActivityValueBasic()
    {
        $basic = MapperHelper::mapArrayToActivityValueBasic(null, [
            'value' => 128,
            'displayValue' => '128'
        ]);

        $expected = (new ActivityValueBasic())
            ->setValue(128)
            ->setDisplayValue('128');

        $this->assertEquals($expected, $basic);
    }

    /**
     * Test Map Array To Advisor Record Books
     */
    public function testMapArrayToAdvisorRecordBooks()
    {
        $books = MapperHelper::mapArrayToAdvisorRecordBooks(null, [
            '2175864601' => [
                'bookHash' => 2175864601,
                'records' => [
                    '1872531696' => [
                        'recordHash' => 1872531696,
                        'objectives' => [
                            [
                                'objectiveHash' => 1872531696,
                                'destinationHash' => 0,
                                'activityHash' => 0,
                                'progress' => 1,
                                'hasProgress' => true,
                                'isComplete' => true,
                                'displayValue' => "1"
                            ]
                        ],
                        'status' => 2
                    ]
                ],
                'progression' => [
                    'dailyProgress' => 0,
                    'weeklyProgress' => 0,
                    'currentProgress' => 4000,
                    'level' => 5,
                    'step' => 0,
                    'progressToNextLevel' => 0,
                    'nextLevelAt' => 0,
                    'progressionHash' => 2175864601
                ],
                'completedCount' => 8,
                'redeemedCount' => 8,
                'spotlights' => [
                    [
                        'rewardItemHash' => 139252900,
                        'rewardedAtLevel' => 2,
                        'quantity' => 1,
                        'status' => 2
                    ]
                ],
                'startDate' => '2016-08-02T01:48:56.779Z',
                'expirationDate' => '2016-09-20T00:00:00Z'
            ]
        ]);

        $expected = new Collection(AdvisorRecordBook::class, [
            (new AdvisorRecordBook())
                ->setBookHash(2175864601)
                ->setRecords(new Collection(AdvisorRecordBookRecord::class, [
                    (new AdvisorRecordBookRecord())
                        ->setRecordHash(1872531696)
                        ->setObjectives(new Collection(AdvisorRecordBookRecordObjective::class, [
                            (new AdvisorRecordBookRecordObjective())
                                ->setObjectiveHash(1872531696)
                                ->setDestinationHash(0)
                                ->setActivityHash(0)
                                ->setProgress(1)
                                ->setHasProgress(true)
                                ->setIsComplete(true)
                                ->setDisplayValue('1')
                        ]))
                        ->setStatus(2)
                ]))
                ->setProgression((new SummaryCharacterLevelProgression())
                    ->setDailyProgress(0)
                    ->setWeeklyProgress(0)
                    ->setCurrentProgress(4000)
                    ->setLevel(5)
                    ->setStep(0)
                    ->setProgressToNextLevel(0)
                    ->setNextLevelAt(0)
                    ->setProgressionHash(2175864601)
                )
                ->setCompletedCount(8)
                ->setRedeemedCount(8)
                ->setSpotlights(new Collection(AdvisorRecordBookSpotlight::class, [
                    (new AdvisorRecordBookSpotlight())
                        ->setRewardItemHash(139252900)
                        ->setRewardedAtLevel(2)
                        ->setQuantity(1)
                        ->setStatus(2)
                ]))
                ->setStartDate('2016-08-02T01:48:56.779Z')
                ->setExpirationDate('2016-09-20T00:00:00Z')
        ]);

        $this->assertEquals($expected, $books);
    }

    /**
     * Test Map Array To Advisor Record Book Records
     */
    public function testMapArrayToAdvisorRecordBookRecords()
    {
        $records = MapperHelper::mapArrayToAdvisorRecordBookRecords(null, [
            '1872531696' => [
                'recordHash' => 1872531696,
                'objectives' => [
                    [
                        'objectiveHash' => 1872531696,
                        'destinationHash' => 0,
                        'activityHash' => 0,
                        'progress' => 1,
                        'hasProgress' => true,
                        'isComplete' => true,
                        'displayValue' => "1"
                    ]
                ],
                'status' => 2
            ]
        ]);

        $expected = new Collection(AdvisorRecordBookRecord::class, [
            (new AdvisorRecordBookRecord())
                ->setRecordHash(1872531696)
                ->setObjectives(new Collection(AdvisorRecordBookRecordObjective::class, [
                    (new AdvisorRecordBookRecordObjective())
                        ->setObjectiveHash(1872531696)
                        ->setDestinationHash(0)
                        ->setActivityHash(0)
                        ->setProgress(1)
                        ->setHasProgress(true)
                        ->setIsComplete(true)
                        ->setDisplayValue('1')
                ]))
                ->setStatus(2)
        ]);

        $this->assertEquals($expected, $records);
    }

    /**
     * Test Map Array To Advisor Record Book Record Objectives
     */
    public function testMapArrayToAdvisorRecordBookRecordObjectives()
    {
        $objectives = MapperHelper::mapArrayToAdvisorRecordBookRecordObjectives(null, [
            [
                'objectiveHash' => 1872531696,
                'destinationHash' => 0,
                'activityHash' => 0,
                'progress' => 1,
                'hasProgress' => true,
                'isComplete' => true,
                'displayValue' => "1"
            ]
        ]);

        $expected = new Collection(AdvisorRecordBookRecordObjective::class, [
            (new AdvisorRecordBookRecordObjective())
                ->setObjectiveHash(1872531696)
                ->setDestinationHash(0)
                ->setActivityHash(0)
                ->setProgress(1)
                ->setHasProgress(true)
                ->setIsComplete(true)
                ->setDisplayValue('1')
        ]);

        $this->assertEquals($expected, $objectives);
    }

    /**
     * Test Map Array To Advisor Record Book Spotlights
     */
    public function testMapArrayToAdvisorRecordBookSpotlights()
    {
        $spotlights = MapperHelper::mapArrayToAdvisorRecordBookSpotlights(null, [
            [
                'rewardItemHash' => 139252900,
                'rewardedAtLevel' => 2,
                'quantity' => 1,
                'status' => 2
            ]
        ]);

        $expected = new Collection(AdvisorRecordBookSpotlight::class, [
            (new AdvisorRecordBookSpotlight())
                ->setRewardItemHash(139252900)
                ->setRewardedAtLevel(2)
                ->setQuantity(1)
                ->setStatus(2)
        ]);

        $this->assertEquals($expected, $spotlights);
    }
}
