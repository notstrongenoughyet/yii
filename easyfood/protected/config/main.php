<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'EasyFood',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'ext.YiiMongoDbSuite.*',
                'ext.phamlp.Sass',
	),

	'defaultController'=>'base',

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'mongodb' => array(
                        'class'            => 'EMongoDB',
                        'connectionString' => 'mongodb://localhost',
                        'dbName'           => 'easyfood',
                        'fsyncFlag'        => true,
                        'safeFlag'         => true,
                        'useCursor'        => false
                ),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
                        'showScriptName'=>false,
                        'caseSensitive'=>false,  
			'rules'=>array(
				'post/<id:\d+>/<title:.*?>'=>'post/view',
				'posts/<tag:.*?>'=>'post/index',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                                'css/render.css'=> 'css/render',
			),
                    ),
             /*   'assetManager' => array(
                    'class' => 'ext.phamlp.PBMAssetManager',
                    'parsers' => array(
                      'scss' => array(
                        'class' => 'ext.phamlp.Sass',
                        'output' => 'css',
                        'options' => array(
                          'style' => 'nested',
                          'cache' => false,
                          'extensions' => array(
                            'compass' => array(
                            'project_path' => realpath(dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'),
                            'relative_assets' => false,
                              )
                          )
                        )
                      ),
                    )
                  ),*/
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
);