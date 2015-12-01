<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/reviews.css'); ?>
<style>
.comment{
  height:130px;
  overflow: hidden;
  width: 290px;
}

.bigpic{
  /*width:286px;*/
  max-width:286px;
}
</style>
<script type="text/javascript">
		$(document).ready(function() {
      /*
			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
      */
		});
	</script>

<?php
  $data_arr = array_chunk($data,2);
?>
<!--  reviews start  -->
<div id="reviews">
   <div class="text">
      <div class="textleft">
         <h2>Lead to China Reviews</h2>
         <p>With offering nuanced, high-quality <strong>China Inbound Tour services</strong> to overseas travelers through indefatigable work in several years, and by grasping the aim of "<strong>providing perfect China travel experience for overseas tourists</strong>" precisely, Hefei Full View has become one of the most popular China tour agencies among overseas’ tourists. From <a href="http://www.tripadvisor.com/ShowTopic-g303685-i10955-k5494171-Has_anyone_used_the_hefei_full_view_travel_service-Huangshan_Anhui.html">Trip advisor</a> and here, you could find some reviews left by our dear clients.</p>
       </div>
       <div class="textright"><img src="/images/reviews/top.jpg" alt="" /></div>
   </div>
   <div class="reviews-menu">
      <ul>
         <li class="guest"><a class="dq" href="<?php echo Yii::app()->createUrl('reviews/guestReviews');?>">Guest Reviews</a></li>
         <li><a href="<?php echo Yii::app()->createUrl('reviews/index');?>">Company Local Survey</a></li>
      </ul>
      <div class="reshare"><a href="<?php echo Yii::app()->createUrl('reviews/share');?>"><img src="/images/reviews/share.png" alt="" /></a></div>
   </div>
</div>
<!--  reviews end  -->
<div style="clear:both"></div>

