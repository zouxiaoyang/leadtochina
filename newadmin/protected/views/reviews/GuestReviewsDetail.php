<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/reviews.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/jquery.lightbox-0.5.css');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.lightbox-0.5.min.js'); ?>
<style type="text/css">
#content{ margin-top:20px;}
#CDSWIDCOE{ margin:0px; width:171px;}
.search_reviews h2{ display:none;}
.smallpic_new img{cursor: pointer;}
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
      <div class="details_new">
          <h2><?php if($tour):?><?php echo $tour->name;?> <a href="<?php echo $tour->url();?>">(Click to see tour package)</a><?php endif;?></h2>
          <div class="details_content">
             <ul>
                <li class="bigpic gallery">
                 <?php if($pics[0]['pic']):?>
                 <a href="/travel/<?php echo Reviews::UPLOAD_PATH.$pics[0]['pic']; ?>"  rel="lightbox[pic1]" ><img src="<?php echo ImageUtils::getThumbnail(Reviews::UPLOAD_PATH.$pics[0]['pic'], '316x197');?>" /></a>
                 <?php else:?>
                  <img src="/images/view/Reviews.jpg" />
                 <?php endif;?>
                 <img style="display:none;position:absolute; right:0px; bottom:0px; cursor:pointer; width:24px; height:24px;" src="/images/reviews/cur.jpg"  /></li>
                <li>
                   <ol>
                      <li><strong>DESTINATIONS:</strong> <?php echo $tour->route;?></li>
                      <li><strong>TOUR CODE:</strong> <?php echo $tour->package_code;?></li>
                      <li><strong>TOUR TYPE:</strong> <?php echo $tour->package_tour_type;?></li>
                      <li><strong>CLIENT NAME:</strong> <?php echo $review_detail->name;?></li>
                      <li><strong>NATIONALITY:</strong> <?php echo $review_detail->nationality;?></li>
                      <li><div class="addthis_toolbox addthis_default_style" style="height:16px; overflow:hidden; margin-top:10px;"> 
                                        <a href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4d3cdb303668116a" class="addthis_button_compact">Share&nbsp;|</a> 
                                        <a class="addthis_button_preferred_1"></a> 
                                        <a class="addthis_button_preferred_2"></a> 
                                        <a class="addthis_button_preferred_3"></a> 
                                        <a class="addthis_button_preferred_4"></a>
                                      </div>
                                      <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4d3cdb303668116a"></script></li>
                   </ol>
                </li>
             </ul>
             <div class="clear"></div>
             <div class="smallpic_new gallery">
                            <?php foreach($pics as $pic):?>
                              <?php if($pic['pic']):?>
                              <a href="/travel/<?php echo Reviews::UPLOAD_PATH.$pic['pic']; ?>"  rel="lightbox[pic2]" >
                                <img originSrc="<?php echo ImageUtils::getThumbnail(Reviews::UPLOAD_PATH.$pic['pic'], '316x197');?>" src="<?php echo ImageUtils::getThumbnail(Reviews::UPLOAD_PATH.$pic['pic'], '88x46');?>" onclick="changBigPic(this)" />
                              </a>
                              <?php endif;?>
                            <?php endforeach;?>
                </div>
             
             <div class="reviews_text">
                <h2>Reviews from <?php echo $review_detail->name;?></h2>
                <p>
                    <?php echo $review_detail->description;?>
                </p>
                <div class="clear"></div>
                <div class="reviews1"><table border="0" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                   <td><img style="cursor:pointer" src="/images/reviews/good1.jpg"  onclick="vote(this,1, <?php echo $review_detail->id;?>)" /></td>
                                   <td><img style="cursor:pointer" src="/images/reviews/bad1.jpg" onclick="vote(this,2,<?php echo $review_detail->id;?>)" /></td>
                                   <?php if($comments):?>
                                     <td><img src="/images/reviews/reviewed.jpg" onclick="explandComment(this)" /></td>
                                   <?php else:?>
                                      <td><img src="/images/reviews/review1.jpg" onclick="explandComment(this)" /></td>
                                   <?php endif;?>
                                </tr>
                                <tr>
                                   <td>(<span class="vote1"><?php echo $review_detail->vote1;?></span>)</td>
                                   <td>(<span class="vote2"><?php echo $review_detail->vote2;?></span>)</td>
                                   <td>
                                    (<?php echo $comments_num;?>)</td>
                                </tr>
                                </tbody>
                             </table></div>
             </div>
          </div>
      </div>
      
      <div id="tab5">
        <div class="quest-title"><img alt="" src="/images/reviews/question.jpg"></div>
        <!--  question start  -->
        <div class="question">
            <div class="list-view" id="yw0">
             <div class="items">
              <!--  quest-one start  -->
            <?php foreach($comments as $v):?>
            <div class="quest-one">
              <div class="direction"><img alt="" src="/images/view/question1.png"></div>
                <!--  describe start  -->
                <div class="describenew">
                 <p><?php echo $v['comment'];?><br />
                 by <span><?php echo $v['name'];?></span> (<?php echo date("Y-m-d",$v['dateline']);?>)</p>
                </div>
                <!--  describe end  -->
               <!--  ask start  -->
               <div class="ask" style="display:none;"><p><span>Lead To China Trip Advisor</span> (Aug.11, 2012) replied: <br>
                    Hi, Jessica, the price on shown has included the domestic flights cost in China (Beijing-Chongqing &amp; Yichang-Shanghai); international airfare to China and departure exclude. Usually we suggest our clients to book international flights by themselves. But if you ask us to book all of the flights, please feel free to tell me. Thank you!</p>
               </div>
               <!--  ask end  -->
            </div>
            <?php endforeach;?>

       <!--  quest-one end  --></div>
       </div>           
    <!--  write start  -->
    <div class="write1new">
    <h2><img alt="" src="/images/reviews/write1.png"></h2>
    <div class="writecont">
     <table cellspacing="0" cellpadding="0" border="0">
       <tbody>
           <tr>
               <td colspan="3">You can post as a member!</td>
           </tr>
           <tr>
               <td colspan="3">
                <textarea name="comment" style="border:1px #CCCCCC solid" cols="65" rows="5"></textarea>                <div style="display:none" id="Question_content_em_" class="errorMessage"></div>               </td>
           </tr>
           <tr>
               <td class="tesu">Your Name: 
                <input type="text" name="name" style="border:1px #CCCCCC solid;" maxlength="128" size="15">
               </td>
               <td class="tesu">E-mail:
                  <input type="text" maxlength="150" name="email" style="border:1px #CCCCCC solid;">
               </td>
               <td class="tesu">
                <input type="button" onclick="reviewsComment(<?php echo $_GET['id'];?>, this);" style="height:29px;border:0px; width:221px; cursor:pointer;background:url(/images/view/submit.png) left center no-repeat; dispaly:block;" class="form_button" id="button">                                                                 
              </td>
           </tr>
        </tbody>
     </table>
   </div>
   </div>
<!--  write end  --> 
    </div>
    <!--  question end  -->
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


<script type="text/javascript">

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
    //$(obj).parents("ul").find(".bigpic").attr("src", $(obj).attr("originSrc"));
    //$("#right_new").find(".bigpic a").attr("href", $(obj).attr("originSrc"));
    //$("#right_new").find(".bigpic a img").attr("src", $(obj).attr("originSrc"));
  }

$(function() {
  $('.gallery a').lightBox();
});

</script>
