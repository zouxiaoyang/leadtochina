<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/cruiseport.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.js');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.datepicker.js');?>
<?php $this->setPageTitle($cur_port->cityName . ' Port Introduction'); ?>
<style type="text/css">
<!--
#content {
	background:#fff;
}
-->
</style>
<img class="img-responsive" src="/images/tianjin-port-banner01.jpg"  />
<div class="container" >
	<div class="row" style="margin-top:30px;">
		<div class="col-sm-2">
			<ul class="tianjin-port-leftlink" id="cruise_list">
				<li class="title">CRUISE NAME</li>
				<?php foreach($cruise_list as $k=>$v):?>
				<li style=" display:block;" ><a href="<?php echo Yii::app()->createUrl('port/CruiseView',array('name'=>SiteUtils::stringURLSafe($v->name),'id'=>$v->id));?>"><?php echo $v->name;?></a> <span style="float:right"></span> </li>
				<?php endforeach;?>
			</ul>
			<ul class="tianjin-port-leftlink">
				<li  class="title">CHINA CRUISE PORTS</li>
				<?php 
					foreach($CruiseCityName as $key=>$city_name):
				?>
				<li><a href="<?php echo Yii::app()->createUrl('port/PortExcursion',array('city_name'=>SiteUtils::stringURLSafe($city_name),'id'=>$key));?>"><?php echo $city_name;?></a></li>
				<?php endforeach;?>
			</ul>
		</div>
		<div class="col-sm-12 col-md-10">
			<div class="cru_content">
			
				
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
						
						<div class="cru_view_content_right">
							<div class="cru_view_content_right1">
								<div>
									<div class="cru_cruise_content_right_intro">
										<div> <?php echo $cur_port->portIntro;?> </div>
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
		</div>
	</div>
</div>