<?php

namespace Necowebs\Destiny\Models;

use Necowebs\Destiny\Models\Traits\AcceptableValues;

/**
 * Class DestinyDefinitionType
 * @package Necowebs\Destiny\Models
 */
class DestinyDefinitionType
{
    use AcceptableValues;

    /**
     * DestinyDefinitionType constructor.
     * @param string $value
     */
    public function __construct($value)
    {
        $this->setAcceptableValues([
            'None',
            'Activity',
            'ActivityType',
            'Class',
            'Gender',
            'InventoryBucket',
            'InventoryItem',
            'Progression',
            'Race',
            'Stat',
            'TalentGrid',
            'StatGroup',
            'UnlockFlag',
            'Vendor',
            'Destination',
            'Place',
            'DirectorBook',
            'MaterialRequirement',
            'SandboxPerk',
            'ArtDye',
            'ArtDyeChannel',
            'ActivityBundle',
            'GearAsset'
        ]);

        $this->validateValue($value);
    }
}
