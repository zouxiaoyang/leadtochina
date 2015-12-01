<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/reviews.css'); ?>
<?php $this->setPageTitle("Share Your Reviews");?>
<style type="text/css">
#content{ margin-top:20px;}
#CDSWIDCOE{ margin:0px; width:171px;}
.search_reviews h2{ display:none;}
#WIDGET{ width:670px;}
#CDSWIDCR.selfserve .widCRLoc{ width:670px;}
</style>
<div id="content"> 
  <!-- index start --> 
  <div id="index"> 
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> Share Your Reviews</div>
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
             <li><a href="/travel/reviews/index">Company Local Survey</a></li>
             <li><a href="/travel/share-your-reviews" class="dq">Share Your Reviews</a></li>
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
      <div class="chinamenu" id="sharetab">
         <ul>
            <li class="dq"><strong>Share Reviews with Lead to China</strong><span></span></li>
            <li><strong>Share Reviews to TripAdvisor</strong><span></span></li>
         </ul>
      </div>
        <!-- tab1 start -->
        <div class="submit_new" id="tab0">
          <?php $form=$this->beginWidget('CActiveForm', array(
          'id'=>'reviews-form',
          'htmlOptions' => array('enctype' => 'multipart/form-data'),
          'enableClientValidation'=>true,
          
          )); ?>
             <div class="txt_new">
                <p>We do believe there is a long way need us to go before we touch the success and win your hearts.however,every word you typed here is the light of our way to it and will be the motivation of our work.any reviews,ideas.suggestions about our local service &amp; online websites experiences &amp; customer services are warmly welcome here.Thanks from Lead to China.</p>
             </div>
             <div class="txtbottom_new"></div>
             <div class="write_new">
                 <div class="writecontent_new">
                    <?php echo $form->textarea($model,'description', array('style'=>'height:300px')); ?>
                    <?php echo $form->error($model,'description'); ?>
                 </div>
             </div>
             <div class="txtbottom_new"></div>
             <div class="choose_new">
                 <div class="chooseleft_new">
                      <table border="0" cellspacing="0" cellpadding="0">
                         <tr>
                            <td>Full Name: <span>*</span><br />
                              <select name="Reviews[gender]">
                                <option value="Mr."> Mr.</option>
                                <option value="Ms."> Ms.</option>
                              </select>
                              <?php echo $form->textField($model,'name',array('style'=>"width:211px; float:left;")); ?>
                              <?php echo $form->error($model,'name'); ?>
                            </td> 
                         </tr>
                         <tr>
                            <td>Email Address:<span>*</span><br />
                              <?php echo $form->textField($model,'email'); ?>
                              <?php echo $form->error($model,'email'); ?>
                            </td> 
                         </tr>
                         <tr>
                            <td>Telephone: <br />
                               <?php echo $form->textField($model,'telephone'); ?>
                               <?php echo $form->error($model,'telephone'); ?>
                            </td> 
                         </tr>
                          <tr>
                            <td>Nationality: <br />
                               <?php echo $form->textField($model,'nationality'); ?>
                               <?php echo $form->error($model,'nationality'); ?>
                            </td> 
                         </tr>
                         <tr>
                            <td>
                                <input name="Reviews[review_type]" type="radio" value="1" checked style="width:18px; float:left; border:none;" /><b>Excellent</b>
                                <input name="Reviews[review_type]" type="radio" value="2" style="width:18px; float:left; border:none;" /> <b>Very good</b> 
                                <input name="Reviews[review_type]" type="radio" value="3" style="width:18px; float:left; border:none;" /> <b> Average</b>     
                                <div class="clear"></div>   
                                <input name="Reviews[review_type]" type="radio" value="4" style="width:18px; float:left; border:none;" /> <b> Poor</b>           
                                <input name="Reviews[review_type]" type="radio" value="5" style="margin-left:35px;width:18px; float:left; border:none;" /> <b> Terrible</b>          
                            </td>
                         </tr>
                      </table>
                 </div>
                 <div class="chooseright_new">
                        <ul class="upload_list_new">
                            <li> <input name="files[]" type="file" style="width:auto;" /></li> 
                            <li> <input name="files[]" type="file" style="width:auto;" /></li>
                            <li> <input name="files[]" type="file" style="width:auto;" /></li>
                            <li> <input name="files[]" type="file" style="width:auto;" /></li>
                            <li> <input name="files[]" type="file" style="width:auto;" /></li>

                            <li> <input name="files[]" type="file" style="width:auto;" /></li>
                            <!--<li><img src="/images/reviews/add.png" onclick="addMorePic(this)" /></li>-->
                        </ul>
         
                 </div>
             </div>
             <div class="txtbottom_new"></div>
             <div class="clear"></div>
             <div class="confirm_old"><span>Verify Code: 
                  <?php echo $form->textField($model,'verifyCode',array('size'=>'10','style'=>' width:70px;')); ?>
                  <?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer;vertical-align: bottom;'))); ?>
                  <?php echo $form->error($model,'verifyCode');?>
             </span> 
             <input name="Reviews[tour_id]" type="hidden" value="<?php echo (int)$_GET['tour_id'];?>" />
                 <?php echo CHtml::imageButton("/images/reviews/button1.png", array('style'=>'border:0; height:33px; background:none; width:183px;'));?>
            </div>
            <?php $this->endWidget(); ?>
            <!-- tab1 end -->
        </div>
        <!-- tab1 end -->
        
        
        <!-- tab2 start-->
            <div id="tab1" style="display:none">
              <script type="text/javascript" src="http://www.leadtochina.com/travel/js/shareViewTripAdvisor.js"></script>
            </div>
            <div class="txtbottom_new"></div>
            </div>
        <!-- tab2 end -->


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
function addMorePic(obj){  
    $(obj).before('<li> <input name="files[]" type="file" style="width:auto;" /></li>');
    if($(obj).parents("ul.upload_list").find("li").length > 8){
      $(obj).hide();
    }
}

$(function(){
  $("#sharetab").find("ul li").click(function(){
      var inx = $("#sharetab").find("ul li").index(this);
      $("#sharetab").find("ul li").removeClass("dq");
      $("#sharetab").find("ul li").eq(inx).addClass("dq");
      $("#tab0,#tab1").hide();
      $("#tab"+inx).show();
  })
})
</script>
