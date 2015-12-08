  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/cruiseport.css'); ?>
  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.css'); ?>

  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.js');?>
  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.datepicker.js');?>

  <?php $this->setPageTitle($cur_port->cityName . ' Port Introduction'); ?>
<style type="text/css">
<!--
#content{ background:#fff;}
-->
</style>

<div class="cru_content">
    <div class="cru_menu-tours">
        <strong>You are here:</strong><a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cruisePorts/index2');?>">International Cruise</a> <?php echo $cur_port->cityName;?> Introduction
    </div>
<div class="clear"></div>
      <div class="">
        <img src="<?php echo ImageUtils::getThumbnail(CruisePorts::UPLOAD_PATH . $cur_port->pic, '920x250');?>" width="920" height="250" />
      </div>
   <div class="cru_cruise">
<?php /*?>   <!--<div class="cru_portintr_title">
<div class="cru_portintr_title_lef">
   <p class="cru_portintr_title3" style="color:#000">Cruises Ports & Excursions</p>
   </div>
   <div class="cru_portintr_title_rig">
      <p class="cru_portintr_title2" style="margin-left:21px"><a href="<?php echo Yii::app()->createUrl('cruisePorts/portExcursion', array("id"=>$cur_port->id,"name"=>SiteUtils::stringURLSafe($cur_port->cityName)));?>"><?php echo $cur_port->cityName;?> Excursions</a></p>
   <p class="cru_portintr_title1 cru_ml10">
   <a href="<?php echo Yii::app()->createUrl('cruisePorts/portIntroduction', array("id"=>$cur_port->id,"name"=>SiteUtils::stringURLSafe($cur_port->cityName)));?>"><?php echo $cur_port->cityName;?> Introduction</a><span></span></p></div>
   </div>-->
<?php */?>
 <div class="cru_view_content">
   <div class="cru_view_content_left">
<!--<?php /*?>    <div class="cru_port_content_left1">
   <ul id="cruise_list1">
   <?php foreach($cruise_port_list as $k=>$v):?>
      <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/portExcursion', array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->cityName)));?>"  <?php if($v->id == $_GET['id']):?> class="selected1" <?php endif;?>><span class="cru_img<?php echo $k+1;?>"></span><?php echo $v->cityName;?></a></li>
   <?php endforeach;?>
   </ul>
   <p style="padding-top:15px; clear:both "><a href="#"><img src="/images/cruisePorts/trip.jpg" width="175" height="129" /></a></p>
   </div>
<?php */?>-->  
   <div class="cru_portintr_cont1_left1" style="margin-top:5px;">
   <p class="cru_portintr_cont1_left1_tit"><span class="cru_portintr_cont1_bg"></span><span class="cru_portintr_cont1_tit1">China Cruise Port Guide</span></p>
   <ul>
    <?php foreach($cruise_port_list as $k=>$v):?>
	 <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/portIntroduction', array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->cityName)));?>" <?php if($v->id==$_GET['id']):?> class="selected1" <?php endif;?>><?php echo $v->cityName;?> Guide</a></li>
	<?php endforeach;?>
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
    <div class="cru_portintr_cont1_left cru_mt10">
    <div class="cru_portintr_cont1_left1">
   <p class="cru_portintr_cont1_left1_tit"><span class="cru_portintr_cont1_bg"></span><span class="cru_portintr_cont1_tit1">Cruise Name</span></p>
   <ul>
    <?php foreach($cruise_list as $k=>$v):?>
    <li><a href="<?php echo Yii::app()->createUrl("cruisePorts/CruiseView", array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->name)));?>"><?php echo $v->name;?><?php if($k==1):?><img src="/images/citytours/hot.gif"><?php endif;?></a></li>
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
  
      <div>
        <?php echo $cur_port->portIntro;?>
      </div>

      <div class="cru_view_line1" style="display:none"></div>
      <div class="cru_portintr_content_right_img" style="display:none">
      <p class="cru_portintr_txt1">Tianjin Port Images</p>
      <ul class="cru_mt10">
      <li><img src="/images/cruisePorts/cru_tianjin_img1.jpg" width="226" height="130" /></li>
      <li style="margin-left:4px"><img src="/images/cruisePorts/cru_tianjin_img2.jpg" width="226" height="130" /></li>
      <li style="margin-left:4px"><img src="/images/cruisePorts/cru_tianjin_img3.jpg" width="226" height="130" /></li>
      </ul>
      </div>
   </div>
   <div class=" clear"></div>

   
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
