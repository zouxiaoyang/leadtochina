<?php
/* @var $this AdoptionOrphanageAddressArticleController */
/* @var $model AdoptionOrphanageAddressArticle */

$this->breadcrumbs=array(
	'Adoption Orphanage Address Articles'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'文章列表', 'url'=>array('index')),
  array('label'=>'管理文章', 'url'=>array('admin')),
);
?>

<h1>新建 AdoptionOrphanageAddressArticle</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>