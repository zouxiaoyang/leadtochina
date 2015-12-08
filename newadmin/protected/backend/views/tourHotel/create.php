<?php
/* @var $this TourHotelController */
/* @var $model TourHotel */

$this->breadcrumbs=array(
	'Tour Hotels'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List TourHotel', 'url'=>array('index')),
	array('label'=>'客户酒店列表', 'url'=>array('admin')),
);
?>

<h1>新增酒店</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>