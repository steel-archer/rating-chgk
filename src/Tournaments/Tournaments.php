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
     * @param string|null $geoMode
     * @param int|null $geoEntityId
     * @return array
     */
    public function getTournamentResults(int $id, string $geoMode = null, int $geoEntityId = null): array
    {
        $url  = '%d/list';
        $args = [$id];
        if ($geoMode) {
            $args[] = $geoEntityId;
            switch ($geoMode) {
                case 'town':
                    $url .= '/town/%s';
                    break;
                case 'region':
                    $url .= '/region/%s';
                    break;
                case 'country':
                    $url .= '/country/%s';
                    break;
                default:
                    return [
                        'errors' => "Unknown geoMode `{$geoMode}`",
                    ];
            }
        }

        return $this->get($url, $args);
    }

    /**
     * @param int $id
     * @return array
     */
    public function getTournamentRecaps(int $id): array
    {
        return $this->get('%d/recaps', [$id]);
    }

    /**
     * @param int $tournamentId
     * @param int $teamId
     * @return array
     */
    public function getTournamentTeamRecap(int $tournamentId, int $teamId): array
    {
        return $this->get('%d/recaps/%d', [$tournamentId, $teamId]);
    }

    /**
     * @param int $tournamentId
     * @param int $teamId
     * @return array
     */
    public function getTournamentTeamResults(int $tournamentId, int $teamId): array
    {
        return $this->get('%d/results/%d', [$tournamentId, $teamId]);
    }

    /**
     * @param int $id
     * @return array
     */
    public function getTournamentControversials(int $id): array
    {
        return $this->get('%d/controversials', [$id]);
    }

    /**
     * @param int $id
     * @return array
     */
    public function getTournamentAppeals(int $id): array
    {
        return $this->get('%d/appeals', [$id]);
    }
}
