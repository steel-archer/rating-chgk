<?php

namespace SteelArcher\RatingChgk;

use SteelArcher\RatingChgk\Teams\Teams;
use SteelArcher\RatingChgk\Tournaments\Tournaments;
use SteelArcher\RatingChgk\Players\Players;

/**
 * Class Api
 * @package SteelArcher\RatingChgk
 */
class Api
{
    /**
     * @var Players
     */
    private $players;

    /**
     * @var Teams
     */
    private $teams;

    /**
     * @var Tournaments
     */
    private $tournaments;

    /**
     * @return Players
     */
    public function getPlayers(): Players
    {
        return $this->players;
    }

    /**
     * @param Players $players
     * @return Api
     */
    public function setPlayers(Players $players): Api
    {
        $this->players = $players;
        return $this;
    }

    /**
     * @return Tournaments
     */
    public function getTournaments(): Tournaments
    {
        return $this->tournaments;
    }

    /**
     * @param Tournaments $tournaments
     * @return Api
     */
    public function setTournaments(Tournaments $tournaments): Api
    {
        $this->tournaments = $tournaments;
        return $this;
    }

    /**
     * @return Teams
     */
    public function getTeams(): Teams
    {
        return $this->teams;
    }

    /**
     * @param Teams $teams
     * @return Api
     */
    public function setTeams(Teams $teams): Api
    {
        $this->teams = $teams;
        return $this;
    }

    /**
     * Api constructor.
     */
    public function __construct()
    {
        $this->players     = new Players();
        $this->teams       = new Teams();
        $this->tournaments = new Tournaments();
    }
}
