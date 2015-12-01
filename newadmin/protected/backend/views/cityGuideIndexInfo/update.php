<?php
/* @var $this CityGuideIndexInfoController */
/* @var $model CityGuideIndexInfo */

$this->breadcrumbs=array(
	'City Guide Index Infos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List CityGuideIndexInfo', 'url'=>array('index')),
	array('label'=>'Create CityGuideIndexInfo', 'url'=>array('create')),
	array('label'=>'View CityGuideIndexInfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CityGuideIndexInfo', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表CityGuideIndexInfo', 'url'=>array('index')),
array('label'=>'新建CityGuideIndexInfo', 'url'=>array('create')),
array('label'=>'管理CityGuideIndexInfo', 'url'=>array('admin')),
);
?>

<h1>修改 CityGuideIndexInfo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>