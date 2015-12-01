<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/yangtzenew.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(yii::app()->request->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>
<style type="text/css">
<!--
#menu-home{ width:911px;}
.not_morelist{ top:240px;}
.searchnew{ margin-top:8px;}
-->
</style>
<!--  middle1 start   -->
<div id="middle1">
    <!--  menu-home start   -->
    <div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> 
    <a href="<?php echo Yii::app()->createUrl('cruise/index');?>">Yangtze Cruise</a> 
    <a href="<?php echo Yii::app()->createUrl('cruise/ships');?>">Yangtze Cruise Ships</a>
    <?php echo Cruise::$category[$category];?>
    </div>
    <!--  menu-home end   -->
    <div class="clear"></div>
    <!--  left start   -->
    <div id="left">
       <!--  textnew start   -->
       <div class="textnew">
           <h2><?php echo Cruise::$category[$category];?></h2>
           <p><?php echo Cruise::$categoryDescription[$category];?></p>
       </div>
       <!--  textnew end   -->
       
       <!--  deals start   -->
       <div class="deals" style="margin-top:25px;">
          <div class="shipstitle2">Top <?php echo Cruise::$category[$category];?></div>
          <div class="clear"></div>
          <?php if($recommend_cruise):?>
          <?php foreach($recommend_cruise as $v):?>
          <ul>
             <li class="pic" style="width:192px;height:79px;"><a href="<?php echo $v->getUrl();?>"><img src="<?php echo ImageUtils::getThumbnail(Cruise::UPLOAD_PATH.$v->ufile,'192x79');?>" /></a></li>
             <li class="name"><a href="<?php echo $v->getUrl();?>"><?php echo $v->cruise_name;?></a><span class="star<?php echo $v->cruise_grade;?>"></span></li>
             <li class="route"><strong>ROUTE:</strong> <span><?php echo Cruise::$upCityDays[$v->upcity].Cruise::$upCityArr[$v->upcity];?></span>
                                      <span><?php echo Cruise::$downCityDays[$v->downcity].Cruise::$downCityArr[$v->downcity];?></span>
             </li>
             <li class="price">From:<strong><?php echo SiteUtils::getCurrencyPrice($v->uplowprice);?></strong> p/p</li>
             <!-- <li><a href="<?php echo $v->getUrl();?>#orderForm"><img src="/images/yangtze/inquiry.png" alt="" /></a></li> -->
          </ul>
          <?php endforeach;?>
          <?php endif;?>
       </div>
       <!--  deals end   -->
       
       <!--  ships-tab start   -->
       <div class="ships-tab">
           <!--  shipsmenu start   -->
           <div class="shipsmenu">
              <ul>
                 <li class="dq" onclick="_cruise.change_tab(this, 1);">Cruise Calendar</li>
                 <li onclick="_cruise.change_tab(this, 2);">Itinerary</li>
                 <li onclick="_cruise.change_tab(this, 3);">Fleet</li>
              </ul>
           </div>
           <!--  shipsmenu end   -->
           
           <!--  Cruise Calendar start   -->
           <div id="c01">
               <!--  month start   -->
               <div class="month">
                  <ul>                       
                        <li><a <?php if($month==1):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('cruise/categoryList',array('year'=>2014,'month'=>1,'category'=>$category));?>">Jan.</a></li>    
                        <li><a <?php if($month==2):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('cruise/categoryList',array('year'=>2014,'month'=>2,'category'=>$category));?>">Feb.</a></li>    
                        <li><a <?php if($month==3):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('cruise/categoryList',array('year'=>2014,'month'=>3,'category'=>$category));?>">Mar.</a></li>    
                        <li><a <?php if($month==4):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('cruise/categoryList',array('year'=>2014,'month'=>4,'category'=>$category));?>">Apr.</a></li>    
                        <li><a <?php if($month==5):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('cruise/categoryList',array('year'=>2014,'month'=>5,'category'=>$category));?>">May.</a></li>
                        
                        <li><a <?php if($month==6):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('cruise/categoryList',array('year'=>2014,'month'=>6,'category'=>$category));?>">Jun.</a></li>    
                        <li><a <?php if($month==7):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('cruise/categoryList',array('year'=>2014,'month'=>7,'category'=>$category));?>">Jul.</a></li>    
                        <li><a <?php if($month==8):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('cruise/categoryList',array('year'=>2014,'month'=>8,'category'=>$category));?>">Aug.</a></li>    
                        <li><a <?php if($month==9):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('cruise/categoryList',array('year'=>2014,'month'=>9,'category'=>$category));?>">Sep.</a></li>    
                        <li><a <?php if($month==10):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('cruise/categoryList',array('year'=>2014,'month'=>10,'category'=>$category));?>">Oct.</a></li>
                        <li><a <?php if($month==11):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('cruise/categoryList',array('year'=>2014,'month'=>11,'category'=>$category));?>">Nov.</a></li>    
                        <li><a <?php if($month==12):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('cruise/categoryList',array('year'=>2014,'month'=>12,'category'=>$category));?>">Dec.</a></li>
                  </ul>
               </div> 
               <!--  month end   -->
               
               <!--  monthtable start   -->
               <div class="monthtable">
                <table border="0" cellspacing="1" cellpadding="0">
                   <tbody>
                    <tr class="top">
                      <td>Monday</td>
                      <td>Tuesday</td>
                      <td>Wednesday</td>
                      <td>Thursday</td>
                      <td>Friday</td>
                      <td>Saturday</td>
                      <td>Sunday</td>
                    </tr>
                    <?php
                        $first_weekday = date("N", strtotime($year.'-'.$month.'-1'));
                        $diff_num = 7-$first_weekday;
                        $lines = ceil($numOfDaysInGiveMonth/8);
                        $end_day=1;
                      ?>
                       <tr valign="top">
                         <?php for($i=1;$i<$first_weekday;$i++):?>
                           <td>&nbsp;</td>
                         <?php endfor;?>
                         <td><b>1</b>
                          <?php foreach((array)$cruises[1] as $k=>$v):?>
                                  <span></span><a href="<?php echo Yii::app()->createUrl('cruise/view',array('id'=>$v['id'],'name'=>SiteUtils::stringURLSafe($v['cruise_name'])));;?>"><?php echo $v['cruise_name'];?></a></span>
                                  <span class="star<?php echo $v['cruise_grade'];?>"></span>
                                  <span>from <strong><?php echo SiteUtils::getCurrencyPrice( $v['downlowprice']);?></strong></span>
                          <?php endforeach;?>
                         </td>
                         <?php for($i=1;$i<=$diff_num;$i++):?>
                           <td  <?php $end_day=$i+1;?>>
                              <b><?php echo $end_day;?></b>
                              <?php foreach((array)$cruises[$end_day] as $k=>$v):?>
                                  <span></span><a href="<?php echo Yii::app()->createUrl('cruise/view',array('id'=>$v['id'],'name'=>SiteUtils::stringURLSafe($v['cruise_name'])));;?>"><?php echo $v['cruise_name'];?></a></span>
                                  <span class="star<?php echo $v['cruise_grade'];?>"></span>
                                  <span>from <strong><?php echo SiteUtils::getCurrencyPrice( $v['downlowprice']);?></strong></span>
                              <?php endforeach;?>
                           </td>
                         <?php endfor;?>
                      </tr>
                      
                     <?php for($i=1;$i<=$lines;$i++):?>
                        <tr valign="top">
                          <td <?php $end_day=$end_day+1;?>>
                              <b><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></b>
                              <?php foreach((array)$cruises[$end_day] as $k=>$v):?>
                                  <span></span><a href="<?php echo Yii::app()->createUrl('cruise/view',array('id'=>$v['id'],'name'=>SiteUtils::stringURLSafe($v['cruise_name'])));;?>"><?php echo $v['cruise_name'];?></a></span>
                                  <span class="star<?php echo $v['cruise_grade'];?>"></span>
                                  <span>from <strong><?php echo SiteUtils::getCurrencyPrice( $v['downlowprice']);?></strong></span>
                              <?php endforeach;?>
                          </td>
                          <td <?php $end_day=$end_day+1;?>>
                              <b><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></b>
                              <?php foreach((array)$cruises[$end_day] as $k=>$v):?>
                                  <span></span><a href="<?php echo Yii::app()->createUrl('cruise/view',array('id'=>$v['id'],'name'=>SiteUtils::stringURLSafe($v['cruise_name'])));;?>"><?php echo $v['cruise_name'];?></a></span>
                                  <span class="star<?php echo $v['cruise_grade'];?>"></span>
                                  <span>from <strong><?php echo SiteUtils::getCurrencyPrice( $v['downlowprice']);?></strong></span>
                              <?php endforeach;?>
                          </td>
                          <td <?php $end_day=$end_day+1;?>>
                              <b><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></b>
                              <?php foreach((array)$cruises[$end_day] as $k=>$v):?>
                                  <span></span><a href="<?php echo Yii::app()->createUrl('cruise/view',array('id'=>$v['id'],'name'=>SiteUtils::stringURLSafe($v['cruise_name'])));;?>"><?php echo $v['cruise_name'];?></a></span>
                                  <span class="star<?php echo $v['cruise_grade'];?>"></span>
                                  <span>from <strong><?php echo SiteUtils::getCurrencyPrice( $v['downlowprice']);?></strong></span>
                              <?php endforeach;?>
                          </td>
                          <td <?php $end_day=$end_day+1;?>>
                              <b><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></b>
                              <?php foreach((array)$cruises[$end_day] as $k=>$v):?>
                                  <span></span><a href="<?php echo Yii::app()->createUrl('cruise/view',array('id'=>$v['id'],'name'=>SiteUtils::stringURLSafe($v['cruise_name'])));;?>"><?php echo $v['cruise_name'];?></a></span>
                                  <span class="star<?php echo $v['cruise_grade'];?>"></span>
                                  <span>from <strong><?php echo SiteUtils::getCurrencyPrice( $v['downlowprice']);?></strong></span>
                              <?php endforeach;?>
                          </td>
                          <td <?php $end_day=$end_day+1;?>>
                              <b><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></b>
                              <?php foreach((array)$cruises[$end_day] as $k=>$v):?>
                                  <span></span><a href="<?php echo Yii::app()->createUrl('cruise/view',array('id'=>$v['id'],'name'=>SiteUtils::stringURLSafe($v['cruise_name'])));;?>"><?php echo $v['cruise_name'];?></a></span>
                                  <span class="star<?php echo $v['cruise_grade'];?>"></span>
                                  <span>from <strong><?php echo SiteUtils::getCurrencyPrice( $v['downlowprice']);?></strong></span>
                              <?php endforeach;?>
                          </td>
                          <td <?php $end_day=$end_day+1;?>>
                              <b><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></b>
                              <?php foreach((array)$cruises[$end_day] as $k=>$v):?>
                                  <span></span><a href="<?php echo Yii::app()->createUrl('cruise/view',array('id'=>$v['id'],'name'=>SiteUtils::stringURLSafe($v['cruise_name'])));;?>"><?php echo $v['cruise_name'];?></a></span>
                                  <span class="star<?php echo $v['cruise_grade'];?>"></span>
                                  <span>from <strong><?php echo SiteUtils::getCurrencyPrice( $v['downlowprice']);?></strong></span>
                              <?php endforeach;?>
                          </td>
                          <td <?php $end_day=$end_day+1;?>>
                              <b><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></b>
                              <?php foreach((array)$cruises[$end_day] as $k=>$v):?>
                                  <span></span><a href="<?php echo Yii::app()->createUrl('cruise/view',array('id'=>$v['id'],'name'=>SiteUtils::stringURLSafe($v['cruise_name'])));;?>"><?php echo $v['cruise_name'];?></a></span>
                                  <span class="star<?php echo $v['cruise_grade'];?>"></span>
                                  <span>from <strong><?php echo SiteUtils::getCurrencyPrice( $v['downlowprice']);?></strong></span>
                              <?php endforeach;?>
                          </td>
                        </tr>
                     <?php endfor;?>    

                    <tr>
                       <td valign="top"><a href="javascript:;" onclick="_cruise.next_month();">Next Month &raquo;</a></td>
                    </tr>
                   </tbody>
               </table>
               <div class="clear"></div>
               <p><strong>Note:</strong> If you want to travel on a date when there is no information shown on the calendar, contact us and 
we will contact the cruise company directly. The price may not be able to be confirmed immediately, but a 
booking can be made.</p>
               </div>
               <!--  monthtable end   -->
           </div>
           <!--  Cruise Calendar end   -->
           
           <!--  Itinerary start   -->
           <div id="c02" style="display:none;">
              <div class="left-table1">
                  <h2><strong>DOWNSTREAM:</strong> <?php echo Cruise::$downCityArr[$fleets[0]->downcity];?> (<?php echo count($cruise_cycle[1]);?> days)</h2>
                  <table cellspacing="0" cellpadding="0" border="0">
                       <tbody>
                         <?php if($cruise_cycle[0]):?>
                            <?php foreach ($cruise_cycle[0] as $k=>$v):?>
                            <tr valign="top">
                                 <td width="61">Day <?php echo $k+1;?></td>
                              <td width="898" class="number"><p><?php echo $v['activition'];?></p></td>
                              <td width="92" valign="top" style="padding:10px 8px; background:#fff;">
  	                           		<div class="right-pic">
                                  <ul>
                                      <li class="pic"><img alt="" src="<?php echo ImageUtils::getThumbnail(Cruisecycle::UPLOAD_PATH.$v->cruisecycle_pic, '171x119')?>" style="width:125px;height:50px" /></li>
                                  </ul>
                                  </div>
                         		  </td>
                           </tr>                          
                        <?php endforeach;?>
                      <?php endif;?>                         
                                                
                       </tbody>
                  </table>                   
                </div>
                
                <div class="left-table1">
                  <h2><strong>UPSTREAM:</strong><?php echo Cruise::$upCityArr[$fleets[0]->upcity];?> (<?php echo count($cruise_cycle[0]);?> days)</h2>
                  <table cellspacing="0" cellpadding="0" border="0">
                       <tbody>
                       <?php if($cruise_cycle[1]):?>
                       <?php foreach ($cruise_cycle[1] as $k=>$v):?>
                          <tr valign="top">
                               <td width="61">Day <?php echo $k+1;?></td>
                            <td width="898" class="number"><p><?php echo $v['activition'];?></p></td>
                            <td width="92" valign="top" style="padding:10px 8px; background:#fff;">
	                           		<div class="right-pic">
                                <ul>
                                    <li class="pic"><img alt="" src="<?php echo ImageUtils::getThumbnail(Cruisecycle::UPLOAD_PATH.$v->cruisecycle_pic, '171x119')?>" style="width:125px;height:50px" /></li>
                                </ul>
                                </div>
                       		  </td>
                         </tr>                          
                      <?php endforeach;?>  
                      <?php endif;?>                     
                       </tbody>
                  </table>                   
                </div>
           </div>
           <!--  Itinerary end   -->
           
           <!--  Fleet start   -->
           <div id="c03" style="display:none;">
             <?php if($fleets):?>
               <?php foreach($fleets as $k=>$v):?>
               <div class="fleet">
                    <ul <?php if(($k+1)%2 == 0):?>class="tesu"<?php endif;?>>
                       <li class="pic"><a href="<?php echo $v->getUrl();?>"><img src="<?php echo ImageUtils::getThumbnail(Cruise::UPLOAD_PATH.$v->ufile,"180x81");?>" style="width:169px;height:81px" /></a></li>
                       <li class="name"><a href="<?php echo $v->getUrl();?>"><b><?php echo $v->cruise_name;?></b> <span class="star5"></span></a></li>
                       <li class="desc"><strong>Price from: <span><?php echo SiteUtils::getCurrencyPrice($v->getPrice());?></span></strong>
                             <?php echo $v->highlights;?>                          
                       </li>
                    </ul>
               </div>
              <?php endforeach;?>
            <?php endif;?>
           </div>
           <!--  Fleet end   -->
       </div>
       <!--  ships-tab end   -->
    </div>
    <!--  left end   -->
    
    <!--  right start   -->
    <div id="right">
       <?php $this->renderPartial('_rightSearch');?>
       <?php $this->renderPartial('/message/_form',array(
            'model'=>$message,
          )); ?>
       
       <div class="why">
             <h2>Why Choose Us</h2>
             <ul>
                 <li>Reliable China Travel Agency</li>
                 <li>Multi-Choice of China Tour</li>
                 <li>Honest Price without Hidden Fees</li>
             </ul>
        </div>
    </div>
    <!--  left end   -->
</div>
<!--  middle1 end   -->

<script>
    var _cruise = {
       change_tab:function(obj, inx){
    	   $(obj).parents("ul").find("li").removeClass("dq");
    	   $(obj).addClass("dq");
    	   $("#c01,#c02,#c03").hide();
    	   $("#c0"+inx).show();
       },
       next_month:function(){
    	   var href = $(".month").find("li").find("a.dq").parent("li").next().find("a").attr("href");
    	   if(href) location.href=href;
       },
    }
</script>
