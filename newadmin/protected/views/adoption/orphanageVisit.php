<style type="text/css">
<!--
 .errorMessage{color:red;}
 #CDSWIDSSP{width:210px !important;}
  #CDSWIDSSP.widSSPnarrow .widSSPData .widSSPBranding dd {
    width: auto !important;
}
.ui-slider-pic{width:573px;height:150px;position:absolute;overflow:hidden; margin-left: 45px;}
.ui-slider-pic ul li{float:left;width:170px;height:144px;margin-right:15px;}
.ui-slider-pic ul li img{width:170px;height:144px;}
 -->
</style>
<div class="content1">
  <div class="aoptees">
     <div class="aopteesleft"><h2>THE CHINA'S # 1 TRAVEL COMPANY FOR AOPTEES</h2>
                         We are specialized in arranging heritage tours for families with children adopted from China.
     </div>
     <div class="aopteesright">
    <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Flead2china&amp;width=200&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=21&amp;appId=132342830175639" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe></div>
   </div>
  <!--  left1 start  -->
  <div id="left1">
     <!--  swi-city start  -->
     <div class="swi-city">
        <table cellspacing="1" cellpadding="0" border="0">
          <tbody>
            <tr>
               <td colspan="2" style="background:#f7e7d7; color:#8c4600; font-weight:bold; font-size:14px; text-align:center;">SWI CITY VISITS (ORPHANAGE)</td>
            </tr>
            <tr>
               <td width="73"><strong>Day 1</strong></td>
              <td width="906">Our guide will pick you up upon arrival in the capital city of your child's home province and meet the guide for transfer to your hotel. <br />
              Enjoy free time the rest of the day.</td>
            </tr>
            <tr>
               <td><strong>Day 2</strong></td>
               <td>Breakfast. Transfer to the SWI (orphanage) city, visit your child's home orphanage and meet with people related to your child's adoption. If you desire, host a lunch or dinner for the orphanage director and staff. Explore the local area with your guide. If needed, locate and visit the place where your child was found or visit your child's former foster family (if applicable and pending special permission). <br />
Our guide will escort you back to the provincial capital city or overnight in the SWI city.</td>
            </tr>
            <tr>
               <td><strong>Day 3</strong></td>
               <td>Breakfast. Explore the local area with your guide and visit places where local children frequent or local places of interests.</td>
            </tr>
            <tr>
               <td><strong>Day 4</strong></td>
               <td>Breakfast. Our guide will send you off for your next destination. </td>
            </tr>
            <tr>
               <td><strong>Note:</strong></td>
               <td>We take care of obtaining the approval for your visit to the orphanage. Please email us the copy of Adoption registration certificate</td>
            </tr>
            <tr>
               <td><strong>Fee:</strong></td>
               <td>1. Tour Package Fee: Various case by case. Please <a href="/contact-us/" target="_blank">contact us</a> for pricing.<br />
Provincial Civil Affairs Fee for filing the orphanage visit petition: Varies by province.</td>
            </tr>
          </tbody>
        </table>
     </div>
     <!--  swi-city end  -->
     
     <!--  adoption-right start  -->
      <div id="adoption-right1">
        <div class="text">
          <h2><?php echo $article->title;?></h2>
          <div class="textcontent"><?php echo $article->description;?>
          </div>
        </div>
      </div>
      <!--  adoption-right end  -->
     
     <!--  return start  -->
   <!--   <div class="return">
        <div class="title1">Return-trip Guide</div>
        <div class="middle">         
         <div class="onecont">
           <h2>Adoption Travel Guide</h2>
           <ul> 
             <?php foreach($chinaAdoptionGuide as $v):?>
                   <li> <a href="<?php echo Yii::app()->createUrl('adoption/adoptionList', array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>" title="<?php echo $v->title;?>"><?php echo $v->title;?></a></li>
              <?php endforeach;?>
           </ul>
         </div>  
         
         <div class="twocont">
           <ul> 
              <li class="pic"><img alt="" src="/images/adoption/orphanages.jpg"></li>
               <?php foreach($chinaAdoptionCatid9 as $k=>$v):?>
                <li><a href="<?php echo Yii::app()->createUrl('adoption/adoptionList', array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>" title="<?php echo $v->title;?>"><?php echo $v->title;?></a></li>
              <?php endforeach;?>
           </ul>
         </div>  
         
         <div class="threecont">
           <h2>Facts &amp; Culture about Chinese Children</h2>
           <ul> 
              <?php foreach($chinaAdoptionCulture as $k=>$v):?>
                <li <?php if($k%2!=0):?> class="smallli" <?php endif;?>><a href="<?php echo Yii::app()->createUrl('adoption/adoptionList', array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>" title="<?php echo $v->title;?>"><?php echo $v->title;?></a></li>
              <?php endforeach;?>
           </ul>
         </div>        
      </div>
     </div>  -->
     <!--  return start  -->
     
     <!--  photos start  -->
    <!-- <div class="photos">
        <div class="title1"><span>China Travel Photos</span></div>
        <div class="photoslist">
           <a class="ui-slider-prev" id="pic_left"></a>
           <div class="ui-slider-pic" id="pic_list">
             <ul>
              <?php foreach($chinaTravelPhotos as $v):?>
                <li><a href="/travel/<?php echo ChinaTravelPhotos::UPLOAD_PATH . $v->pic;?>" target="_blank"><img src="<?php echo ImageUtils::getThumbnail(ChinaTravelPhotos::UPLOAD_PATH . $v->pic, '170x144');?>" alt="<?php echo $v->title;?>" /></a></li>
              <?php endforeach;?>
              
            </ul>
          </div> 
           <a class="ui-slider-next" id="pic_right"></a>
        </div>
     </div> -->
     <!--  photos end  -->
  </div>
  <!--  left1 end  -->

  <!--  right1 start  -->
  <div id="right1">
     
     <?php $this->renderPartial("_right", array('chinaAdoptionGuide'=>$chinaAdoptionGuide));?>
     
      <!--  planning start  -->
     <?php $this->renderPartial('/message/_form2',array(
            'model'=>$message,
      )); ?>    
       <!--  planning end  -->
  </div>
  <!--  right1 end  -->
</div>

<script type="text/javascript">
    $(function () {

     var ti = 0;
     var li = $("#pic_list").find("li");
     var li_width = li.eq(0).width();

     var num = 3;
     $("#pic_left").click(function(){
         ti--;
         scroll(ti);
     })
     $("#pic_right").click(function(){
      
        ti++;
        console.log(ti);
        scroll(ti);
     })
     
     function scroll(i){
       
        var move_width = num * li_width * i;
        if(move_width < 0) {ti=0;console.log(ti);return;}
        if(move_width > li_width * li.length) {ti = ti-1;return;}
        $("#pic_list ul").animate({marginLeft:-move_width}, 1000);
     }
     
    });
</script>
