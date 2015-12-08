<?php
/* @var $this IndexRecommendCityController */
/* @var $model IndexRecommendCity */

$this->breadcrumbs=array(
	'Index Recommend Cities'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List IndexRecommendCity', 'url'=>array('index')),
	array('label'=>'Create IndexRecommendCity', 'url'=>array('create')),
	array('label'=>'View IndexRecommendCity', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage IndexRecommendCity', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表IndexRecommendCity', 'url'=>array('index')),
array('label'=>'新建IndexRecommendCity', 'url'=>array('create')),
array('label'=>'管理IndexRecommendCity', 'url'=>array('admin')),
);
?>

<h1>修改 IndexRecommendCity <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>