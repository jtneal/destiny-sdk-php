<?php

namespace Necowebs\Destiny\Services\Stats;

use Collections\Collection;
use Necowebs\Destiny\Models\Stats\Definition;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class DefinitionService
 * @package Necowebs\Destiny\Services\Stats
 */
class DefinitionService extends BaseService
{
    /**
     * @return Collection
     */
    public function getDefinition()
    {
        $body = $this->get('Stats/Definition');

        return Definition::toCollection(null, $body['Response']);
    }
}
