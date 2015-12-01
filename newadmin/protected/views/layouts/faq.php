<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
<head>
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="en" />
  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/jv.moomenu.css');?>
  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/template.css');?>
  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/faq.css');?>

  <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/tour.js');?>
</head>
<body id="bd" class="fs3">
  <!-- <div class="christmas" style="margin-bottom:10px;"></div> -->
  <div class="clear"></div>
  <div>
    <?php echo $content; ?>
  </div>
  <div class="clear"></div>
  <?php $this->renderPartial('//layouts/footer');?>
</body>
</html>




