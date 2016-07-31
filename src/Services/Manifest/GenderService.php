<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\Gender;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class GenderService
 * @package Necowebs\Destiny\Services\Manifest
 */
class GenderService extends BaseService
{
    /**
     * @param int $genderHash
     * @return Gender
     * @throws ManifestObjectNotFoundException
     */
    public function getGender($genderHash)
    {
        $body = $this->get('Manifest/Gender/' . $genderHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        $gender = $body['Response']['data']['gender'];

        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\Gender'))
            ->add('genderHash')
            ->add('genderType')
            ->add('genderName')
            ->add('genderDescription')
            ->add('hash')
            ->add('index');

        return $mapper->map($gender);
    }
}
