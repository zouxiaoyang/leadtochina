<?php
//if(!$_SERVER['SSH_CONNECTION']) exit;
$yii=dirname(__FILE__).'/../../../../framework/yii.php';
$config=dirname(__FILE__).'/../../../protected/backend/config/main.php';
defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
require_once($yii);
Yii::createWebApplication($config);
$db = Yii::app()->db;
$auth=Yii::app()->authManager;
$db->createCommand("SET foreign_key_checks = 0")->query();
$db->createCommand()->truncateTable('t_items');
$db->createCommand()->truncateTable('t_itemchildren');
$db->createCommand("SET foreign_key_checks = 1")->query();

$xml = simplexml_load_file(dirname(__FILE__)."/rbac.xml");
$node = $xml->node;
foreach($node->role as $role){
  foreach($role->task as $task){
    $roleName = (string)$role['name'];
    $roleDescription = (string)$role['description'];
    $taskName = (string)$task['name'];
    $taskDescription = (string)$task['description'];
    echo $roleName.'-'.$roleDescription."\n";
    echo '--'.$taskName.'-'.$taskDescription."\n";

    $roleObj = $auth->createRole($roleName, $roleDescription);
    $taskObj = $auth->createTask($taskName, $taskDescription);
    $roleObj->addChild($taskName);

    foreach($task->operation as $operation){
      $operationName = (string)$operation['name'];
      $operationDescription = (string)$operation['description'];
      echo '----'.$operationName.'-'.$operationDescription."\n";

      $auth->createOperation($operationName,$operationDescription);
      $taskObj->addChild($operationName);

    }   
  }
}
