<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\TalentGrid;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class TalentGridService
 * @package Necowebs\Destiny\Services\Manifest
 */
class TalentGridService extends BaseService
{
    /**
     * @param int $gridHash
     * @return TalentGrid
     * @throws ManifestObjectNotFoundException
     */
    public function getTalentGrid($gridHash)
    {
        $body = $this->get('Manifest/TalentGrid/' . $gridHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        $grid = $body['Response']['data']['talentGrid'];

        $mapper = (new ArrayObjectMapper(TalentGrid::class))
            ->add('gridHash')
            ->add('maxGridLevel')
            ->add('gridLevelPerColumn')
            ->add('progressionHash')
            ->add('nodes', null, MapperHelper::class . '::mapArrayToTalentGridNodes')
            ->add('calcMaxGridLevel')
            ->add('calcProgressToMaxLevel')
            ->add('exclusiveSets', null, MapperHelper::class . '::mapArrayToTalentGridExclusiveSets')
            ->add('independentNodeIndexes', null, MapperHelper::class . '::mapArrayToInts')
            ->add('hash')
            ->add('index');

        return $mapper->map($grid);
    }
}