<!--  recontent start  -->
<div id="recontent">
    <!--  content01 start  -->
    <div class="content01" style="position:relative;">
         <!--  succed start  -->
         <div class="succed" style="display:none;">
             <div class="succ-content"><img src="/images/reviews/succed.png"  alt="" /></div>
         </div>
         <!--  succed end  -->

        <!--  select start  -->
        <div class="select">
           <div class="select1">
             <select name="" style="display:none;">
                <option selected="selected"> -- 2013 -- </option>
                <option> -- 2014 -- </option>
                <option> -- 2015 -- </option>
             </select>
             <input name="reviews_type" type="radio" value="0" <?php if(!$_GET['type']):?>checked="checked"<?php endif;?> onclick="location.href='<?php echo Yii::app()->createUrl('reviews/guestReviews', array('type'=>0));?>'" /> All(<?php echo $item_count;?>) 
             <input name="reviews_type" type="radio" value="1" <?php if($_GET['type'] == 1):?>checked="checked"<?php endif;?> onclick="location.href='<?php echo Yii::app()->createUrl('reviews/guestReviews', array('type'=>1));?>'" /> Positive(<?php echo $positive_count;?>) 
             <input name="reviews_type" type="radio" value="2" <?php if($_GET['type'] == 2):?>checked="checked"<?php endif;?> onclick="location.href='<?php echo Yii::app()->createUrl('reviews/guestReviews', array('type'=>2));?>'" /> Common(<?php echo $common_count;?>) 
             <input name="reviews_type" type="radio" value="3" <?php if($_GET['type'] == 3):?>checked="checked"<?php endif;?> onclick="location.href='<?php echo Yii::app()->createUrl('reviews/guestReviews', array('type'=>3));?>'" /> Negative(<?php echo $negative_count;?>)</div>
             <form action="" method="get" onsubmit="check_form()">
                <span><input id="name" name="name" type="text" value="By Client Name" />
                  <input type="image" src="/images/reviews/search.jpg" style="width:101px;height:30px;border:none;margin-left:5px;" />
                </span>
            </form>
        </div>
        <!--  select end  -->
 
        <!--  list-guest start  -->
        <div class="list-guest">

        <?php if(Yii::app()->user->hasFlash('share_success')):?>
          <div style="background:url(/images/reviews/succed.jpg) #eeeeee 25px 5px no-repeat; border: 1px solid #dfdedc;font-size:14px; font-weight:bold; margin: 0 auto; padding:10px 20px 10px 55px; text-align:center; width: 700px; color:#484746;">
          <?php 
              echo Yii::app()->user->getFlash('share_success');
          ?>
          </div>
        <?php endif;?>


            <!--  guest1 start  -->
            <div class="guest1">
               
               <?php foreach((array)$data_arr[0] as $v):?>
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
               <!--  guest1list start  -->
               <div class="guest1list">
                   <ul>
                        <li class="time"><?php echo $v['dateline'];?></li>
                        <li class="name"><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($tour['name']),'id'=>$tour['id'])); ?>"><?php echo $tour['name'];?></a></li>
                        <li style="text-align:center"><?php if($pics[0]['pic']):?><img class="bigpic" src="<?php echo ImageUtils::getThumbnail(Reviews::UPLOAD_PATH.$pics[0]['pic'], '316x197');?>" /><?php endif;?></li>
                        <li class="pic">
                            <?php foreach($pics as $pic):?>
                              <?php if($pic['pic']):?>
                                <img originSrc="<?php echo ImageUtils::getThumbnail(Reviews::UPLOAD_PATH.$pic['pic'], '316x197');?>" src="<?php echo ImageUtils::getThumbnail(Reviews::UPLOAD_PATH.$pic['pic'], '88x46');?>" onclick="changBigPic(this)" />
                              <?php endif;?>
                            <?php endforeach;?>
                        </li>
                        <li class="client"><span>Clients:</span> <?php echo $v['name'];?>&nbsp;&nbsp;<span>Nationality:</span><?php echo $v['nationality'];?><br />
                        </li>
                        <li class="detail">
                              <div class="comment"><?php echo $v['description'];?></div>
                              <em>......</em>
                              <span onclick="expandContent(this)">Show More</span>
                        </li>
                
                        <li class="tubiao">
                            <table border="0" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                   <td rowspan="2" style="padding-left:0px; padding-right:20px;">
                                      <div class="addthis_toolbox addthis_default_style" style="height:16px; overflow:hidden; margin-top:10px;"> 
                                        <a href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4d3cdb303668116a" class="addthis_button_compact">Share&nbsp;|</a> 
                                        <a class="addthis_button_preferred_1"></a> 
                                        <a class="addthis_button_preferred_2"></a> 
                                        <a class="addthis_button_preferred_3"></a> 
                                        <a class="addthis_button_preferred_4"></a>
                                      </div>
                                      <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4d3cdb303668116a"></script>
                                   </td>
                                   <td><img style="cursor:pointer" src="/images/reviews/good.jpg"  onclick="vote(this,1, <?php echo $v['id'];?>)" /></td>
                                   <td><img style="cursor:pointer" src="/images/reviews/bad.jpg" onclick="vote(this,2,<?php echo $v['id'];?>)" /></td>
                                   <?php if($comments):?>
                                     <td><img src="/images/reviews/reviewed.jpg" onclick="explandComment(this)" /></td>
                                   <?php else:?>
                                      <td><img src="/images/reviews/review.jpg" onclick="explandComment(this)" /></td>
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
                        <li class="review" style="display:none">
                            <?php foreach($comments as $comment):?>
                              <?php echo $comment['comment'];?>
                              <span>——<?php echo $comment['name'];?></span>
                            <?php endforeach;?>
                        </li>
                        <li class="reply" style="display:none;"></li>
                        <li class="form" style="display:none">
                           <table border="0" cellspacing="0" cellpadding="0">
                             <tbody>
                              <tr>
                                 <td colspan="3"><textarea name="comment" cols="" rows="">&nbsp;</textarea></td>
                              </tr>
                              <tr>
                                 <td style="text-align:right;">Your Name:</td>
                                 <td colspan="2"><input name="name" type="text" /></td>
                              </tr>
                              <tr>
                                 <td style="text-align:right;">E-mail:</td>
                                 <td colspan="2"><input name="email" type="text" /></td>
                              </tr>
                              <tr>
                                 <td colspan="3" style="text-align:center;">
                                    <a href="javascript:;" style="width:151px; height:24px; margin-top:5px; display:block;">
                                      <img src="/images/reviews/button.png" onclick="reviewsComment(<?php echo $v['id'];?>, this);" />
                                    </a>
                                 </td>
                              </tr>
                              </tbody>
                           </table>
                        </li>
                   </ul>
               </div>
               <!--  guest1list end  -->
               <div class="guest1bottom"></div>
              <?php endforeach;?>

            </div>
            <!--  guest1 end  -->




            
            <!--  guest1 start  -->
            <div class="guest1">
               
               <?php foreach((array)$data_arr[1] as $v):?>
               <?php 
                 $sql = "select * from {{reviews_pic}} where tid='{$v['id']}'";
                 $pics = Yii::app()->db->createCommand($sql)->queryAll();
                 $sql = "select * from {{reviews_comment}} where tid='{$v['id']}'";
                 $comments = Yii::app()->db->createCommand($sql)->queryAll();
                 if($v['tour_id']){
                    $sql = "select id,name from jos_cos_tours_package where id='{$v['tour_id']}'";
                    $tour = Yii::app()->db->createCommand($sql)->queryRow();
                 }
               ?>
               <!--  guest1list start  -->
               <div class="guest1list">
                   <ul>
                        <li class="time"><?php echo $v['dateline'];?></li>
                        <li class="name"><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($tour['name']),'id'=>$tour['id'])); ?>"><?php echo $tour['name'];?></a></li>
                        <li style="text-align:center"><?php if($pics[0]['pic']):?><img class="bigpic" src="<?php echo ImageUtils::getThumbnail(Reviews::UPLOAD_PATH.$pics[0]['pic'], '316x197');?>" /><?php endif;?></li>
                        <li class="pic">
                            <?php foreach($pics as $pic):?>
                              <?php if($pic['pic']):?>
                                <img originSrc="<?php echo ImageUtils::getThumbnail(Reviews::UPLOAD_PATH.$pic['pic'], '316x197');?>" src="<?php echo ImageUtils::getThumbnail(Reviews::UPLOAD_PATH.$pic['pic'], '88x46');?>" onclick="changBigPic(this)" />
                              <?php endif;?>
                            <?php endforeach;?>
                        </li>
                        <li class="client"><span>Clients:</span> <?php echo $v['name'];?>&nbsp;&nbsp;<span>Nationality:</span><?php echo $v['nationality'];?><br />
                        </li>
                        <li class="detail">
                              <div class="comment"><?php echo $v['description'];?></div>
                              <em>......</em>
                              <span onclick="expandContent(this)">Show More</span>
                        </li>
                        <li class="detail" style="display:none;">
                            <p><img alt="" src="/images/reviews/pic2.jpg" /> Mr. Daniel Pierce<br />
                            2013 / 03 / 28<br />
                            United States<br />
                            Hi dear,<br />
                            Our guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transported ...... <span>Show Less</span></p>
                        </li>
                        <li class="tubiao">
                            <table border="0" cellspacing="0" cellpadding="0">
                               <tbody>
                                <tr>
                                   <td rowspan="2" style="padding-left:0px; padding-right:20px;">
                                      <div class="addthis_toolbox addthis_default_style" style="height:16px; overflow:hidden; margin-top:10px;"> 
                                        <a href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4d3cdb303668116a" class="addthis_button_compact">Share&nbsp;|</a> 
                                        <a class="addthis_button_preferred_1"></a> 
                                        <a class="addthis_button_preferred_2"></a> 
                                        <a class="addthis_button_preferred_3"></a> 
                                        <a class="addthis_button_preferred_4"></a>
                                      </div>
                                      <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4d3cdb303668116a"></script>
                                   </td>
                                   <td><img style="cursor:pointer" src="/images/reviews/good.jpg"  onclick="vote(this,1, <?php echo $v['id'];?>)" /></td>
                                   <td><img style="cursor:pointer" src="/images/reviews/bad.jpg" onclick="vote(this,2,<?php echo $v['id'];?>)" /></td>
                                   <?php if($comments):?>
                                     <td><img src="/images/reviews/reviewed.jpg" onclick="explandComment(this)" /></td>
                                   <?php else:?>
                                      <td><img src="/images/reviews/review.jpg" onclick="explandComment(this)" /></td>
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
                        <li class="review" style="display:none">
                            <?php foreach($comments as $comment):?>
                              <?php echo $comment['comment'];?>
                              <span>——<?php echo $comment['name'];?></span>
                            <?php endforeach;?>
                        </li>
                        <li class="reply" style="display:none"></li>
                        <li class="form" style="display:none">
                           <table border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                              <tr>
                                 <td colspan="3"><textarea name="comment" cols="" rows="">&nbsp;</textarea></td>
                              </tr>
                              <tr>
                                 <td style="text-align:right;">Your Name:</td>
                                 <td colspan="2"><input name="name" type="text" /></td>
                              </tr>
                              <tr>
                                 <td style="text-align:right;">E-mail:</td>
                                 <td colspan="2"><input name="email" type="text" /></td>
                              </tr>
                              <tr>
                                 <td colspan="3" style="text-align:center;">
                                    <a href="javascript:;" style="width:151px; height:24px; margin-top:5px; display:block;">
                                      <img src="/images/reviews/button.png" onclick="reviewsComment(<?php echo $v['id'];?>, this);" />
                                    </a>
                                 </td>
                              </tr>
                              </tbody>
                           </table>
                        </li>
                   </ul>
               </div>
               <!--  guest1list end  -->
               <div class="guest1bottom"></div>
              <?php endforeach;?>
              
            </div>
            <!--  guest1 end  -->





            
            <!--  guest1 start  -->
            <div class="guest1">

               <?php foreach((array)$data_arr[2] as $v):?>
               <?php 
                 $sql = "select * from {{reviews_pic}} where tid='{$v['id']}'";
                 $pics = Yii::app()->db->createCommand($sql)->queryAll();
                 $sql = "select * from {{reviews_comment}} where tid='{$v['id']}'";
                 $comments = Yii::app()->db->createCommand($sql)->queryAll();
                 if($v['tour_id']){
                    $sql = "select id,name from jos_cos_tours_package where id='{$v['tour_id']}'";
                    $tour = Yii::app()->db->createCommand($sql)->queryRow();
                 }
               ?>
               <!--  guest1list start  -->
               <div class="guest1list">
                   <ul>
                        <li class="time"><?php echo $v['dateline'];?></li>
                        <li class="name"><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($tour['name']),'id'=>$tour['id'])); ?>"><?php echo $tour['name'];?></a></li>
                        <li style="text-align:center"><?php if($pics[0]['pic']):?><img class="bigpic" src="<?php echo ImageUtils::getThumbnail(Reviews::UPLOAD_PATH.$pics[0]['pic'], '316x197');?>" /><?php endif;?></li>
                        <li class="pic">
                            <?php foreach($pics as $pic):?>
                              <?php if($pic['pic']):?>
                                <img originSrc="<?php echo ImageUtils::getThumbnail(Reviews::UPLOAD_PATH.$pic['pic'], '316x197');?>" src="<?php echo ImageUtils::getThumbnail(Reviews::UPLOAD_PATH.$pic['pic'], '88x46');?>" onclick="changBigPic(this)" />
                              <?php endif;?>
                            <?php endforeach;?>
                        </li>
                        <li class="client"><span>Clients:</span> <?php echo $v['name'];?>&nbsp;&nbsp;<span>Nationality:</span><?php echo $v['nationality'];?><br />
                        </li>
                        <li class="detail">
                              <div class="comment"><?php echo $v['description'];?></div>
                              <em>......</em>
                              <span onclick="expandContent(this)">Show More</span>
                        </li>
                        <li class="detail" style="display:none;">
                            <p><img alt="" src="/images/reviews/pic2.jpg" /> Mr. Daniel Pierce<br />
                            2013 / 03 / 28<br />
                            United States<br />
                            Hi dear,<br />
                            Our guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transported ...... <span>Show Less</span></p>
                        </li>
                        <li class="tubiao">
                            <table border="0" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                   <td rowspan="2" style="padding-left:0px; padding-right:20px;">
                                      <div class="addthis_toolbox addthis_default_style" style="height:16px; overflow:hidden; margin-top:10px;"> 
                                        <a href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4d3cdb303668116a" class="addthis_button_compact">Share&nbsp;|</a> 
                                        <a class="addthis_button_preferred_1"></a> 
                                        <a class="addthis_button_preferred_2"></a> 
                                        <a class="addthis_button_preferred_3"></a> 
                                        <a class="addthis_button_preferred_4"></a>
                                      </div>
                                      <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4d3cdb303668116a"></script>
                                   </td>
                                  <td><img style="cursor:pointer" src="/images/reviews/good.jpg"  onclick="vote(this,1, <?php echo $v['id'];?>)" /></td>
                                   <td><img style="cursor:pointer" src="/images/reviews/bad.jpg" onclick="vote(this,2,<?php echo $v['id'];?>)" /></td>
                                   <?php if($comments):?>
                                     <td><img src="/images/reviews/reviewed.jpg" onclick="explandComment(this)" /></td>
                                   <?php else:?>
                                      <td><img src="/images/reviews/review.jpg" onclick="explandComment(this)" /></td>
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
                        <li class="review" style="display:none">
                            <?php foreach($comments as $comment):?>
                              <?php echo $comment['comment'];?>
                              <span>——<?php echo $comment['name'];?></span>
                            <?php endforeach;?>
                        </li>
                        <li class="reply" style="display:none"></li>
                        <li class="form" style="display:none">
                           <table border="0" cellspacing="0" cellpadding="0">
                             <tbody>
                              <tr>
                                 <td colspan="3"><textarea name="comment" cols="" rows="">&nbsp;</textarea></td>
                              </tr>
                              <tr>
                                 <td style="text-align:right;">Your Name:</td>
                                 <td colspan="2"><input name="name" type="text" /></td>
                              </tr>
                              <tr>
                                 <td style="text-align:right;">E-mail:</td>
                                 <td colspan="2"><input name="email" type="text" /></td>
                              </tr>
                              <tr>
                                 <td colspan="3" style="text-align:center;">
                                    <a href="javascript:;" style="width:151px; height:24px; margin-top:5px; display:block;">
                                      <img src="/images/reviews/button.png" onclick="reviewsComment(<?php echo $v['id'];?>, this);" />
                                    </a>
                                 </td>
                              </tr>
                              </tbody>
                           </table>
                        </li>
                   </ul>
               </div>
               <!--  guest1list end  -->
               <div class="guest1bottom"></div>
              <?php endforeach;?>
             
            </div>
            <!--  guest1 end  -->


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
        <!--  list-guest end  -->
        <div class="clear"></div>
        <div class="rebanner"><a href="/chinatour/"><img src="/images/reviews/banner.jpg" alt="" /></a></div>
    </div>
    <!--  content01   -->
