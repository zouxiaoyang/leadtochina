<?php
/* @var $this AdoptionOrphanageAddressArticleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Adoption Orphanage Address Articles',
);

$this->menu=array(
	array('label'=>'新建文章', 'url'=>array('create')),
	array('label'=>'管理文章', 'url'=>array('admin')),
);
?>

<h1>Adoption Orphanage Address Articles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
