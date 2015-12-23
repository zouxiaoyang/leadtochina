<?php
define('SITEROOT', dirname(dirname(__FILE__)));

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
if(strpos($_SERVER['HTTP_HOST'],'leadtochina.lab')){
  $dbUser = 'root';
  $dbPasswd = 'root';
  $ipFilters = array($_SERVER['REMOTE_ADDR'],'::1');
}else{
  $dbUser = 'admin';
  $dbPasswd = 'QNnU3RSam7';
}

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'LeadToChina',
	'defaultController' => 'index',

	'preload'=>array('log'),
'import'=>array( 'application.models.*', 'application.components.*',
    'application.helpers.*'
	),

	'modules'=>array(
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'admin',
			'ipFilters'=>$ipFilters,
		),
	),

	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

    'image'=>array(
      'class'=>'application.extensions.image.CImageComponent',
      // GD or ImageMagick
      'driver'=>'GD',
      // ImageMagick setup path
      //'params'=>array('directory'=>'/opt/local/bin'),
    ),

		'urlManager'=>require(dirname(__FILE__).'/urlManager.php'),
     

	    'cache'=>array(
	      'class'=>'CMemCache',
	      'servers'=>array(
	        array('host'=>'localhost', 'port'=>11211, 'weight'=>60),
	     ),
	    ),

	    'filecache'=>array(
	      'class'=>'CFileCache'  
	    ),

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=leadtochina',
			'emulatePrepare' => true,
			'username' => $dbUser,
			'password' => $dbPasswd,
			'charset' => 'utf8',
			'tablePrefix' => 't_',
			'schemaCachingDuration' => '720',
		),

    'request' => array(
      'enableCsrfValidation'=>true,
    ),

		'errorHandler'=>array(
			'errorAction'=>'index/error',
		),

    /*
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'trace,info,error, warning',
					'logFile' => 'log_frontend.log',
				),
		
				 array(
					'class'=>'CWebLogRoute',
				),
    		
			),
		),
     */

	),

	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
);
