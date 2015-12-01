<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/beijing.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>

<?php 
  $request_uri = Yii::app()->createUrl('cityTours/search',array('title'=>'beijing-tours')).'?';
?>
<style type="text/css">
<!--
#left{ margin-right:0px;}
.list1{ margin-top:20px;}
.tripAdvisor img{width:216px;height:68px;}
-->
</style>
<div id="menu-home1"><strong>You are here: </strong><a href="/">Home</a><a href="/citytour">City Tours</a> <a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'beijing-tours'));?>">Beijing Tours</a></div>
<!--  left start  -->
<div id="left">
    
   <?php $this->renderPartial('_bjSearch', array('subtagid_arr'=>$subtagid_arr,'city'=>$city,'days'=>$days));?>
   <!--  list1 start  -->  
   <?php $this->renderPartial('_listMenu', array('request_uri'=>$request_uri));?>
   <!--  list1 end  -->
   
   <!--  list4 start  -->
   <div class="list4">
      <h2>Hot Beijing Tours</h2>
      <ul>
        <?php if($beijingRecommendTours):?>
        <?php foreach($beijingRecommendTours as $v):?>
         <li><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($v['name']), 'id'=>$v['id']));?>">
          <img src="/uploads/cityTours/<?php echo $v['pic'];?>" /> <span><?php echo $v['name'];?></span></a></li>
        <?php endforeach;?>
      <?php else:?>
         <li><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe('4 Days Best Beijing Private Tours'), 'id'=>103));?>"><img src="/images/beijingtour/pic18.jpg" alt="" /> <span>4 Days Best Beijing Private Tours</span></a></li>
         <li><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe('4 Days Classic Beijing Group Tours'), 'id'=>90));?>"><img src="/images/beijingtour/pic19.jpg" alt="" /> <span>4 Days Classic Beijing Group Tours</span></a></li>
         <li><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe('1 Day Mutianyu Great Wall&Summer Palace Tour'), 'id'=>540));?>"><img src="/images/beijingtour/pic20.jpg" alt="" /> <span>1 Day Mutianyu Great Wall&Summer Palace Tour</span></a></li>
      <?php endif;?>
      </ul>
   </div>  
   <!--  list4 end  -->
   <div class="list2"><a href="/index.php?option=com_diytour"><img src="/images/beijingtour/tour.jpg" alt="" /></a></div>
   <!--  list3 start  -->
   <?php $this->renderPartial('_contactUs',array('model'=>$messageModel));?>
   <!--  list3 end  -->
     <div class="list2 tripAdvisor"><?php echo $this->renderPartial("//common/tripAdvisor");?></div>
</div>
<!--  left end  -->

