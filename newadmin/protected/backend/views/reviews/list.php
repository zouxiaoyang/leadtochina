<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/reviews.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/jquery.lightbox-0.5.css');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.lightbox-0.5.min.js'); ?>

<!--  reviews start  -->
<div id="reviews">
   <div class="text">
      <div class="textleft">
         <h2>Lead to China Reviews</h2>
         <p>With offering nuanced, high-quality China Inbound Tour services to overseas travelers through indefatigable work in several years, Hefei Full View Travel Agency has earned a tiny space in China Inbound Travel circle. Meanwhile, for grasping the aim of "providing perfect China travel experience for overseas tourists" precisely, Hefei Full View Travel Agency has set up high-quality service control system for monitoring the services from Customer Service Representative, trip advisor, editor, tour guide and driver from local tavel agency.</p>
         <p>Since 2008, thousands of overseas tourists have taken our services of touring amazing China and left us a plenty of positive reviews to praise our work, also available on Trip Advisor.com. It is no doubt that we feel so proud to receive these. Let's see what they have left to us and to you!</p>
       </div>
       <div class="textright"><img src="/images/reviews/top.jpg" alt="" /></div>
   </div>
   <div class="reviews-menu">
      <ul>
         <li><a class="dq" href="#">Tour Company Reviews</a></li>
         <li class="guest"><a href="#">Guest Reviews</a></li>
      </ul>
      <div class="reshare"><a href="#"><img src="/images/reviews/share.png" alt="" /></a></div>
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
                <li><a href="<?php echo Yii::app()->createUrl('reviews/list', array('title'=>SiteUtils::stringURLSafe($v.'-tour-reviews'),'cityid'=>$k));?>"><?php echo $v;?> Tour Reviews(<?php echo $num;?>)</a></li>
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
                <!--  first start  -->
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
                 <!--  first end  -->
                 <div class="firstbottom"></div>
               <?php endforeach;?>
                

            </div>
            <!--  listone end  -->
            
            <!--  listtwo start  -->
            <div class="listtwo">
                
                <?php foreach($data as $k=>$v):?>
                <?php if($k<3) continue;?>
                <!--  first start  -->
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
                 <!--  first end  -->
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
        <div class="rebanner"><a href="#"><img src="/images/reviews/banner.jpg" alt="" /></a></div>
    </div>
  <!--  content01 end  -->
</div>
<!--  recontent end  -->

<script>
$(function() {
  $('.gallery a').lightBox();
});
</script>