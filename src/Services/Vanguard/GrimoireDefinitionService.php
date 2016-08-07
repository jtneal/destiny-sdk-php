<?php

namespace Necowebs\Destiny\Services\Vanguard;

use Necowebs\Destiny\Exceptions\VanguardNotFoundException;
use Necowebs\Destiny\Models\Vanguard\GrimoireDefinition;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class GrimoireDefinitionService
 * @package Necowebs\Destiny\Services\Vanguard
 */
class GrimoireDefinitionService extends BaseService
{
    /**
     * @return GrimoireDefinition
     * @throws VanguardNotFoundException
     */
    public function getGrimoireDefinition()
    {
        $body = $this->get('Vanguard/Grimoire/Definition');

        return GrimoireDefinition::toObject(null, $body['Response']);
    }
}
