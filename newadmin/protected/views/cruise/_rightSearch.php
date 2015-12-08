<div class="searchnew">
       <ul class="ulnew">
          <li id="sd_cruise" class="sd1dq" style="cursor:pointer;">Cruises</li>
          <li id="sd_tours" class="sd2" style="cursor:pointer;">Tours</li>
       </ul>
       <!--  Cruises start -->
       <div id="cruiseSearch" class="Cruises">
           <form name="cruiseSearch" action="<?php echo Yii::app()->createUrl('cruise/search');?>" method="get">
    <table border="0" cellspacing="0" cellpadding="0" class="search">
      <tr>
        <td>Start Date:</td>
      </tr>
      <tr>
        <td><input name="sailling_date" id="sailling_date" type="text" class="Wdate" autocomplete="off" /></td>
      </tr>
      <!-- 
      <tr>
        <td>Star:</td>
      </tr>
      <tr>
        <td>
          <select name="cruise_star">
          	<option value="0"></option>
          <?php foreach(Cruise::$grade as $k=>$v):?>
            <option value="<?php echo $k;?>"><?php echo $v;?></option>
          <?php endforeach;?>
        </select>
        </td>
      </tr>
      -->
      <tr>
        <td colspan="2">Ship Route</td>
      </tr>
      <tr>
        <td colspan="2">
        <select name="sailling_city" onchange="if(this.value=='') style='';else style='color:#000;'">
          <option value="">Choose Ship Route</option>
          <option value="2_down">4 Days Chongqing-Yichang</option>
          <option value="1_up">5 Days Yichang-Chongqing</option>
          <option value="1_down">7 Days Chongqing-Shanghai</option>
          <option value="2_up">9 Days Shanghai-Chongqing</option>
          <!--
           <?php foreach(Cruise::$upCityArr as $k=>$v):?>
              <option value="<?php echo $k;?>_up"><?php echo Cruise::$upCityDays[$k].$v;?></option>
            <?php endforeach;?>
            <?php foreach(Cruise::$downCityArr as $k=>$v):?>
              <option value="<?php echo $k;?>_down"><?php echo Cruise::$downCityDays[$k].$v;?></option>
            <?php endforeach;?>
          -->
        </select>
        </td>
      </tr>
      
      <tr>
        <td colspan="2">Ship Name</td>
      </tr>
      <tr>
        <td colspan="2">
        <?php $cruise_names = Cruise::getAllCruiseName();?>
        <select name="ship_name" onchange="if(this.value=='') style='';else style='color:#000;'">
            <option value="">Choose Ship Name</option>
            <?php foreach($cruise_names as $v):?>
            <option value="<?php echo $v['cruise_name'];?>"><?php echo $v['cruise_name'];?></option>
            <?php endforeach;?>
        </select>
        </td>
      </tr>
      
      <tr>
        <td colspan="2">
          <span  onclick="document.forms['cruiseSearch'].submit();" style="margin-top:5px; display:block; cursor:pointer;"><img src="/images/yangtze/search_new1.png" alt="" /></span>
        </td>
      </tr>
    </table>
    </form>
       </div>
       <!--  Cruises end -->
       <!--  Tours start -->
       <div id="toursSearch" class="Tours" style=" display:none">
       <form name="searchform" method="get" action="<?php echo Yii::app()->createUrl("chinaTours/searchList");?>">
           <table cellspacing="0" cellpadding="0" border="0" align="center">
                  <tbody><tr>
                    <td height="30">
                    <select id="days" name="days">
                        <option value="0"> - Length of Tour - </option>
                        <?php foreach(Yii::app()->params['days_list'] as $k=>$v):?>
                        <?php if($k==0)  continue;?><option value="<?php echo $v;?>"><?php echo $v;?></option>
                        <?php endforeach;?>
                    </select>
                    </td>
                  </tr>
                  <tr>
                    <td><strong>Select Cities:</strong></td>
                  </tr>
                  <tr>
                    <td>
                       <ul class="ulnew1">
                          <li><label><input type="checkbox" onclick="checkd()" value="Beijing" name="sc[]"></label> Beijing</li>
                          <li><label><input type="checkbox" onclick="checkd()" value="Shanghai" name="sc[]"></label> Shanghai</li>
                          <li><label><input type="checkbox" onclick="checkd()" value="Guilin" name="sc[]"></label> Guilin</li>
                          <li><label><input type="checkbox" onclick="checkd()" value="Hong Kong" name="sc[]"></label> Hong Kong</li>
                          <li><label><input type="checkbox" onclick="checkd()" value="Xian" name="sc[]"></label> Xian</li>
                          <li><label><input type="checkbox" onclick="checkd()" value="Kunming" name="sc[]"></label> Kunming</li>
                          <li><label><input type="checkbox" onclick="checkd()" value="Lhasa" name="sc[]"></label> Lhasa</li>
                          <li><label><input type="checkbox" onclick="checkd()" value="Yangtze" name="sc[]"></label> Yangtze</li>
                          
                       </ul>
                      </td>
                  </tr>
                  <tr>
                    <td class="link3"><label>
                      <textarea id="city" style=" border:1px solid #e0e0e0; height:50px; margin-bottom:5px; width:95%;"  name="city"></textarea>
                      </label>
                      <span id="select-city">Select more cities</span>
