<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/beijing.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>

<?php
include_once(SITEROOT.'/config/beijingtours.php');
$request_uri = Yii::app()->createUrl('cityTours/search',array('title'=>$title)).'?';
?>
<style type="text/css">
<!--
#left{ margin-right:0px;}
.tripAdvisor img{width:216px;height:68px;}
-->
</style>
<div id="menu-home1"><strong>You are here: </strong><a href="/">Home</a><a href="/citytour">City Tours</a> 
  <a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>$title));?>">Beijing Tours</a>
  <?php 
    if($_GET['theme']) echo $themes[(int)$_GET['theme']];
    elseif($_GET['tour_type']){
      echo $tour_type[(int)$_GET['tour_type']];
    }elseif($_GET['des']){
      echo $destination[(int)$_GET['des']];
    }
  ?>
</div>
<!--  left start  -->
<div id="left">
   <!--  list1 start  -->  
   <?php $this->renderPartial('_listMenu', array('request_uri'=>$request_uri));?>
   <!--  list1 end  -->
      
   <!--  list4 start  -->
   <div class="list4">
   <?php if($_GET['des'] == '2_Beijing Xian Tours'):?>
    <a href="/xian/tours" target="_blank"><img src="/images/beijingtours/xian.jpg" /></a>
   <?php elseif($_GET['des'] == '5_Beijing Shanghai Tours'):?>
    <a href="/shanghai/tours" target="_blank"><img src="/images/beijingtours/shanghai.jpg" /></a>
   <?php else:?>
      <h2>Hot Beijing Tours</h2>
      <ul>
         <li><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe('4 Days Best Beijing Private Tours'), 'id'=>103));?>"><img src="/images/beijingtour/pic18.jpg" alt="" /> <span>4 Days Best Beijing Private Tours</span></a></li>
         <li><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe('4 Days Classic Beijing Group Tours'), 'id'=>90));?>"><img src="/images/beijingtour/pic19.jpg" alt="" /> <span>4 Days Classic Beijing Group Tours</span></a></li>
         <li><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe('2 Days Explore the World Heritage in Beijing'), 'id'=>333));?>"><img src="/images/beijingtour/pic20.jpg" alt="" /> <span>2 Days Explore the World Heritage in Beijing</span></a></li>
      </ul>     
   <?php endif;?>
   </div>

   <!--  list4 end  -->
   <div class="list2"><a href="/index.php?option=com_diytour"><img src="/images/beijingtour/tour.jpg" alt="" /></a></div>
   <!--  list3 start  -->
   <?php $this->renderPartial('_contactUs',array('model'=>$messageModel));?>
   <!--  list3 end  -->
   <div class="list2 tripAdvisor">
   <?php $this->renderPartial('//common/tripAdvisor');?>
   </div>
</div>
<!--  left end  -->

