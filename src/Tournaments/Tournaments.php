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
}
