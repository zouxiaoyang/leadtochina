<img class="img-responsive" src="/images/adoptionhome-banner01.jpg" style="position:relative" />
<div class="container">
<?php 
	$this->renderPartial('_search');
?>
<br />
<h3 class="page-title08">No results found</h3>
<p style="font-size:16px;">Hmm, it may be caused by your spelling mistake. Please modify and use the filters on the top to search again.<br />
If you can't find your child's orphanage from our list, it doesn't mean we don't provide return trip service to that place. You can contact our travel consultants and get answers.
</p>
</div>
<div class="adoption-home-bottom clearfix">
  <div class="container">
    <div class="f-left block01">
		<?php $this->renderPartial('/message/_form2',array(
            'model'=>$message,
		)); ?>	
	  </div>
    <div class="f-right block02">
      <p>When I was a kid
        I knew that if I had the ability, I would 
        go get on the trip right away.
        If you are lucky enough, you can go 
        out to travel when you are young.
        You may benefit from everything you 
        saw throughout your life. </p>
      <span>----Alfred Hitchcock</span> </div>
  </div>
</div>