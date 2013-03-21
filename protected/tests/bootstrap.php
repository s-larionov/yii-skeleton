<?php

$config = dirname(__FILE__) . '/../config/test.php';

require_once('../../yii/framework/yiit.php');
require_once(dirname(__FILE__) . '/WebTestCase.php');

Yii::createWebApplication($config);
