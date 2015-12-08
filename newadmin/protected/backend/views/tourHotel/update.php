<?php
/* @var $this TourHotelController */
/* @var $model TourHotel */

$this->breadcrumbs=array(
	'Tour Hotels'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List TourHotel', 'url'=>array('index')),
	array('label'=>'创建酒店', 'url'=>array('create')),
	//array('label'=>'View TourHotel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'酒店列表', 'url'=>array('admin')),
);
?>

<h1>Update TourHotel <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>