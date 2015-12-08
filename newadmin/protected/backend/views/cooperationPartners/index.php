<?php
/* @var $this CooperationPartnersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cooperation Partners',
);

$this->menu=array(
	array('label'=>'新建CooperationPartners', 'url'=>array('create')),
	array('label'=>'管理CooperationPartners', 'url'=>array('admin')),
);
?>

<h1>Cooperation Partners</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
