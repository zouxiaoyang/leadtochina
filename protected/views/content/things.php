<img class="img-responsive" src="/images/things-banner01.jpg" />
<div class="container">
	<h2 class="page-title13">Things to do in china</h2>
	<p style="padding:20px 0;">"Do not know where to visit in China? Which is the best time for China travel? What to see in China? What are the famous Chinese dishes? Having no idea how to start your China tour? You will find these answers from these articles. 
Meanwhile, our professional trip advisor is offering the latest and interesting travel info every day. Get to know this must-see before travelling China will make your trip better."
</p>
	<div style="margin-bottom:80px;" class="row">

	<?php foreach($ress as $res):?>
			<div class="col-sm-6 col-md-3 col-xs-12">
				<div class="things-block01"> 
					<img src="<?php echo '/'.$res['pic_dir'].$res['pic_path'];?>" class="img-responsive" alt="<?php echo $res['pic_alt'];?>" />
					<a href="<?php echo Yii::app()->createUrl('content/index',array('artile'=>SiteUtils::stringURLSafe($res['title']),'at_id'=>$res['content_id']));?>"><span><?php echo $res['title'];?></span> </a>
					<?php /* ?><p><a href="<?php echo Yii::app()->createUrl('content/index',array('artile'=>SiteUtils::stringURLSafe($res['title']),'at_id'=>$res['content_id']));?>"><?php echo substr(strip_tags($res['introtext']),0,50).'...';?></a></p>
					<?php */ ?>
				</div>
			</div>
		
	<?php endforeach;?>
		<?php 
				$this->widget('CLinkPager',array(
					'firstPageLabel'=>'First',
					'lastPageLabel'=>'Last',
					'header'=>'',
					'htmlOptions'=>array(
						'class'=>'pagination',
						'id'=>'pagerid',
					),
					'selectedPageCssClass'=>'active',
					'pages'=>$pages,
				)
			);
		?>
	</div>
</div>