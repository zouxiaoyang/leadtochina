<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/reviews.css'); ?>
<style type="text/css">
<!--
.rebanner{ margin-top:20px;}
.upload_list li{float:left;margin-right:20px;line-height: 35px;height: 35px;}
-->
</style>
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
          <li><a href="<?php echo Yii::app()->createUrl('reviews/index');?>">Tour Company Reviews</a></li>
          <li class="guest"><a href="<?php echo Yii::app()->createUrl('reviews/guestReviews');?>">Guest Reviews</a></li>
      </ul>
     
   </div>
</div>
<!--  reviews end  -->
<div style="clear:both"></div>

<!--  recontent start  -->
<div id="recontent">
    <!--  content01 start  -->
    <div class="content01">

        <?php $form=$this->beginWidget('CActiveForm', array(
          'id'=>'reviews-form',
          'htmlOptions' => array('enctype' => 'multipart/form-data'),
          'enableClientValidation'=>true,
        )); ?>

        <div class="submit">
             <h2><a href="#"></a></h2>
             <div class="txt">
                <p>We do believe there is a long way need us to go before we touch the success and win your hearts.however,every word you typed here is the light of our way to it and will be the motivation of our work.any reviews,ideas.suggestions about our local service &amp; online websites experiences &amp; customer services are warmly welcome here.Thanks from Lead to China.</p>
             </div>
             <div class="txtbottom"></div>
             <div class="write">
                 <div class="writecontent">
                    <?php echo $form->textarea($model,'description', array('style'=>'height:300px')); ?>
                    <?php echo $form->error($model,'description'); ?>
                 </div>
             </div>
             <div class="txtbottom"></div>
             <div class="choose">
                 <div class="chooseleft">
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
                                <input name="Reviews[review_type]" type="radio" value="1" checked style="width:18px; float:left; border:none;" /><b>Positive()</b>
                                <input name="Reviews[review_type]" type="radio" value="2" style="width:18px; float:left; border:none;" /> <b>Common()</b> 
                                <input name="Reviews[review_type]" type="radio" value="3" style="width:18px; float:left; border:none;" /> <b>Negative()</b>
                            </td>
                         </tr>
                      </table>
                 </div>
                 <div class="chooseright">
                        <ul class="upload_list">
                            <li> <input name="files[]" type="file" style="width:auto;" /></li> 
                            <li> <input name="files[]" type="file" style="width:auto;" /></li>
                            <li> <input name="files[]" type="file" style="width:auto;" /></li>
                            <li> <input name="files[]" type="file" style="width:auto;" /></li>
                            <li> <input name="files[]" type="file" style="width:auto;" /></li>
                            <li> <input name="files[]" type="file" style="width:auto;" /></li>
                            <li><img src="/images/reviews/add.png" onclick="addMorePic(this)" /></li>
                        </ul>
         
                 </div>
             </div>
             <div class="txtbottom"></div>
             <div class="clear"></div>
             <div class="confirm_old"><span>Verify Code: 
                  <?php echo $form->textField($model,'verifyCode',array('size'=>'10','style'=>' width:70px;')); ?>
                  <?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer;vertical-align: bottom;'))); ?>
                  <?php echo $form->error($model,'verifyCode');?>
             </span> 
             <input name="Reviews[tour_id]" type="hidden" value="<?php echo (int)$_GET['tour_id'];?>" />
                 <?php echo CHtml::imageButton("/images/reviews/button1.png", array('style'=>'border:0; height:33px; background:none; width:183px;'));?>
            </div>
        </div>
        <?php $this->endWidget(); ?>

        <div class="clear"></div>
        <div class="rebanner"><a href="/chinatour/"><img src="/images/reviews/banner.jpg" alt="" /></a></div>
    </div>
    <!--  content01   -->
</div>
<!--  recontent end  -->

<script>
function addMorePic(obj){  
      $(obj).before('<li> <input name="files[]" type="file" style="width:auto;" /></li>');
      if($(obj).parents("ul.upload_list").find("li").length > 8){
        $(obj).hide();
      }
}
</script>