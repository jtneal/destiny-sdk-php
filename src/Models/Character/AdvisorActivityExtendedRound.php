<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class AdvisorActivityExtendedRound
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityExtendedRound
{
    use ModelTrait;

    /**
     * @var int
     */
    private $enemyRaceHash;

    /**
     * AdvisorActivitySkullCategory
     * @var Collection
     */
    private $skullCategories;

    /**
     * @var int
     */
    private $bossCombatantHash;

    /**
     * @var int
     */
    private $bossLightLevel;

    /**
     * @return int
     */
    public function getEnemyRaceHash()
    {
        return $this->enemyRaceHash;
    }

    /**
     * @param int $enemyRaceHash
     * @return AdvisorActivityExtendedRound
     */
    public function setEnemyRaceHash($enemyRaceHash)
    {
        $this->enemyRaceHash = (int) $enemyRaceHash;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getSkullCategories()
    {
        return $this->skullCategories;
    }

    /**
     * @param Collection $skullCategories
     * @return AdvisorActivityExtendedRound
     */
    public function setSkullCategories(Collection $skullCategories)
    {
        $this->skullCategories = $skullCategories;
        return $this;
    }

    /**
     * @return int
     */
    public function getBossCombatantHash()
    {
        return $this->bossCombatantHash;
    }

    /**
     * @param int $bossCombatantHash
     * @return AdvisorActivityExtendedRound
     */
    public function setBossCombatantHash($bossCombatantHash)
    {
        $this->bossCombatantHash = (int) $bossCombatantHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getBossLightLevel()
    {
        return $this->bossLightLevel;
    }

    /**
     * @param int $bossLightLevel
     * @return AdvisorActivityExtendedRound
     */
    public function setBossLightLevel($bossLightLevel)
    {
        $this->bossLightLevel = (int) $bossLightLevel;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorActivityExtendedRound
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('enemyRaceHash')
            ->add('skullCategories', null, AdvisorActivitySkullCategory::class . '::toCollection')
            ->add('bossCombatantHash')
            ->add('bossLightLevel');
        return $mapper->map($val);
    }
}
