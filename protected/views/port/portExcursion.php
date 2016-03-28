<link href="/css/colorbox.css" type="text/css" rel="stylesheet" />
<img class="img-responsive" src="/images/cruisePorts/<?php echo $_GET['city_name'];?>-banner01.jpg"  />
<div class="container" >
	<h2 class="page-title05"><?php echo $cur_port->port_title;?></h2>
	<p  style="border-bottom:1px solid #ccc; padding:20px 0;"><?php		$this->renderPartial('_description',array('id'=>$_GET['id'],'name'=>SiteUtils::stringURLSafe($_GET['city_name'])));?></p>
	<div class="row" style="margin-top:30px;">
		<div class="col-sm-2">
			<ul class="tianjin-port-leftlink" id="cruise_list">
				<li class="title">CRUISE NAME</li>
					<?php foreach($cruise_list as $k=>$v):?>
						<li onclick="edit_cruise(this)" <?php if($k==0):?> class="dq" <?php endif;?> style=" display:block;" ><?php echo $v->name;?>
						<span style="float:right"></span>
						</li>
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
	<?php $n=0;?>
	<?php foreach($cruise_list as $k=>$v):?>
		<div class="port_content_rig1 col-sm-12 col-md-10 tianjin-port-rightblock01 tabflag cruise_<?=$k?>_port" <?php if($k!=0):?> style="display:none" <?php endif;?>>

		<?php foreach($cruise_port_list[$v->id] as $ks=>$vs):?>
			<?php if($vs->pid == $_GET['id']):// 只显示天津港的信息;?>
			<div class="cruise_<?=$k?>_port_<?=$vs->pid?>">
			<?php
		 		if($vs->tour_type_ids):
		 		$CruiseTypeList=unserialize($vs->tour_type_ids);
		 		foreach($CruiseTypeList['tour_type'] as $key=>$row):
		 			$n=$n+1;
		 	?>
			<div class="web-clear"></div>
			<div class="cont_cal_block">
			<h3 class="f-left"><?php echo $row;?></h3>
			<p class="cont_cal"><a ><img src="/images/port_ico7.png" align="absmiddle" style="margin-right:5px;" /></a><a id="port_content_data<?=$n?>" onclick="get_newwindow('port_content_data<?=$n?>')" href="<?php echo Yii::app()->createUrl('port/getDataList', array("id"=>$vs->id));?>">Cruise Calendar</a></p>
			
			<p class="web-clear"></p>
			</div>
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
			<?php $href =		Yii::app()->createUrl('toursDetail/index',array('name'=>SiteUtils::stringURLSafe($v2->name),'id'=>$v2->id));?>
				<div class="col-sm-6 col-md-4">
					<div class="views-row views-row-1 views-row-odd views-row-first tour-preview">
						<div class="field-content tour-photo"><a href="<?php echo $href;?>"><img width=" 300" height="205" src="/<?php echo $v2->filedir;?>/<?php echo $v2->cruise_recommend_pic;?>"/></a></div>
						<h2 class="field-content tour-title"><a href="<?php echo $href;?>"><?php echo $v2->name;?></a></h2>
						<div class="views-field views-field-title-2 tour-title-2"> <a href="<?php echo $href;?>"><?php echo $v2->name;?></a> </div>
						<p class="field-content tour-meta"></p>
						<div class="field-content tour-summary">
							<p>Destinations: <?php echo $v2->route;?></p>
							<!--<p>Departures: <?php echo $v2->departs;?></p>-->
							<p>Tour type: <?php echo $v2->package_tour_type;?></p>
							<p>Features: <?php echo  SiteUtils::mb_truncate_text($v2->attractions, 170);?></p><a href="<?php echo $href;?>" class="views-more-link"> Read more...</a></div>
						<p class="field-content tour-read-more"><a href="<?php echo $href;?>">Read More</a></p>
					</div>
				</div>
			<?php endforeach;?>
		<?php endif;?>
	<?php endforeach;?>
   <?php endif;?>
</div>
		 <?php endif;?>
	<?php endforeach;?>
</div>
<?php endforeach;?>

		
</div>
<div class="row">
	<div class="col-sm-2"></div>
	<div class="city-tripnote col-sm-10 tianjin-port-rightblock02" style="padding:30px 12px 0 30px;">
			<span class="title01 ">Questions & Answers</span>
			<div class="clearfix"></div>
			<div class="city-tripnote-content clearfix">
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
		</div>
</div>
<script src="/js/jquery.colorbox.js"></script>
<script>
			$(function(){
			  $("#cruise_list li").find("a").click(function(){
			    return false;
			  })

			})
			function edit_cruise(i){
				$("#cruise_list li").removeClass("dq");
				$(i).addClass("dq");
				var inx = (parseInt($("#cruise_list li").index(i))-1);
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

			function get_newwindow(id){
				$("#"+id).colorbox({iframe:true, innerWidth:700, innerHeight:520});
			}
			$(function(){
			  $("#cboxTopRight").click(function(){
				parent.jQuery.colorbox.close();
			  })

			})
		</script>