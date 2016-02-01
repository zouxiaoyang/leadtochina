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
					<?php foreach($package_info as $package):?>
						<?php if($package['categorieid_str']==$info['id']):?>
						<?php $href  = Yii::app()->createUrl('toursDetail/index',array('name'=>SiteUtils::stringURLSafe($package['name']),'id'=>$package['id']));?>
							<div class="col-sm-6 col-md-4">
								<div class="views-row views-row-1 views-row-odd views-row-first tour-preview">
									<div class="field-content tour-photo"><a href="<?php echo $href;?>"><img width="350" height="240" src="<?php echo '/'.$package['filedir'].$package['pic'];?>"></a></div>
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
	<div class="row">
		<div class="city-tripnote col-sm-9">
			<span class="title01 ">Trip Notes</span>
			<div class="clearfix"></div>
			<div class="city-tripnote-content clearfix">
			<?php
				$this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$dataProvider,
					'itemView'=>'_ask',//对应的评论信息的模板
					'ajaxUpdate'=> true,//AJAX翻页  false为不是ajax翻页
					'pager' => array(//pager 的配置信息。默认为<code>array('class'=>'CLinkPager')</code>.也可以自己配置
						'header'=>'',//去除分页前的GO TO ....
						//'nextPageLabel' => 'Next',
						//'prevPageLabel' => 'Pre'
						'firstPageLabel'=>'First',
						'htmlOptions'=>array(
							'class'=>'pagination',
							'id'=>'pagerid',
						),
						'selectedPageCssClass'=>'active',
						'lastPageLabel'=>'Last',
					),
				));
			?>
			</div>
		</div>
		<div class="city-article col-sm-3">
			<span class=" page-title09 title01">Recommended Articles About Huangshan</span>
			<ul>
				<li class="clearfix">
					<img  src="/images/article-img01.gif"  />
					<p>the best and fast way is to take the flight</p>
				</li>
				<li class="clearfix">
					<img  src="/images/article-img01.gif"  />
					<p>the best and fast way is to take the flight</p>
				</li>
				<li class="clearfix">
					<img  src="/images/article-img01.gif"  />
					<p>the best and fast way is to take the flight</p>
				</li>
			</ul>
		</div>
		
		
	</div>
	
</div>
