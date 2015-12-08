<?php
/* @var $this JosCosCityController */
/* @var $model JosCosCity */

$this->breadcrumbs=array(
	'城市'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'城市列表', 'url'=>array('index')),
  array('label'=>'管理城市', 'url'=>array('admin')),
);
?>

<h1>新建 JosCosCity</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>