<!--  newright start  -->
<div id="newright">
    <div id="zero"> 
            <div class="conditions">
          <h2>Selected Conditions:</h2>
          <ul>
              <?php if($days):?>
               <?php $link_days = http_build_query(array_diff_key($this->query,array('days'=>'')));?>
                <li><span><?php echo $days;?></span><a href="<?php echo Yii::app()->createUrl('cityTours/beijingTourSearch').'?'.$link_days;?>"><strong>&times;</strong></a></li>
              <?php endif;?>

              <?php if($city):?>
               <?php $link_city = http_build_query(array_diff_key($this->query,array('city'=>'')));?>
                <li><span><?php echo $city;?></span><a href="<?php echo Yii::app()->createUrl('cityTours/beijingTourSearch').'?'.$link_city;?>"><strong>&times;</strong></a></li>
              <?php endif;?>

              <?php if($subtags):?>
               <?php $link_subtags = http_build_query(array_diff_key($this->query,array('subtags'=>'')));?>
                <li><span><?php echo $subtags;?></span><a href="<?php echo Yii::app()->createUrl('cityTours/beijingTourSearch').'?'.$link_subtags;?>"><strong>&times;</strong></a></li>
              <?php endif;?>
          </ul>
       </div>
            <div class="choices">
          <h2>Beijing Tour Packages</h2>
          <ul>
             <li class="title2"><?php echo $dataProvider->totalItemCount;?> choices!</li>
             <?php if($dataProvider->totalItemCount):?>
                <?php if($this->order == 'price_down'):?>
                <li><a href="<?php echo Yii::app()->createUrl('cityTours/beijingTourSearch').'?'.http_build_query(array_merge($this->query,array('order'=>'price_up')));?>" style="cursor:pointer;">Price ↓</a></li>
                <?php else:?>
                  <li><a href="<?php echo Yii::app()->createUrl('cityTours/beijingTourSearch').'?'.http_build_query(array_merge($this->query,array('order'=>'price_down')));?>" style="cursor:pointer;">Price ↑</a></li>
                <?php endif;?>
                <?php if($this->order == 'day_down'):?>
                  <li><a href="<?php echo Yii::app()->createUrl('cityTours/beijingTourSearch').'?'.http_build_query(array_merge($this->query,array('order'=>'day_up')));?>" style="cursor:pointer;">Days ↓</a></li>
                <?php else:?>
                  <li><a href="<?php echo Yii::app()->createUrl('cityTours/beijingTourSearch').'?'.http_build_query(array_merge($this->query,array('order'=>'day_down')));?>" style="cursor:pointer;">Days ↑</a></li>
                <?php endif;?>
                <?php if($this->order == 'reviews_down'):?>
                  <li><a href="<?php echo Yii::app()->createUrl('cityTours/beijingTourSearch').'?'.http_build_query(array_merge($this->query,array('order'=>'reviews_up')));?>" style="cursor:pointer;">Reviews ↓</a></li>
                <?php else:?>
                <li><a href="<?php echo Yii::app()->createUrl('cityTours/beijingTourSearch').'?'.http_build_query(array_merge($this->query,array('order'=>'reviews_down')));?>" style="cursor:pointer;">Reviews ↑</a></li>
                <?php endif;?>
              <?php endif;?>
          </ul>
       </div>
     <div class="tour-list">
            <?php if($dataProvider->totalItemCount):?>
              <?php $this->widget('zii.widgets.CListView', array(
                 'dataProvider'=>$dataProvider,
                 'itemView'=>'_search_list',
                 'ajaxUpdate'=>false,
                  'pager'=>array(
                    'cssFile'=>False,
                    'header'=>'',
                  ),
                 'template'=>"{items}\n{pager}",
               )); ?>
            <?php else:?>
                <!-- zero start -->
                   <div class="zero">
                         <!-- found start -->
                         <div class="found" style="display:none;">
                           <h2>Your search found: <span>0 Packages</span></h2>
                           <ul>
                             <li class="title3">You are searching for:</li>
                             <li><span>Beijing.Shanghai,Guilin,Huangshan,Hangzhou</span> <strong></strong></li>
                           </ul>
                         </div>
                         <!-- found end -->
                         
                         <!-- trips start -->
                         <div class="trips">
                              <h2><span>0</span> trips have been found based on your choices!</h2>
                              <p>Can not find package to meet your request ?  Do not disappointed! Just leave your travel plan here, and we will customize a tour with
                price for you.</p>
                         </div>
                         <!-- trips end -->
                         <!-- thoughts start -->
                         <div class="thoughts">
                             <h2>My thoughts on the tour</h2>
                             <?php $form=$this->beginWidget('CActiveForm', array(
                                'id'=>'tours-package-form',
                                'enableClientValidation'=>true,
                             )); ?>
                             <div class="thoughts-cont">
                                   <div class="bookingDetail">
                                       <table width="50%" cellspacing="0" cellpadding="0" border="0" style="color:#000; float:left; margin-bottom:8px;">
                                         <tbody>
                                            <tr>
                                              <td width="33%" class="tesu">Adults(&gt;12)<br>
                                                  <?php
                                                  for($i=1;$i<31;$i++) $arr[$i]=$i;
                                                  echo $form->dropDownList($model,'adults', $arr, array('options'=>array('2'=>array('selected'=>true))));
                                                  ?>
                                     </td> 
                                    <td width="38%" class="tesu">Children(2-12)<br>
                                          <?php
                                            unset($arr);
                                            for($i=0;$i<31;$i++) $arr[$i]=$i;
                                            echo $form->dropDownList($model,'children', $arr);
                                            ?>
                                     </td> 
                                    <td width="29%" class="tesu">Babies(0-2)<br>
                                              <?php
                                              unset($arr);
                                              for($i=0;$i<12;$i++) $arr[$i]=$i;
                                              echo $form->dropDownList($model,'infant', $arr);
                                              ?>
                                     </td>   
                               </tr>
                               <tr>
                                   <td colspan="3">
                                    <?php echo $form->textArea($model,'other_message', array('style'=>'margin-top:10px; height:150px; width:305px;','class'=>'simpleinfoBox'));?>
                                   </td>
                               </tr>
                             </tbody></table>
                             <div class="intersets-new">
                                 <h2>My Interests:</h2>
                                 <ul>
                                   <li>
                                    <span>
                                      <?php if($days):?>
                                        <?php echo $days;?>
                                      <?php endif;?>
                                      <?php if($city):?>
                                        <?php echo $city;?>
                                      <?php endif;?>
                                      <?php if($subtags):?>
                                       <?php echo $subtags;?>
                                      <?php endif;?>
                                   </span> <strong></strong></li>
                                </ul>
                             </div>
                             <div class="tipsBox roundCorner">
                                  <div class="arrowLeft"></div>
                                            <ol>
                                                 <li>1. Length of stay in China</li>
                                                 <li>2. City or cities of entry/exit</li>
                                                 <li>3. Places or attraction that you want to visit </li>
                                                 <li>4. Class of Hotel: 3 star/4 star/5 star</li>
                                                 <li>5. Estimative total budget per person</li>
                                            </ol>
                              </div>
                                   </div>
                                   <div class="thoughts1">
                                        <h2>Fill in Your Information</h2>
                                        <div class="personalInfo">
                                            <label> Full Name: </label>
                                            <select name="Order[gender]" id="Gender_1" style="width:70px;">
                                              <option value="Mr."> Mr.</option>
                                              <option value="Ms."> Ms.</option>
                                            </select>
                                            <?php echo $form->textField($model,'full_name',array('style'=>"width:197px;")); ?>
                                            <?php echo $form->error($model,'full_name'); ?>
                                        </div>
                                        <div class="personalInfo">
                                            <label> Nationality:</label>
                                            <input type="text" autocomplete="off" name="nationality" class="nationality ac_input" id="nationality">
                                        </div>
                                        <div class="clear"></div>
                                        <div class="personalInfo">
                                            <label> Email Address:</label>
                                            <?php echo $form->textField($model,'email', array('class'=>'email')); ?>
                                            <?php echo $form->error($model,'email'); ?>
                                        </div>
                                        <div class="personalInfo">
                                            <label> Telephone:</label>
                                            <?php echo $form->textField($model,'phone', array('class'=>'telephone')); ?>
                                            <?php echo $form->error($model,'telephone');?>
                                        </div>
                                        <div class="personalInfo">
                                        <label>Tour Starting Date:</label>
                                          <?php echo $form->textField($model,'entry_date',array('onclick'=>"WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})",'class'=>'
Wdate'));?>
                                          <?php echo $form->error($model,'entry_date');?>
                                        </div>
                                    </div>
                                   <div class="clear"></div>
                                   <div class="otherRequest01">
                                            <div class="submitButton">
                                                <input type="image" style="width:189px;height:37px;border:0px;cursor:pointer;background:url(/images/newhomepage/confirm-submit-button.jpg) no-repeat; display:block;" value="">
                                                <span>No booking fees!</span> 
                                            </div>
                                        </div>
                             </div>
                             <?php $this->endWidget(); ?>
                         </div>
                         <!-- thoughts end -->
                         <div class="similar" style="display:none;">
                            <h2>Similar Itineraries may Interest You</h2>
                            <div class="tour-list">
                              <ul>
                                 <li class="pic"><a href="#"><img src="/images/beijingtour/pic10.jpg" alt="" /></a></li>
                                 <li>
                                   <ol>
                                      <li><a href="#">4 Days Best Beijing Private Tours</a></li>
                                      <li class="desc"><strong>Destination:</strong><span>Beijng</span><br />
                                          <strong>Included:</strong>4 star Hotels ,Entrance fees ,Personal Guide & Driver + Private car/Van<br />
                                          <strong>Highlights</strong>:Great Wall of China,Temple of Heaven,Forbidden City,Summer Palace ,Ming Tombs,Olympic Venues,Chinese Food Massage,Tiananmen Square</li>
                                   </ol>
                                 </li>
                                 <li class="picright">
                                     <span>[Reviews <a href="#">6</a>]</span>
                                     <span>From <strong>$424</strong></span>
                                     <a class="details" href="#">Itinerary Details</a>
                                 </li>
                              </ul>
                            </div>
                         </div>
                      </div>
                    <!-- zero end -->

            <?php endif;?>
       </div>
    </div>
</div>
<!--  newright end  -->

<script type="text/javascript">
  var _bj = (function($){
    return {
      searchtab:function(obj){
        var span_obj = $(obj).parents(".right1").find("h2 > span");
        span_obj.removeClass("dq");
        var inx = span_obj.index(obj);
        $(obj).addClass("dq");
        $(obj).parents(".right1").find("div.search").hide();
        $(obj).parents(".right1").find("div.search").eq(inx).show();
      },
    }
  }(jQuery));

</script>
