<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\GenderNotFoundException;
use Necowebs\Destiny\Models\Manifest\Gender;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class GenderService
 * @package Necowebs\Destiny\Services\Manifest
 */
class GenderService extends BaseService
{
    /**
     * @param int $genderHash
     * @return Gender
     * @throws \Exception
     */
    public function getGender($genderHash)
    {
        $body = $this->get('Manifest/Gender/' . $genderHash);

        if (!isset($body['Response'])) {
            throw new GenderNotFoundException;
        }

        $gender = $body['Response']['data']['gender'];

        return (new Gender())
            ->setGenderHash($gender['genderHash'])
            ->setGenderType($gender['genderType'])
            ->setGenderName($gender['genderName'])
            ->setGenderDescription($gender['genderDescription'])
            ->setHash($gender['hash'])
            ->setIndex($gender['index']);
    }
}
