<?php
/* @var $this CruisecycleController */

$this->breadcrumbs=array(
	'Cruisecycle',
);
$this->menu=array(
	//array('label'=>'Create Cruisecycle', 'url'=>array('create')),
	array('label'=>'Manage Cruisecycle', 'url'=>array('admin')),
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
