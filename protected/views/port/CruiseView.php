<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/cruiseport.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.js');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.datepicker.js');?>
<?php $this->setPageTitle($cur_cruise->name); ?>
<style type="text/css">
<!--
#content {
	background:#fff;
}
-->
</style>
<img src="<?php echo ImageUtils::getThumbnail(InternationalCruise::UPLOAD_PATH . $cur_cruise->pic, '920x250');?>"  class="img-responsive" />
<div class="container">
	<p class="page-title05">Cruise to China Schedule  2015/2016</p>
	<div class="col-sm-2">
		<div class="cru_view_content_left">
			<div class="cru_cruise_content_left">
				<ul>
					<?php foreach($cruise_list as $k=>$v):?>
					<li><a href="<?php echo Yii::app()->createUrl("cruisePorts/CruiseView", array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->name)));?>" <?php if($v->id==$_GET['id']):?>class="selected"<?php endif;?>><?php echo $v->name;?>
						<?php if($k==1):?>
						<img src="/images/citytours/hot.gif">
						<?php endif;?>
						</a></li>
					<?php endforeach;?>
				</ul>
				<p style="padding-top:10px; clear:both "><a href="#"><img src="/images/cruisePorts/trip.jpg" width="175" height="129" /></a></p>
			</div>
			<div class="cru_portintr_cont1_left cru_mt10">
				<div class="cru_portintr_cont1_left1">
					<p class="cru_portintr_cont1_left1_tit"><span class="cru_portintr_cont1_bg"></span><span class="cru_portintr_cont1_tit1">Dock Port</span></p>
					<ul>
						<?php foreach($cruise_port_list as $k=>$v):?>
						<li><a href="<?php echo Yii::app()->createUrl('cruisePorts/portExcursion', array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->cityName)));?>"><?php echo $v->cityName;?></a></li>
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
					<div class="code" style="width:192px">
						<script type="text/javascript" src="/travel/js/tripadvisor.js"></script>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class=" col-sm-12 col-md-10">
		<div class="cru_view_content_right">
			<div class="cru_view_content_right1">
				<div>
					<p class="cru_view_content_right1_tit1"><?php echo $cur_cruise->name;?> Cruise China Excursions </p>
					<div class="cru_cruise_content_right_intro cru_mt10"> <?php echo $cur_cruise->intro;?> </div>
					<div class="cru_cruise_content_right_time" >
						<table width="100%" border="0" cellpadding="10" cellspacing="1" bgcolor="#cccccc">
							<tr>
								<th height="25" colspan="4" align="center" bgcolor="#dddddd" scope="col" style="color:#000; font-size:13px"><b><?php echo $cur_cruise->name;?> Cruise China Schedule  2015/2016</b></th>
							</tr>
							<tr>
								<th height="25" align="center" bgcolor="#ffffff" scope="col">Arrive </th>
								<th height="25" align="center" bgcolor="#ffffff" scope="col">Depart </th>
								<th height="25" align="center" bgcolor="#ffffff" scope="col">Status </th>
								<th height="25" align="center" bgcolor="#ffffff" scope="col">Port Excursion</th>
							</tr>
							<?php $schedule_arr = unserialize($cur_cruise->schedule);?>
							<?php $array_status=array(1=>'Start',2=>'Passby',3=>'Terminal'); if(is_array($schedule_arr)):?>
							<?php foreach($schedule_arr['arrive'] as $k2=>$v2):?>
							<tr>
								<td height="25" bgcolor="#FFFFFF" align="center"><?php echo $schedule_arr['arrive'][$k2]?></td>
								<td height="25" bgcolor="#FFFFFF" align="center"><?php echo $schedule_arr['depart'][$k2]?></td>
								<td height="25" bgcolor="#FFFFFF" align="center"><?php echo $array_status[$schedule_arr['status'][$k2]]?></td>
								<td height="25" bgcolor="#FFFFFF" align="center"><a href="<?php echo $schedule_arr['url'][$k2];?>"><?php echo $schedule_arr['port'][$k2]?></a></td>
							</tr>
							<?php endforeach;?>
							<?php endif;?>
						</table>
					</div>
				</div>
				<?php foreach($cur_cruise_excursions as $k=>$v):?>
				<div class="cru_view_content_right2"><a id="<?php echo $k+1;?>">&nbsp;</a>
					<p class="cru_view_content_right1_tit2 cru_mt10"><?php echo $v->name;?></p>
					<p class="cru_view_content_right1_tit3 cru_view_mt5"> <?php echo $v->intro;?> </p>
					<div class="cru_port_content_right_pas">
						<?php 
                $tour_ids = $v->tour_ids;
                $tours = ToursPackage::model()->findAll(array(
                 'select' => 'id,name,price,filedir,cruise_recommend_pic',
                 'condition' => "id in($tour_ids)",
                 'order' => 'days asc',
                ));
              ?>
						<ul>
							<?php foreach($tours as $v2):?>
							<li>
								<p><img src="/<?php echo $v2->filedir;?>/<?php echo $v2->cruise_recommend_pic;?>" width="150" height="120"></p>
								<p class="cru_col1 cru_hei"><a href="<?php echo $v2->url();?>"><?php echo $v2->name;?></a></p>
								<p>
									<?php if($v2->price!=0):?>
									from <span class="cru_col2">US$<?php echo $v2->price; ?></span>
									<?php endif;?>
								</p>
							</li>
							<?php endforeach;?>
						</ul>
					</div>
				</div>
				<div class="cru_view_line1 clear"></div>
				<?php endforeach;?>
			</div>
			<div class="clear"></div>
			<div class="cru_view_cont1_right">
				<?php $this->renderPartial("_order", array('model'=>$model,'cruise_list'=>$cruise_list));?>
				<div class="cru_view_cont1_right2">
					<div class="cru_view_cont1_right2_head">
						<div class="cru_view_writecont">
							<?php $this->renderPartial('/question/_cruisePortsQuestionForm2',array('questionModel'=>$cruiseQuestionModel, 'question_type'=>3));?>
						</div>
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
