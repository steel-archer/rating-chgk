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
    public function getPlayerLatestRating(int $id): array
    {
        return $this->get('%d/rating/last', [$id]);
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
     * @param null $season
     * @return array
     */
    public function getPlayerTeams(int $id, $season = null): array
    {
        $url  = '%d/teams';
        $args = [$id];

        if ($season) {
            if (is_int($season)) {
                $url .= '/%d';
                $args[] = $season;
            } else {
                $url .= '/%s';
                $args[] = 'last';
            }
        }

        return $this->get($url, $args);
    }

    /**
     * @param int $id
     * @param mixed $season empty for all seasons, int for specific id, all other values - last season
     * @return array
     */
    public function getPlayerTournaments(int $id, $season = null): array
    {
        $url  = '%d/tournaments';
        $args = [$id];

        if ($season) {
            if (is_int($season)) {
                $url .= '/%d';
                $args[] = $season;
            } else {
                $url .= '/%s';
                $args[] = 'last';
            }
        }

        return $this->get($url, $args);
    }
}
