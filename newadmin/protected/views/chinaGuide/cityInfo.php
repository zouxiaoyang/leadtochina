<?php 
	$this->setPageTitle($cityInfo->name." Travel Guide,China ".$cityInfo->name." Tours, Hotels, Attractions, Maps, Tips");
	
	Yii::app()->clientScript->registerMetaTag('keywords',$cityInfo->name." travel, travel to ".$cityInfo->name.", ".$cityInfo->name." travel guide, china ".$cityInfo->name." tours");
	Yii::app()->clientScript->registerMetaTag('description',$cityInfo->name." travel guide offers you the infor on China ".$cityInfo->name." tours, attractions, hotels, tips and other ".$cityInfo->name." travel service.");
	Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/template.css'); 
?>
<div id="menu-home"><strong>You are here: </strong>
	<a href="/">Home</a><a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">China Guide</a>
	<a href="<?php echo Yii::app()->createUrl('chinaGuide/cityGuide');?>" class="pathway">China City Guide</a> 
	<?php echo $cityInfo->name;?> Guide
</div>

<div id="jv-inside-right">
	<div id="jv-left-content">										
		<div id="jv-content">
			<div id="jv-content-inner">				
				<div id="jv-component" class="clearfix">
					<div class="chinatravelguide">
					<h1><?php echo $cityInfo->name;?></h1>
					<div class="chinatravelguidecontent"><?php echo $fats->introtext;?></div>
					</div>
					<div class="citymiddle">
					<div class="cityTours" style="float:left;">
					<h2><a class="attractions" href=""><?php echo $cityInfo->name;?> Attractions</a></h2>
					<ul>
						<?php foreach ((array)$attractions as $v):?>
						<li><a href="<?php //echo Yii::app()->createUrl('chinaGuide/');?>"><?php echo $v['name'];?></a></li> 
						<?php endforeach;?>
					</ul>
					</div>
					<div class="cityTours" style="float:right;">
					<h2><a class="tours" href=""><?php echo $cityInfo->name;?> Tours</a></h2>
					<ul> 
						<?php foreach ((array)$cityTours as $v):?>
						<li><a href="<?php echo Yii::app()->createUrl('toursPackage/view',array('id'=>$v->id,'title'=>SiteUtils::stringURLSafe($v->name)));?>"><?php echo $v->name;?></a></li> 
						<?php endforeach;?>
					</ul>
					</div>
					</div>
					<div class="clearfix"></div>
					<div class="traffic">
					<h2><a href=""><?php echo $cityInfo->name;?> Maps</a></h2>
					<ul>
						<?php foreach ((array)$maps as $v):?>
						<li><a href=""><?php echo $v->title;?></a></li> 
						<?php endforeach;?>
					</ul>
					</div>									
				</div>
			</div>
		</div>
	</div>					
  <div id="jv-right">
		<div id="jv-right-top">
		<?php $this->renderPartial('/common/cityGuide',array('cityName'=>$cityInfo->name, 'cityId'=>$cityInfo->id));?>
		
   <!--  <div class="moduletable">
      <h3 class="moduletitle"><span>Local weather</span></h3>
			<div class="modulecontent"></div>
		</div>
        -->
    <div class="moduletable">
			<div class="modulecontent"><div style=" width:270px; margin-top:0px;"><?php $this->renderPartial('/common/customizeTour');?></div></div>
		</div>
		</div>
	<div id="jv-right-bottom"></div>
</div>						
</div>

  
<!-- Google Code for HOME Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1001932638;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "m02eCNre_AIQ3o7h3QM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1001932638/?value=0&amp;label=m02eCNre_AIQ3o7h3QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
