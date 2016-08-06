<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
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
     * @throws ManifestObjectNotFoundException
     */
    public function getGender($genderHash)
    {
        $body = $this->get('Manifest/Gender/' . $genderHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return Gender::toObject(null, $body['Response']['data']['gender']);
    }
}
