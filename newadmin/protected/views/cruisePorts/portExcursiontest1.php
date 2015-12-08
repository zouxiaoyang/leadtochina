 <?php  //print_r($cruisePortsQuestionModel);exit;?>



  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/cruiseport.css'); ?>
  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.css'); ?>
  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/colorbox.css');?>

  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.js');?>
  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.datepicker.js');?>
  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.colorbox.js'); ?>
  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/koala.min.1.5.js'); ?>
<style type="text/css">
<!--
#content{ background:#eee;}
-->
</style>
<script>
	function get_newwindow(id){
		$("#"+id).colorbox({iframe:true, innerWidth:700, innerHeight:520});
	}
	$(function(){
	  $("#cboxTopRight").click(function(){
		parent.jQuery.colorbox.close();
	  })

	})
</script>
<div class="cru_content">
	<div class="cru_menu-tours">
	<strong>You are here:</strong><a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cruisePorts/index2');?>">International Cruise</a> <?php echo $cur_port->cityName;?> Excursions
	</div>
	<div class="clear"></div>
<?php if($_GET['id']!=5){?> 
<div id="fsD1" class="port_focus">
  <div id="D1pic1" class="fPic">
    <div class="fcon"> <a href=""><img src="/images/cruisePorts/port_banner1.jpg" /></a> <span class="shadow"><a href=""></a></span> </div>
    <div class="fcon"> <a href=""><img src="/images/cruisePorts/port_banner2.jpg" /></a> <span class="shadow"><a href=""></a></span> </div>
    <div class="fcon"> <a href=""><img src="/images/cruisePorts/port_banner3.jpg" /></a> <span class="shadow"><a href=""></a></span> </div>
    <div class="fcon"> <a href=""><img src="/images/cruisePorts/port_banner4.jpg" /></a> <span class="shadow"><a href=""></a></span> </div>
  </div>
  <div class="fbg">
    <div class="D1fBt" id="D1fBt"> <a href="javascript:void(0)" class="current"><i>1</i></a> <a href="javascript:void(0)"><i>2</i></a> <a href="javascript:void(0)"><i>3</i></a> <a href="javascript:void(0)"><i>4</i></a> </div>
  </div>
</div>

<?php }else{?>
<div id="fsD3" class="port_focus">
  <div>
    <div> <a href="http://www.leadtochina.com/travel/cruise-port/tianjin-port-beijing-shutlle-bus"><img src="/images/cruisePorts/banner_bus.jpg" /></a> <span class="shadow"><a href=""></a></span> </div>
  </div>
</div>
<?php }?>

<div id="fsD2" class="port_focus" style="display:none;">
  <div>
    <div> <a href="http://www.leadtochina.com/travel/shanghai-port-excursions-celebrity-cruise"><img src="/images/cruisePorts/port_banner_cm.jpg" /></a> <span class="shadow"><a href=""></a></span> </div>
  </div>
</div>

