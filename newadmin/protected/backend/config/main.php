<?php
$backend=dirname(dirname(__FILE__));
$frontend=dirname($backend);
Yii::setPathOfAlias('backend', $backend);
// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
if(strpos($_SERVER['HTTP_HOST'],'leadtochina.com')){
  $dbUser = 'admin';
  $dbPasswd = 'QNnU3RSam7';
}else{
  $dbUser = 'root';
  $dbPasswd = 'password';
}
$dbUser = 'root';
$dbPasswd = 'root';
$filter_ip = $_SERVER['REMOTE_ADDR'];
return array(
	'basePath' => $frontend,
 
    'controllerPath' => $backend.'/controllers',
    'viewPath' => $backend.'/views',
    'runtimePath' => $backend.'/runtime',

    'defaultController'=>'site',
    'name' => '后台管理',	

	'preload'=>array('log','Ueditor'),
 
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.helpers.*',
		    'backend.models.*',
        'backend.components.*',
        'application.helpers.*',
        'application.modules.srbac.controllers.SBaseController',
    ),

	'modules'=>array(
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'admin',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array($filter_ip,'::1'),
		),

		'srbac'=>array(
			'userclass'=>'User',
			'userid'=>'id',
			'username'=>'username',
			'delimeter'=>'@',
			'debug'=>false,  
			'pageSize'=>20,
			'superUser'=>'Authority',  //管理员角色的名字
			'css'=>'srbac.css',
			'layout'=>'application.backend.views.layouts.main',
			'notAuthorizedView'=>'srbac.views.authitem.unauthorized',
			'alwaysAllowed'=>array(
				'SiteLogin','SiteLogout','SiteIndex','SiteAdmin',
				'SiteError','SiteContact'),
			'userActions'=>array('Show','View','List'),
			'listBoxNumberOfLines'=>15,
			'imagesPath'=>'srbac.images',
			'imagesPack'=>'noia',
			'iconText'=>true,
			'header'=>'srbac.views.authitem.header',
			'footer'=>'srbac.views.authitem.footer',
			'showHeader'=>true,
			'showFooter'=>true,
			'alwaysAllowedPath'=>'srbac.components',
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
        'authManager' => array(
        	'class'=>'application.modules.srbac.components.SDbAuthManager',
        	'connectionID'=>'db',
        	'itemTable'=>'t_items',
        	'assignmentTable'=>'t_assignments',
        	'itemChildTable'=>'t_itemchildren',
        ),
    /*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
    */
   /*
    'cache'=>array(
      'class'=>'CMemCache',
      'servers'=>array(
        array('host'=>'localhost', 'port'=>11211, 'weight'=>60),
     ),
    ),*/
    'cache'=>array(
      'class'=>'CFileCache'  
    ),
  
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=zouyiquantest',
			'emulatePrepare' => true,
			'username' => $dbUser,
			'password' => $dbPasswd, 
			'charset' => 'utf8',
			'tablePrefix' => 't_',
			'schemaCachingDuration' => '60',
		),
		
    'request' => array(
      //'enableCsrfValidation'=>true,
     ),  
                
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'info,error, warning',
					'logFile' => 'log_backend.log',
					//'categories'=>'system.db.CDbCommand',

				),
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
		'session'=>array(
			 'timeout'=>3600,
		),
	),

	'params'=>require(dirname(__FILE__).'/params.php'),
);
