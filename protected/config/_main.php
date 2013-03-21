<?php

return [
	'basePath'       => __DIR__ . DIRECTORY_SEPARATOR . '..',
	'name'           => '',

	// preloading 'log' component
	'preload'        => ['log'],

	// autoloading model and component classes
	'import'         => [
		'application.controllers.BaseController',
		'application.models.*',
		'application.components.*',
		'ext.httpclient.*',
	],

	'language'       => 'en',
	'sourceLanguage' => 'en',

	// application components
	'components'     => [
		'urlManager'   => [
			'urlFormat'        => 'path',
			'caseSensitive'    => true,
			'matchValue'       => true,
			'showScriptName'   => false,
			'urlSuffix'        => '/',
			'useStrictParsing' => true,
			'rules'            => require('_routes.php'),
		],
		'db'           => [
			'connectionString' => 'mysql:host=localhost;dbname=main',
			'emulatePrepare'   => true,
			'username'         => 'root',
			'password'         => '',
			'charset'          => 'utf8',
		],
		'errorHandler' => [
			'errorAction' => 'main/error',
		],
		'log'          => [
			'class'  => 'CLogRouter',
			'routes' => [
				[
					'class'  => 'CFileLogRoute',
					'levels' => 'error, warning',
				],
			],
		],
		'viewRenderer' => [
			'class'         => 'ext.ETwigViewRenderer',
			'twigPathAlias' => 'ext.twig-renderer.lib.Twig',
			'fileExtension' => '.twig',
			'paths'         => ['__main__' => 'application.views'],
			'functions'     => [],
			'globals'       => ['Yii' => 'Yii'],
		],
		'cache'  => array(
			'class'        => 'CFileCache',
		),
		'user'         => [
			'class'          => 'application.components.WebUser',
			'loginUrl'       => ['main/signIn'],
			'allowAutoLogin' => true,
			'identityCookie' => [
				'path'   => '/',
				'domain' => (array_key_exists('HTTP_HOST', $_SERVER)? '.' . $_SERVER['HTTP_HOST']: null),
			],
			'authTimeout'    => 2592000, // 1 month in seconds
		],
	],

	'params'         => [
		'adminEmail'   => 'sergey@larionov.biz',
	],
];
