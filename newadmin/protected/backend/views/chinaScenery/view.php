<?php
/* @var $this SceneryController */
/* @var $model Scenery */

$this->breadcrumbs=array(
	'Sceneries'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ChinaScenery', 'url'=>array('index')),
	array('label'=>'Create ChinaScenery', 'url'=>array('create')),
	array('label'=>'Update ChinaScenery', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ChinaScenery', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ChinaScenery', 'url'=>array('admin')),
);
?>

<h1>View ChinaScenery #<?php echo $model->id; ?></h1>

<?php //echo $this->renderPartial('_form_test', array('model'=>$model)); ?>
<?php 
$file_dir=$model->attributes['filedir'];
$ufile=$model->attributes['ufile'];
$img_str="<img src='".$file_dir."thumb/thumb_".$ufile."'/>";
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'province_name',
		'city_name',
		array('name'=>'districtid','value'=>Scenery::getDistrictName($model->attributes['districtid'])),
		'price',
		array('name'=>'description','type'=>'raw'),
    array('name'=>'图片','type'=>'raw','value'=>CHtml::image(ImageUtils::getThumbnail(Scenery::UPLOAD_PATH.$model->ufile, '200x100'),'')),
	),
)); 
?>
