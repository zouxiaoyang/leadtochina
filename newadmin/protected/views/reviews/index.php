<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/reviews.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/jquery.lightbox-0.5.css');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.lightbox-0.5.min.js'); ?>

<!--  reviews start  -->
<div id="reviews">
   <div class="text">
      <div class="textleft">
         <h2>Lead to China Reviews</h2>
         <p>With offering nuanced, high-quality <strong>China Inbound Tour services</strong> to overseas travelers through indefatigable work in several years, and by grasping the aim of "<strong>providing perfect China travel experience for overseas tourists</strong>" precisely, Hefei Full View has become one of the most popular China tour agencies among overseas tourists. From <a href="http://www.tripadvisor.com/ShowTopic-g303685-i10955-k5494171-Has_anyone_used_the_hefei_full_view_travel_service-Huangshan_Anhui.html" target="_blank">Trip advisor</a> and here, you could find some reviews left by our dear clients.</p>
       </div>
       <div class="textright"><img src="/images/reviews/top.jpg" alt="" /></div>
   </div>
   <div class="reviews-menu">
      <ul>
         <li class="guest"><a href="<?php echo Yii::app()->createUrl('reviews/guestReviews');?>">Guest Reviews</a></li>
         <li><a class="dq" href="<?php echo Yii::app()->createUrl('reviews/index');?>">Company Local Survey</a></li>
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
              <li><a <?php if($_GET['cityid'] == 100 || empty($_GET['cityid'])):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('reviews/list', array('title'=>SiteUtils::stringURLSafe('china-tour-reviews'),'cityid'=>100));?>">China Tour Reviews(<?php echo $china_tour_num;?>)</a></li>

             <?php foreach($city_list as $k=>$v):?>
               <?php $num=count($city_testimonial[$k]);?>
               <?php if($num>0):?>
                <li><a <?php if($_GET['cityid'] == $k):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('reviews/list', array('title'=>SiteUtils::stringURLSafe($v.'-tour-reviews'),'cityid'=>$k));?>"><?php echo $v;?> Tour Reviews(<?php echo $num;?>)</a></li>
               <?php endif;?>
             <?php endforeach;?>

<!--
             <li><a class="dq" href="#">China Tour Reviews(48)</a></li>
             <li><a href="#">Beijing Tour Reviews(64)</a></li>
             <li><a href="#">Shanghai Tour Reviews(8)</a></li>
             <li><a href="#">Xian Tour Reviews(8)</a></li>
             <li><a href="#">Guilin Tour Reviews(5)</a></li>
             <li><a href="#">Chengdu Tour Reviews(2)</a></li>
             <li><a href="#">Hangzhou Tour Reviews(4)</a></li>
             <li><a href="#">Hong Kong Tour Reviews(1)</a></li>
             <li class="last"><a href="#">Chongqing Tour Reviews(3)</a></li>
-->
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
                <div class="first1">
                    <ul>
                        <li>
                           <ol>
                               <li class="time"><?php echo $v['tour_time'];?></li>
                               <li class="name"><strong>Name:</strong><?php echo $v['name'];?> <strong>Country:</strong><?php echo $v['nationnality'];?></li>
                           </ol>
                        </li>
                        <li>
                            <ol>
                                <li class="pic gallery">
                                  <img src="/images/reviews/pic.jpg" width="193" height="116" alt="<?php echo $v['pic_alt'];?>" />
                                  <a href="/uploads/testimonisal/thumb/thumb_<?php echo $v['pic_name'];?>" rel="lightbox[suzhou]"  title="<?php echo $v['title'];?>"><img src="/images/about/enlarge.jpg" /></a>
                                </li>
                                <li class="describe"><strong>Tourist Routes:</strong> <a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($v['package_name']), 'id'=>$v['packageid']));?>" target="_blank"><?php echo $v['package_name'];?></a></li>
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
                <div class="first1">
                    <ul>
                        <li>
                           <ol>
                               <li class="time"><?php echo $v['tour_time'];?></li>
                               <li class="name"><strong>Name:</strong><?php echo $v['name'];?> <strong>Country:</strong><?php echo $v['nationnality'];?></li>
                           </ol>
                        </li>
                        <li>
                            <ol>
                                <li class="pic gallery">
                                  <img src="/images/reviews/pic.jpg" width="193" height="116" alt="<?php echo $v['pic_alt'];?>" />
                                  <a href="/uploads/testimonisal/thumb/thumb_<?php echo $v['pic_name'];?>" rel="lightbox[suzhou]"  title="<?php echo $v['title'];?>"><img src="/images/about/enlarge.jpg" /></a>
                                </li>
                                <li class="describe"><strong>Tourist Routes:</strong> <a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($v['package_name']), 'id'=>$v['packageid']));?>" target="_blank"><?php echo $v['package_name'];?></a></li>
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
        <div class="rebanner"><a href="/chinatour/"><img src="/images/reviews/banner.jpg" alt="" /></a></div>
    </div>
    <!--  content01   -->
</div>
<!--  recontent end  -->

<script>
$(function() {
  $('.gallery a').lightBox();
});
</script>