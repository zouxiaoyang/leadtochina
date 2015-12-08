<?php
/* @var $this CityGuideIndexInfoController */
/* @var $model CityGuideIndexInfo */

$this->breadcrumbs=array(
	'City Guide Index Infos'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表CityGuideIndexInfo', 'url'=>array('index')),
  array('label'=>'管理CityGuideIndexInfo', 'url'=>array('admin')),
);
?>

<h1>新建 CityGuideIndexInfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>