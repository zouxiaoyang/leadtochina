<?php
/* @var $this ReviewsCommentController */
/* @var $model ReviewsComment */

$this->breadcrumbs=array(
	'Reviews Comments'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'列表ReviewsComment', 'url'=>array('index')),
	array('label'=>'新建ReviewsComment', 'url'=>array('create')),
	array('label'=>'修改ReviewsComment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除ReviewsComment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理ReviewsComment', 'url'=>array('admin')),
);
?>

<h1>查看 ReviewsComment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'email',
		'comment',
		'published'
	),
)); ?>
