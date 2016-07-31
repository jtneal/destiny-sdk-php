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
}
