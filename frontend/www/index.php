<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../../common/lib/yii/yiilite.php';
require_once($yii);
$siteConfig = require dirname(__FILE__).'/../../common/config/site.php';
$applicationConfig = require dirname(__FILE__).'/../config/main.php';
$config = CMap::mergeArray($siteConfig, $applicationConfig);

// remove the following line when in production mode
// defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);
Yii::createWebApplication($config)->run();
