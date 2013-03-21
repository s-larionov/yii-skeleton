<?php

Yii::import('system.collections.CMap');

$config = CMap::mergeArray(
	require('_main.php'),
	array(
		'components' => array(
		),
		'params' => array(
		),
	)
);

return $config;
