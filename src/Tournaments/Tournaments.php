<?php

namespace SteelArcher\RatingChgk\Tournaments;

use SteelArcher\RatingChgk\Resource;

/**
 * Class Tournaments
 * @package SteelArcher\RatingChgk\Tournaments
 */
class Tournaments extends Resource
{
    /**
     * @return string
     */
    protected function getSubRoute(): string
    {
        return 'tournaments/';
    }

    /**
     * @param int $page
     * @return array
     */
    public function getTournaments(int $page = 1): array
    {
        $result = $this->get('?page=%d', [$page]);

        return $result ? current($result) : [];
    }

    /**
     * @param int $id
     * @return array
     */
    public function getTournamentInfo(int $id): array
    {
        $result = $this->get('%d', [$id]);

        return $result ? current($result) : [];
    }

    /**
     * @param int $id
     * @return array
     */
    public function getTournamentResults(int $id): array
    {
        return $this->get('%d/list', [$id]);
    }
}
