<?php
/* @var $this EnglishController */
/* @var $model English */

$this->breadcrumbs=array(
	'Englishes'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表English', 'url'=>array('index')),
  array('label'=>'管理English', 'url'=>array('admin')),
);
?>

<h1>新建 English</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>