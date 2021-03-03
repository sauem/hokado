<?php
require_once(__DIR__ . '/const.php');

$rules = require(__DIR__ . '/rules.php');

$params = array_merge(
    require __DIR__ . '/../../../common/config/params.php',
    require __DIR__ . '/params.php'
);

return [
    'components' => [

    ],
    'params' => $params,
];
