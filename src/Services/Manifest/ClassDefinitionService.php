<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\ClassDefinition;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class ClassDefinitionService
 * @package Necowebs\Destiny\Services\Manifest
 */
class ClassDefinitionService extends BaseService
{
    /**
     * @param int $classHash
     * @return ClassDefinition
     * @throws ManifestObjectNotFoundException
     */
    public function getClassDefinition($classHash)
    {
        $body = $this->get('Manifest/Class/' . $classHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return ClassDefinition::toObject(null, $body['Response']['data']['classDefinition']);
    }
}
