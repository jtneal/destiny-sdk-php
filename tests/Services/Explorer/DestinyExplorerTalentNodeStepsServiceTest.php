<?php

namespace Necowebs\Destiny\Services\Explorer;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\ExplorerNotFoundException;
use Necowebs\Destiny\Models\Explorer\ItemsQuery;

/**
 * Class DestinyExplorerTalentNodeStepsServiceTest
 * @package Necowebs\Destiny\Services\Explorer
 */
class TalentNodeStepsServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Destiny Explorer Talent Node Steps
     */
    public function testGetDestinyExplorerTalentNodeSteps()
    {
        $steps = (new DestinyExplorerTalentNodeStepsService())->getDestinyExplorerTalentNodeSteps(['name' => 'Wolfpack Rounds']);

        $this->assertEquals(new Collection('int', [159230103]), $steps->getStepHashes());
        $this->assertEquals(1, $steps->getTotalResults());
        $this->assertEquals(false, $steps->getHasMore());
        $this->assertInstanceOf(ItemsQuery::class, $steps->getQuery());
        $this->assertEquals(true, $steps->getUseTotalResults());
    }

    /**
     * Test Get Destiny Explorer Talent Node Steps Exception
     */
    public function testGetDestinyExplorerTalentNodeStepsException()
    {
        $this->expectException(ExplorerNotFoundException::class);

        $steps = (new DestinyExplorerTalentNodeStepsService())->getDestinyExplorerTalentNodeSteps(['definitions' => 'Fail']);
    }
}

