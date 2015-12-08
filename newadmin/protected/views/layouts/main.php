<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
<head>
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="en" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jv.moomenu.css" />
  <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/tour.js');?>
  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/colorbox.css'); ?>
  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.colorbox.js');?>
  <style type="text/css">
	<!--
	#cboxClose{display:none !important;}
	.leftspace{ width:100%; height:auto; float:left;}
	-->
	</style>
</head>
<body id="bd" class="fs3"> 
<!-- <div <?php if(Yii::app()->getController()->id == 'index'):?>class="festival2014" <?php endif;?>> -->
<!-- <div class="christmas"></div>  -->
<div id="feedback" style="display:none"><a href="javascript:;" onclick="_feedback.pop_step1();"><img src="/images/index/feedback.png"  /></a></div>
<div id="header">
  <div class="head">
    <?php $this->renderPartial('//layouts/header',
      array(
          'price_list'=>Yii::app()->params['price_list'],
          'days_list'=>Yii::app()->params['days_list'])
      );
    ?>
  </div>
</div>
<div class="clear"></div>

<div class="contentnew">
  <div class="leftspace">
    <div><?php echo $content; ?></div>
  </div>
</div>

<div class="clear"></div>
<?php $this->renderPartial('//layouts/footer');?>
</div>
</body>
</html>




