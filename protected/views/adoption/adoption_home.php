<img class="img-responsive" src="/images/adoptionhome-banner01.jpg" style="position:relative" />
<div class="container">
<?php 
	$this->renderPartial('_search');
?>
  <h2 class="page-title13">Why Lead to China</h2>
  <p style="width:600px; text-align:center; margin:30px auto;">Based in China, LTC have managed to help hundreds of families with adopted children find their way back to China. We are experienced, professional, but most of all, we care. </p>
</div>
<div class="adoptionhome-about">
  <div class="container">
    <ul class="about-how">
      <li class="about-how1">
        <h3>We know what you want</h3>
        Planning a heritage tour for whole family can be a real challenge: so many details need to be considered. Lucky you don't have to. With the expertise of our sophisticated travel consultants, all we need is your idea, and we will take it from there.</li>
      <li class="about-how2">
        <h3>We know what we are doing</h3>
        Locating in china really yield us many advantages. Huge government recourses guarantee the access to visit almost all the SWI in China. Having devoted in China homeland tour for near a decade is what makes us sound and reliable. We commit to make a suitable and memorable tour for every child and their families; you can <a href="#">join a group with other families</a> like you, or have an intimate journey with only your loved ones. </li>
      <li class="about-how3">
        <h3>What we know is more</h3>
        We know how important this tour means to you, so we think more and focus on every detail to make this tour unique no matter how small it looks like: the hotel you used to stay on your last visit, the orphanage visit, the very spot where your child was found...and various interesting activities we elaborately arranged for our children to experience the beauty, culture and history of china. We all have loved ones, that's why we care.  </li>
    </ul>
    <img src="/images/adoptionhome-banner02.jpg"  class="about-img" /> </div>
</div>
<div class="container">
  <h2 class="page-title13">Latest Travel Stories</h2>
  <div class="row">
  <?php foreach($ress as $res):?>
    <div class="col-sm-6 col-md-4">
      <div class="adoption-stories">
        <div class="img-block"> <img  src="<?php echo ImageUtils::getThumbnail(AdoptionArticle::UPLOAD_PATH.$res['pic'], '356x236');?>"  />
          <div class="bg-back"> <span> <?php echo $res['title'];?> </span>
            <label>Date:&nbsp;<?php echo date('m dS, Y',strtotime($res['date']));?></label>
          </div>
        </div>
        <div class="text-block clearfix">
          <p><?php echo substr(strip_tags($res['content']),0,255);?>...</p>
          <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleDetail',array('ar_id'=>$res['id']));?>" class="see-more02 f-right">See more >></a></div>
      </div>
    </div>
<?php endforeach;?>
  </div>
  <h2 class="page-title13" id="provin ce_map"> Get started:<br /> Recall the first memory with your child</h2>
</div>
<div class="adoption-map-block">
  <div class="container">
    <div class="row">
    	<ul class="province-list01">
        	<li class="li01">
            	<a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>16))?>">Xinjiang Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>33))?>">Inner Mongolia Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>27))?>">Gansu Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>25))?>">Ningxia Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>11))?>">Qinghai Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>30))?>">Shaanxi Reunion</a>
                <a href="#"> &nbsp;</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>10))?>">Sichuan Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>13))?>">Chongqing Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>7))?>">Hubei Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>8))?>">Hunan Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>9))?>">Guizhou Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>14))?>">Yunnan Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>6))?>">Guangxi Reunion</a>
            </li>
            <li class="li02"><img  src="/images/adoptionhome-map.jpg"  /></li>
            <li class="li03">
            	<a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>22))?>">Heilongjiang Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>23))?>">Jilin Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>34))?>">Liaoning Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>1))?>">Beijing Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>5))?>">Hebei Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>12))?>">Shanxi Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>24))?>">Shandong Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>4))?>">Henan Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>21))?>">Anhui Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>20))?>">Jiangsu Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>2))?>">Shanghai Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>19))?>"> Zhejiang Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>35))?>">Jiangxi Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>18))?>">Fujian Reunion</a>
                <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleByProvince',array('province_id'=>17))?>">Guangdong Reunion</a>
            </li>
        </ul>
    </div>
  </div>
</div>
<h2 class="page-title13">Exciting Travel Activities</h2>
<div class="container">
  <div class="row">
    <div class="col-sm-6 col-md-4">
      <div class="adoption-stories adoption-stories2">
        <div class="img-block"> <img  src="/images/adoption-pro-1.jpg"  />
          <div class="bg-back"> <span> Watch a Kungfu Show</span>
          </div>
        </div>
        <div class="text-block clearfix">
          <p>You can watch this performance in Red Theatre of Beijing. It costs about 70 mins, told a beautiful story about a young boy who dreams of becoming a Kung Fu master and attain enlightenment,. Well choreographed musical with stunt Kung Fu performance make the show world-famous. Your family will enjoy it. </p>
          <a href="/travel/adoption/activity" class="see-more02 f-right">See more >></a> </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="adoption-stories adoption-stories2">
        <div class="img-block"> <img  src="/images/adoption-pro-2.jpg"  />
          <div class="bg-back"> <span>Makeup for the Sichuan Opera</span>
            
          </div>
        </div>
        <div class="text-block clearfix">
          <p>Sichuan Opera performances are always full of wit, humor, lively dialogues, and pronounced local flavors. To portray special characters, the opera incorporates a series of stunts, including the famous "face-changing." After watching the Sichuan Opera, you will have a chance to be maked up as the performer. It will be a fun way ...</p>
          <a href="/travel/adoption/activity" class="see-more02 f-right">See more >></a> </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="adoption-stories adoption-stories2">
        <div class="img-block"> <img  src="/images/adoption-pro-3.jpg"  />
          <div class="bg-back"> <span> Visit the Giant Panda</span>
           
          </div>
        </div>
        <div class="text-block clearfix">
          <p>Visit the home of giant pandas at Panda Breeding and Research Center, in the outskirts of Chengdu. Visit the nursery to see the highly successful breeding program, among the bamboo groves and shady walkways, and to view the pandas at rest or play. There is a panda museum where you can learn some information about giant pandas...</p>
          <a href="/travel/adoption/activity" class="see-more02 f-right">See more >></a> </div>
      </div>
    </div>
  </div>
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
