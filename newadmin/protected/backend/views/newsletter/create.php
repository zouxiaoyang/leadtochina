<?php
/* @var $this NewsletterController */
/* @var $model Newsletter */

$this->breadcrumbs=array(
	'Newsletters'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表Newsletter', 'url'=>array('index')),
  array('label'=>'管理Newsletter', 'url'=>array('admin')),
);
?>

<h1>新建 Newsletter</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>