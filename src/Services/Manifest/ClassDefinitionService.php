<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ClassDefinitionNotFoundException;
use Necowebs\Destiny\Models\Manifest\ClassDefinition;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class ClassDefinitionService
 * @package Necowebs\Destiny\Services\Manifest
 */
class ClassDefinitionService extends BaseService
{
    /**
     * @param int $classHash
     * @return ClassDefinition
     * @throws ClassDefinitionNotFoundException
     */
    public function getClassDefinition($classHash)
    {
        $body = $this->get('Manifest/Class/' . $classHash);

        if (!isset($body['Response'])) {
            throw new ClassDefinitionNotFoundException;
        }

        $class = $body['Response']['data']['classDefinition'];

        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\ClassDefinition'))
            ->add('classHash')
            ->add('classType')
            ->add('className')
            ->add('classNameMale')
            ->add('classNameFemale')
            ->add('classIdentifier')
            ->add('mentorVendorIdentifier')
            ->add('hash')
            ->add('index');

        return $mapper->map($class);
    }
}
