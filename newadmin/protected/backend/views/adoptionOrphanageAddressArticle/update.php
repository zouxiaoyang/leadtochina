<?php
/* @var $this AdoptionOrphanageAddressArticleController */
/* @var $model AdoptionOrphanageAddressArticle */

$this->breadcrumbs=array(
	'Adoption Orphanage Address Articles'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List AdoptionOrphanageAddressArticle', 'url'=>array('index')),
	array('label'=>'Create AdoptionOrphanageAddressArticle', 'url'=>array('create')),
	array('label'=>'View AdoptionOrphanageAddressArticle', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AdoptionOrphanageAddressArticle', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表文章', 'url'=>array('index')),
array('label'=>'新建文章', 'url'=>array('create')),
array('label'=>'管理文章', 'url'=>array('admin')),
);
?>

<h1>修改 AdoptionOrphanageAddressArticle <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>