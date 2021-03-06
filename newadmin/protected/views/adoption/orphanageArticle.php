<?php
  Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/aoptees.css');
  $this->setPageTitle(substr(strip_tags($article->title),0,65));
  Yii::app()->clientScript->registerMetaTag('keywords',"chinese heritage tour reviews，china homeland tour review，reviews for china homeland tours，china  heritage tour reviews");
  Yii::app()->clientScript->registerMetaTag('description',substr(strip_tags($article->content),0,150).'...');
?>
<style type="text/css">
<!--
.province h2{ width:665px;}
.provincelist{ width:668px;}
.provincelist ul li{ width:146px;}
-->
</style>
<div class="content1" style="width:943px; padding: 0 5px 25px 13px;">
   <!--  right1 start  -->
   <div id="right1" style="float:left; margin-right:15px;">
     <?php $this->renderPartial("_right", array('chinaAdoptionGuide'=>$chinaAdoptionGuide));?>
      
      <!--  whynew1 start  -->
    <div class="whynew1">
     <h2><img src="/images/adoption/why.png" alt="" /></h2>
     <ul>
      <li>Professional English Speaking Tour Guide with Extensive Knowledge</li>
      <li>Barrier-free China Orphanage Visiting</li> 
      <li>Tailor made China Tour to your EVERY interest</li>
     </ul>
  </div>
  <!--  whynew1 end  -->
  <div class="tripcont">
     <div id="TA_selfserveprop615" class="TA_selfserveprop">
<ul id="pjQ1mD" class="TA_links sInonea2Xy">
<li id="HLOzwM3H8" class="k51uGkW1Cy4">31 reviews of <a target="_blank" href="http://www.tripadvisor.com/Attraction_Review-g297403-d3824010-Reviews-Lead_to_China_tours-Hefei_Anhui.html">Lead to China tours</a> in Hefei</li>
</ul>
</div>
<script src="http://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=615&amp;locationId=3824010&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true"></script>
  </div>   
  </div>
   <!--  right1 end  -->
   
   <!--  left1 start  -->
   <div id="left1" style="width:680px;"> 
      <!--  caption start  -->
      <div class="caption">
         <p>We really appreciate the families with adopted Chinese children. Thanks very much for your kindness to rebuild a loving home for them. Our China tour packages customized for adoptive families offer parents and children a better and deeper understanding of China including Chinese culture, tourism, language, local life etc. Besides, we will try our best to provide services such as accommodation, translation, car rental, special activities, return visits to orphanage and birthplace etc. You will find the right service on our website whether you are a single family or multiple families.</p>
      </div>
      <!--  caption end  -->
      
      <!--  adoption-right start  -->
      <div id="adoption-right">
        <div class="text">
          <h2><?php echo $article->title;?></h2>
          <?php echo $article->content;?>
        </div>
      </div>
      <!--  adoption-right end  -->
      
      <!--  province start  -->
           <?php $this->renderPartial("_province");?>
      <!--  province end  -->
   </div>
   <!--  left1 end  -->
</div>



