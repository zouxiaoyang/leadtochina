<?php
/* @var $this IndexRecommendCityController */
/* @var $model IndexRecommendCity */

$this->breadcrumbs=array(
	'Index Recommend Cities'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表IndexRecommendCity', 'url'=>array('index')),
  array('label'=>'管理IndexRecommendCity', 'url'=>array('admin')),
);
?>

<h1>新建 IndexRecommendCity</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>