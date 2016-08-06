<?php

namespace Necowebs\Destiny\Services\Explorer;

use Necowebs\Destiny\Exceptions\ExplorerNotFoundException;
use Necowebs\Destiny\Models\Explorer\TalentNodeSteps;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class TalentNodeStepsService
 * @package Necowebs\Destiny\Services\Explorer
 */
class TalentNodeStepsService extends BaseService
{
    /**
     * @param array $parameters
     * @return TalentNodeSteps
     * @throws ExplorerNotFoundException
     */
    public function getTalentNodeSteps(array $parameters = [])
    {
        $query = $this->buildQuery($parameters);

        $body = $this->get('Explorer/TalentNodeSteps?' . $query);

        if (!isset($body['Response'])) {
            throw new ExplorerNotFoundException;
        }

        return TalentNodeSteps::toObject(null, $body['Response']['data']);
    }

    public function buildQuery(array $parameters)
    {
        $whitelist = [
            'weaponPerformance',  // Node steps in one of these categories, omit for all steps. RateOfFire, Damage, Accuracy, Range, Zoom, Recoil, Ready, Reload, HairTrigger, AmmoAndMagazine, TrackingAndDetonation, ShotgunSpread, ChargeTime
            'definitions',        // Indicates the step definitions should be returned with item hash results.
            'lightAbilities',     // Node steps in one of these categories, omit for all steps. Grenades, Melee, MovementModes, Orbs, SuperEnergy, SuperMods
            'damageTypes',        // Node steps in one of these categories, omit for all steps. Kinetic, Arc, Solar, Void
            'guardianAttributes', // Node steps in one of these categories, omit for all steps. Stats, Shields, Health, Revive, AimUnderFire, Radar, Invisibility, Reputations
            'count',              // Number of rows to return. Use 10, 25, 50, 100, 500
            'page',               // Page number to return, starting with 0.
            'name',               // Name of items to return (partial match, no case). Omit for all items.
            'impactEffects',      // Node steps in one of these categories, omit for all steps. ArmorPiercing, Ricochet, Flinch, CollateralDamage, Disorient, HighlightTarget
            'direction',          // Order to sort steps (by name): Ascending or Descending
        ];

        return http_build_query(array_intersect_key($parameters, array_flip($whitelist)));
    }
}
