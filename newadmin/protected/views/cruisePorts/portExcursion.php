  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/cruiseport.css'); ?>
  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.css'); ?>

  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.js');?>
  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.datepicker.js');?>
  <?php $this->setPageTitle($cur_port->cityName . ' Port Excursions'); ?>
<style type="text/css">
<!--
#content{ background:#fff;}
-->
</style>
      <div class="cru_content">
      <div class="cru_menu-tours">
        <strong>You are here:</strong><a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cruisePorts/index2');?>">International Cruise</a> <?php echo $cur_port->cityName;?> Excursions
      </div>
<div class="clear"></div>
      <div class="">
      <img src="<?php echo ImageUtils::getThumbnail(CruisePorts::UPLOAD_PATH . $cur_port->pic, '920x250');?>" width="920" height="250" />
      </div>
   <div class="cru_cruise">
   <div class="cru_portintr_title">
   <div class="cru_portintr_title_lef">
   <p class="cru_portintr_title3" style="color:#000">Cruises Ports & Excursions</p>
   </div>
   <div class="cru_portintr_title_rig">
   <p class="cru_portintr_title1" style="margin-left:21px"><a href="<?php echo Yii::app()->createUrl('cruisePorts/portExcursion', array("id"=>$cur_port->id,"name"=>SiteUtils::stringURLSafe($cur_port->cityName)));?>"><?php echo $cur_port->cityName;?> Excursions</a><span></span></p>
   <p class="cru_portintr_title2 cru_ml10"><a href="<?php echo Yii::app()->createUrl('cruisePorts/portIntroduction', array("id"=>$cur_port->id,"name"=>SiteUtils::stringURLSafe($cur_port->cityName)));?>"><?php echo $cur_port->cityName;?> Introduction</a><span></span></p></div>
   </div>
   <div class="cru_view_content">
   <div class="cru_view_content_left">
    <div class="cru_port_content_left1">
   <ul id="cruise_list1">
    <?php foreach($cruise_port_list as $k=>$v):?>
      <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/portExcursion', array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->cityName)));?>"  <?php if($v->id == $_GET['id']):?> class="selected1" <?php endif;?>><span class="cru_img<?php echo $k+1;?>"></span><?php echo $v->cityName;?></a></li>
    <?php endforeach;?>
   </ul>
   <p style="padding-top:15px; clear:both "><a href="#"><img src="/images/cruisePorts/trip.jpg" width="175" height="129" /></a></p>
   </div>
    <div class="cru_portintr_cont1_left cru_mt10">
    <div class="cru_portintr_cont1_left1">
   <p class="cru_portintr_cont1_left1_tit"><span class="cru_portintr_cont1_bg"></span><span class="cru_portintr_cont1_tit1">Cruise Name</span></p>
   <ul>
    <?php foreach($cruise_list as $k=>$v):?>
      <li><a href="<?php echo Yii::app()->createUrl("cruisePorts/CruiseView", array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->name)));?>"><?php echo $v->name;?><?php if($k==1):?><img src="/images/citytours/hot.gif"><?php endif;?></a></li>
    <?php endforeach;?>
   </ul>
   </div>
   <div class="cru_portintr_cont1_left1 cru_mt10">
   <p class="cru_portintr_cont1_left1_tit"><span class="cru_portintr_cont1_bg"></span><span class="cru_portintr_cont1_tit1">City Tours</span></p>
   <ul>
     <li><a href="/travel/city-tianjin-tours">Tianjin Tours</a></li>
     <li><a href="/travel/city-shanghai-tours">Shanghai Tours</a></li>
     <li><a href="/travel/city-hong-kong-tours">Hongkong Tours</a></li>
     <li><a href="/travel/city-dalian-tours">Dalian Tours</a></li>
     <li><a href="/travel/city-xiamen-tours">Xiamen Tours</a></li>
     <li><a href="/travel/city-sanya-tours">Sanya Tours</a></li>
     <li><a href="/travel/city-guangzhou-tours">Guangzhou Tours</a></li>
     <li><a href="/travel/city-haikou-tours">Haikou Tours</a></li>
     <li><a href="/travel/city-qingdao-tours">Qingdao Tours</a></li>
   </ul>
   </div>
   <div class="cru_portintr_cont1_left1 cru_mt10">
   <p class="cru_portintr_cont1_left1_tit"><span class="cru_portintr_cont1_bg"></span><span class="cru_portintr_cont1_tit1">FAQS</span></p>
   <ul>
      <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/cruiseFaq', array("id"=>999,"name"=>SiteUtils::stringURLSafe('Cruise Faq')));?>">Cruise Port Faq</a></li>
    <?php foreach($cruise_port_list as $k=>$v):?>
        <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/cruiseFaq', array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->cityName)));?>"><?php echo $v->cityName;?> Faq</a></li>
     <?php endforeach;?>
   </ul>
   </div>
   <div class="cru_mt10">
    <div class="code">
      <script type="text/javascript" src="/travel/js/tripadvisor.js"></script>
  </div>
