<img src="/images/Top10ChinaTours-banner01.jpg"  class="img-responsive" />
<div class="container">
<div class="crumbs">
<h5><?php 
	$this->widget('zii.widgets.CBreadcrumbs',
		array('links'=>array(
			//'Sample post'=>array('post/view', 'id'=>12),
			'Best China Tours'=>array('travel/best-china-tours/'),
			//'Edit'
				)
			)); ?>
</h5>
	</div>
	<h1 class="page-title01">Top 10 China Tours</h1>
    <p class="lead">
    	China is unbelievably large! For saving your time picking up best China tours with different highlights, we are proud to 
		present our most popular and best China tours to you as selected by our customers. You can choose your favorite tour
		 package from the below lists or ask our specialists to design a special China tours for you. Just tell us your expectation,
		 and we will do the rest for you. 
    </p>
   	<p class="center-button"><a href="/order/china-diy-tours/" class="large-button">Help Me Plan My Trip</a></p>
<div class="row top10tours-block01">
<?php foreach($ress as $res){ 
	$href = Yii::app()->createUrl('toursDetail/index',array('name'=>SiteUtils::stringURLSafe($res['name']),'id'=>$res['id']));
?>
	
     <div class="col-sm-6 col-md-4">
    	<div class="views-row views-row-1 views-row-odd views-row-first tour-preview">
				<div class="field-content tour-photo"><a href="<?php echo $href;?>"><img width="350" height="240"  src="<?php echo '/'.$res['filedir'].$res['pic']?>" ></a></div>
		<h2 class="field-content tour-title"><a href="<?php echo $href;?>"><?php echo $res['name'];?></a></h2>
		<div class="views-field views-field-title-2 tour-title-2"> <a href="<?php echo $href;?>"><?php echo $res['name'];?></a> </div>
		<p class="field-content tour-meta"></p>
		<div class="field-content tour-summary"><?php echo $res['recommand_reason'];?><a class="views-more-link" href="<?php echo $href;?>"> Read more...</a></div>
		<p class="field-content tour-read-more"><a href="<?php echo $href;?>">Read More</a></p> </div>
	</div>
    <?php } ?>
</div>
</div>

<div class="top10tours-bottom-block">
	<div class="container">
    	<div class="link-block01  col-md-4">
        	<span class="title">Flexible</span>
            <ul>
            	<li>All tours can be customized</li>
                <li>Easy to make last minute changes</li>
                <li>No risk of forced shopping</li>
                <li>Expert destination advice </li>
            </ul>
        </div>
        <div class="link-block01  col-md-4">
        	<span class="title">Authentic</span>
            <ul>
            	<li>Excellent from planning to executing</li>
                <li>EHand-Picked hotels & restaurants </li>
                <li>Quality service at best value</li>
                <li>24/7 care while you are in China</li>
            </ul>
        </div>
        <div class="link-block01  col-md-4">
        	<span class="title">Professional</span>
            <ul>
            	<li>We understand China well</li>
                <li>Experienced English speaking tour guides</li>
                <li>We treat others the way we want to be treated</li>
                <li>Keep our services at world-leading levels</li>
            </ul>
        </div>
    </div>
</div>