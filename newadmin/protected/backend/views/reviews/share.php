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
         <p>With offering nuanced, high-quality China Inbound Tour services to overseas travelers through indefatigable work in several years, Hefei Full View Travel Agency has earned a tiny space in China Inbound Travel circle. Meanwhile, for grasping the aim of "providing perfect China travel experience for overseas tourists" precisely, Hefei Full View Travel Agency has set up high-quality service control system for monitoring the services from Customer Service Representative, trip advisor, editor, tour guide and driver from local tavel agency.</p>
         <p>Since 2008, thousands of overseas tourists have taken our services of touring amazing China and left us a plenty of positive reviews to praise our work, also available on Trip Advisor.com. It is no doubt that we feel so proud to receive these. Let's see what they have left to us and to you!</p>
       </div>
       <div class="textright"><img src="/images/reviews/top.jpg" alt="" /></div>
   </div>
   <div class="reviews-menu">
      <ul>
         <li><a href="#">Tour Company Reviews</a></li>
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

        <?php $form=$this->beginWidget('CActiveForm', array(
          'id'=>'reviews-form',
          'htmlOptions' => array('enctype' => 'multipart/form-data'),
          'enableClientValidation'=>true,
        )); ?>

        <div class="submit">
             <h2><a href="#"></a></h2>
             <div class="txt">
                <p>We do believe there is a long way need us to go before we touch the success and win your hearts.however,every word you typed here is the light of our way to it and will be the motivation of our work.any reviews,ideas.suggestions about our local service &amp; online websites experiences &amp; customer services are warmly welcom here.Thanks from Lead to China.</p>
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
                            <td>
                                <input name="Reviews[review_type]" type="radio" value="1" checked style="width:18px; float:left;" /><b>Positive()</b>
                                <input name="Reviews[review_type]" type="radio" value="2" style="width:18px; float:left;" /> <b>Common()</b> 
                                <input name="Reviews[review_type]" type="radio" value="3" style="width:18px; float:left;" /> <b>Negative()</b>
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
             <div class="confirm"><span>Verify Code: 
                  <?php echo $form->textField($model,'verifyCode',array('size'=>'10','style'=>' width:70px;')); ?>
                  <?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer;vertical-align: bottom;'))); ?>
                  <?php echo $form->error($model,'verifyCode');?>
             </span> 
                 <?php echo CHtml::imageButton("/images/reviews/button1.png");?>
            </div>
        </div>
        <?php $this->endWidget(); ?>

        <div class="clear"></div>
        <div class="rebanner"><a href="#"><img src="/images/reviews/banner.jpg" alt="" /></a></div>
    </div>
    <!--  content01   -->
</div>
<!--  recontent end  -->

<script>
function addMorePic(obj){
    $(obj).before('<li> <input name="files[]" type="file" style="width:auto;" /></li>');
}
</script>