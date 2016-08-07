<?php

namespace Necowebs\Destiny\Models\Stats;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class PostGameCarnageReportTeam
 * @package Necowebs\Destiny\Models\Stats
 */
class PostGameCarnageReportTeam
{
    use ModelTrait;

    /**
     * @var int
     */
    private $teamId;

    /**
     * @var ActivityValue
     */
    private $standing;

    /**
     * @var ActivityValue
     */
    private $score;

    /**
     * @var string
     */
    private $teamName;

    /**
     * @return int
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * @param int $teamId
     * @return PostGameCarnageReportTeam
     */
    public function setTeamId($teamId)
    {
        $this->teamId = (int) $teamId;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getStanding()
    {
        return $this->standing;
    }

    /**
     * @param ActivityValue $standing
     * @return PostGameCarnageReportTeam
     */
    public function setStanding(ActivityValue $standing)
    {
        $this->standing = $standing;
        return $this;
    }

    /**
     * @return ActivityValue
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param ActivityValue $score
     * @return PostGameCarnageReportTeam
     */
    public function setScore(ActivityValue $score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * @return string
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * @param string $teamName
     * @return PostGameCarnageReportTeam
     */
    public function setTeamName($teamName)
    {
        $this->teamName = (string) $teamName;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return PostGameCarnageReportTeam
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('teamId')
            ->add('standing', null, ActivityValue::class . '::toObject')
            ->add('score', null, ActivityValue::class . '::toObject')
            ->add('teamName');
        return $mapper->map($val);
    }
}
