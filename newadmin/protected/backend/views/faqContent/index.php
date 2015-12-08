<?php
/* @var $this FaqContentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Faq Contents',
);

$this->menu=array(
	array('label'=>'Create FaqContent', 'url'=>array('create')),
	array('label'=>'Manage FaqContent', 'url'=>array('admin')),
);
?>

<h1>Faq Contents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
