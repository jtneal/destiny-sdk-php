<?php

namespace Necowebs\Destiny\Utils;

use Collections\Collection;
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

/**
 * Class MapperHelper
 * @package Necowebs\Destiny\Utils
 */
class MapperHelper
{
    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToProgressionSteps($obj, array $val)
    {
        $steps = [];
        foreach ($val as $step) {
            $stepMapper = (new ArrayObjectMapper(ProgressionStep::class))
                ->add('progressTotal')
                ->add('rewardItems', null, self::class . '::mapArrayToRewardItems');
            $steps[] = $stepMapper->map($step);
        }
        return new Collection(ProgressionStep::class, $steps);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToRewards($obj, array $val)
    {
        $rewards = [];
        foreach ($val as $reward) {
            $mapper = (new ArrayObjectMapper(Reward::class))
                ->add('rewardItems', null, self::class . '::mapArrayToRewardItems');
            $rewards[] = $mapper->map($reward);
        }
        return new Collection(Reward::class, $rewards);

    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToRewardItems($obj, array $val)
    {
        $rewardItems = [];
        foreach ($val as $rewardItem) {
            $mapper = (new ArrayObjectMapper(RewardItem::class))
                ->add('itemHash')
                ->add('value');
            $rewardItems[] = $mapper->map($rewardItem);
        }
        return new Collection(RewardItem::class, $rewardItems);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToSkulls($obj, array $val)
    {
        $skulls = [];
        foreach ($val as $skull) {
            $mapper = (new ArrayObjectMapper(Skull::class))
                ->add('displayName')
                ->add('description')
                ->add('icon');
            $skulls[] = $mapper->map($skull);
        }
        return new Collection(Skull::class, $skulls);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToInts($obj, array $val)
    {
        return new Collection('int', $val);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToStrings($obj, array $val)
    {
        return new Collection('string', $val);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToMaterialRequirementItems($obj, array $val)
    {
        $items = [];
        foreach ($val as $item) {
            $mapper = (new ArrayObjectMapper(MaterialRequirementItem::class))
                ->add('itemHash')
                ->add('deleteOnAction')
                ->add('count')
                ->add('omitFromRequirements');
            $items[] = $mapper->map($item);
        }
        return new Collection(MaterialRequirementItem::class, $items);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToTalentGridExclusiveSets($obj, array $val)
    {
        $sets = [];
        foreach ($val as $set) {
            $mapper = (new ArrayObjectMapper(TalentGridExclusiveSet::class))
                ->add('nodeIndexes', null, self::class . '::mapArrayToInts');
            $sets[] = $mapper->map($set);
        }
        return new Collection(TalentGridExclusiveSet::class, $sets);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToTalentGridNodes($obj, array $val)
    {
        $nodes = [];
        foreach ($val as $node) {
            $mapper = (new ArrayObjectMapper(TalentGridNode::class))
                ->add('nodeIndex')
                ->add('nodeHash')
                ->add('row')
                ->add('column')
                ->add('prerequisiteNodeIndexes', null, self::class . '::mapArrayToInts')
                ->add('binaryPairNodeIndex')
                ->add('autoUnlocks')
                ->add('lastStepRepeats')
                ->add('isRandom')
                ->add('randomActivationRequirement', null, self::class . '::mapArrayToTalentGridActivationRequirement')
                ->add('isRandomRepurchasable')
                ->add('steps', null, self::class . '::mapArrayToTalentGridSteps')
                ->add('exlusiveWithNodes', null, self::class . '::mapArrayToInts')
                ->add('randomStartProgressionBarAtProgression')
                ->add('originalNodeHash');
            $nodes[] = $mapper->map($node);
        }
        return new Collection(TalentGridNode::class, $nodes);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToTalentGridSteps($obj, array $val)
    {
        $steps = [];
        foreach ($val as $step) {
            $mapper = (new ArrayObjectMapper(TalentGridStep::class))
                ->add('stepIndex')
                ->add('nodeStepHash')
                ->add('nodeStepName')
                ->add('nodeStepDescription')
                ->add('interactionDescription')
                ->add('icon')
                ->add('damageType')
                ->add('damageTypeHash')
                ->add('activationRequirement', null, self::class . '::mapArrayToTalentGridActivationRequirement')
                ->add('canActivateNextStep')
                ->add('nextStepIndex')
                ->add('isNextStepRandom')
                ->add('perkHashes', null, self::class . '::mapArrayToInts')
                ->add('startProgressionBarAtProgress')
                ->add('statHashes', null, self::class . '::mapArrayToInts')
                ->add('affectsQuality')
                ->add('stepGroups', null, self::class . '::mapArrayToSandboxPerkGroup')
                ->add('trueStepIndex')
                ->add('truePropertyIndex')
                ->add('affectsLevel');
            $steps[] = $mapper->map($step);
        }
        return new Collection(TalentGridStep::class, $steps);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToTalentGridActivationRequirement($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(TalentGridActivationRequirement::class))
            ->add('gridLevel')
            ->add('materialRequirementHashes', null, self::class . '::mapArrayToInts');
        return $mapper->map($val);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToSandboxPerkGroup($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(SandboxPerkGroup::class))
            ->add('weaponPerformance')
            ->add('impactEffects')
            ->add('guardianAttributes')
            ->add('lightAbilities')
            ->add('damageTypes');
        return $mapper->map($val);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToVendorSummary($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(VendorSummary::class))
            ->add('vendorHash')
            ->add('vendorName')
            ->add('vendorDescription')
            ->add('vendorIcon')
            ->add('vendorOrder')
            ->add('factionName')
            ->add('factionIcon')
            ->add('factionHash')
            ->add('factionDescription')
            ->add('resetIntervalMinutes')
            ->add('resetOffsetMinutes')
            ->add('vendorIdentifier')
            ->add('positionX')
            ->add('positionY')
            ->add('transitionNodeIdentifier')
            ->add('visible')
            ->add('progressionHash')
            ->add('sellString')
            ->add('buyString')
            ->add('vendorPortrait')
            ->add('vendorBanner')
            ->add('unlockFlagHashes', null, self::class . '::mapArrayToInts')
            ->add('enabledUnlockFlagHashes', null, self::class . '::mapArrayToInts')
            ->add('mapSectionIdentifier')
            ->add('mapSectionName')
            ->add('mapSectionOrder')
            ->add('showOnMap')
            ->add('eventHash')
            ->add('vendorCategoryHash')
            ->add('vendorCategoryHashes', null, self::class . '::mapArrayToInts')
            ->add('vendorSubcategoryHash')
            ->add('inhibitBuying');
        return $mapper->map($val);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToVendorCategories($obj, array $val)
    {
        $categories = [];
        foreach ($val as $category) {
            $mapper = (new ArrayObjectMapper(VendorCategory::class))
                ->add('categoryHash')
                ->add('displayTitle')
                ->add('overlayCurrencyItemHash')
                ->add('quantityAvailable')
                ->add('showUnavailableItems')
                ->add('hideIfNoCurrency')
                ->add('buyStringOverride')
                ->add('overlayTitle')
                ->add('overlayDescription')
                ->add('overlayChoice')
                ->add('overlayIcon')
                ->add('hasOverlay')
                ->add('hideFromRegularPurchase');
            $categories[] = $mapper->map($category);
        }
        return new Collection(VendorCategory::class, $categories);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToDirectorBookNodes($obj, array $val)
    {
        $nodes = [];
        foreach ($val as $node) {
            $mapper = (new ArrayObjectMapper(DirectorBookNode::class))
                ->add('nodeDefinitionHash')
                ->add('styleHash')
                ->add('positionX')
                ->add('positionY')
                ->add('positionZ')
                ->add('activityBundleHashes', null, self::class . '::mapArrayToInts')
                ->add('states', null, self::class . '::mapArrayToDirectorBookNodeStates')
                ->add('uiModifier');
            $nodes[] = $mapper->map($node);
        }
        return new Collection(DirectorBookNode::class, $nodes);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToDirectorBookNodeStates($obj, array $val)
    {
        $states = [];
        foreach ($val as $state) {
            $mapper = (new ArrayObjectMapper(DirectorBookNodeState::class))
                ->add('state');
            $states[] = $mapper->map($state);
        }
        return new Collection(DirectorBookNodeState::class, $states);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToDirectorBookConnections($obj, array $val)
    {
        $connections = [];
        foreach ($val as $connection) {
            $mapper = (new ArrayObjectMapper(DirectorBookConnection::class))
                ->add('sourceNodeIndex')
                ->add('destinationNodeIndex');
            $connections[] = $mapper->map($connection);
        }
        return new Collection(DirectorBookConnection::class, $connections);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToDirectorBookExpression($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(DirectorBookExpression::class))
            ->add('steps', null, self::class . '::mapArrayToDirectorBookExpressionSteps');
        return $mapper->map($val);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToDirectorBookExpressionSteps($obj, array $val)
    {
        $steps = [];
        foreach ($val as $step) {
            $mapper = (new ArrayObjectMapper(DirectorBookExpressionStep::class))
                ->add('stepOperator')
                ->add('flagHash')
                ->add('valueHash')
                ->add('value');
            $steps[] = $mapper->map($step);
        }
        return new Collection(DirectorBookExpressionStep::class, $steps);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToInventoryItemStats($obj, array $val)
    {
        $stats = [];
        foreach ($val as $stat) {
            $mapper = (new ArrayObjectMapper(InventoryItemStat::class))
                ->add('statHash')
                ->add('value')
                ->add('minimum')
                ->add('maximum');
            $stats[] = $mapper->map($stat);
        }
        return new Collection(InventoryItemStat::class, $stats);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToInventoryItemEquippingBlock($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(InventoryItemEquippingBlock::class))
            ->add('weaponSandboxPatternIndex')
            ->add('gearArtArrangementIndex')
            ->add('defaultDyes', null, self::class . '::mapArrayToInventoryItemDyes')
            ->add('lockedDyes', null, self::class . '::mapArrayToInventoryItemDyes')
            ->add('customDyes', null, self::class . '::mapArrayToInventoryItemDyes')
            ->add('customDyeExpression', null, self::class . '::mapArrayToDirectorBookExpression')
            ->add('weaponPatternHash')
            ->add('arrangements', null, self::class . '::mapArrayToInventoryItemEquippingBlockArrangements');
        return $mapper->map($val);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToInventoryItemDyes($obj, array $val)
    {
        $dyes = [];
        foreach ($val as $dye) {
            $mapper = (new ArrayObjectMapper(InventoryItemDye::class))
                ->add('channelHash')
                ->add('dyeHash');
            $dyes[] = $mapper->map($dye);
        }
        return new Collection(InventoryItemDye::class, $dyes);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToInventoryItemEquippingBlockArrangements($obj, array $val)
    {
        $arrangements = [];
        foreach ($val as $arrangement) {
            $mapper = (new ArrayObjectMapper(InventoryItemEquippingBlockArrangement::class))
                ->add('classHash')
                ->add('gearArtArrangementIndex');
            $arrangements[] = $mapper->map($arrangement);
        }
        return new Collection(InventoryItemEquippingBlockArrangement::class, $arrangements);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToInventoryItemSources($obj, array $val)
    {
        $sources = [];
        foreach ($val as $source) {
            $mapper = (new ArrayObjectMapper(InventoryItemSource::class))
                ->add('expansionIndex')
                ->add('level')
                ->add('minQuality')
                ->add('maxQuality')
                ->add('minLevelRequired')
                ->add('maxLevelRequired')
                ->add('exclusivity')
                ->add('computedStats', null, self::class . '::mapArrayToInventoryItemStats')
                ->add('sourceHashes', null, self::class . '::mapArrayToInts')
                ->add('spawnIndexes', null, self::class . '::mapArrayToInts');
            $sources[] = $mapper->map($source);
        }
        return new Collection(InventoryItemSource::class, $sources);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToStatGroupScaledStats($obj, array $val)
    {
        $stats = [];
        foreach ($val as $stat) {
            $mapper = (new ArrayObjectMapper(StatGroupScaledStat::class))
                ->add('statHash')
                ->add('maximumValue')
                ->add('displayAsNumeric')
                ->add('displayInterpolation', null, self::class . '::mapArrayToStatGroupScaledStatInterpolations');
            $stats[] = $mapper->map($stat);
        }
        return new Collection(StatGroupScaledStat::class, $stats);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToStatGroupScaledStatInterpolations($obj, array $val)
    {
        $interpolations = [];
        foreach ($val as $interpolation) {
            $mapper = (new ArrayObjectMapper(StatGroupScaledStatInterpolation::class))
                ->add('value')
                ->add('weight');
            $interpolations[] = $mapper->map($interpolation);
        }
        return new Collection(StatGroupScaledStatInterpolation::class, $interpolations);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToStatGroupOverrides($obj, array $val)
    {
        $overrides = [];
        foreach ($val as $override) {
            $mapper = (new ArrayObjectMapper(StatGroupOverride::class))
                ->add('statHash')
                ->add('displayName')
                ->add('displayDescription')
                ->add('displayIcon');
            $overrides[] = $mapper->map($override);
        }
        return new Collection(StatGroupOverride::class, $overrides);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToSummaryCharacters($obj, array $val)
    {
        $currencies = [];
        foreach ($val as $currency) {
            $mapper = (new ArrayObjectMapper(SummaryCharacter::class))
                ->add('characterBase', null, self::class . '::mapArrayToSummaryCharacterBase')
                ->add('levelProgression', null, self::class . '::mapArrayToSummaryCharacterLevelProgression')
                ->add('emblemPath')
                ->add('backgroundPath')
                ->add('emblemHash')
                ->add('characterLevel')
                ->add('baseCharacterLevel')
                ->add('isPrestigeLevel')
                ->add('percentToNextLevel');
            $currencies[] = $mapper->map($currency);
        }
        return new Collection(SummaryCharacter::class, $currencies);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToSummaryCharacterBase($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(SummaryCharacterBase::class))
            ->add('membershipId')
            ->add('membershipType')
            ->add('characterId')
            ->add('dateLastPlayed')
            ->add('minutesPlayedThisSession')
            ->add('minutesPlayedTotal')
            ->add('powerLevel')
            ->add('raceHash')
            ->add('genderHash')
            ->add('classHash')
            ->add('currentActivityHash')
            ->add('lastCompletedStoryHash')
            ->add('stats', null, self::class . '::mapArrayToSummaryCharacterBaseStats')
            ->add('customization', null, self::class . '::mapArrayToSummaryCharacterBaseCustomization')
            ->add('grimoireScore')
            ->add('peerView', null, self::class . '::mapArrayToSummaryCharacterBasePeerView')
            ->add('genderType')
            ->add('classType')
            ->add('buildStatGroupHash');
        return $mapper->map($val);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToSummaryCharacterBaseStats($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(SummaryCharacterBaseStats::class))
            ->add('STAT_DEFENSE', 'setDefense', self::class . '::mapArrayToSummaryCharacterBaseStat')
            ->add('STAT_INTELLECT', 'setIntellect', self::class . '::mapArrayToSummaryCharacterBaseStat')
            ->add('STAT_DISCIPLINE', 'setDiscipline', self::class . '::mapArrayToSummaryCharacterBaseStat')
            ->add('STAT_STRENGTH', 'setStrength', self::class . '::mapArrayToSummaryCharacterBaseStat')
            ->add('STAT_LIGHT', 'setLight', self::class . '::mapArrayToSummaryCharacterBaseStat')
            ->add('STAT_ARMOR', 'setArmor', self::class . '::mapArrayToSummaryCharacterBaseStat')
            ->add('STAT_AGILITY', 'setAgility', self::class . '::mapArrayToSummaryCharacterBaseStat')
            ->add('STAT_RECOVERY', 'setRecovery', self::class . '::mapArrayToSummaryCharacterBaseStat')
            ->add('STAT_OPTICS', 'setOptics', self::class . '::mapArrayToSummaryCharacterBaseStat')
            ->add('STAT_ATTACK_SPEED', 'setAttackSpeed', self::class . '::mapArrayToSummaryCharacterBaseStat')
            ->add('STAT_DAMAGE_REDUCTION', 'setDamageReduction', self::class . '::mapArrayToSummaryCharacterBaseStat')
            ->add('STAT_ATTACK_EFFICIENCY', 'setAttackEfficiency', self::class . '::mapArrayToSummaryCharacterBaseStat')
            ->add('STAT_ATTACK_ENERGY', 'setAttackEnergy', self::class . '::mapArrayToSummaryCharacterBaseStat');
        return $mapper->map($val);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToSummaryCharacterBaseStat($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(SummaryCharacterBaseStat::class))
            ->add('statHash')
            ->add('value')
            ->add('maximumValue');
        return $mapper->map($val);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToSummaryCharacterBasePeerView($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(SummaryCharacterBasePeerView::class))
            ->add('equipment', null, self::class . '::mapArrayToSummaryCharacterBasePeerViewEquipments');
        return $mapper->map($val);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToSummaryCharacterBasePeerViewEquipments($obj, array $val)
    {
        $equipments = [];
        foreach ($val as $equipment) {
            $mapper = (new ArrayObjectMapper(SummaryCharacterBasePeerViewEquipment::class))
                ->add('itemHash')
                ->add('dyes', null, self::class . '::mapArrayToInventoryItemDyes');
            $equipments[] = $mapper->map($equipment);
        }
        return new Collection(SummaryCharacterBasePeerViewEquipment::class, $equipments);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToSummaryCharacterBaseCustomization($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(SummaryCharacterBaseCustomization::class))
            ->add('personality')
            ->add('face')
            ->add('skinColor')
            ->add('lipColor')
            ->add('eyeColor')
            ->add('hairColor')
            ->add('featureColor')
            ->add('decalColor')
            ->add('wearHelmet')
            ->add('hairIndex')
            ->add('featureIndex')
            ->add('decalIndex');
        return $mapper->map($val);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToSummaryCharacterLevelProgression($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(SummaryCharacterLevelProgression::class))
            ->add('dailyProgress')
            ->add('weeklyProgress')
            ->add('currentProgress')
            ->add('level')
            ->add('step')
            ->add('progressToNextLevel')
            ->add('nextLevelAt')
            ->add('progressionHash');
        return $mapper->map($val);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToSummaryInventory($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(SummaryInventory::class))
            ->add('items', null, self::class . '::mapArrayToInts')
            ->add('currencies', null, self::class . '::mapArrayToSummaryInventoryCurrencies');
        return $mapper->map($val);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToSummaryInventoryCurrencies($obj, array $val)
    {
        $currencies = [];
        foreach ($val as $currency) {
            $mapper = (new ArrayObjectMapper(SummaryInventoryCurrency::class))
                ->add('itemHash')
                ->add('value');
            $currencies[] = $mapper->map($currency);
        }
        return new Collection(SummaryInventoryCurrency::class, $currencies);
    }
}
