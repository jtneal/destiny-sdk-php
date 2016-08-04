<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

/**
 * Class AdvisorRecordBookRecordTest
 * @package Necowebs\Destiny\Models\Account
 */
class AdvisorRecordBookRecordTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $record = (new AdvisorRecordBookRecord())
            ->setRecordHash(1872531696)
            ->setObjectives(new Collection(AdvisorRecordBookRecordObjective::class))
            ->setStatus(2);

        $this->assertEquals(1872531696, $record->getRecordHash());
        $this->assertEquals(new Collection(AdvisorRecordBookRecordObjective::class), $record->getObjectives());
        $this->assertEquals(2, $record->getStatus());
    }
}
