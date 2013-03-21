<?php

defined('APPLICATION_MODE') or define('APPLICATION_MODE', isset($_SERVER['APPLICATION_MODE'])? $_SERVER['APPLICATION_MODE']: 'production');

// calculate filename for config
$configFileName = realpath(__DIR__ . '/' . preg_replace('/[^A-Za-z0-9_\-]/', '_', APPLICATION_MODE) . '.php');
if ($configFileName && file_exists($configFileName)) {
	Yii::import('system.collections.CMap');
	return CMap::mergeArray(
		require($configFileName),
		array(
			'components' => array(
				'fixture' => array(
					'class' => 'system.test.CDbFixtureManager',
				),
				'db' => array(
				),
			),
		));
}

return array();

