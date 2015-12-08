

<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/yangtze3.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>


<div id="content">
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> 
    <a href="/travel/yangtzecruise">Yangtze Cruise</a>
    <a class="last" href="/travel/yangtzecruise/ships">Yangtze Cruise Ships</a>
</div>
<div class="add-new">
	<div class="cruise_nav">
        <h2><?php echo $model->cruise_name;?> <span style=" display:inline-block; padding-bottom:3px;" class="star<?php echo $model->cruise_grade;?>"></span> Life Onboard</h2>
  <?php echo $this->renderPartial("_cruiseNav", array('model'=>$model));?>
  </div>
	
	<!--  lifecontent start -->    
	<div id="lifecontent">
			<?php foreach ((array)$onboard as $k=>$v):?>
	   <h2><?php echo $v->name;?></h2>
	   <div class="lifelist">
	      <div class="ulleft">
	        <?php echo $v->description;?>
	      </div>
	      <div class="pic2"><img src="<?php echo ImageUtils::getThumbnail(CruiseOnboard::UPLOAD_PATH.$v->onboard_pic, '218x161')?>" alt="" /></div>
	   </div>
	   <?php endforeach;?>                 
	</div>
	<!--  lifecontent end -->   
  </div>
  <div class="bottom-menu"><?php echo $this->renderPartial("_cruiseNav", array('model'=>$model));?></div>
</div>
