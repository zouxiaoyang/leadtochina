<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/yangtze3.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>
<div id="content">
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> 
    <a href="/travel/yangtzecruise">Yangtze Cruise</a>
    <a class="last" href="/travel/yangtzecruise/ships">Yangtze Cruise Ships</a>
</div>
<div class="add-new">
  <div class="cruise_nav">
        <h2><?php echo $model->cruise_name;?> <span style=" display:inline-block; padding-bottom:3px;" class="star<?php echo $model->cruise_grade;?>"></span></h2>
  <?php echo $this->renderPartial("_cruiseNav", array('model'=>$model));?>
  </div>

<div id="overviewcontent">
    <div class="over-text">
        <table border="0" cellspacing="0" cellpadding="0">
          <tbody>
             <tr>
                <td>Star Rating:</td>
                <td class="no"><?php echo $model->cruise_grade;?></td>
             </tr>
             <tr>
                <td>Maiden Voyage:</td>
                <td class="no"><?php echo $model->year_built;?></td>
             </tr>
             <tr>
                <td>Ship Length:</td>
                <td class="no"><?php echo $model->length;?></td>
             </tr>
             <tr>
                <td>Crew:</td>
                <td class="no"><?php echo $model->crew;?></td>
             </tr>
          </tbody>
        </table>
        <h2><?php echo $model->cruise_name;?> <span style=" display:inline-block;" class="star<?php echo $model->cruise_grade;?>"></span></h2>
        <p><span>Route:</span> 
           <b>
                      <?php echo Cruise::$weekDays[$model->up_week];?> <?php echo Cruise::$upCityDays[$model->upcity].Cruise::$upCityArr[$model->upcity];?> </b>
                                            
                      <b><?php echo Cruise::$weekDays[$model->down_week];?> <?php echo Cruise::$downCityDays[$model->downcity].Cruise::$downCityArr[$model->downcity];?></b>
                      </p>
         <p><span>Highlights:</span> <?php echo $model->highlights;?></p>
       <?php echo $model->introduction;?>
    </div>
    <div class="exterior">
       <ul>
      <?php if($cruise_pic):?>
       		<?php foreach ($cruise_pic as $k=>$v):?>
          <li <?php if($k%3==0&&$k!=0):?>style="margin-right:0px;"<?php endif;?>>
            <img src="<?php echo ImageUtils::getThumbnail(Cruisepic::UPLOAD_PATH.$v->pic_path, '200x146')?>" alt="<?php echo $v->pic_alt;?>" /> <span><?php echo $v->pic_alt;?></span>
          </li>
          <?php endforeach;?>
      <?php endif;?>
       </ul>
    </div>
    
 </div> 

</div>
<div class="bottom-menu"><?php echo $this->renderPartial("_cruiseNav", array('model'=>$model));?></div>
</div>