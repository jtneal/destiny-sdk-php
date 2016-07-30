<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\CharacterClassNotFoundException;
use Necowebs\Destiny\Models\Manifest\CharacterClass;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class CharacterClassService
 * @package Necowebs\Destiny\Services\Manifest
 */
class CharacterClassService extends BaseService
{
    /**
     * @param int $classHash
     * @return CharacterClass
     * @throws \Exception
     */
    public function getClass($classHash)
    {
        $body = $this->get('Manifest/Class/' . $classHash);

        if (!isset($body['Response'])) {
            throw new CharacterClassNotFoundException;
        }

        $class = $body['Response']['data']['classDefinition'];

        return (new CharacterClass())
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
