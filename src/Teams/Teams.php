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

}
