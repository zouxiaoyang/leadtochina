<?php
/* @var $this CooperationPartnersController */
/* @var $model CooperationPartners */

$this->breadcrumbs=array(
	'Cooperation Partners'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表CooperationPartners', 'url'=>array('index')),
	array('label'=>'新建CooperationPartners', 'url'=>array('create')),
	array('label'=>'修改CooperationPartners', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除CooperationPartners', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理CooperationPartners', 'url'=>array('admin')),
);
?>

<h1>查看 CooperationPartners #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fullname',
		'company_type',
		'compnay_name',
		'phone',
		'fax_num',
		'email',
		'other_request',
	),
)); ?>
