<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/studenttour.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/koala.min.1.5.js'); 
$this->setPageTitle("China Homeland & Heritage Tours Reviews, Reviews on China Adoption Reunion Tours");
Yii::app()->clientScript->registerMetaTag('keywords','china homeland tour review，reviews chinese adoptee heritage tours.');
Yii::app()->clientScript->registerMetaTag('description','Read about the verified reviews on China homeland tours from adoptive families here.');?>

<style type="text/css">
<!--
#CDSWIDSSP .widSSPData {
    padding: 7px 4px;
    width: 210px;
	height:310px;
	border-radius: 0px;
}

#CDSWIDSSP .widSSPData .widSSPInformation{padding: 8px 0 10px;}
#CDSWIDSSP .widSSPData .widSSPReviews .widSSPH11{ padding-top:6px;}
#CDSWIDSSP .widSSPData .widSSPAll{ margin-bottom:0px;}
#CDSWIDSSP .widSSPData .widSSPH11{ padding: 5px 0 3px;}
#CDSWIDSSP .widSSPData .widSSPBranding{ margin-bottom:3px;}
#CDSWIDSSP.widSSPnarrow .widSSPData .widSSPBranding dd {display:none;}
#CDSWIDSSP .widSSPData .widSSPH18{display:none;}

.ui-slider-pic{width:575px;height:144px;position:absolute;overflow:hidden; margin-left: 45px;}
.ui-slider-pic ul li{float:left;width:170px;height:144px;margin-right:15px;}
.ui-slider-pic ul li img{width:170px;height:144px;}
.pager {text-align:right;padding-bottom:15px; clear:both}
#yw1 {width:648px margin:0 auto;}
.pager ul li {float: left;height: auto;padding: 0;color:#999; padding:3px 0px; margin:10px 5px;border: 1px solid #ddd; width:70px; text-align:center}
.pager ul li a{ color:#333; text-decoration:none}
.pager ul li a:hover{ color:#000; text-decoration:underline}
.pager .selected{ background:#8c4600;border: 1px solid #ddd;}
.pager .selected a{ color:#fff;}
.pager .page{ width:25px;}
.pager .first, .pager .last{display:none !important;}
 -->
</style>
<div class="content1">
  <!--  left1 start  -->
  <div id="left1" style="margin-top:0px;"> 
     <!--  return start  -->
     <div class="return">
        <div class="title1">Latest Travel Stories</div>
        <div class="latest-list">
         
          <?php $this->widget('zii.widgets.CListView', array(
               'dataProvider'=>$chinaGuideArticle,
               'itemView'=>'_storyList',
               'ajaxUpdate'=>false,
                'pager'=>array(
                  'cssFile'=>False,
                  'header'=>'',
                ),
               'template'=>"{items}\n{pager}",
          )); ?>
</div>
     </div>
     <!--  return start  -->
     

     
     <!--  reviews start  -->
     <div class="reviews">
             <h2><a href="#"></a></h2>
             <div class="txt">
                <p>We do believe there is a long way need us to go before we touch the success and win your hearts.however,every word you typed here is the light of our way to it and will be the motivation of our work.any reviews,ideas.suggestions about our local service &amp; online websites experiences &amp; customer services are warmly welcome here.Thanks from Lead to China.</p>
             </div>

        <?php $form=$this->beginWidget('CActiveForm', array(
          'id'=>'reviews-form',
          'htmlOptions' => array('enctype' => 'multipart/form-data'),
          'enableClientValidation'=>true,
        )); ?>
             <div class="write">
                 <div class="writecontent">
                    <?php echo $form->textarea($model,'description', array('style'=>'height:300px')); ?>
                    <?php echo $form->error($model,'description'); ?>         
                  </div>
             </div>
             <div class="choose">
                 <div class="chooseleft">
                      <table cellspacing="0" cellpadding="0" border="0">
                         <tbody><tr>
                            <td>Full Name: <span>*</span><br>
                              <select name="Reviews[gender]">
                                <option value="Mr."> Mr.</option>
                                <option value="Ms."> Ms.</option>
                              </select>
                               <?php echo $form->textField($model,'name',array('style'=>"width:211px; float:left;")); ?>
                              <?php echo $form->error($model,'name'); ?>
                              </td> 
                         </tr>
                         <tr>
                            <td>Email Address:<span>*</span><br>
                              
                              <?php echo $form->textField($model,'email'); ?>
                              <?php echo $form->error($model,'email'); ?>
                              </td> 
                         </tr>
                         <tr>
                            <td>Telephone: <br>
                            <?php echo $form->textField($model,'telephone'); ?>
                            <?php echo $form->error($model,'telephone'); ?>   
                            </td> 
                         </tr>
                          <tr>
                            <td>Nationality: <br>
                                <?php echo $form->textField($model,'nationality'); ?>
                               <?php echo $form->error($model,'nationality'); ?>
                               </td> 
                         </tr>
                         <tr>
                            <td>
                                <input type="radio" style="width:18px; float:left; border:none;" checked="" value="1" name="Reviews[review_type]"><b>Positive()</b>
                                <input type="radio" style="width:18px; float:left; border:none;" value="2" name="Reviews[review_type]"> <b>Common()</b> 
                                <input type="radio" style="width:18px; float:left; border:none;" value="3" name="Reviews[review_type]"> <b>Negative()</b>
                            </td>
                         </tr>
                      </tbody></table>
                 </div>
                 <div class="chooseright">
                        <ul class="upload_list">
                            <li> <input type="file" style="width:auto;" name="files[]"></li> 
                            <li> <input type="file" style="width:auto;" name="files[]"></li>
                            <li> <input type="file" style="width:auto;" name="files[]"></li> 
                            <li> <input type="file" style="width:auto;" name="files[]"></li>
                            <li><img onclick="addMorePic(this)" src="/images/adoptionNew/add.jpg"></li>
                        </ul>
         
                 </div>
                 <div class="clear"></div>
                 <div class="confirm"><span>Verify Code: 
                  <?php echo $form->textField($model,'verifyCode',array('size'=>'10','style'=>' width:70px;')); ?>
                  <?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer;vertical-align: bottom;'))); ?>
                  <?php echo $form->error($model,'verifyCode');?>
                </span>
                <input name="Reviews[tour_id]" type="hidden" value="<?php echo (int)$_GET['tour_id'];?>" />
                 <input type="image" value="submit" name="yt0" src="/images/reviews/button1.png" style="border:0; height:33px; background:none; width:183px;">            </div>
             </div>
             <?php $this->endWidget(); ?>
             <div class="txtbottom"></div>    
     </div>
     <!--  reviews end  -->
  </div>
  <!--  left1 end  -->

  <!--  right1 start  -->
  <div id="right1">
     
     <?php $this->renderPartial("_right", array('chinaAdoptionGuide'=>$chinaAdoptionGuide));?>
      
      <!--  whynew1 start  -->
    <div class="whynew1">
     <h2><img src="/images/adoption/why.png" alt="" /></h2>
     <ul>
      <li>Professional English Speaking Tour Guide with Extensive Knowledge</li>
      <li>Barrier-free China Orphanage Visiting</li> 
      <li>Tailor made China Tour to your EVERY interest</li>
     </ul>
  </div>
  <!--  whynew1 end  -->
  <div class="tripcont" style="margin-top:20px;">
  <div class="code">
      <script type="text/javascript" src="/travel/js/tripadvisor.js"></script>
  </div>
  </div> 
    
  </div>
  <!--  right1 end  -->
</div>

<script>
function addMorePic(obj){  
      $(obj).before('<li> <input name="files[]" type="file" style="width:auto;" /></li>');
      if($(obj).parents("ul.upload_list").find("li").length > 8){
        $(obj).hide();
      }
}
</script>

<script type="text/javascript">
    $(function () {

     var ti = 0;
     var li = $("#pic_list").find("li");
     var li_width = li.eq(0).width()+20;

     var num = 3;
     $("#pic_left").click(function(){
         ti--;
         scroll(ti);
     })
     $("#pic_right").click(function(){
      
        ti++;
        console.log(ti);
        scroll(ti);
     })
     
     function scroll(i){
       
        var move_width = num * li_width * i;
        if(move_width < 0) {ti=0;console.log(ti);return;}
        if(move_width > li_width * li.length) {ti = ti-1;return;}
        $("#pic_list ul").animate({marginLeft:-move_width}, 1000);
     }
     
    });
</script>
