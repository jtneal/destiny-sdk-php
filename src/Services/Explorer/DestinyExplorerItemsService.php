<?php

namespace Necowebs\Destiny\Services\Explorer;

use Necowebs\Destiny\Exceptions\ExplorerNotFoundException;
use Necowebs\Destiny\Models\Explorer\Items;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class DestinyExplorerItemsService
 * @package Necowebs\Destiny\Services\Explorer
 */
class DestinyExplorerItemsService extends BaseService
{
    /**
     * @param array $parameters
     * @return Items
     * @throws ExplorerNotFoundException
     */
    public function getDestinyExplorerItems(array $parameters = [])
    {
        $query = $this->buildQuery($parameters);

        $body = $this->get('Explorer/Items?' . $query);

        if (!isset($body['Response'])) {
            throw new ExplorerNotFoundException;
        }

        return Items::toObject(null, $body['Response']['data']);
    }

    public function buildQuery(array $parameters)
    {
        $whitelist = [
            'categories',         // Category identifiers. Only items that are in all of the passed-in categories will be returned.
            'sourcehash',         // Items must drop from the specified source, omit for all items. Overrides sourcecat.
            'direction',          // Order to sort items: Ascending or Descending
            'count',              // Number of rows to return. Use 10, 25, 50, 100, or 500.
            'page',               // Page number to return, starting with 0.
            'name',               // Name of items to return (partial match, no case). Omit for all items.
            'order',              // Item property used for sorting. Use Name, ItemType, Rarity, ItemTypeName, ItemStatHash, MinimumRequiredLevel, MaximumRequiredLevel.
            'orderstathash',      // This value is used when the order parameter is set to ItemStatHash. The item stat for the provided hash value will be used in the sort.
            'guardianAttributes', // Items must have node steps in one of these categories, omit for all items. Stats, Shields, Health, Revive, AimUnderFire, Radar, Invisibility, Reputations
            'rarity',             // Rarity of items to return: Currency, Basic, Common, Rare, Superior, Exotic. Omit for all items.
            'step',               // Hash ID of the talent node step that an item must have in order to be returned.
            'weaponPerformance',  // Items must have node steps in one of these categories, omit for all items. RateOfFire, Damage, Accuracy, Range, Zoom, Recoil, Ready, Reload, HairTrigger, AmmoAndMagazine, TrackingAndDetonation, ShotgunSpread, ChargeTime
            'impactEffects',      // Items must have node steps in one of these categories, omit for all items. ArmorPiercing, Ricochet, Flinch, CollateralDamage, Disorient, HighlightTarget
            'sourcecat',          // Items must drop from the specified source category, omit for all items. Use Vendor or Activity.
            'damageTypes',        // Items must have node steps in one of these categories, omit for all items. Kinetic, Arc, Solar, Void
            'lightAbilities',     // Items must have node steps in one of these categories, omit for all items. Grenades, Melee, MovementModes, Orbs, SuperEnergy, SuperMods
            'matchrandomsteps',   // True if the supplied groups/step hash filters should match random node steps. False indicates the item can always get the step before it is considered a match.
            'definitions'         // Indicates the item definitions should be returned with item hash results.
        ];

        return http_build_query(array_intersect_key($parameters, array_flip($whitelist)));
    }
}
