<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Create',
);\n";
?>

$this->menu=array(
  array('label'=>'列表<?php echo $this->modelClass; ?>', 'url'=>array('index')),
  array('label'=>'管理<?php echo $this->modelClass; ?>', 'url'=>array('admin')),
);
?>

<h1>新建 <?php echo $this->modelClass; ?></h1>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
