<?php
exit;
$yii=dirname(__FILE__).'/../../../../framework/yii.php';
$config=dirname(__FILE__).'/../../../protected/backend/config/main.php';

defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);

Yii::createWebApplication($config);
$db = Yii::app()->db;

$controllerId = $_SERVER['argv'][1];
if(!$controllerId){
  echo "Please enter correct controllerId!\n";
  exit;
}


$db = Yii::app()->db;
$auth=Yii::app()->authManager;

//create operation
$actionArray = array('create','update','delete','admin','view','index');
foreach($actionArray as $v){
  $operation = ucfirst($controllerId).ucfirst($v);
  $sql = "select * from {{items}} where name='$operation'";
  $row = $db->createCommand($sql)->queryRow();
  if(!$row){
    $auth->createOperation($operation,"$v a $controllerId");
    echo $operation."\n";
  }

}
echo "success\n";
exit;

/*
    $auth=Yii::app()->authManager;
   
    $auth->createOperation('CruiseUpdate','update a cruise');

    $bizRule='return Yii::app()->user->id==$params["post"]->authID;';
    $task=$auth->createTask('updateOwnPost','update a post by author himself',$bizRule);
    $task->addChild('updatePost');

    $role=$auth->createRole('reader');
    $role->addChild('readPost');

    $role=$auth->createRole('author');
    $role->addChild('reader');
    $role->addChild('createPost');
    $role->addChild('updateOwnPost');

    $role=$auth->createRole('editor');
    $role->addChild('reader');
    $role->addChild('updatePost');

    $role=$auth->createRole('admin');
    $role->addChild('editor');
    $role->addChild('author');
    $role->addChild('deletePost');

    $auth->assign('reader','readerA');
    $auth->assign('author','authorB');
    $auth->assign('editor','editorC');
    $auth->assign('admin','adminD');
*/
