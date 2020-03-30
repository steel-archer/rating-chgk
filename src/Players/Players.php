<?php

namespace SteelArcher\RatingChgk\Players;

use SteelArcher\RatingChgk\Resource;

/**
 * Class Players
 * @package SteelArcher\RatingChgk\Players
 */
class Players extends Resource
{
    /**
     * @return string
     */
    protected function getSubRoute(): string
    {
        return 'players/';
    }

    /**
     * @param int $page
     * @return array
     */
    public function getPlayers(int $page = 1): array
    {
        $result = $this->get('?page=%d', [$page]);

        return $result ? current($result) : [];
    }

    /**
     * @param int $id
     * @return array
     */
    public function getPlayerInfo(int $id): array
    {
        $result = $this->get('%d', [$id]);

        return $result ? current($result) : [];
    }

    /**
     * @param int $id
     * @param int $page
     * @return array
     */
    public function getPlayerRatings(int $id, int $page = 1): array
    {
        return $this->get('%d/rating?page=%d', [$id, $page]);
    }

    /**
     * @param int $id
     * @return array
     */
    public function getPlayerRating(int $id): array
    {
        return $this->get('%d/rating/latest', [$id]);
    }

    /**
     * @param int $id
     * @param int $release
     * @return array
     */
    public function getPlayerRatingForRelease(int $id, int $release): array
    {
        return $this->get('%d/rating/%d', [$id, $release]);
    }

    /**
     * @param int $id
     * @return array
     */
    public function getPlayerTeams(int $id): array
    {
        return $this->get('%d/teams', [$id]);
    }

    /**
     * @param int $id
     * @param int $season
     * @return array
     */
    public function getPlayerTeamsForSeason(int $id, int $season): array
    {
        return $this->get('%d/teams/%d', [$id, $season]);
    }

    /**
     * @param int $id
     * @return array
     */
    public function getPlayerTeamsLastSeason(int $id): array
    {
        return $this->get('%d/teams/last', [$id]);
    }

}
