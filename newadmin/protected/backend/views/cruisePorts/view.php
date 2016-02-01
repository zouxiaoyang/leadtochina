<?php
/* @var $this CruisePortsController */
/* @var $model CruisePorts */

$this->breadcrumbs=array(
	'Cruise Ports'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表CruisePorts', 'url'=>array('index')),
	array('label'=>'新建CruisePorts', 'url'=>array('create')),
	array('label'=>'修改CruisePorts', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除CruisePorts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理CruisePorts', 'url'=>array('admin')),
);
?>

<h1>查看 CruisePorts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cityName',
		'port_title',
		'portIntro',
		'tourIds',
		'sceneryIds',
	),
)); ?>
