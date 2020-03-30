<?php

namespace SteelArcher\RatingChgk;

/**
 * Class Resource
 * @package SteelArcher\RatingChgk
 */
abstract class Resource
{
    /**
     *
     */
    private const BASE_URL = 'https://rating.chgk.info/api/';

    /**
     * @param string $route
     * @param array $args
     * @return array
     */
    public function get(string $route, array $args): array
    {
        $url = self::BASE_URL . $this->getSubRoute() . vsprintf($route, $args);
        $ch  = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result ? json_decode($result, true, 512, JSON_OBJECT_AS_ARRAY) : [];
    }

    /**
     * @return string
     */
    protected abstract function getSubRoute(): string;
}