<div style=" display:none;" class="not_morelist">
<?php 

?>

<h2>A-G <span id="close_new"><img src="/images/newhomepage/close.jpg" alt="" /></span></h2>
 <ul>
 	<?php echo $this->city_list('A', 'G');?>
 </ul>
 
<h2>H-K</h2>
 <ul>
 	<?php echo$this->city_list('H', 'K');?>
 </ul>
 
<h2>L-Q</h2>
 <ul>
 	<?php echo $this->city_list('L', 'Q');?>
 </ul>
 
<h2>S-Z</h2>
 <ul>
 	<?php echo $this->city_list('S', 'Z');?>
 </ul>
<div class="search_new"><a onclick="javascript:document.searchform.submit()" href="javascript:;"><img alt="" src="/images/yangtze/search1.png"></a> <a onclick="go_to_diy_search()" href="javascript:;"><img style="margin-left:15px;" alt="" src="/images/yangtze/tailor.png"></a></div>
</div>

                    </td>
                  </tr>
                  <tr>
                    <td align="left"><label>
                      <a style="margin-right:5px; float:left;" onclick="javascript:document.searchform.submit()" href="javascript:;"><img alt="" src="/images/yangtze/search_new1.png"></a>
                    </label>
                    <label>
                      <a href="/travel/advance-search" style=" float:left; color:#B96100; text-decoration:underline; padding-top:5px;">Advanced Search</a>
                    </label>
                    </td>
                  </tr>
                </tbody>
           </table>
           
           
           
           </form>
       </div>
       <!--  Tours end -->
       <div class="clear"></div>
       <!--  calendar1 start -->
       <!--   <div class="calendar1">
          <h2><a href="<?php echo Yii::app()->createUrl('cruise/calendar');?>">2013 Yangtze Cruise Calendar</a></h2>
         <table border="0" cellspacing="0" cellpadding="0">
      				<tr>
                      <td><a href="<?php echo Yii::app()->createUrl('cruise/calendar?month=01');?>">1</a></td>
                      <td><a href="<?php echo Yii::app()->createUrl('cruise/calendar?month=02');?>">2</a></td>
                      <td><a href="<?php echo Yii::app()->createUrl('cruise/calendar?month=03');?>">3</a></td>
                      <td><a href="<?php echo Yii::app()->createUrl('cruise/calendar?month=04');?>">4</a></td>
                      <td><a href="<?php echo Yii::app()->createUrl('cruise/calendar?month=05');?>">5</a></td>
                      <td><a href="<?php echo Yii::app()->createUrl('cruise/calendar?month=06');?>">6</a></td>
                    </tr>
                    <tr>
                      <td><a href="<?php echo Yii::app()->createUrl('cruise/calendar?month=07');?>">7</a></td>
                      <td><a href="<?php echo Yii::app()->createUrl('cruise/calendar?month=08');?>">8</a></td>
                      <td><a href="<?php echo Yii::app()->createUrl('cruise/calendar?month=09');?>">9</a></td>
                      <td><a href="<?php echo Yii::app()->createUrl('cruise/calendar?month=10');?>">10</a></td>
                      <td><a href="<?php echo Yii::app()->createUrl('cruise/calendar?month=11');?>">11</a></td>
                      <td><a href="<?php echo Yii::app()->createUrl('cruise/calendar?month=12');?>">12</a></td>
                    </tr>
    </table>
       </div>  -->
       <!--  calendar1 end -->
    </div>
<script>
$('#sd_cruise').click(function(){
	$('#sd_cruise').attr('class','sd1dq');
	$('#sd_tours').attr('class','sd2');
	$('#cruiseSearch').show();
	$('#toursSearch').hide();
});
$('#sd_tours').click(function(){
	$('#sd_cruise').attr('class','sd1');
	$('#sd_tours').attr('class','sd2dq');
	$('#cruiseSearch').hide();
	$('#toursSearch').show();
});

$('#select-city').click(function(){
	$(".not_morelist").show();
});
$('#close_new').click(function(){
	$(".not_morelist").hide();
});

function checkd(){
	 var choose_city_string = [];
	 $("input[name='sc[]']:checked").each(function(){
     if($.inArray($(this).val(), choose_city_string) == -1) choose_city_string.push($(this).val());	 
	 });
	 $("#city").val(choose_city_string.join(','));
}

function go_to_diy_search(){
    if($('#city').val()==''){
        alert('Please select cities.');
        return false;
    }  
 	 	document.location.href="/index.php?option=com_diy&template=customize2&view=customize1&city_url="+$('#city').val();
}

$("#sailling_date").datepicker({
  changeMonth: true,
  "dateFormat":"yy-mm-dd",
  numberOfMonths: 1,
});
</script>
