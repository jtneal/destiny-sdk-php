<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\MaterialRequirement;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class MaterialRequirementService
 * @package Necowebs\Destiny\Services\Manifest
 */
class MaterialRequirementService extends BaseService
{
    /**
     * @param int $setHash
     * @return MaterialRequirement
     * @throws ManifestObjectNotFoundException
     */
    public function getMaterialRequirement($setHash)
    {
        $body = $this->get('Manifest/MaterialRequirement/' . $setHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        $set = $body['Response']['data']['materialRequirementSet'];

        $mapper = (new ArrayObjectMapper(MaterialRequirement::class))
            ->add('setHash')
            ->add('materials', null, MapperHelper::class . '::mapArrayToMaterialRequirementItems')
            ->add('hash')
            ->add('index');

        return $mapper->map($set);
    }
}
