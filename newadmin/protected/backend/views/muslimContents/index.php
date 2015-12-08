<?php
/* @var $this MuslimContentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'All Contents',
);

$this->menu=array(
	array('label'=>'新建Muslim文章', 'url'=>array('create')),
	array('label'=>'管理Muslim文章', 'url'=>array('admin')),
);
?>

<h1>All Contents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
