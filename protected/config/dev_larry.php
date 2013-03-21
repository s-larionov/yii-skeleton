<?php

Yii::import('system.collections.CMap');

$config = CMap::mergeArray(require('_main.php'), [
	'components' => [
		'log' => [
			'class' => 'CLogRouter',
			'routes' => [
				[
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning, info, trace',
				],
				[
					'class' => 'CWebLogRoute',
					'levels' => 'error, warning, info, trace',
				],
			],
		],
	],
	'params' => [
	],
]
);

return $config;
