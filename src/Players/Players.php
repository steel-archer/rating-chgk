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
     * @param int $id
     * @return array
     */
    public function getPlayerInfo(int $id): array
    {
        $result = $this->get('%d', [$id]);

        return $result ? current($result) : [];
    }
}