</div>
<!--  recontent end  -->

<script>
  $(function(){
    $("#name").focus(function(){
      $(this).css('color', '#333');
      if($(this).val() == 'By Client Name'){
        $(this).val('');
      }
    })
  })

  function reviewsComment(id, obj){
    var name = $(obj).parents("table").find("input[name='name']").val();
    var email = $(obj).parents("table").find("input[name='email']").val();
    var comment = $(obj).parents("table").find("textarea[name='comment']").val();
    var YII_CSRF_TOKEN = "<?php echo Yii::app()->request->csrfToken;?>";
    $.post("<?php echo Yii::app()->createUrl('reviews/addComment');?>", {id:id, name:name, email:email, comment:comment, YII_CSRF_TOKEN:YII_CSRF_TOKEN}, function(ret){
      if(ret == 0){
        $(obj).parents("table").find("input[name='name']").val('');
        $(obj).parents("table").find("input[name='email']").val('');
        $(obj).parents("table").find("textarea[name='comment']").val('');
        alert("Submit Successful.");
      }else{
        alert(ret);
      }
    })
  }

  function changBigPic(obj){
    $(obj).parents("ul").find(".bigpic").attr("src", $(obj).attr("originSrc"));
  }

  function expandContent(obj){
    if($(obj).html() == 'Show More'){
      $(obj).parent("li").find("div.comment").css("height","auto");
      $(obj).parent("li").find("em").hide();
      $(obj).html("Show Less");
    }else{
      $(obj).parent("li").find("div.comment").css("height","130px");
      $(obj).parent("li").find("em").show();
      $(obj).html("Show More");
    }
    
  }

  function explandComment(obj){
    $(obj).parents(".guest1list").find("ul li.review").toggle();
    $(obj).parents(".guest1list").find("ul li.reply").toggle();
    $(obj).parents(".guest1list").find("ul li.form").toggle();
    /*
    if($(obj).parents(".guest1list").find("ul li.reply").css("display") == "block"){
      $(obj).attr("src","/images/reviews/reviewed.jpg");  
    }else{
      $(obj).attr("src","/images/reviews/review.jpg");  
    }
    */
  }

  function check_form(){
    if($("#name").val() == 'By Client Name'){
      alert("please input name.");
      return false;
    }
    return true;
  }

  function vote(obj, num, id){
    $.get("<?php echo Yii::app()->createUrl('reviews/vote');?>", {type:num, id:id}, function(){
      if(num == 1) {
        var vote1 = parseInt($(obj).parents(".guest1list").find(".vote1").html()); 
        $(obj).parents(".guest1list").find(".vote1").html(vote1+1);
      }
      if(num == 2){
        var vote2 = parseInt($(obj).parents(".guest1list").find(".vote2").html()); 
        $(obj).parents(".guest1list").find(".vote2").html(vote2+1);
      }
      $(obj).removeAttr("onclick");
    })
  }
</script>
