<?php

namespace Necowebs\Destiny\Models\Stats;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class PostGameCarnageReportEntry
 * @package Necowebs\Destiny\Models\Stats
 */
class PostGameCarnageReportEntry
{
    use ModelTrait;

    /**
     * @var int
     */
    private $standing;

    /**
     * @var ActivityValue
     */
    private $score;

    /**
     * @var PostGameCarnageReportEntryPlayer
     */
    private $player;

    /**
     * @var string
     */
    private $characterId;

    /**
     * @var ActivityValues
     */
    private $values;

    /**
     * @var PostGameCarnageReportEntryExtended
     */
    private $extended;

    /**
     * @return int
     */
    public function getStanding()
    {
        return $this->standing;
    }

    /**
     * @param int $standing
     * @return PostGameCarnageReportEntry
     */
    public function setStanding($standing)
    {
        $this->standing = (int) $standing;
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
     * @return PostGameCarnageReportEntry
     */
    public function setScore(ActivityValue $score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * @return PostGameCarnageReportEntryPlayer
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @param PostGameCarnageReportEntryPlayer $player
     * @return PostGameCarnageReportEntry
     */
    public function setPlayer(PostGameCarnageReportEntryPlayer $player)
    {
        $this->player = $player;
        return $this;
    }

    /**
     * @return string
     */
    public function getCharacterId()
    {
        return $this->characterId;
    }

    /**
     * @param string $characterId
     * @return PostGameCarnageReportEntry
     */
    public function setCharacterId($characterId)
    {
        $this->characterId = (string) $characterId;
        return $this;
    }

    /**
     * @return ActivityValues
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param ActivityValues $values
     * @return PostGameCarnageReportEntry
     */
    public function setValues(ActivityValues $values)
    {
        $this->values = $values;
        return $this;
    }

    /**
     * @return PostGameCarnageReportEntryExtended
     */
    public function getExtended()
    {
        return $this->extended;
    }

    /**
     * @param PostGameCarnageReportEntryExtended $extended
     * @return PostGameCarnageReportEntry
     */
    public function setExtended(PostGameCarnageReportEntryExtended $extended)
    {
        $this->extended = $extended;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return PostGameCarnageReportEntry
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('standing')
            ->add('score', null, ActivityValue::class . '::toObject')
            ->add('player', null, PostGameCarnageReportEntryPlayer::class . '::toObject')
            ->add('characterId')
            ->add('values', null, ActivityValues::class . '::toObject')
            ->add('extended', null, PostGameCarnageReportEntryExtended::class . '::toObject');
        return $mapper->map($val);
    }
}
