<?php
/* @var $this JosCosHotelpicController */
/* @var $model JosCosHotelpic */

$this->breadcrumbs=array(
  'Jos Cos Hotelpics'=>array('index'),
  'Manage',
);

$this->menu=array(
  array('label'=>'酒店列表', 'url'=>array('JosCosHotel/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
  $('.search-form').toggle();
  return false;
});
$('.search-form form').submit(function(){
  $.fn.yiiGridView.update('jos-cos-hotelpic-grid', {
    data: $(this).serialize()
  });
  return false;
});
");
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'jos-cos-hotelpic-form',
  'enableAjaxValidation'=>false,
)); ?>

<?php
$this->widget('application.extensions.swfupload.CFSwfUpload', array(
        'config' => array(
            'upload_url' => Yii::app()->createUrl('JosCosHotelpic/upload'),
            'post_params' => array('PHPSESSID'=>$_COOKIE['PHPSESSID'], 'id'=>Yii::app()->user->getState('hotelid')),
            'file_size_limit' => '2 MB',
        )
        
    )
);
?>

<?php $this->endWidget(); ?>

<?php foreach($hotelPics as $v):?>
  <div class="imgflag" style="float:left;margin-right:10px;"><img src="<?php echo ImageUtils::getThumbnail(JosCosHotelpic::UPLOAD_PATH.$v->pic_path, '150x300');?>" />
    <p><span  style="margin-right:10px;"><?php echo $v->pic_alt;?></span><br />
     <span style="margin-right:10px;cursor:pointer;"><a href="<?php echo Yii::app()->createUrl('josCosHotelpic/update', array('id'=>$v->id));?>">编辑</a></span>
     <span style="margin-right:10px;cursor:pointer;" onclick="deleteImg(<?php echo $v->id;?>, this);">删除</span></p>
  </div>
<?php endforeach;?>
</div><!-- form -->

<script>
  function deleteImg(id, obj){
    if(confirm('确定删除?')){
      $.post("<?php echo Yii::app()->createUrl('JosCosHotelpic/deleteImg') ?>", {id:id}, function(ret){
        if(ret == 0) $(obj).parents('.imgflag').remove();
      })
    }
  }
</script>