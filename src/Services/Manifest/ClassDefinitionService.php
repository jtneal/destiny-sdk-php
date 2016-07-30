<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ClassDefinitionNotFoundException;
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
     * @throws \Exception
     */
    public function getClassDefinition($classHash)
    {
        $body = $this->get('Manifest/Class/' . $classHash);

        if (!isset($body['Response'])) {
            throw new ClassDefinitionNotFoundException;
        }

        $class = $body['Response']['data']['classDefinition'];

        return (new ClassDefinition())
            ->setClassHash($class['classHash'])
            ->setClassType($class['classType'])
            ->setClassName($class['className'])
            ->setClassNameMale($class['classNameMale'])
            ->setClassNameFemale($class['classNameFemale'])
            ->setClassIdentifier($class['classIdentifier'])
            ->setMentorVendorIdentifier($class['mentorVendorIdentifier'])
            ->setHash($class['hash'])
            ->setIndex($class['index']);
    }
}
