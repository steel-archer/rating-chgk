<?php

namespace SteelArcher\RatingChgk;

/**
 * Class Api
 * @package SteelArcher\RatingChgk
 */
class Api
{
    /**
     * @var Players\Players
     */
    private $players;

    /**
     * @var Teams\Teams
     */
    private $teams;

    /**
     * @var Tournaments\Tournaments
     */
    private $tournaments;

    /**
     * @return Players\Players
     */
    public function getPlayers(): Players\Players
    {
        return $this->players;
    }

    /**
     * @param Players\Players $players
     * @return Api
     */
    public function setPlayers(Players\Players $players): Api
    {
        $this->players = $players;
        return $this;
    }

    /**
     * @return Tournaments\Tournaments
     */
    public function getTournaments(): Tournaments\Tournaments
    {
        return $this->tournaments;
    }

    /**
     * @param Tournaments\Tournaments $tournaments
     * @return Api
     */
    public function setTournaments(Tournaments\Tournaments $tournaments): Api
    {
        $this->tournaments = $tournaments;
        return $this;
    }

    /**
     * @return Teams\Teams
     */
    public function getTeams(): Teams\Teams
    {
        return $this->teams;
    }

    /**
     * @param Teams\Teams $teams
     * @return Api
     */
    public function setTeams(Teams\Teams $teams): Api
    {
        $this->teams = $teams;
        return $this;
    }

    /**
     * Api constructor.
     */
    public function __construct()
    {
        $this->players     = new Players\Players();
        $this->teams       = new Teams\Teams();
        $this->tournaments = new Tournaments\Tournaments();
    }
}
