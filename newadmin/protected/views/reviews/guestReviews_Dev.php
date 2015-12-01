<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/reviews.css'); ?>
<style type="text/css">
#content{ margin-top:20px;}
#CDSWIDCOE{ margin:0px; width:171px;}
.search_reviews h2{ display:none;}
</style>
<div id="content"> 
  <!-- index start --> 
  <div id="index"> 
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> Guest Reviews</div>
    <!-- banner_new start -->
    <div id="banner_new">
       <h2>Don't just Listen to us, See what Lead to China guests say</h2>
       <ul>
          <li><strong>“Best Experience w Professionals”</strong></li>
          <li><img src="/images/reviews/banner_trip.jpg" alt="" /> Reviewed May 27, 2014</li>
          <li>This was a 1st class service company; our guide, driver, and booking person were so professional, reliable, and honest. Loved the whole experience. We felt safe and well guided through out the whole trip.</li>
       </ul>
    </div>
    <!-- banner_new end -->
    
    <!-- left_new start -->
    <div id="left_new">
       <div class="releft_new">
          <h2><img src="/images/reviews/left_title.jpg" alt="" /></h2>
          <ul>
             <li><a href="/travel/guest-reviews" class="dq">Guest Reviews</a></li>
             <li><a href="/travel/reviews/index">Company Local Survey</a></li>
             <li><a href="/travel/share-your-reviews">Share Your Reviews</a></li>
          </ul>
      </div>
      <?php $this->renderPartial('_tripadvisor');?>
       <div class="rcontent">
         <div class="search_reviews"><!-- search 注意此处和citytour首页一样，调用共用的模块 -->
         <?php  $this->renderPartial('//common/searchForTour');?>
         </div>
         <div class="search_bottom"><img src="/images/reviews/search_bottom.png" alt="" /></div>
      </div>
    </div>
    <!-- left_new end -->
    
    <!-- right_new start -->
    <div id="right_new">
      <div class="guest_content">
        <form action="" method="get">
          <div class="guest_select">
             <select name="type" id="" style="width:90px;">
              <option value="0">All</option>
              <?php foreach(Reviews::$reviews_type_arr as $k=>$v):?>   
                <option value="<?php echo $k;?>"><?php echo $v;?></option>   
              <?php endforeach;?>                                               
            </select>
            
            <select name="nationality" id="">
              <option value="">By Nationality</option>   
              <?php foreach($nationality_arr as $v):?>
                <?php if($v['nationality']):?>
                <option value="<?php echo $v['nationality'];?>"><?php echo $v['nationality'];?></option>   
                <?php endif;?>
              <?php endforeach;?>
            </select>

            <select name="city" id="" style="width:90px;">
              <option value="0">By City</option>
              <?php foreach($city_list as $k=>$v):?>   
                <option value="<?php echo $k;?>"><?php echo $v;?></option>   
              <?php endforeach;?>                                               
            </select>
            <input name="" type="text" placeholder="Input Client Name"  value="" />   
            <input type="image" style="width:117px;height:28px;border:none;margin:0px; padding:0px;" src="/images/chinatours/search1.jpg">
         </div>
      
          <div style="margin-bottom:5px;color: #444444;">These options can work independently, and it's also available to combine with each other</div>
        </form>
         <div class="guest_list">

        <?php if($data):?>
          <?php foreach($data as $v):?>
          <?php 
               $sql = "select * from {{reviews_pic}} where published=1 and tid='{$v['id']}'";
               $pics = Yii::app()->db->createCommand($sql)->queryAll();
               $sql = "select * from {{reviews_comment}} where published=1 and tid='{$v['id']}'";
               $comments = Yii::app()->db->createCommand($sql)->queryAll();
               if($v['tour_id']){
                  $sql = "select id,name from jos_cos_tours_package where id='{$v['tour_id']}'";
                  $tour = Yii::app()->db->createCommand($sql)->queryRow();
               }
          ?>

            <ul>
               <li class="pic">
                  <?php if($pics[0]['pic']):?>
                    <a href="<?php echo Yii::app()->createUrl('reviews/GuestReviewsDetail', array('id'=>$v['id']));?>"><img class="bigpic" src="<?php echo ImageUtils::getThumbnail(Reviews::UPLOAD_PATH.$pics[0]['pic'], '205x144');?>" /></a>
                  <?php else:?>
                    <a href="<?php echo Yii::app()->createUrl('reviews/GuestReviewsDetail', array('id'=>$v['id']));?>"><img class="bigpic" src="/images/view/Reviews.jpg" style="width:150px;height:112px;" /></a>
                  <?php endif;?>
                </li>
               <li><a href="<?php echo Yii::app()->createUrl('reviews/GuestReviewsDetail', array('id'=>$v['id']));?>"><?php echo $tour['name'];?></a></li>
               <li><span>Clients: <?php echo $v['name'];?></span>               
                   <span>Nationality:<?php echo $v['nationality'];?></span>
                   <span>Date: <?php echo $v['dateline'];?></span>
               </li>
               <li class="review"><?php echo SiteUtils::mb_truncate_text(strip_tags($v['description']),200);?></li>
               <li><a href="<?php echo Yii::app()->createUrl('reviews/GuestReviewsDetail', array('id'=>$v['id']));?>" style="font-weight:bold; font-size:12px; color:#663300; float:left; display:block; width:95px;">MORE DETAIL</a>
                 <table border="0" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                   <td><img style="cursor:pointer" src="/images/reviews/good1.jpg"  onclick="vote(this,1, <?php echo $v['id'];?>)" /></td>
                                   <td><img style="cursor:pointer" src="/images/reviews/bad1.jpg" onclick="vote(this,2,<?php echo $v['id'];?>)" /></td>
                                   <?php if($comments):?>
                                     <td><img src="/images/reviews/reviewed.jpg" onclick="explandComment(this)" /></td>
                                   <?php else:?>
                                      <td><img src="/images/reviews/review1.jpg" onclick="explandComment(this)" /></td>
                                   <?php endif;?>
                                </tr>
                                <tr>
                                   <td>(<span class="vote1"><?php echo $v['vote1'];?></span>)</td>
                                   <td>(<span class="vote2"><?php echo $v['vote2'];?></span>)</td>
                                   <td>(<?php echo count($comments);?>)</td>
                                </tr>
                                </tbody>
                             </table> 
               </li>
            </ul>
        <?php endforeach;?>
        <?php else:?>
          
          <h2 style="width:100%; height:auto; float:left; display:block; line-height:34px; color:#444; text-align:center; border-top: 1px dashed #A9A9A9; padding:5px 0px; font-size:16px; font-weight:normal;">Sorry, no reviews from LeadtoChina clients yet.</h2>
        <?php endif;?>

         </div>
         <div class="pager">
                  <?php
                  $this->widget('CLinkPager', array(
                      'currentPage'=>$pages->getCurrentPage(),
                      'itemCount'=>$item_count,
                      'pageSize'=>$page_size,
                      'maxButtonCount'=>5,
                      //'nextPageLabel'=>'My text >',
                      'header'=>'',
                      'htmlOptions'=>array('class'=>'pages'),
                  ));
                  ?>
              </div>
      </div>
    </div>
    <!-- right_new end -->
    <div class="clear"></div>
    <!-- last start -->
              <div class="last_new">
               <ul>
                <li class="title1">100% Tailor-made</li>
                <li style="padding:6px 0px 6px 30px;">Dig China at your own speed</li>
                <li style="padding:6px 0px 6px 30px;">Nothing is impossible</li>
                <li>Create really unique china tour package</li>
           </ul>
           <ul>
                <li class="title1">Expert Knowledge</li>
                <li>Knowledgeable China Travel Expert</li>
                <li>Monitor your tour from the start to finish</li>
                <li>Highlight your China tour with real fun</li>
           </ul>
           <ul>
                <li class="title1">The Best Guides</li>
                <li>Well-arranged China tour packages with great online experience</li>
                <li>We cooperate with local partners who have good reputation</li>
           </ul>
           <ul style="margin-right:0px; border:none;">
                <li class="title1">Fully Protected</li>
                <li>Legitimate Company with attentive care</li>
                <li style="padding:6px 0px 6px 30px;">24/7 emergency guide call</li>
                <li style="padding:6px 0px 6px 30px;">Established for over 5 years</li>
                
           </ul>
        </div>
      <!-- last end -->
  </div>
  <!-- index end --> 
</div>
 

<?php echo $this->renderPartial("//common/pop_more_cities");?>

<script>
   function vote(obj, num, id){
    $.get("<?php echo Yii::app()->createUrl('reviews/vote');?>", {type:num, id:id}, function(){
      if(num == 1) {
        var vote1 = parseInt($(obj).parents("table").find(".vote1").html()); 
        $(obj).parents("table").find(".vote1").html(vote1+1);
      }
      if(num == 2){
        var vote2 = parseInt($(obj).parents("table").find(".vote2").html()); 
        $(obj).parents("table").find(".vote2").html(vote2+1);
      }
      $(obj).removeAttr("onclick");
    })
  }
</script>