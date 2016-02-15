<div class="container">
<div class="row">
	<div class="crumbs">
    <h5>
      <div class="breadcrumbs">
<a href="/">Home</a> » <a href="/travel/family-tours">Reviews</a></div>    </h5>
  </div>
  	<div class="col-sm-12 col-md-9">
      <div class="reviews-page-block" >
	  <?php 
		if(!empty($pics)):
	  ?>
			<img width="170" height="187" src="<?php echo ImageUtils::getThumbnail('newadmin/images/reviews/'.$pics[0]['pic'],'170x187');?>" />
		<?php endif;?>
        <div class="content01">
        	<h3>Reviews from <?php echo $info['review_name'];?></h3>
			<p><span>TOUR TYPE:</span> <?php echo $info['package_tour_type'];?></p>
			<p><span>CLIENT NAME:</span> <?php echo $info['review_name'];?></p>
            <p><span>NATIONALITY:</span> <?php echo $info['nationality'];?></p>
            <p><span>TOUR DATE:</span> <?php echo date('M d,Y',strtotime($info['dateline']));?></p>
			<p>DESTINATIONS: <a href="<?php echo Yii::app()->createUrl('toursDetail/index',array('name'=>SiteUtils::stringURLSafe($info['name']),'id'=>$info['tour_id']));?>" title="<?php echo $info['name'];?>"><?php echo $info['name'];?></a></p>
        </div>
        <div class="clear"></div>
      </div>
      <div class="reviews-page-tab">
      	<ul id="myTab" class="nav nav-tabs">
        	<li class="active"><a data-toggle="tab" href="#traveler-review" aria-expanded="false">TRAVELER REVIEW</a></li>
            <li><a data-toggle="tab" href="#photos" aria-expanded="false">PHOTOS</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
        	<div id="traveler-review" class="tab-pane fade active in">
            	<p><?php echo $info['description'];?></p>
            </div>
            <div id="photos" class="tab-pane fade">
				<?php foreach($pics as $pic){ ?>
					<img width="350" height="230" src="<?php echo ImageUtils::getThumbnail('newadmin/images/reviews/'.$pic['pic'],'350x230');?>" />
				<?php } ?>
            </div>
        </div>
      </div>
  </div>
  	<div class="col-md-3">
    	<div class="code" style="margin-top:20px;">
      		<script type="text/javascript" src="/js/tripadvisor.js"></script>
	 	</div>
  </div>
</div>
</div>