<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/reviews.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/jquery.lightbox-0.5.css');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.lightbox-0.5.min.js'); ?>

<!--  reviews start  -->
<div id="reviews">
   <div class="text" style="display:none;">
      <div class="textleft">
         <h2>Lead to China Reviews</h2>
         <p>With offering nuanced, high-quality <strong>China Inbound Tour services</strong> to overseas travelers through indefatigable work in several years, and by grasping the aim of "<strong>providing perfect China travel experience for overseas tourists</strong>" precisely, Hefei Full View has become one of the most popular China tour agencies among overseas¡¯ tourists. From <a href="http://www.tripadvisor.com/ShowTopic-g303685-i10955-k5494171-Has_anyone_used_the_hefei_full_view_travel_service-Huangshan_Anhui.html">Trip advisor</a> and here, you could find some reviews left by our dear clients.</p>
       </div>
       <div class="textright"><img src="/images/reviews/top.jpg" alt="" /></div>
   </div>
   <div class="reviews-menu">
      <ul>
         <li><a class="dq"  href="<?php echo Yii::app()->createUrl('reviews/index');?>">Tour Company Reviews</a></li>
         <li class="guest"><a href="<?php echo Yii::app()->createUrl('reviews/guestReviews');?>">Guest Reviews</a></li>
      </ul>
      <div class="reshare"><a href="<?php echo Yii::app()->createUrl('reviews/share');?>"><img src="/images/reviews/share.png" alt="" /></a></div>
   </div>
</div>
<!--  reviews end  -->
<div style="clear:both"></div>

<!--  recontent start  -->
<div id="recontent">  
    <!--  content01 start  -->
    <div class="content01">
        <!--  releft start  -->
        <div class="releft">
          <h2><img src="/images/reviews/left.jpg" alt="" /></h2>
          <ul>
              <?php $china_tour_num=count($city_testimonial['100']);?>
              <li><a href="<?php echo Yii::app()->createUrl('reviews/list', array('title'=>SiteUtils::stringURLSafe('china-tour-reviews'),'cityid'=>100));?>">China Tour Reviews(<?php echo $china_tour_num;?>)</a></li>

             <?php foreach($city_list as $k=>$v):?>
               <?php $num=count($city_testimonial[$k]);?>
               <?php if($num>0):?>
                <li><a <?php if($_GET['cityid'] == $k):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('reviews/list', array('title'=>SiteUtils::stringURLSafe($v.'-tour-reviews'),'cityid'=>$k));?>"><?php echo $v;?> Tour Reviews(<?php echo $num;?>)</a></li>
               <?php endif;?>
             <?php endforeach;?>
          </ul>
        </div>
        <!--  releft end  -->
        
        <!--  reright start  -->
        <div class="reright">
            <!--  listone start  -->
            <div class="listone">

                <?php foreach($data as $k=>$v):?>
                <?php if($k>2) break;?>
                <!--  second start  -->
                <div class="second">
                    <ul>
                        <li>
                           <ol>
                               <li class="time1"><?php echo $v['tour_time'];?></li>
                               <li class="describe1"><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($v['package_name']), 'id'=>$v['packageid']));?>"><?php echo $v['package_name'];?></a></li>
                           </ol>
                        </li>
                        <li>
                            <ol>
                                <li class="pic1 gallery"><img src="/images/reviews/pic1.jpg" width="278" height="177" alt="<?php echo $v['pic_alt'];?>" />
                                <a href="/uploads/testimonisal/thumb/thumb_<?php echo $v['pic_name'];?>" rel="lightbox[suzhou]" title="<?php echo $v['title'];?>"><img src="/images/about/enlarge.jpg" alt="" /></a></li>
                                <li class="name1"><strong>Name:</strong><?php echo $v['name'];?> <strong style="padding-left:10px;">Country:</strong><?php echo $v['nationnality'];?></li>
                            </ol>
                        </li> 
                    </ul>
                 </div>
                 <!-- second end  -->
                 <div class="firstbottom"></div>
               <?php endforeach;?>
                

            </div>
            <!--  listone end  -->
            
            <!--  listtwo start  -->
            <div class="listtwo">
                
                <?php foreach($data as $k=>$v):?>
                <?php if($k<3) continue;?>
                <!--  second start  -->
                <div class="second">
                    <ul>
                        <li>
                           <ol>
                               <li class="time1"><?php echo $v['tour_time'];?></li>
                               <li class="describe1"><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($v['package_name']), 'id'=>$v['packageid']));?>"><?php echo $v['package_name'];?></a></li>
                           </ol>
                        </li>
                        <li>
                            <ol>
                                <li class="pic1 gallery"><img src="/images/reviews/pic1.jpg" width="278" height="177" alt="<?php echo $v['pic_alt'];?>" />
                                <a href="/uploads/testimonisal/thumb/thumb_<?php echo $v['pic_name'];?>" rel="lightbox[suzhou]" title="<?php echo $v['title'];?>"><img src="/images/about/enlarge.jpg" alt="" /></a></li>
                                <li class="name1"><strong>Name:</strong><?php echo $v['name'];?> <strong style="padding-left:10px;">Country:</strong><?php echo $v['nationnality'];?></li>
                            </ol>
                        </li> 
                    </ul>
                 </div>
                 <!--  second end  -->
                 <div class="firstbottom"></div>
               <?php endforeach;?>
                
            </div>
            <!--  listtwo end  -->

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
        <!--  reright end  -->
        <div class="clear"></div>
        <div class="rebanner"><a href="/chinatour/"><img src="/images/reviews/banner.jpg" alt="" /></a></div>
    </div>
  <!--  content01 end  -->
</div>
<!--  recontent end  -->

<script>
$(function() {
  $('.gallery a').lightBox();
});
</script>