<?php
/* @var $this CityQuestionController */
/* @var $model CityQuestion */

$this->breadcrumbs=array(
	'City Questions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List CityQuestion', 'url'=>array('index')),
	array('label'=>'Create CityQuestion', 'url'=>array('create')),
	array('label'=>'View CityQuestion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CityQuestion', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表CityQuestion', 'url'=>array('index')),
array('label'=>'新建CityQuestion', 'url'=>array('create')),
array('label'=>'管理CityQuestion', 'url'=>array('admin')),
);
?>

<h1>修改 CityQuestion <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>