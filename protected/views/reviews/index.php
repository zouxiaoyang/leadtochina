<div class="container">
<div class="row">
	<div class="crumbs">
    <h5>
      <div class="breadcrumbs">
<a href="/">Home</a> » <a href="/travel/family-tours">Reviews</a></div>    </h5>
  </div>
  	<div class="col-sm-12 col-md-9">
      <div class="reviews-page-block" >
      	<img src="/images/review-page-img01.jpg" />
        <div class="content01">
        	<h3><?php echo $info['name'];?></h3>
			<p><span>TOUR TYPE:</span> <?php echo $info['package_tour_type'];?></p>
			<p><span>CLIENT NAME:</span> <?php echo $info['review_name'];?></p>
            <p><span>NATIONALITY:</span> <?php echo $info['nationality'];?></p>
            <p><span>TOUR DATE:</span> <?php echo date('M d,Y',strtotime($info['dateline']));?></p>
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
            	<i>what countries did you visit?</i>
                <p>Italy</p>
                <i>You overall comments on the trip and the travel company:</i>
                <p>Great trip and it was enjoyed by all.</p>
                <p>Congratulations! You have successfully created your Yii application.Congratulations! You have successfully 
					created your Yii application.Congratulations! You have successfully created your Yii application.Congratulations!
					 You have successfully created your Yii application.Congratulations! You have successfully created your 
					Congratulations! You have successfully created your Yii application.</p>
									<i>You overall comments on the trip and the travel company:</i>
									<p>Congratulations! You have successfully created your Yii application.Congratulations! You have successfully 
					created your Yii application.Congratulations! You have successfully created your Yii application.Congratulations!
					 You have successfully created your Yii application.Congratulations! You hav</p>
            </div>
            <div id="photos" class="tab-pane fade">
				<?php foreach($pics as $pic){ ?>
					<img src="/images/view/<?php echo $pic['pic'];?>" />
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