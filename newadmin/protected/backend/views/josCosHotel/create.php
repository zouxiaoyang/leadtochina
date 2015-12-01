<?php
/* @var $this JosCosHotelController */
/* @var $model JosCosHotel */

$this->breadcrumbs=array(
	'Jos Cos Hotels'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表JosCosHotel', 'url'=>array('index')),
  array('label'=>'管理JosCosHotel', 'url'=>array('admin')),
);
?>

<h1>新建 JosCosHotel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>