<?php

namespace SteelArcher\RatingChgk\Teams;

use SteelArcher\RatingChgk\Resource;

/**
 * Class Teams
 * @package SteelArcher\RatingChgk\Teams
 */
class Teams extends Resource
{
    /**
     * @return string
     */
    protected function getSubRoute(): string
    {
        return 'teams/';
    }

    /**
     * @param int $page
     * @return array
     */
    public function getTeams(int $page = 1): array
    {
        $result = $this->get('?page=%d', [$page]);

        return $result ? current($result) : [];
    }

    /**
     * @param int $id
     * @return array
     */
    public function getTeamInfo(int $id): array
    {
        $result = $this->get('%d', [$id]);

        return $result ? current($result) : [];
    }

    /**
     * @param int $id
     * @param string $formula
     * @return array
     */
    public function getTeamLatestRating(int $id, string $formula = 'b'): array
    {
        $result = $this->get('%d/rating/%s', [$id, $formula]);
        if (is_null($result)) {
            $result = [
                'errors' => "Looks like team with id {$id} doesn't have rating by formula `{$formula}`",
            ];
        }

        return $result;
    }

    /**
     * @param int $id
     * @return array
     */
    public function getTeamRatings(int $id): array
    {
        return $this->get('%d/rating', [$id]);
    }

    /**
     * @param int $id
     * @param int $release
     * @return array
     */
    public function geTeamRatingForRelease(int $id, int $release): array
    {
        return $this->get('%d/rating/%d', [$id, $release]);
    }

    /**
     * @param int $id
     * @param null $season
     * @return array
     */
    public function getTeamRecaps(int $id, $season = null): array
    {
        $url  = '%d/recaps';
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
     * @param null $season
     * @return array
     */
    public function getTeamTournaments(int $id, $season = null): array
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
