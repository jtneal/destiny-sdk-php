<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\Vendor;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

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

        $vendor = $body['Response']['data']['vendor'];

        $mapper = (new ArrayObjectMapper(Vendor::class))
            ->add('summary', null, MapperHelper::class . '::mapArrayToVendorSummary')
            ->add('acceptedItems', null, MapperHelper::class . '::mapArrayToInts')
            ->add('categories', null, MapperHelper::class . '::mapArrayToVendorCategories')
            ->add('failureStrings')
            ->add('unlockValueHash')
            ->add('hash')
            ->add('index');

        return $mapper->map($vendor);
    }
}
