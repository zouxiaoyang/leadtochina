<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>
<link rel="stylesheet" type="text/css" href="/travel/css/hotel.css" />
<script type="text/javascript">
$(document).ready(function(){
  $(".searchcitybar").click(function(){
  $("#hotelcities").show();
  });
  $(".closeIt").click(function(){
  $("#hotelcities").hide();
  });
});
</script>

<div id="banner">
	<form action="<?php echo Yii::app()->createUrl('hotel/search')?>" method="get">
        <table cellspacing="0" cellpadding="0" border="0" class="formcenter">
           <tbody>
               <tr>
                     <td colspan="2"><div class="searchtitle">Search China Hotels</div></td>
               </tr>
               <tr>
                    <td colspan="2">   <label><div class="formtitle">Which City?</div>
                         <input type="text" name="city" id="city" value="Shanghai" class="searchcitybar">
                                      </label>
                    </td>
              </tr>    
              <tr>
                    <td> 
                         <label class="floatLeft">
                            <div class="formtitle"> Check-in:</div>
                              <input type="text" name="starttime" onclick="WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d'});" style="width:90%" class="dateselect">
                         </label>
                    </td>
                    <td> 
                         <label class="floatLeft">
                            <div class="formtitle"> Check-out:</div>    
                                <input type="text" name="endtime" onclick="WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d'});" style="width:90%" class="dateselect"> </label>
                    </td>
             </tr>
             <tr>
                 <td colspan="2">
                             <label class="floatLeft">
                                <div class="formtitle">Hotel Name:</div>
                                   <input type="text" value="" id="hotelname" name="hotelname">
                            </label>
                </td>
            </tr>
            <tr>
                <td colspan="2"><label class="floatLeft">
                            <div class="formtitle"> Hotel Class:</div>
                             <select class="searchcitybars" id="price2" name="hotelclass">
                                  <option selected="selected" value="0">- Hotel Class -</option>
                                  <option value="1">- 3 Star -</option>
                                  <option value="2">- 4 Star -</option>
                                  <option value="3">- 5 Star -</option>
                             </select>
                            </label>
              </td>
          </tr>
          <tr>
              <td><label class="floatLeft">
                   <div class="formtitle"> Rooms:</div>
                      <select id="rooms3" class="halfform" name="rooms3">
                          <option selected="selected" value="1">1</option>
                          <?php for($i=2;$i<11;$i++):?>
                         <option value="<?php echo $i;?>"><?php echo $i;?></option>
                         <?php endfor;?>
                     </select>
                 </label>
            </td>
            <td><label class="floatLeft">
                 <div class="formtitle">  Guests:</div>
                    <select id="guest2" class="halfform" name="guests">
                         <option selected="selected" value="1">1</option>
                         <?php for($i=2;$i<21;$i++):?>
                         <option value="<?php echo $i;?>"><?php echo $i;?></option>
                         <?php endfor;?>
                   </select>
             </label>
         </td>
     </tr>
     <tr>
         <td align="right" colspan="2"><div class="searchBottom">
             <input type="image" border="0" class="searchHotel" src="/images/hotel/hotel-search.png">
              </div>
        </td>
    </tr>
</tbody>
</table>
</form>
  <div class="searchContent">
     <div style="display: none;" id="hotelcities">
            <div class="closeIt"><a onclick="closeIt()" href="#"><img src="/images/fancy_closebox.png"></a></div>
            <div class="optioncities">Most Popular Cities in China</div>
            <div class="cities"><a href="javascript:inputcity('Beijing');">Beijing</a></div>
            <div class="cities"><a href="javascript:inputcity('Shanghai');">Shanghai</a></div>
            <div class="cities"><a href="javascript:inputcity('Guangzhou');">Guangzhou</a></div>
            <div class="cities"><a href="javascript:inputcity('Xian');">Xian</a></div>
            <div class="cities"><a href="javascript:inputcity('Guilin');">Guilin</a></div>
            <div class="cities"><a href="javascript:inputcity('Hangzhou');">Hangzhou</a></div>
            <div class="cities"><a href="javascript:inputcity('Shenzhen');">Shenzhen</a></div>
            <div class="clear"></div>
            <div class="optioncities">Other Tourist Cities in China</div>
            <div class="cities"><a href="javascript:inputcity('Chengdu');">Chengdu</a></div>
            <div class="cities"><a href="javascript:inputcity('Chengde');">Chengde</a></div>
            <div class="cities"><a href="javascript:inputcity('Chongqing');">Chongqing</a></div>
            <div class="cities"><a href="javascript:inputcity('Dali');">Dali</a></div>
            <div class="cities"><a href="javascript:inputcity('Dunhuang');">Dunhuang</a></div>
            <div class="cities"><a href="javascript:inputcity('Emeishan');">Emeishan</a></div>
            <div class="cities"><a href="javascript:inputcity('Jingdezhen');">Jingdezhen</a></div>
            <div class="cities"><a href="javascript:inputcity('Jiuzhaigou');">Jiuzhaigou</a></div>
            <div class="cities"><a href="javascript:inputcity('Harbin');">Harbin</a></div>
            <div class="cities"><a href="javascript:inputcity('Hong Kong');">HongKong</a></div>
            <div class="cities"><a href="javascript:inputcity('Huangshan');">Huangshan</a></div>
            <div class="cities"><a href="javascript:inputcity('Kunming');">Kunming</a></div>
            <div class="cities"><a href="javascript:inputcity('Lhasa');">Lhasa</a></div>
            <div class="cities"><a href="javascript:inputcity('Lanzhou');">Lanzhou</a></div>
            <div class="cities"><a href="javascript:inputcity('Lijiang');">Lijiang</a></div>
            <div class="cities"><a href="javascript:inputcity('Nanjing');">Nanjing</a></div>
            <div class="cities"><a href="javascript:inputcity('Pingyao');">Pingyao</a></div>
            <div class="cities"><a href="javascript:inputcity('Putuoshan');">Putuoshan</a></div>
            <div class="cities"><a href="javascript:inputcity('Qingdao');">Qingdao</a></div>
            <div class="cities"><a href="javascript:inputcity('Sanya');">Sanya</a></div>
            <div class="cities"><a href="javascript:inputcity('Suzhou');">Suzhou</a></div>
            <div class="cities"><a href="javascript:inputcity('Urumqi');">Urumqi</a></div>
            <div class="cities"><a href="javascript:inputcity('Xishuangbanna');">Xishuangbanna</a></div>
            <div class="cities"><a href="javascript:inputcity('Yangshuo');">Yangshuo</a></div>
            <div class="cities"><a href="javascript:inputcity('Zhangjiajie');">Zhangjiajie</a></div>
            <div class="cities"><a href="javascript:inputcity('Zhouzhuang');">Zhouzhuang</a></div>
            <div class="cities"><a href="javascript:inputcity('Wuhan');">Wuhan</a></div>
            <div class="cities"><a href="javascript:inputcity('Wuyishan');">Wuyishan</a></div>
            <div class="cities"><a href="javascript:inputcity('Wutaishan');">Wutaishan</a></div> 
            <div class="cities"><a href="/hotel/china-hotels.htm">More Cities</a></div>          
          </div>
  </div>
