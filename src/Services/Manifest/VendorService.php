<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\Vendor;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

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

        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\Vendor'))
            ->add('summary', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToVendorSummary')
            ->add('acceptedItems', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToInts')
            ->add('categories', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToVendorCategories')
            ->add('failureStrings')
            ->add('unlockValueHash')
            ->add('hash')
            ->add('index');

        return $mapper->map($vendor);
    }
}
