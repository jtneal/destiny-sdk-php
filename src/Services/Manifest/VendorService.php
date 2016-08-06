<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\Vendor;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class VendorService
 * @package Necowebs\Destiny\Services\Manifest
 */
class VendorService extends BaseService
{
    /**
     * @param int $vendorHash
     * @return Vendor
     * @throws ManifestObjectNotFoundException
     */
    public function getVendor($vendorHash)
    {
        $body = $this->get('Manifest/Vendor/' . $vendorHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return Vendor::toObject(null, $body['Response']['data']['vendor']);
    }
}
