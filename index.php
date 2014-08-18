<?php
$common = require dirname(__DIR__) . '/common/config/main.php';
$app = require __DIR__ . '/protected/config/main.php';
$local = require dirname(__DIR__) . '/common/config/main-local.php';
$mainLocal = require __DIR__ . '/protected/config/main-local.php';
$config = CMap::mergeArray($common, $app, $local, $mainLocal);

Yii::createWebApplication($config)->run();