<?php
/* @var $this ImgVideoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Img Videos',
);

$this->menu=array(
	array('label'=>'新建ImgVideo', 'url'=>array('create')),
	array('label'=>'管理ImgVideo', 'url'=>array('admin')),
);
?>

<h1>Img Videos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
