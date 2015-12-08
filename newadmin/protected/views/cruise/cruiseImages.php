<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/yangtze3.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>

<div id="content">
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> 
    <a href="/travel/yangtzecruise">Yangtze Cruise</a>
    <a class="last" href="/travel/yangtzecruise/ships">Yangtze Cruise Ships</a>
</div>
<div class="add-new">
<div class="cruise_nav">
        <h2><?php echo $model->cruise_name;?> <span style=" display:inline-block; padding-bottom:3px;" class="star<?php echo $model->cruise_grade;?>"></span> Images</h2>
  <?php echo $this->renderPartial("_cruiseNav", array('model'=>$model));?>
  </div>
  <div class="imageslist">
     <ul>

        <?php foreach($cruise_deckplan_pic as $k=>$v):?>
        <li <?php if(($k+1)%4==0):?> style="margin-right:0px;" <?php endif;?>>
            <a href="/travel/<?php echo Cruisepic::UPLOAD_PATH.$v->pic_path;?>" target="_blank"><img src="<?php echo ImageUtils::getThumbnail(Cruisepic::UPLOAD_PATH.$v->pic_path,"203x138");?>"></a>
            <span><?php echo $v->pic_alt;   ?></span>
        </li>
        <?php endforeach;?>
       
     </ul>
  </div>
  
</div>

<div class="bottom-menu"><?php echo $this->renderPartial("_cruiseNav", array('model'=>$model));?></div>
</div>