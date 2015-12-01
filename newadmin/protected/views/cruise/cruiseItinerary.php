<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/yangtze3.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>

<div id="content">
	
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> 
    <a href="/travel/yangtzecruise">Yangtze Cruise</a>
    <a class="last" href="/travel/yangtzecruise/ships">Yangtze Cruise Ships</a>
</div>
<div class="add-new">
  <div class="cruise_nav">
        <h2><?php echo $model->cruise_name;?> <span style=" display:inline-block; padding-bottom:3px;" class="star<?php echo $model->cruise_grade;?>"></span> Itineray</h2>
  <?php echo $this->renderPartial("_cruiseNav", array('model'=>$model));?>
  </div>

  <!--  left-table start -->
 <div id="itinerarycontent">
     <div class="itinerary">
       <div class="left-table1">
         <h2><strong>DOWNSTREAM:</strong> <?php echo Cruise::$downCityArr[$model->downcity];?> (<?php echo count($cruise_cycle[1]);?> days)</h2>
        <table border="0" cellspacing="0" cellpadding="0">
           <?php foreach ((array)$cruise_cycle[1] as $k=>$v):?>
           <tr>
               <td width="77">Day <?php echo $k+1;?></td>
               <td width="977" class="number"><?php echo $v['activition'];?></td>
               <td valign="top" style="padding:10px 15px;">
             		<div class="right-pic">
                <ul>
                    <li class="pic"><img src="<?php echo ImageUtils::getThumbnail(Cruisecycle::UPLOAD_PATH.$v->cruisecycle_pic, '171x119')?>"  style="width:171px;height:69px;" alt="" /></li>
             		    <li><?php echo $v['pic_alt'];?></li>
                </ul>
                </div>
           		</td>
           </tr>                          
           <?php endforeach;?>
    </table>                   
 </div>               
     </div>
     <div class="itinerary">
       <div class="left-table1">
         <h2><strong>UPSTREAM:</strong> <?php echo Cruise::$upCityArr[$model->upcity];?> (<?php echo count($cruise_cycle[0]);?> days)</h2>
        <table border="0" cellspacing="0" cellpadding="0">
           <?php foreach ((array)$cruise_cycle[0] as $k=>$v):?>
           <tr>
               <td width="77">Day <?php echo $k+1;?></td>
               <td width="977" class="number"><?php echo $v['activition'];?></td>
               <td  style="padding:10px 15px;" valign="top">
                <div class="right-pic">
                <ul>
             		<li class="pic"><img src="<?php echo ImageUtils::getThumbnail(Cruisecycle::UPLOAD_PATH.$v->cruisecycle_pic, '171x119')?>" style="width:171px;height:69px;"  alt="" /></li>
             		<li><?php echo $v['pic_alt'];?></li>
                </ul>
               </div>
           		</td>
           </tr>                          
           <?php endforeach;?>
    </table>                   
 </div>
     </div>
 </div>
 <!--  left-table end -->
</div>
<div class="bottom-menu"><?php echo $this->renderPartial("_cruiseNav", array('model'=>$model));?></div>
</div>


