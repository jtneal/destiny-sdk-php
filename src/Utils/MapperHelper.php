<?php

namespace Necowebs\Destiny\Utils;

use Collections\Collection;

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
            $stepMapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\ProgressionStep'))
                ->add('progressTotal')
                ->add('rewardItems', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToRewardItems');
            $steps[] = $stepMapper->map($step);
        }
        return new Collection('Necowebs\Destiny\Models\Manifest\ProgressionStep', $steps);
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
            $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\Reward'))
                ->add('rewardItems', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToRewardItems');
            $rewards[] = $mapper->map($reward);
        }
        return new Collection('Necowebs\Destiny\Models\Manifest\Reward', $rewards);

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
            $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\RewardItem'))
                ->add('itemHash')
                ->add('value');
            $rewardItems[] = $mapper->map($rewardItem);
        }
        return new Collection('Necowebs\Destiny\Models\Manifest\RewardItem', $rewardItems);
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
            $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\Skull'))
                ->add('displayName')
                ->add('description')
                ->add('icon');
            $skulls[] = $mapper->map($skull);
        }
        return new Collection('Necowebs\Destiny\Models\Manifest\Skull', $skulls);
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
    public static function mapArrayToMaterialRequirementItems($obj, array $val)
    {
        $items = [];
        foreach ($val as $item) {
            $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\MaterialRequirementItem'))
                ->add('itemHash')
                ->add('deleteOnAction')
                ->add('count')
                ->add('omitFromRequirements');
            $items[] = $mapper->map($item);
        }
        return new Collection('Necowebs\Destiny\Models\Manifest\MaterialRequirementItem', $items);
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
            $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\TalentGridExclusiveSet'))
                ->add('nodeIndexes', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToInts');
            $sets[] = $mapper->map($set);
        }
        return new Collection('Necowebs\Destiny\Models\Manifest\TalentGridExclusiveSet', $sets);
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
            $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\TalentGridNode'))
                ->add('nodeIndex')
                ->add('nodeHash')
                ->add('row')
                ->add('column')
                ->add('prerequisiteNodeIndexes', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToInts')
                ->add('binaryPairNodeIndex')
                ->add('autoUnlocks')
                ->add('lastStepRepeats')
                ->add('isRandom')
                ->add('randomActivationRequirement', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToTalentGridActivationRequirement')
                ->add('isRandomRepurchasable')
                ->add('steps', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToTalentGridSteps')
                ->add('exlusiveWithNodes', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToInts')
                ->add('randomStartProgressionBarAtProgression')
                ->add('originalNodeHash');
            $nodes[] = $mapper->map($node);
        }
        return new Collection('Necowebs\Destiny\Models\Manifest\TalentGridNode', $nodes);
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
            $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\TalentGridStep'))
                ->add('stepIndex')
                ->add('nodeStepHash')
                ->add('nodeStepName')
                ->add('nodeStepDescription')
                ->add('interactionDescription')
                ->add('icon')
                ->add('damageType')
                ->add('damageTypeHash')
                ->add('activationRequirement', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToTalentGridActivationRequirement')
                ->add('canActivateNextStep')
                ->add('nextStepIndex')
                ->add('isNextStepRandom')
                ->add('perkHashes', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToInts')
                ->add('startProgressionBarAtProgress')
                ->add('statHashes', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToInts')
                ->add('affectsQuality')
                ->add('stepGroups', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToSandboxPerkGroup')
                ->add('trueStepIndex')
                ->add('truePropertyIndex')
                ->add('affectsLevel');
            $steps[] = $mapper->map($step);
        }
        return new Collection('Necowebs\Destiny\Models\Manifest\TalentGridStep', $steps);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToTalentGridActivationRequirement($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\TalentGridActivationRequirement'))
            ->add('gridLevel')
            ->add('materialRequirementHashes', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToInts');
        return $mapper->map($val);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToSandboxPerkGroup($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\SandboxPerkGroup'))
            ->add('weaponPerformance')
            ->add('impactEffects')
            ->add('guardianAttributes')
            ->add('lightAbilities')
            ->add('damageTypes');
        return $mapper->map($val);
    }
}
