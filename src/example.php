<?php

require __DIR__ . '/../vendor/autoload.php';

$api = new \SteelArcher\RatingChgk\Api();
$playerInfo = $api->getPlayers()->getPlayerInfo(178444);
pr($playerInfo);
