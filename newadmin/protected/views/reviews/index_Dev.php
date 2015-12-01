<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/reviews.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/jquery.lightbox-0.5.css');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.lightbox-0.5.min.js'); ?>
<?php $this->setPageTitle("Company Local Survey");?>
<style type="text/css">
#content{ margin-top:20px;}
#CDSWIDCOE{ margin:0px; width:171px;}
.search_reviews h2{ display:none;}
</style>
<div id="content"> 
  <!-- index start --> 
  <div id="index"> 
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> Company Local Survey</div>
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
             <li><a href="/travel/guest-reviews">Guest Reviews</a></li>
             <li><a href="/travel/reviews/index" class="dq">Company Local Survey</a></li>
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
             <select name="cityid" id="">
              <option value="">By City</option>   
              <option value="100">China Tour Reviews</option>   
              <?php foreach($city_list as $k=>$v):?>
               <?php $num=count($city_testimonial[$k]);?>
               <?php if($num>0):?>
                  <option <?php if($k==$_GET['cityid']):?>selected<?php endif;?> value="<?php echo $k;?>"><?php echo $v;?></option>
               <?php endif;?>
             <?php endforeach;?>                                                   
            </select>

             <select name="day" id="">
              <option value="">By Day</option>
              <option value="1" <?php if($_GET['day'] == 1):?>selected<?php endif;?>>0.5-1 Day</option>   
              <option value="2" <?php if($_GET['day'] == 2):?>selected<?php endif;?>>2-4 Days</option>   
              <option value="3" <?php if($_GET['day'] == 3):?>selected<?php endif;?>>5-8 Days</option> 
              <option value="4" <?php if($_GET['day'] == 4):?>selected<?php endif;?>>9-12 Days</option>   
              <option value="5" <?php if($_GET['day'] == 5):?>selected<?php endif;?>> &gt;12 Days</option>                                                     
            </select>
            
            <select name="nationality" id="">
              <option value="">By Nationality</option>   
              <?php foreach($nationnality_arr as $v):?>
                <?php if($v['nationnality']):?>
                <option <?php if($v['nationnality']==$_GET['nationality']):?>selected<?php endif;?> value="<?php echo $v['nationnality'];?>"><?php echo $v['nationnality'];?></option>   
                <?php endif;?>
              <?php endforeach;?>
            </select>
            <input type="submit" style="width:117px;height:28px;border:none;margin:0px; padding:0px;background:url('/images/chinatours/search1.jpg');" value="">
            <div style="margin-bottom:5px;color: #444444;">These options can work independently, and it's also available to combine with each other</div>
            </form>
         </div>
         
         <div class="company_list">
            <?php foreach($data as $k=>$v):?>
            <div class="one_list">
                <!--  first start  -->
                <div class="first1_new">
                    <ul>
                        <li class="time"><?php echo date('M.d Y',strtotime($v['tour_time']));?></li>
                        <li>
                            <ol>
                                <li class="pic gallery">
                                  <img src="/images/reviews/pic.jpg" width="155" height="116" alt="<?php echo $v['pic_alt'];?>" />
                                  <a href="/uploads/testimonisal/thumb/thumb_<?php echo $v['pic_name'];?>" rel="lightbox[suzhou]"  title="<?php echo $v['title'];?>"><img src="/images/about/enlarge.jpg" /></a>
                                </li>
                                <li class="describe">
                                <strong>Name:</strong> <?php echo $v['name'];?> <br />
                                <strong>Country:</strong> <?php echo $v['nationnality'];?><br />
                                <strong>Tourist Routes:</strong> <a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($v['package_name']), 'id'=>$v['packageid']));?>" target="_blank"><?php echo $v['package_name'];?></a></li>
                            </ol>
                        </li> 
                    </ul>
                 </div>
                 <!--  first end  -->
                 <div class="firstbottom_new"></div>
              
              </div>
              <?php endforeach;?>
              
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
                <li style="background:none; padding-left:13px; width:198px;"><img style="width:55px; height:37px; float:left; margin-right:30px;" src="/images/chinatours/pata.jpg" alt="" /> <img src="/images/chinatours/what.jpg" alt="" /></li>
           </ul>
        </div>
      <!-- last end -->
  </div>
  <!-- index end --> 
</div>
 

 <?php echo $this->renderPartial("//common/pop_more_cities");?>
 <script>
$(function() {
  $('.gallery a').lightBox();
});
</script>