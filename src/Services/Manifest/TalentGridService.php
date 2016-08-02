<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\TalentGrid;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

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

        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\TalentGrid'))
            ->add('gridHash')
            ->add('maxGridLevel')
            ->add('gridLevelPerColumn')
            ->add('progressionHash')
            ->add('nodes', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToTalentGridNodes')
            ->add('calcMaxGridLevel')
            ->add('calcProgressToMaxLevel')
            ->add('exclusiveSets', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToTalentGridExclusiveSets')
            ->add('independentNodeIndexes', null, 'Necowebs\Destiny\Utils\MapperHelper::mapArrayToInts')
            ->add('hash')
            ->add('index');

        return $mapper->map($grid);
    }
}
