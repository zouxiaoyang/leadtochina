<?php
/* @var $this AdoptionOrphanageAddressArticleController */
/* @var $model AdoptionOrphanageAddressArticle */

$this->breadcrumbs=array(
	'Adoption Orphanage Address Articles'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'文章列表', 'url'=>array('index')),
	array('label'=>'新建文章', 'url'=>array('create')),
	array('label'=>'修改文章', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除文章', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理文章', 'url'=>array('admin')),
);
?>

<h1>查看 AdoptionOrphanageAddressArticle #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'aid',
		'title',
		'content',
		'pic',
		'date',
	),
)); ?>