</div>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> Hotel</div>
<div id="main">
  <div id="hotel">
  	<?php $n=1; foreach ((array)$hotCityHotelList as $key=>$val):?>
      <div class="<?php if($n%2!=0):?>index-left<?php else:?>index-right<?php endif;?>" <?php if($n==4):?>style=" background:url(/images/hotel/bg.png) -463px 0px no-repeat;"<?php endif;?>>
                      <h2><a href="<?php echo Yii::app()->createUrl('hotel/list', array('cityname'=>$val[0]['name'],'hotelid'=>$val[0]['cityid']));?>"><?php echo $val[0]['city_name'];?> Hotels</a></h2>
                      <div class="clear"></div>
                      <div class="index-cont">
                           <ul>
                           	  <?php $m=1; foreach ((array)$val as $k=>$v):?>
                              <li>
                                  <ol <?php if($m==1):?>style="padding-top:0px;"<?php elseif ($m==4):?>style="border:none;"<?php endif;?>>
                                     <li class="pic"><a href="<?php echo Yii::app()->createUrl('hotel/view', array('hotelid'=>$v['id'],'hotelname'=>SiteUtils::stringURLSafe($v['name'])));?>"><img alt="<?php echo $v['name'];?>" src="<?php echo ImageUtils::getThumbnail(JosCosHotel::UPLOAD_PATH . $v['ufile'], '86x62');?>"></a></li>
                                     <li><a href="<?php echo Yii::app()->createUrl('hotel/view', array('hotelid'=>$v['id'],'hotelname'=>SiteUtils::stringURLSafe($v['name'])));?>" title="<?php echo $v['name'];?>"><?php echo substr($v['name'],0,25);?>... <span><?php if($v['hotel_grade']==136):?>★★★<?php elseif($v['hotel_grade']==137):?>★★★★<?php elseif($v['hotel_grade']==138):?>★★★★★<?php endif;?></span></a>
                                         <strong>Location: </strong><?php echo $v['districtName'];?> <br />
                                         <?php echo substr($v['description'],0,80);?>...
                                     </li>
                                  </ol>
                              </li>
                              <?php $m++; endforeach;?>                              
                           </ul> 
                      </div>
                      <div class="index-bottom"></div>
                 </div>
               <?php $n++; endforeach;?>  
                 <div class="clear"></div>
                 <div class="citylist">
                     <h2>Other China City Hotels</h2>
                     <ul>
                     	<?php foreach ($hotelCityList as $key=>$val):?>
                        <li class="letter"><?php echo $key;?>:</li>
                        <li>
                           <ol>
                           	   <?php foreach ($val as $k=>$v):?>
                               <li><a href="<?php echo Yii::app()->createUrl('hotel/list', array('hotelid'=>$v->id,'cityname'=>SiteUtils::stringURLSafe($v->name)));?>"><?php echo ucfirst($v->name);?> Hotel</a></li>
                               <?php endforeach;?>
                           </ol>
                        </li>
                        <?php endforeach;?>
                     </ul>
                 </div>
  </div>
</div>
<script type="text/javascript">
function inputcity(cityName){
	$('#city').val(cityName);
	$("#hotelcities").hide();
}
</script>
