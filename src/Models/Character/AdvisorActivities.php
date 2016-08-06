<?php

namespace Necowebs\Destiny\Models\Character;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class AdvisorActivities
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivities
{
    use ModelTrait;

    /**
     * @var AdvisorActivity
     */
    private $prisonOfElders;

    /**
     * @var AdvisorActivity
     */
    private $elderChallenge;

    /**
     * @var AdvisorActivity
     */
    private $trials;

    /**
     * @var AdvisorActivity
     */
    private $armsDay;

    /**
     * @var AdvisorActivity
     */
    private $weeklyCrucible;

    /**
     * @var AdvisorActivity
     */
    private $kingsFall;

    /**
     * @var AdvisorActivity
     */
    private $vaultOfGlass;

    /**
     * @var AdvisorActivity
     */
    private $crota;

    /**
     * @var AdvisorActivity
     */
    private $nightfall;

    /**
     * @var AdvisorActivity
     */
    private $heroicStrike;

    /**
     * @var AdvisorActivity
     */
    private $dailyChapter;

    /**
     * @var AdvisorActivity
     */
    private $dailyCrucible;

    /**
     * @var AdvisorActivity
     */
    private $prisonOfEldersPlaylist;

    /**
     * @var AdvisorActivity
     */
    private $ironBanner;

    /**
     * @var AdvisorActivity
     */
    private $xur;

    /**
     * @var AdvisorActivity
     */
    private $srl;

    /**
     * @return AdvisorActivity
     */
    public function getPrisonOfElders()
    {
        return $this->prisonOfElders;
    }

    /**
     * @param AdvisorActivity $prisonOfElders
     * @return AdvisorActivities
     */
    public function setPrisonOfElders(AdvisorActivity $prisonOfElders)
    {
        $this->prisonOfElders = $prisonOfElders;
        return $this;
    }

    /**
     * @return AdvisorActivity
     */
    public function getElderChallenge()
    {
        return $this->elderChallenge;
    }

    /**
     * @param AdvisorActivity $elderChallenge
     * @return AdvisorActivities
     */
    public function setElderChallenge(AdvisorActivity $elderChallenge)
    {
        $this->elderChallenge = $elderChallenge;
        return $this;
    }

    /**
     * @return AdvisorActivity
     */
    public function getTrials()
    {
        return $this->trials;
    }

    /**
     * @param AdvisorActivity $trials
     * @return AdvisorActivities
     */
    public function setTrials(AdvisorActivity $trials)
    {
        $this->trials = $trials;
        return $this;
    }

    /**
     * @return AdvisorActivity
     */
    public function getArmsDay()
    {
        return $this->armsDay;
    }

    /**
     * @param AdvisorActivity $armsDay
     * @return AdvisorActivities
     */
    public function setArmsDay(AdvisorActivity $armsDay)
    {
        $this->armsDay = $armsDay;
        return $this;
    }

    /**
     * @return AdvisorActivity
     */
    public function getWeeklyCrucible()
    {
        return $this->weeklyCrucible;
    }

    /**
     * @param AdvisorActivity $weeklyCrucible
     * @return AdvisorActivities
     */
    public function setWeeklyCrucible(AdvisorActivity $weeklyCrucible)
    {
        $this->weeklyCrucible = $weeklyCrucible;
        return $this;
    }

    /**
     * @return AdvisorActivity
     */
    public function getKingsFall()
    {
        return $this->kingsFall;
    }

    /**
     * @param AdvisorActivity $kingsFall
     * @return AdvisorActivities
     */
    public function setKingsFall(AdvisorActivity $kingsFall)
    {
        $this->kingsFall = $kingsFall;
        return $this;
    }

    /**
     * @return AdvisorActivity
     */
    public function getVaultOfGlass()
    {
        return $this->vaultOfGlass;
    }

    /**
     * @param AdvisorActivity $vaultOfGlass
     * @return AdvisorActivities
     */
    public function setVaultOfGlass(AdvisorActivity $vaultOfGlass)
    {
        $this->vaultOfGlass = $vaultOfGlass;
        return $this;
    }

    /**
     * @return AdvisorActivity
     */
    public function getCrota()
    {
        return $this->crota;
    }

    /**
     * @param AdvisorActivity $crota
     * @return AdvisorActivities
     */
    public function setCrota(AdvisorActivity $crota)
    {
        $this->crota = $crota;
        return $this;
    }

    /**
     * @return AdvisorActivity
     */
    public function getNightfall()
    {
        return $this->nightfall;
    }

    /**
     * @param AdvisorActivity $nightfall
     * @return AdvisorActivities
     */
    public function setNightfall(AdvisorActivity $nightfall)
    {
        $this->nightfall = $nightfall;
        return $this;
    }

    /**
     * @return AdvisorActivity
     */
    public function getHeroicStrike()
    {
        return $this->heroicStrike;
    }

    /**
     * @param AdvisorActivity $heroicStrike
     * @return AdvisorActivities
     */
    public function setHeroicStrike(AdvisorActivity $heroicStrike)
    {
        $this->heroicStrike = $heroicStrike;
        return $this;
    }

    /**
     * @return AdvisorActivity
     */
    public function getDailyChapter()
    {
        return $this->dailyChapter;
    }

    /**
     * @param AdvisorActivity $dailyChapter
     * @return AdvisorActivities
     */
    public function setDailyChapter(AdvisorActivity $dailyChapter)
    {
        $this->dailyChapter = $dailyChapter;
        return $this;
    }

    /**
     * @return AdvisorActivity
     */
    public function getDailyCrucible()
    {
        return $this->dailyCrucible;
    }

    /**
     * @param AdvisorActivity $dailyCrucible
     * @return AdvisorActivities
     */
    public function setDailyCrucible(AdvisorActivity $dailyCrucible)
    {
        $this->dailyCrucible = $dailyCrucible;
        return $this;
    }

    /**
     * @return AdvisorActivity
     */
    public function getPrisonOfEldersPlaylist()
    {
        return $this->prisonOfEldersPlaylist;
    }

    /**
     * @param AdvisorActivity $prisonOfEldersPlaylist
     * @return AdvisorActivities
     */
    public function setPrisonOfEldersPlaylist(AdvisorActivity $prisonOfEldersPlaylist)
    {
        $this->prisonOfEldersPlaylist = $prisonOfEldersPlaylist;
        return $this;
    }

    /**
     * @return AdvisorActivity
     */
    public function getIronBanner()
    {
        return $this->ironBanner;
    }

    /**
     * @param AdvisorActivity $ironBanner
     * @return AdvisorActivities
     */
    public function setIronBanner(AdvisorActivity $ironBanner)
    {
        $this->ironBanner = $ironBanner;
        return $this;
    }

    /**
     * @return AdvisorActivity
     */
    public function getXur()
    {
        return $this->xur;
    }

    /**
     * @param AdvisorActivity $xur
     * @return AdvisorActivities
     */
    public function setXur(AdvisorActivity $xur)
    {
        $this->xur = $xur;
        return $this;
    }

    /**
     * @return AdvisorActivity
     */
    public function getSrl()
    {
        return $this->srl;
    }

    /**
     * @param AdvisorActivity $srl
     * @return AdvisorActivities
     */
    public function setSrl(AdvisorActivity $srl)
    {
        $this->srl = $srl;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorActivities
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('prisonofelders', 'setPrisonOfElders', AdvisorActivity::class . '::toObject')
            ->add('elderchallenge', 'setElderChallenge', AdvisorActivity::class . '::toObject')
            ->add('trials', 'setTrials', AdvisorActivity::class . '::toObject')
            ->add('armsday', 'setArmsDay', AdvisorActivity::class . '::toObject')
            ->add('weeklycrucible', 'setWeeklyCrucible', AdvisorActivity::class . '::toObject')
            ->add('kingsfall', 'setKingsFall', AdvisorActivity::class . '::toObject')
            ->add('vaultofglass', 'setVaultOfGlass', AdvisorActivity::class . '::toObject')
            ->add('crota', 'setCrota', AdvisorActivity::class . '::toObject')
            ->add('nightfall', 'setNightfall', AdvisorActivity::class . '::toObject')
            ->add('heroicstrike', 'setHeroicStrike', AdvisorActivity::class . '::toObject')
            ->add('dailychapter', 'setDailyChapter', AdvisorActivity::class . '::toObject')
            ->add('dailycrucible', 'setDailyCrucible', AdvisorActivity::class . '::toObject')
            ->add('prisonofelders-playlist', 'setPrisonOfEldersPlaylist', AdvisorActivity::class . '::toObject')
            ->add('ironbanner', 'setIronBanner', AdvisorActivity::class . '::toObject')
            ->add('xur', 'setXur', AdvisorActivity::class . '::toObject')
            ->add('srl', 'setSrl', AdvisorActivity::class . '::toObject');
        return $mapper->map($val);
    }
}
