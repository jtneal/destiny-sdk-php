<?php

namespace Necowebs\Destiny\Models\Stats;

use Necowebs\Destiny\Models\DestinyPlayer;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class PostGameCarnageReportEntryPlayer
 * @package Necowebs\Destiny\Models\Stats
 */
class PostGameCarnageReportEntryPlayer
{
    use ModelTrait;

    /**
     * @var DestinyPlayer
     */
    private $destinyUserInfo;

    /**
     * @var string
     */
    private $characterClass;

    /**
     * @var int
     */
    private $characterLevel;

    /**
     * @var int
     */
    private $lightLevel;

    /**
     * @var DestinyPlayer
     */
    private $bungieNetUserInfo;

    /**
     * @var string
     */
    private $clanName;

    /**
     * @var string
     */
    private $clanTag;

    /**
     * @return DestinyPlayer
     */
    public function getDestinyUserInfo()
    {
        return $this->destinyUserInfo;
    }

    /**
     * @param DestinyPlayer $destinyUserInfo
     * @return PostGameCarnageReportEntryPlayer
     */
    public function setDestinyUserInfo(DestinyPlayer $destinyUserInfo)
    {
        $this->destinyUserInfo = $destinyUserInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCharacterClass()
    {
        return $this->characterClass;
    }

    /**
     * @param string $characterClass
     * @return PostGameCarnageReportEntryPlayer
     */
    public function setCharacterClass($characterClass)
    {
        $this->characterClass = (string) $characterClass;
        return $this;
    }

    /**
     * @return int
     */
    public function getCharacterLevel()
    {
        return $this->characterLevel;
    }

    /**
     * @param int $characterLevel
     * @return PostGameCarnageReportEntryPlayer
     */
    public function setCharacterLevel($characterLevel)
    {
        $this->characterLevel = (int) $characterLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getLightLevel()
    {
        return $this->lightLevel;
    }

    /**
     * @param int $lightLevel
     * @return PostGameCarnageReportEntryPlayer
     */
    public function setLightLevel($lightLevel)
    {
        $this->lightLevel = (int) $lightLevel;
        return $this;
    }

    /**
     * @return DestinyPlayer
     */
    public function getBungieNetUserInfo()
    {
        return $this->bungieNetUserInfo;
    }

    /**
     * @param DestinyPlayer $bungieNetUserInfo
     * @return PostGameCarnageReportEntryPlayer
     */
    public function setBungieNetUserInfo(DestinyPlayer $bungieNetUserInfo)
    {
        $this->bungieNetUserInfo = $bungieNetUserInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getClanName()
    {
        return $this->clanName;
    }

    /**
     * @param string $clanName
     * @return PostGameCarnageReportEntryPlayer
     */
    public function setClanName($clanName)
    {
        $this->clanName = (string) $clanName;
        return $this;
    }

    /**
     * @return string
     */
    public function getClanTag()
    {
        return $this->clanTag;
    }

    /**
     * @param string $clanTag
     * @return PostGameCarnageReportEntryPlayer
     */
    public function setClanTag($clanTag)
    {
        $this->clanTag = (string) $clanTag;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return PostGameCarnageReportEntryPlayer
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('destinyUserInfo', null, DestinyPlayer::class . '::toObject')
            ->add('characterClass')
            ->add('characterLevel')
            ->add('lightLevel')
            ->add('bungieNetUserInfo', null, DestinyPlayer::class . '::toObject')
            ->add('clanName')
            ->add('clanTag');
        return $mapper->map($val);
    }
}