<script type="text/javascript">
Qfast.add('widgets', { path: "<?php echo Yii::app()->request->baseUrl;?>/js/terminator2.2.min.js", type: "js", requires: ['fx'] });  
Qfast(false, 'widgets', function () {
	K.tabs({
		id: 'fsD1',   //焦点图包裹id  
		conId: "D1pic1",  //** 大图域包裹id  
		tabId:"D1fBt",  
		tabTn:"a",
		conCn: '.fcon', //** 大图域配置class       
		auto: 1,   //自动播放 1或0
		effect: 'fade',   //效果配置
		eType: 'click', //** 鼠标事件
		pageBt:true,//是否有按钮切换页码
		bns: ['.prev', '.next'],//** 前后按钮配置class                          
		interval: 3000  //** 停顿时间  
	}) 
})  
</script>
	<div class="port_content">
		<div class="port_content_lef">
			<div class="port_content_lef1">
			 	<div class="port_content_lef1_tit">
			  		<p class="port_content_txt1"><img src="/images/cruisePorts/port_ico3.png" align="absmiddle"/>Cruise Name<span class="port_content_namebg"></span></p>
				</div>
				<!-- cruise stat 游轮列表 -->
				<div class="port_content_cruisename">
					<ul id="cruise_list">
					<?php foreach($cruise_list as $k=>$v):?>
						<li onclick="edit_cruise(this)" <?php if($k==0):?> class="dq" <?php endif;?> style=" display:block;" ><?php echo $v->name;?>
						<span style="float:right"></span>
						</li>
					<?php endforeach;?>
					</ul>
			    </div>
				<!-- cruise end 游轮列表 -->
			</div>
			
		<script>
			$(function(){
			  $("#cruise_list li").find("a").click(function(){
			    return false;
			  })

			})
			function edit_cruise(i){
				$("#cruise_list li").removeClass("dq");
				$(i).addClass("dq");
				var inx = parseInt($("#cruise_list li").index(i));
				$(".tabflag").hide();
				$(".cruise_"+inx+"_port").show();
				$("#fsD1").show();
				$("#fsD2").hide();
				<?php if($_GET['id']==6){?>
					if(inx==1){
						get_display_none();
					}
				<?php }?>
			}
			function edit_port(id,ids,i){
				$("#"+id+" li").removeClass("selected");
				$(i).addClass("selected");
				var inx = parseInt($("#"+id+" li").index(i));
				$(i).find("span").show();
				$("."+id+" .cruise_port_hide").hide();
				$("."+id+"_"+ids).show();
			}
			function get_display_none(){
				$("#fsD1").hide();
				$("#fsD2").show();
			}
		</script>
			<div class="clear"></div>   
		    <div class="port_content_lef2">
		    	<div class="port_content_lef2_name">China Ports Guide</div>
		     	<div class="port_content_lef2_cont">
				<?php foreach($cruise_port_list2 as $k=>$v):?>	
					<ul>
						<li class="port_content_lef2_conta">
						<?php $image_info=$image_list = array(); $image_list =Cruisepic::model()->findAllByAttributes(array('cruiseid'=>$v->id, 'state'=>4));
							$ages = array();
							if(count($image_list)>0){
								foreach ($image_list as $row) {
									$ages[] = $row->id;
								}
								array_multisort($ages, SORT_ASC, $image_list);
							}
							$image_info=isset($image_list[0]->pic_path)?$image_list[0]->pic_path:'';
						?>
							<a href="<?php echo Yii::app()->createUrl('cruisePorts/portExcursion', array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->cityName)));?>"><img src="<?php echo ImageUtils::getThumbnail(Cruisepic::UPLOAD_PATH.$image_info, '90x70');?>" width="90" height="70"/></a>
							<p class="glright"><?=substr($v->cityName, 0, -5)?></p>
						</li>
						<li class="port_content_lef2_contb">
							<p><a id="port_content<?=$v->id?>" rel="example3" onclick="get_newwindow('port_content<?=$v->id?>')" href="<?php echo Yii::app()->createUrl('cruisePorts/getImageList', array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->cityName)));?>">Ports Gallery</a></p>
							<p><a href="<?php echo Yii::app()->createUrl('cruisePorts/portIntroduction', array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->cityName)));?>">Ports Guide</a></p>
							<p><a href="<?php echo Yii::app()->createUrl('cruisePorts/cruiseFaq', array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->cityName)));?>">Ports FAQ</a></p>
						</li>
					</ul>
					<div class="lightbox" id="lightbox_<?=$v-id?>" style="display: none; top: 297px; left: 0px;">
						<div class="lb-outerContainer" style="width: 383px; height: 383px;">
							<div class="lb-container">
								<img src="img/demopage/image-3.jpg" class="lb-image" style="display: block; width: 375px; height: 375px;">
								<div class="lb-nav" style="display: block;">
									<a href="" class="lb-prev" style="display: none;"></a>
									<a href="" class="lb-next" style="display: block;"></a>
								</div>
								<div class="lb-loader" style="display: none;">
									<a class="lb-cancel"></a>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach;?>
		     	</div>
				<div class="clear"></div>   
		    </div>
		    <div class="cru_mt10">
				<div class="code">
				<script type="text/javascript" src="/travel/js/tripadvisor.js"></script>
				</div>
			</div>
		</div>

   		<div class="port_content_rig">
		<?php foreach($cruise_list as $k=>$v):?>
			<div class="port_content_rig1 tabflag cruise_<?=$k?>_port" <?php if($k!=0):?> style="display:none" <?php endif;?>>
				<div class="port_content_city">
					<ul id="cruise_<?=$k?>_port">
					<li onclick="edit_port('cruise_<?=$k?>_port',<?=$_GET['id']?>,this)" class="selected">
							<a><?php echo $CruiseCityName[$_GET['id']];?></a>
							<span style="display:block"></span>							
						</li>
						<p style="padding:0 9px;  float:left; line-height:35px;+line-height:16px;+position:absolute;+right:-10px;">|</p>
					<?php $i = 1;foreach($cruise_port_list[$v->id] as $ks=>$vs):?>
					<?php if($vs->pid!=$_GET['id'] && $i<5):?>
					<?php $i=$i+1;?>
						<li onclick="edit_port('cruise_<?=$k?>_port',<?=$vs->pid?>,this)" <?php if($vs->pid == $_GET['id']):?>class="selected"<?php endif;?>>
							<a><?php echo $CruiseCityName[$vs->pid];?></a>
							<span <?php if($vs->pid== $_GET['id']):?>style="display:block"<?php elseif($ks==0):?>style="display:block"<?php else:?>style="display:none"<?php endif;?>></span>
							
						</li>
						<p style="padding:0 9px;  float:left; line-height:35px;+line-height:16px;+position:absolute;+right:-10px;">|</p>
					<?php endif;?>
					<?php endforeach;?>
					</ul>
			 	</div>
			<?php foreach($cruise_port_list[$v->id] as $ks=>$vs):?>
		 	<div class="cruise_port_hide cruise_<?=$k?>_port_<?=$vs->pid?>" <?php if($vs->pid != $_GET['id']):?> style="display:none" <?php endif;?>>
			<?php
		 		if($vs->tour_type_ids):
		 		$CruiseTypeList=unserialize($vs->tour_type_ids);
		 		foreach($CruiseTypeList['tour_type'] as $key=>$row):
		 			$n=$n+1;
		 	?>
			 	<div class="port_content_cont">
			  		<div class="port_content_conttit">
			   			<p class="cont_tit"><?=$row?></p>
			   			<p class="cont_cal"><a ><img src="/images/cruisePorts/port_ico7.png" align="absmiddle" style="margin-right:5px;"/></a><a id="port_content_data<?=$n?>" onclick="get_newwindow('port_content_data<?=$n?>')" href="<?php echo Yii::app()->createUrl('cruisePorts/getDataList', array("id"=>$vs->id));?>">Cruise Calendar</a></p>
			  		</div>
			  		<div class="clear"></div>
		  		<?php
					$tour_ids = $CruiseTypeList['tour_ids'][$key];
					//echo $tour_ids ;exit;
					if($tour_ids):
					$tours = ToursPackage::model()->findAll(array(
						'select' => 'id,name,route,departs,package_tour_type,attractions,price,filedir,cruise_recommend_pic',
						'condition' => "id in($tour_ids)",
						'order' => 'days asc',
					));
				?> 
				<?php foreach($tours as $v2):?>  
			  		<div class="port_content_contpro">
						<ul>
							<li class="port_img"><img src="/<?php echo $v2->filedir;?>/<?php echo $v2->cruise_recommend_pic;?>"/></li>
							<li class="port_protit">
								<p class="port_protit_txt1"><a href="<?php echo $v2->url();?>"><?php echo $v2->name;?></a><?php if($v2->id==932||$v2->id==1040):?>&nbsp;&nbsp;<img src="/images/citytours/hot.gif"><?php endif;?></p>
								<p>Destinations: <?php echo $v2->route;?></p>
								<!--<p>Departures: <?php echo $v2->departs;?></p>-->
								<p>Tour type: <?php echo $v2->package_tour_type;?></p>
								<p>Features: <?php echo  SiteUtils::mb_truncate_text($v2->attractions, 170);?></p>
							</li>
							<li class="port_prosub">
								<p class="port_procol"><?php if($v2->price!=0):?><span class="port_procol2">From</span><span class="port_procol1">$<?php echo $v2->price; ?></span><?php endif;?></p>
                                <p><a href="<?php echo $v2->url();?>"><img src="/images/cruisePorts/inquiry.png"/></a></p>
							</li>
						</ul>
			  		</div>
			  		<div class="clear"></div>			  		
				<?php endforeach;?>
   				<?php endif;?>
				</div>
			<?php endforeach;?>
   			<?php endif;?>
            </div>
			<?php endforeach;?>
			</div>
		<?php endforeach;?>
    		<!--  questions start  -->
			<div class="questions">
				<div class="ques-menu">
			    	<ul>
						<li class="dqa" style="width:290px;">Questions & Answers </li>
					</ul>
				</div>
			   
			   <!--  common-questuon start  -->
				<div class="common-questuon" id="questionTab2">
					<div class="tripleft" style="width:410px;">
			       <!--  answer start  -->
			          <div class="answer">
			                <?php if($dataProvider->totalItemCount):?>
			                  <?php $this->widget('zii.widgets.CListView', array(
			                    'dataProvider'=>$dataProvider,
			                    'itemView'=>'_question2test1',
			                    'pager'=>array(
			                      'cssFile'=>False,
			                      'header'=>'',
			                    ),
			                    'template'=>"{items}\n{pager}",
			                  )); ?>
			                 <?php endif;?>
			          </div>
			          <!--  answer end  -->
					</div>

			          <!--  tripright start  -->
			      <div class="tripright">
			        <h2>Planning a trip ? Ask us here</h2>
			        <div class="clear"></div>
			        <?php $this->renderPartial('/question/_cruisePortsQuestionForm3',array('questionModel'=>$cruisePortsQuestionModel, 'question_type'=>3));?>
			      </div>
			      <!--  tripright end  -->
			   </div>
			   <!--  common-questuon end  -->
			</div>
	    	<!--  questions end  -->
		</div>
  	</div>
	<div class="clear"></div>   
	<?php //$this->endWidget();?>
</div>
<div class="clear"></div>
