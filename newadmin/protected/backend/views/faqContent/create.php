<?php
/* @var $this FaqContentController */
/* @var $model FaqContent */

$this->breadcrumbs=array(
	'Faq Contents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FaqContent', 'url'=>array('index')),
	array('label'=>'Manage FaqContent', 'url'=>array('admin')),
);
?>

<h1>Create FaqContent</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>