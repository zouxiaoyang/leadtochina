<img class="img-responsive" src="/images/destinationBanner/destination-<?php echo strtolower(trim($_GET['city_name']));?>-banner.jpg"  />
<div class="container" >
	<h2 class="page-title16"><?php echo $parent_name;?></h2>
	<p><?php echo strip_tags($description);?></p>
	<div class="citytour-tab">
		<ul class="nav nav-tabs" id="myTab">
			<?php $jj=0;?>
			<?php foreach($child_info as $info):?>
				<li<?php echo ($jj==0)?' class="active"':'';?>><a data-toggle="tab" href="#<?php echo SiteUtils::stringURLSafe($info['title']);?>"><?php echo $info['title'];?></a></li>
				<?php $jj++;?>
			<?php endforeach;?>
		</ul>
		<div id="myTabContent" class="tab-content">
			<?php $jj=0;?>
			<?php foreach($child_info as $info):?>
			<div id="<?php echo SiteUtils::stringURLSafe($info['title']);?>" class="tab-pane fade<?php echo ($jj==0)?' in active':'';?>">
				<div class="row top10tours-block01">
					<?php foreach($package_info as $package): ?>
						<?php if(($package['categorieid_str']==$info['id']) ||($package['category_parentid']==$info['id']) ):?>
						<?php $href  = Yii::app()->createUrl('toursDetail/index',array('name'=>SiteUtils::stringURLSafe($package['name']),'id'=>$package['id']));?>
							<div class="col-sm-6 col-md-4">
								<div class="views-row views-row-1 views-row-odd views-row-first tour-preview">
									<div class="field-content tour-photo"><a href="<?php echo $href;?>"><img  class="img-responsive" src="<?php echo '/'.$package['filedir'].$package['pic'];?>"></a></div>
									<h2 class="field-content tour-title"><a href="<?php echo $href;?>"><?php echo $package['name'];?></a></h2>
									<div class="views-field views-field-title-2 tour-title-2"> <a href="<?php echo $href;?>"><?php echo $package['name'];?></a> </div>
									<p class="field-content tour-meta"></p>
									<div class="field-content tour-summary"><?php echo strip_tags($package['route_Intro']);?><a href="<?php echo $href;?>" class="views-more-link"> Read more...</a></div>
									<p class="field-content tour-read-more"><a href="<?php echo $href;?>">Read More</a></p>
								</div>
						</div>
						<?php endif;?>
					<?php endforeach;?>
				</div>
			</div>
			<?php $jj++;?>
			<?php endforeach;?>
		</div>
	</div>
	<?php if(!empty($trip_notes)):?>
	<div class="row">
		<div class="city-tripnote col-sm-9">
			<span class="title01 ">Trip Notes</span>
			<div class="clearfix"></div>
			<div class="city-tripnote-content clearfix">
			<?php
				echo $trip_notes;
			?>
			</div>
		</div>
	</div>	
<?php endif;?>
</div>