<!--  newright start  -->
<div id="newright">

   <div class="side">
      <h2>Beijing Tours</h2>
      <div class="side-tours">
         
         <?php if(($_GET['tour_type'] && !$_GET['des']) || $_GET['theme']):?>
         <ul class="tesu">
              <li class="title1">By Theme:</li>
              <?php $query = $this->query;unset($query['theme']);$remove_link_theme = http_build_query($query);?>
              <li <?php if($this->theme==0):?>class="dqall" <?php else:?>class="all" <?php endif;?>><a href="<?php echo $request_uri.$remove_link_theme;?>">All</a></li>
              <li class="tours1">
                <ol>
                    <?php foreach($themes as $k=>$v):?>
                    <?php $link_theme = http_build_query(array_merge($this->query,array('theme'=>$k.'_'.$v)));?>
                    <li <?php if($this->theme==$k):?>class="biggerdq" <?php else:?>class="bigger" <?php endif;?>><a href="<?php echo $request_uri.$link_theme;?>"><?php echo $v;?></a></li>
                    <?php endforeach;?>
                </ol>
              </li>
          </ul>
        <?php endif;?>

        <?php if(in_array($_GET['des'],array(1,2,5))):
          if($_GET['des'] == 1) $cat1Arr = $one_category['great_wall_tour'];
          else if($_GET['des'] == 2) $cat1Arr = $one_category['beijing_xian_tour'];
          else if($_GET['des'] == 5) $cat1Arr = $one_category['beijing_shanghai_tour'];
        ?>

          <?php $query = $this->query;unset($query['cat1']);$remove_link_cat1 = http_build_query($query); ?>
          <ul class="tesu">
              <li class="title1">By Theme:</li>
              <?php $query = $this->query;unset($query['cat1']);$remove_link_cat1 = http_build_query($query);?>
              <li <?php if($this->cat1==0):?>class="dqall" <?php else:?> class="all" <?php endif;?>><a href="<?php echo $request_uri.$remove_link_cat1;?>">All</a></li>
              <li class="tours1">
                 <ol>
                  <?php foreach($cat1Arr as $k=>$v):?>
                    <?php $link_cat1= http_build_query(array_merge($this->query,array('cat1'=>$k.'_'.$v)));?>
                    <li <?php if($this->cat1==$k):?>class="biggerdq" <?php else:?>class="bigger" <?php endif;?>><a href="<?php echo $request_uri.$link_cat1;?>"><?php echo $v;?><span></span></a></li>
                  <?php endforeach;?>
                 </ol>
              </li>
           </ul>
        <?php endif;?>

        <?php if(in_array($_GET['des'], array(6,7,8,9,10,11,12,14,15,17)) || empty($this->query)):?>
            <?php $query = $this->query;unset($query['des']);$remove_link_des = http_build_query($query);?>
           <ul>
              <li class="title1">Destination:</li>
              <?php $query = $this->query;unset($query['des']);$remove_link_des = http_build_query($query);?>
              <li <?php if($this->des==0):?>class="dqall" <?php else:?> class="all" <?php endif;?>><a href="<?php echo $request_uri.$remove_link_des;?>">All</a></li>
              <li class="tours1">
                 <ol>
                  <?php foreach($destination as $k=>$v):?>
                    <?php 
                      if($k==16 || $k == 17) continue;
                      $link_des= http_build_query(array_merge($this->query,array('des'=>$k.'_'.$v)));?>
                    <li <?php if($this->des==$k):?>class="dq" <?php endif;?>><a href="<?php echo $request_uri.$link_des;?>"><?php echo $v;?><span>(<?php echo $destination_count[$k];?>)</span></a></li>
                  <?php endforeach;?>
                  	
                 </ol>
              </li>
           </ul>
        <?php endif;?>

        <?php
          if($_GET['des'] == '1_Great Wall Tours' || $_GET['des'] == '2_Beijing Xian Tours'){
            $days = array('Half Day',  '1 Day',  '2 Days',  '3 Days',  '4-6 Days');
          }
        ?>
         <ul>
            <li class="title1">Duration:</li>
            <?php $query = $this->query;  unset($query['days']);  $remove_link_days = http_build_query($query);?>
            <li <?php if(!$this->day):?>class="dqall" <?php else:?> class="all" <?php endif;?>><a href="<?php echo $request_uri.$remove_link_days;?>">All</a></li>
            <li class="tours1">
               <ol class="day">
              <?php foreach($days as $k=>$v):?>
              <?php $link_days = http_build_query(array_merge($this->query,array('days'=>$v)));?>
              <li <?php if($_GET['days']==$v):?>class="dq" <?php endif;?>><a href="<?php echo $request_uri.$link_days; ?>"><?php echo $v;?></a></li>
              <?php endforeach;?>
               </ol>
            </li>
         </ul>

         <ul style="border:none;">
            <li class="title1">Tour Type:</li>
            <?php $query = $this->query;unset($query['tour_type']);$remove_link_tour_type = http_build_query($query);?>
            <li <?php if($this->tour_type==0):?>class="dqall" <?php else:?> class="all" <?php endif;?>><a href="<?php echo $request_uri.$remove_link_tour_type;?>">All</a></li>
            <li class="tours1">
               <ol>
                <?php foreach($tour_type as $k=>$v):?>
                  <?php $link_tour_type = http_build_query(array_merge($this->query,array('tour_type'=>$k.'_'.$v)));?>
                  <li <?php if($this->tour_type==$k):?>class="dq" <?php endif;?>><a href="<?php echo $request_uri.$link_tour_type;?>"><?php echo $v;?></a></li>
                <?php endforeach;?>
               </ol>
            </li>
         </ul>

        <?php if($_GET['des'] == '5_Beijing Shanghai Tours'):?>
            <?php 
              $price = array('Below $201-$500', '$501-$1000',  'Above $1001');
              $transportations = array('Train','Flight');
            ?>
          <ul style="border:none;">
            <li class="title1" style="width:110px;">Transportations:  </li>
            <?php $query = $this->query;unset($query['transportation']);$remove_link_transportation = http_build_query($query);?>
            <li <?php if(!$this->transportation):?>class="dqall" <?php else:?> class="all" <?php endif;?>><a href="<?php echo $request_uri.$remove_link_transportation;?>">All</a></li>
            <li class="tours1" style="width:505px;">
               <ol>
                <?php foreach($transportations as $k=>$v):?>
                  <?php $link_transportation = http_build_query(array_merge($this->query,array('transportation'=>$v)));?>
                  <li <?php if($this->transportation==$v):?>class="dq" <?php endif;?>><a href="<?php echo $request_uri.$link_transportation;?>"><?php echo $v;?></a></li>
                <?php endforeach;?>
               </ol>
            </li>
          </ul>
        <?php elseif( $_GET['des'] == '2_Beijing Xian Tours'):?>
            <?php $price = array('$300-$500', '$501-$800', '$801-$1500'); ?>
        <?php endif;?>

         <ul style="border:none;">
            <li class="title1">By Price:</li>
            <?php $query = $this->query;unset($query['price']);$remove_link_price = http_build_query($query);?>
            <li <?php if(!$_GET['price']):?>class="dqall" <?php else:?> class="all" <?php endif;?>><a href="<?php echo $request_uri.$remove_link_price;?>">All</a></li>
            <li class="tours1">
                 <ol>
                  <?php foreach($price as $k=>$v):?>
                    <?php $link_price = http_build_query(array_merge($this->query,array('price'=>$v)));?>
                    <li <?php if($_GET['price']==$v):?>class="dq" <?php endif;?>><a href="<?php echo $request_uri.$link_price;?>"><?php echo $v;?></a></li>
                  <?php endforeach;?>
                 </ol>
              </li>
         </ul>

      </div>
   </div>
   <div class="select">
       <div class="conditions" style="display:none;">
          <h2>Selected Conditions:</h2>
          <ul>
              <?php if($this->des):?>
                <li><span><?php echo $destination[(int)$this->des];?></span><a href="<?php echo $request_uri.$remove_link_des;?>"><strong>&times;</strong></a></li>
              <?php endif;?>

              <?php if($this->day):?>
                <li><span><?php echo $_GET['days'];//if($this->day == 99) echo $days[99];else echo $days[(int)$this->day];?></span>
                <a href="<?php echo $request_uri.$remove_link_days;?>"><strong>&times;</strong></a></li>
              <?php endif;?>

              <?php if($this->tour_type):?>
                  <li><span><?php echo $tour_type[(int)$this->tour_type];?></span><a href="<?php echo $request_uri.$remove_link_tour_type;?>"><strong>&times;</strong></a></li>
              <?php endif;?>

              <?php if($this->theme):?>
              <?php $query = $this->query;unset($query['theme']);$remove_link_theme = http_build_query($query);?>
                  <li><span><?php echo $themes[(int)$this->theme];?></span><a href="<?php echo $request_uri.$remove_link_theme;?>"><strong>&times;</strong></a></li>
              <?php endif;?>

              <?php if($this->cat1):?>
              <?php $query = $this->query;unset($query['cat1']);$remove_link_cat1 = http_build_query($query);?>
                  <li><span><?php echo $cat1Arr[(int)$this->cat1];?></span><a href="<?php echo $request_uri.$remove_link_cat1;?>"><strong>&times;</strong></a></li>
              <?php endif;?>
          </ul>
       </div>
       <div class="choices">
          <h2>
            <?php 
              if($_GET['theme']) echo $themes[(int)$_GET['theme']];
              elseif($_GET['tour_type']){
                echo $tour_type[(int)$_GET['tour_type']];
              }elseif($_GET['des']){
                echo $destination[(int)$_GET['des']];
              }
            ?>
          </h2>
          <ul>
             <li class="title2"><?php echo $dataProvider->totalItemCount;?> choices!</li>
             <?php if($dataProvider->totalItemCount):?>
                <?php if($this->order == 'price_down'):?>
                <li><a href="<?php echo $request_uri.http_build_query(array_merge($this->query,array('order'=>'price_up')));?>" style="cursor:pointer;">Price ↓</a></li>
                <?php else:?>
                  <li><a href="<?php echo $request_uri.http_build_query(array_merge($this->query,array('order'=>'price_down')));?>" style="cursor:pointer;">Price ↑</a></li>
                <?php endif;?>
                <?php if($this->order == 'day_down'):?>
                  <li><a href="<?php echo $request_uri.http_build_query(array_merge($this->query,array('order'=>'day_up')));?>" style="cursor:pointer;">Days ↓</a></li>
                <?php else:?>
                  <li><a href="<?php echo $request_uri.http_build_query(array_merge($this->query,array('order'=>'day_down')));?>" style="cursor:pointer;">Days ↑</a></li>
                <?php endif;?>
                <?php if($this->order == 'reviews_down'):?>
                  <li><a href="<?php echo $request_uri.http_build_query(array_merge($this->query,array('order'=>'reviews_up')));?>" style="cursor:pointer;">Reviews ↓</a></li>
                <?php else:?>
                <li><a href="<?php echo $request_uri.http_build_query(array_merge($this->query,array('order'=>'reviews_down')));?>" style="cursor:pointer;">Reviews ↑</a></li>
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
                                              <td width="33%">Adults(&gt;12)<br>
                                                  <?php
                                                  for($i=1;$i<31;$i++) $arr[$i]=$i;
                                                  echo $form->dropDownList($model,'adults', $arr, array('options'=>array('2'=>array('selected'=>true))));
                                                  ?>
                                     </td> 
                                    <td width="38%">Children(2-12)<br>
                                          <?php
                                            unset($arr);
                                            for($i=0;$i<31;$i++) $arr[$i]=$i;
                                            echo $form->dropDownList($model,'children', $arr);
                                            ?>
                                     </td> 
                                    <td width="29%">Babies(0-2)<br>
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
                                      <?php if($this->des):?>
                                        <?php echo $destination[(int)$this->des];?>
                                      <?php endif;?>
                                      <?php if($this->day):?>
                                        <?php if($this->day == 99) echo $days[99];else echo $days[(int)$this->day];?>
                                      <?php endif;?>

                                      <?php if($this->tour_type):?>
                                          <?php echo $tour_type[(int)$this->tour_type];?>
                                      <?php endif;?>

                                      <?php if($this->theme):?>
                                       <?php echo $themes[(int)$this->theme];?>
                                      <?php endif;?>

                                      <?php if($this->cat1):?>
                                      <?php echo $cat1Arr[(int)$this->cat1];?>
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
                                                <input type="image" value="" style="width:189px;display:block;height:37px;border:0px;cursor:pointer;background:url(/images/newhomepage/confirm-submit-button.jpg) no-repeat;">
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
