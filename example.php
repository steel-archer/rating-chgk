<?php

use SteelArcher\RatingChgk\Api;

require __DIR__ . '/vendor/autoload.php';

$api = new Api();
$playerInfo = $api->getPlayers()->getPlayerInfo(178444);
pr($playerInfo);