</div>
   </div>   
   </div>
   <div class="cru_view_content_right">
   <div class="cru_view_content_right1">
   <div>
   <div class="cru_cruise_content_right_intro"> 
      <?php echo $cur_port->tourIntro;?>
   </div>
<div class="clear"></div>
  <div class="cru_portexc_cru">
  <p class="cru_view_content_right1_tit2">Cruises Stop in <?php echo $cur_port->cityName;?></p>
  <?php foreach($cur_port_excursion as $k=>$v):?>
  	<?php if($v->id!=60):?>
  <a href="#<?php echo $k+1;?>"><?php echo $v->name;?> </a><?php if($cur_port->cityName=='Tianjin Port' && $k==1):?><img src="/images/citytours/hot.gif"> <?php endif;?>&nbsp;
<?php endif;?>
  <?php endforeach;?>
  </div>

<?php foreach($cur_port_excursion as $k=>$v):?>
	<?php if($v->id!=60):?>
<div class="cru_cruise_content_right_time" ><a id="<?php echo $k+1;?>">&nbsp;</a>

 <table width="100%" border="0" cellpadding="10" cellspacing="1" bgcolor="#cccccc" class="cru_mt10">
<tr>
    <th height="25" colspan="3" align="center" bgcolor="#dddddd" scope="col" style="color:#000; font-size:13px"><b>Service for Passengers from
 <?php echo $v->name;;?></b></th>
    </tr>
  <tr>
    <th height="25" align="center" bgcolor="#FFFFFF" scope="col">Arrive </th>
    <th height="25" align="center" bgcolor="#FFFFFF" scope="col">Depart </th>
    <th height="25" align="center" bgcolor="#FFFFFF" scope="col">Port Excursion</th>
  </tr>

  <?php $schedule_arr = unserialize($v->schedule);?>
  <?php if(is_array($schedule_arr)):?>
    <?php foreach($schedule_arr['arrive'] as $k2=>$v2):?>
  
    <tr>
      <td height="25" bgcolor="#FFFFFF" align="center"><?php echo $schedule_arr['arrive'][$k2]?></td>
      <td height="25" bgcolor="#FFFFFF" align="center"><?php echo $schedule_arr['depart'][$k2]?></td>
      <td height="25" bgcolor="#FFFFFF" align="center"><?php echo $schedule_arr['port'][$k2]?></td>
    </tr>
    <?php endforeach;?>
  <?php endif;?>
  
</table>  
<div class="cru_port_content_right_pas cru_mt10">
   <ul>
      <?php 
          $tour_ids = $v->tour_ids;
          $tours = ToursPackage::model()->findAll(array(
           'select' => 'id,name,price,filedir,cruise_recommend_pic',
           'condition' => "id in($tour_ids)",
           'order' => 'days asc',
          ));
      ?>
      <?php foreach($tours as $v2):?>
      <li>
        <p><img src="/<?php echo $v2->filedir;?>/<?php echo $v2->cruise_recommend_pic;?>"></p>
        <p class="cru_col1 cru_hei"><a href="<?php echo $v2->url();?>"><?php echo $v2->name;?></a></p>
        <p>from <span class="cru_col2">US$<?php echo $v2->price; ?></span></p>
      </li>
      <?php endforeach;?>
    </ul>
</div>   
</div>
<?php endif;?>
<?php endforeach;?>

   <div class=" clear"></div>
  <div class="cru_view_line2"></div>
   </div>


   
      </div>
   <div class="clear"></div>   
   <div class="cru_view_cont1_right">
    <?php $this->renderPartial("_order", array('model'=>$model,'cruise_list'=>$cruise_list));?>
   <div class="cru_view_cont1_right2">
   <div class="cru_view_cont1_right2_head">
      <?php $this->renderPartial('/question/_cruisePortsQuestionForm2',array('questionModel'=>$cruisePortsQuestionModel, 'question_type'=>3));?>
   </div>
   <?php if($dataProvider->totalItemCount >0):?>
   <div class="cru_view_cont1_right2_foot">
        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$dataProvider,
            'itemView'=>'_question2',
            'pager'=>array(
              'cssFile'=>False,
              'header'=>'',
            ),
            'template'=>"{items}\n{pager}",
          )); ?>  
   </div>
   <?php endif;?>
   
   </div>
   </div>
   </div>
   </div>
   
   </div> 
<div class="clear"></div>   
      </div>
   <div class="clear"></div>   
