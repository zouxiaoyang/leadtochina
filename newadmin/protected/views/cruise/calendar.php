<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/yangtzenew.css'); ?>
<style type="text/css">
<!--
#menu-home{ width:911px;}
-->
</style>
<!--  middle1 start   -->
<div id="middle1">
    <!--  menu-home start   -->
   <div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cruise/index');?>">Yangtze Cruise </a> Yangtze Cruise Calendar</div>
   <!--  menu-home end   -->
   <!--  main start -->
   <div class="main1">
          <!--  txt start -->
          <div class="txt">
              <h2>Yangtze Cruise Calendar 2015</h2>
              <div class="clear"></div>
              <p>The Yangtze Cruises we provided here are usually 4,5-star foreign-related cruise ships, called flowing Star Hotel. Along with majestic Three Gorges Dam, elegant Shennong Stream, mysterious Fengdu Ghost Town and water-surrounded Shaibao Town, the different seasons of Yangtze River have distinguishing views, such as April-June is the time to watch flourishing flowers, July-September is the time to escape from the hot, and October-November is the time to enjoy the red maple leaves. However, no matter in which season, the cultural and recreational activities on the cruise-Cultural Lecture, Dancing &amp; Sing Performance, Taiji Exercise, Mahjong Competition, the rich breakfast buffet and marvelous sichuan cuisines, will give you a pleasant and unique China tour memory.<a href="http://messenger.providesupport.com/messenger/travelthing.html" target="_blank">Consultation On-line</a></p>
           </div>
           <!--  txt end -->
           
           <!--  clendar start -->
           <div class="clendarnew">
              <table border="0" cellspacing="0" cellpadding="0">
                <tbody>
                 <tr class="top">
                          <td colspan="7" style="padding:5px 0px 5px 20px;"><img src="/images/yangtze/horse.png" style="float:left; margin-top:5px;" alt="" />
                            <div class="calnewright">
                            <?php foreach(Cruiseact::getEveryMonth() as $date):?>
                             <?php $m = date('m',strtotime($date));?>
                            <a <?php if($m==$month):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('cruise/calendar',array('year'=>$year,'month'=>$m));?>"><?php echo date('M',strtotime($date));?>.</a>
                          <?php endforeach;?>
                          </div>
                          </td>
                      </tr>
                      <tr style="font-size:14px;">
                        <td>Mon</td>
                        <td>Tue</td>
                        <td>Wed</td>
                        <td>Thu</td>
                        <td>Fri</td>
                        <td style="color:#9a0000">Sat</td>
                        <td style="color:#9a0000; border-right:1px solid #c1bfbf;">Sun</td>
                      </tr>
                      <?php
                        $first_weekday = date("N", strtotime($year.'-'.$month.'-1'));
                        $diff_num = 7-$first_weekday;
                        $lines = ceil($numOfDaysInGiveMonth/8);
                        $end_day=1;
                      ?> 
                      <tr>
                         <?php for($i=1;$i<$first_weekday;$i++):?>
                            <td>&nbsp;</td>
                         <?php endfor;?>

                         <td><span class="daysnew"><?php echo $end_day;?></span>
                            <?php foreach((array)$cruises[$end_day] as $v):?>
                              <?php $this->outputSailing2($end_day, $v );?>
                            <?php endforeach;?>
                         </td>
                         <?php for($i=1;$i<=$diff_num;$i++):?>
                           <td  <?php $end_day=$i+1;?>>
                              <span class="daysnew"><?php echo $end_day;?></span>
                              <?php foreach((array)$cruises[$end_day] as $v):?>
                                <?php $this->outputSailing2($end_day, $v );?>
                              <?php endforeach;?>
                           </td>
                         <?php endfor;?>
                      </tr>

                     <?php for($i=1;$i<=$lines;$i++):?>
                        <tr>
                          <td <?php $end_day=$end_day+1;?>>
                              <span class="daysnew"><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
                              <?php foreach((array)$cruises[$end_day] as $v):?>
                                <?php $this->outputSailing2($end_day, $v );?>
                              <?php endforeach;?>
                              
                          </td>
                          <td <?php $end_day=$end_day+1;?>>
                              <span class="daysnew"><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
                              <?php foreach((array)$cruises[$end_day] as $v):?>
                                <?php $this->outputSailing2($end_day, $v );?>
                              <?php endforeach;?>
                              
                          </td>
                          <td <?php $end_day=$end_day+1;?>>
                              <span class="daysnew"><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
                              <?php foreach((array)$cruises[$end_day] as $v):?>
                                <?php $this->outputSailing2($end_day, $v );?>
                              <?php endforeach;?>
                             
                          </td>
                          <td <?php $end_day=$end_day+1;?>>
                              <span class="daysnew"><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
                              <?php foreach((array)$cruises[$end_day] as $v):?>
                                <?php $this->outputSailing2($end_day, $v );?>
                              <?php endforeach;?>
                              
                          </td>
                          <td <?php $end_day=$end_day+1;?>>
                              <span class="daysnew"><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
                              <?php foreach((array)$cruises[$end_day] as $v):?>
                               <?php $this->outputSailing2($end_day, $v );?>
                              <?php endforeach;?>
                              
                          </td>
                          <td <?php $end_day=$end_day+1;?>>
                              <span class="daysnew"><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>  
                              <?php foreach((array)$cruises[$end_day] as $v):?>
                               <?php $this->outputSailing2($end_day, $v );?>
                              <?php endforeach;?>
                          </td>
                          <td <?php $end_day=$end_day+1;?>>
                              <span class="daysnew"><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
                              <?php foreach((array)$cruises[$end_day] as $v):?>
                                <?php $this->outputSailing2($end_day, $v );?>
                              <?php endforeach;?>
                          </td>
                        </tr>
                     <?php endfor;?>  
                 </tbody>
              </table>
              
              <?php if(0): //hide ?>

                <table border="0" cellspacing="0" cellpadding="0">
                      <tr class="top">
                          <td colspan="4"><!--  <img src="/images/yangtze/snake1.jpg" alt="" /> -->
                            <div class="clendar-tab" onclick="_cruise.showYear(this);"><h2><?php echo $year;?></h2><!--<span><img src="/images/yangtze/clespan.jpg" alt="" /></span>-->
                               <!--<ul>
                                   <li><a href="<?php echo Yii::app()->createUrl('cruise/calendar',array('month'=>date('m')));?>">2013</a></li>
                                   <li><a href="<?php echo Yii::app()->createUrl('cruise/calendar',array('year'=>2015,'month'=>1));?>">2015</a></li>
                               </ul> -->
                            </div>
                            <div class="calright">
                            <?php foreach(Cruiseact::getEveryMonth() as $date):?>
                             <?php $m = date('m',strtotime($date));?>
                            <a <?php if($m==$month):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('cruise/calendar',array('year'=>$year,'month'=>$m));?>"><?php echo date('M',strtotime($date));?>.</a>
                          <?php endforeach;?>
                          </div>
                          </td>
                      </tr>
                      <tr class="bold">
                        <td style="border-left:none;">Cruise Date</td>
                        <td>Chongqing-Yichang<span>(downstream 4days)</span></td>
                        <td>Yichang-Chongqing<span>(upstream 5days)</span></td>
                        <td style="border:none;">Chongqing-Shanghai<span>(downstream 7days/upstream 9days)</span></td>
                  </tr>
                      <?php foreach($cruises as $day=>$cruise):?>
                      <tr class="list">

                          <td class="date"><span><b><?php echo date('M',strtotime("$year-$month-$day")).'.'.$day;?></b> <?php echo date('D',strtotime("$year-$month-$day"));?>.</span></td>
                          
                          <td class="price1" valign="top">
                              <ul>
                                  <?php foreach($cruise as $k=>$v):?>
                                   <?php if($v['downcity'] == 2 && $v['upOrdown'] == 1):?>
                                  <li><span><a href="<?php echo Yii::app()->createUrl('cruise/view',array('year'=>$year,'month'=>$month,'id'=>$v['id'],'name'=>SiteUtils::stringURLSafe($v['cruise_name'])));?>"><?php echo $v['cruise_name'];?></a><strong><?php echo $v['downlowprice'];//SiteUtils::getCurrencyPrice($v['downlowprice']);?></strong></span> <b><span class="star<?php echo $v['cruise_grade'];?>"></span></b></li>
                                  <?php endif;?>
                                  <?php endforeach;?>
                                  
                              </ul>
                          </td>
                          <td class="price1" valign="top">
                              <ul>
                                  <?php foreach($cruise as $k=>$v):?>
                                   <?php if($v['upcity'] == 1 && $v['upOrdown'] == 0):?>
                                  <li><span><a href="<?php echo Yii::app()->createUrl('cruise/view',array('year'=>$year,'month'=>$month,'id'=>$v['id'],'name'=>SiteUtils::stringURLSafe($v['cruise_name'])));?>"><?php echo $v['cruise_name'];?></a><strong><?php echo $v['downlowprice'];//SiteUtils::getCurrencyPrice( $v['downlowprice']);?></strong></span> <b><span class="star<?php echo $v['cruise_grade'];?>"></span></b></li>
                                  <?php endif;?>
                                  <?php endforeach;?>
                              </ul>
                          </td>

                           <td class="price1" valign="top">
                              <ul>
                                  <?php foreach($cruise as $k=>$v):?>
                                  <?php if($v['downcity'] == 1 || $v['upcity'] == 2):?>
                                  <li><span><a href="<?php echo Yii::app()->createUrl('cruise/view',array('year'=>$year,'month'=>$month,'id'=>$v['id'],'name'=>SiteUtils::stringURLSafe($v['cruise_name'])));;?>"><?php echo $v['cruise_name'];?></a><strong><?php echo $v['downlowprice'];//SiteUtils::getCurrencyPrice( $v['downlowprice']);?></strong></span> <b><span class="star<?php echo $v['cruise_grade'];?>"></span></b></li>
                                  <?php endif;?>
                                  <?php endforeach;?>
                              </ul>
                          </td>

                          <!-- <td valign="top" class="no"><img src="/images/yangtze/no.jpg" alt="" /></td>-->
                      </tr>
                      <tr>
                         <td colspan="4" style="padding:0px; border:none;"><img src="/images/yangtze/listbg.jpg" alt="" /></td>
                      </tr>
                      <?php endforeach;?>
                     
                </table>
              <?php endif;?>
           </div>
           <!--  clendar end -->
   </div>
   <!--  main end -->
</div>
<!--  middle1 end   -->

<script type="text/javascript">
var _cruise = {
  showYear:function(obj){
    $(obj).find("ul").toggle();
  },
  chooseYear:function(inx){
    if(inx == 1){
      $("#2013_table").show();
      $("#2014_table").hide();
    }else if(inx == 2){
      $("#2013_table").hide();
      $("#2014_table").show();
    }
  }
}
</script>
