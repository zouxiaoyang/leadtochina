<?php
/* @var $this CruisepicController */
/* @var $model Cruisepic */

$this->breadcrumbs=array(
	'Cruisepics'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表Cruisepic', 'url'=>array('index')),
	array('label'=>'新建Cruisepic', 'url'=>array('create')),
	array('label'=>'修改Cruisepic', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Cruisepic', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Cruisepic', 'url'=>array('admin')),
);
?>

<h1>查看 Cruisepic #<?php echo $model->id; ?></h1>
<?php if(Yii::app()->user->hasFlash('UploadImageError')):?>
	<div class="flash-success"><?php echo Yii::app()->user->getFlash('UploadImageError');?></div>
<?php endif;?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cruiseid',
		'pic_alt',
		'pic_path',
		'state'
	),
)); ?>
