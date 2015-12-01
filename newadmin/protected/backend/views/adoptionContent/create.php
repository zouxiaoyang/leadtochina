<?php
/* @var $this AdoptionContentController */
/* @var $model AdoptionContent */

$this->breadcrumbs=array(
	'AdoptionContents'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表AdoptionContent', 'url'=>array('index')),
  array('label'=>'管理AdoptionContent', 'url'=>array('admin')),
);
?>

<h1>新建 AdoptionContent</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>