<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/myfocus-2.0.1.min.js');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.zxxbox.3.0-min.js ');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/yangtze3.css'); ?>

<style>
#wrapBar{display:none !important;}
#wrapOut{top:150px !important;}
.clendar1 .selected{cursor: pointer;}

.black_overlay{
display: none;
position: absolute;
top: 0%;
left: 0%;
width: 100%;
height: 100%;
z-index:1001;
background-color: black;
-moz-opacity: 0.8;
opacity:.80;
filter: alpha(opacity=80);
}
.white_content {
display: none;
position: absolute;
background-color: white;
top: 80%;
left: 30%;
z-index:1002;
overflow: hidden;
}
.white_content_small {
display: none;
position: absolute;
background-color: white;
top: 80%;
left: 30%;
z-index:1002;
overflow: hidden;
}
</style>

<div id="content">
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> 
    <a href="/travel/yangtzecruise">Yangtze Cruise</a>
    <a class="last" href="/travel/yangtzecruise/ships">Yangtze Cruise Ships</a>
</div>
<div class="add-new">
  <div class="cruise_nav">
        <h2><?php echo $model->cruise_name;?> <span style=" display:inline-block; padding-bottom:3px;" class="star<?php echo $model->cruise_grade;?>"></span> Cruise Date</h2>
  <?php echo $this->renderPartial("_cruiseNav", array('model'=>$model));?>
  </div>
<!--  c2013 start -->
 <div id="c2013">
    <div class="clendar1">
      <table cellspacing="0" cellpadding="0" border="0">
        <tbody>
           <tr class="top">
              <td colspan="7">
              <?php foreach(Cruiseact::getEveryMonth() as $date):?>
                 <?php $m = date('m',strtotime($date));?>
                <a <?php if($m==$month):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl("cruise/cruiseDate", array('id'=>$model->id,'month'=>$m,'name'=>SiteUtils::stringURLSafe($model->cruise_name)));?>"><?php echo date('M',strtotime($date));?>.</a>
              <?php endforeach;?>
              </td>
      </tr>
      <tr class="top1">
         <td>Mon</td>
         <td>Tue</td>
         <td>Wed</td>
         <td>Thu</td>
         <td>Fri</td>
         <td>Sat</td>
         <td>Sun</td>
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
         <td <?php if($cruises[1]):?>class="selected" onclick="pop_cruise(this, '<?php echo date("M.d.y",strtotime($year.'-'.$month.'-'.$end_day));?>');" <?php endif;?>><span>1</span>
            <a href="<?php echo Yii::app()->createUrl('cruise/cruiseOrder', array('cruiseid'=>$model->id));?>"><?php $this->outputSailing(1, $cruises, $model);?></a>
         </td>
         <?php for($i=1;$i<=$diff_num;$i++):?>
           <td  <?php $end_day=$i+1; if($cruises[$end_day]):?>class="selected" onclick="pop_cruise(this, '<?php echo date("M.d.y",strtotime($year.'-'.$month.'-'.$end_day));?>');" <?php endif;?>>
              <span><?php echo $end_day;?></span>
              <a href="<?php echo Yii::app()->createUrl('cruise/cruiseOrder', array('cruiseid'=>$model->id));?>"><?php $this->outputSailing($end_day, $cruises, $model);?></a>
           </td>
         <?php endfor;?>
      </tr>

     <?php for($i=1;$i<=$lines;$i++):?>
        <tr>
          <td <?php $end_day=$end_day+1; if($cruises[$end_day]):?>class="selected" onclick="pop_cruise(this, '<?php echo date("M.d.y",strtotime($year.'-'.$month.'-'.$end_day));?>');" <?php endif;?>>
              <span><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
              <a href="<?php echo Yii::app()->createUrl('cruise/cruiseOrder', array('cruiseid'=>$model->id));?>"><?php $this->outputSailing($end_day, $cruises, $model);?></a>
          </td>
          <td <?php $end_day=$end_day+1; if($cruises[$end_day]):?>class="selected" onclick="pop_cruise(this, '<?php echo date("M.d.y",strtotime($year.'-'.$month.'-'.$end_day));?>');"<?php endif;?>>
              <span><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
              <a href="<?php echo Yii::app()->createUrl('cruise/cruiseOrder', array('cruiseid'=>$model->id));?>"><?php $this->outputSailing($end_day, $cruises, $model);?></a>
          </td>
          <td <?php $end_day=$end_day+1;  if($cruises[$end_day]):?>class="selected" onclick="pop_cruise(this, '<?php echo date("M.d.y",strtotime($year.'-'.$month.'-'.$end_day));?>');"<?php endif;?>>
              <span><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
              <a href="<?php echo Yii::app()->createUrl('cruise/cruiseOrder', array('cruiseid'=>$model->id));?>"><?php $this->outputSailing($end_day, $cruises, $model);?></a>
          </td>
          <td <?php $end_day=$end_day+1;  if($cruises[$end_day]):?>class="selected" onclick="pop_cruise(this, '<?php echo date("M.d.y",strtotime($year.'-'.$month.'-'.$end_day));?>');"<?php endif;?>>
              <span><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
              <a href="<?php echo Yii::app()->createUrl('cruise/cruiseOrder', array('cruiseid'=>$model->id));?>"><?php $this->outputSailing($end_day, $cruises, $model);?></a>
          </td>
          <td <?php $end_day=$end_day+1; if($cruises[$end_day]):?>class="selected" onclick="pop_cruise(this, '<?php echo date("M.d.y",strtotime($year.'-'.$month.'-'.$end_day));?>');"<?php endif;?>>
              <span><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
              <a href="<?php echo Yii::app()->createUrl('cruise/cruiseOrder', array('cruiseid'=>$model->id));?>"><?php $this->outputSailing($end_day, $cruises, $model);?></a>
          </td>
          <td <?php $end_day=$end_day+1; if($cruises[$end_day]):?>class="selected" onclick="pop_cruise(this, '<?php echo date("M.d.y",strtotime($year.'-'.$month.'-'.$end_day));?>');"<?php endif;?>>
              <span><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
              <a href="<?php echo Yii::app()->createUrl('cruise/cruiseOrder', array('cruiseid'=>$model->id));?>"><?php $this->outputSailing($end_day, $cruises, $model);?></a>
          </td>
          <td <?php $end_day=$end_day+1; if($cruises[$end_day]):?>class="selected" onclick="pop_cruise(this, '<?php echo date("M.d.y",strtotime($year.'-'.$month.'-'.$end_day));?>');"<?php endif;?>>
              <span><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
              <a href="<?php echo Yii::app()->createUrl('cruise/cruiseOrder', array('cruiseid'=>$model->id));?>"><?php $this->outputSailing($end_day, $cruises, $model);?></a>
          </td>
        </tr>
     <?php endfor;?>      

    </tbody>
 </table>
</div>

 <!--  c2013 end -->
  </div>

</div>
  <div class="departs">
     <div class="departs-title">Cruise departs at the same day</div>
     <div class="departul">
        <?php foreach((array)$recentMonthCruise as $v):?>
        <ul>
           <li class="pic"><img src="<?php echo ImageUtils::getThumbnail(Cruise::UPLOAD_PATH.$v->ufile,"147x96");?>"  alt="<?php echo $v->cruise_name;?>" /></li>
           <li><a href="<?php echo $v->getUrl();?>"><?php echo $v->cruise_name;?></a></li>
           <li class="starnew"><span class="star<?php echo $v->cruise_grade;?>"></span></li>
           <li class="feature"><?php echo substr($v->highlights,0,35);?>...</li>
           <li>From:<span><?php echo SiteUtils::getCurrencyPrice($v->uplowprice);?></span> p/p</li>
           <!--  <li><a href="<?php echo $v->getUrl();?>"><img src="/images/yangtze/enquiry.jpg"></a></li>  -->
       </ul>
       <?php endforeach;?>
      
    </div>
	</div>
  <div class="bottom-menu"><?php echo $this->renderPartial("_cruiseNav", array('model'=>$model));?></div>

</div>

<div id="pop_cruise_order" class="inquiring" style="display:none;">
        <div class="close"><img src="/images/yangtze/closenew.png" onclick="$.zxxbox.hide();" /></div>
        <div class="titlenew">You’re inquiring about the "<?php echo $model->cruise_name;?>" Ship</div>
        <div class="inq-content">
           <div class="tell">Please tell us more about your travel plans witin just a few steps. We’ll get back to you with a quotation in 0.5-23.5 hours.</div>
           <div class="firstleft">
                <h2><img src="/images/yangtze/one.png"  alt="" /> <span>Personal Information</span></h2>
                <table border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                     <tr>
                         <td>Full Name:</td>
                         <td>Adults(&gt;12)</td>
                     </tr>
                     <tr>
                         <td><select style="width:50px;" id="gender" name="gender" onchange="if(this.value=='');else style='color:#000;width:50px;'">
                              <option value="Mr."> Mr.</option>
                              <option value="Ms."> Ms.</option>
                             </select> 
                             <input type="text" id="full_name" name="full_name" value="" style="width:170px;">             
                         </td>
                         <td>
                          <select id="adults" name="adults" onchange="if(this.value=='');else style='color:#000;'">
                            <?php for($i=1; $i<=30; $i++):?>
                              <option value="<?php echo $i;?>" <?php if($i==2):?>selected<?php endif;?>><?php echo $i;?></option>
                            <?php endfor;?>
                            </select>
                          </td>
                      </tr>
                      <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                     </tr>
                     <tr>
                         <td>Email Address:</td>
                         <td>Children(2-12)</td>
                      </tr>
                      <tr>
                         <td><input type="text" id="email" name="email" class="email"></td>
                         <td>
                          <select id="children" name="children" onchange="if(this.value=='');else style='color:#000;'">
                            <?php for($i=0; $i<=10; $i++):?>
                              <option value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php endfor;?>
                          </select>
                         </td>
                     </tr>
                     <tr>
                         <td>Nationality:</td>
                         <td>Badies(0-2)</td>
                     </tr>
                     <tr>
                         <td><input type="text" maxlength="50" id="nationality" name="nationality" class="telephone"></td>
                         <td>
                            <select id="infant" name="infant" onchange="if(this.value=='');else style='color:#000;'">
                              <?php for($i=0; $i<=10; $i++):?>
                              <option value="<?php echo $i;?>"><?php echo $i;?></option>
                              <?php endfor;?>
                            </select>
                          </td>
                     </tr>
                     <tr>
                         <td>Cruise Date:</td>
                         <td>&nbsp;</td>
                     </tr>
                     <tr>
                         <td><input type="text" maxlength="100" id="entry_date" name="entry_date" class="Wdate" onclick="WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})"></td>
                         <td>&nbsp;</td>
                     </tr>
                  </tbody>
                </table>
           </div>
           <div class="firstright">
               <div class="booking">
                  <h2>Your Booking Summary</h2>
                  <p>Cruise ship: <?php echo $model->cruise_name;?><br />
                     Price:<span>from <?php echo SiteUtils::getCurrencyPrice($model->getPrice());?></span> person<br />
                     Cruise date:<span id="pop_cruise_date"></span><br />
                     Itinerary:<span id="pop_itinerary">Chongqing-Yichang</span>
                  </p>
               </div>
               <div class="book1">
                  <h2>Book with us</h2>
                  <ul>
                      <li>Absolutly no hidden fees;</li>
                      <li>Guarantee you the lowest cruise price;</li>
                      <li>One-on-one travel consultant service;</li>
                      <li>Ensure you a worry-free vacation.</li>
                  </ul>
               </div>
           </div>
           <div class="clear"></div>
           <div class="second">
              <h2><img src="/images/yangtze/second.png"  alt="" /> <span>About the Ship</span></h2>
              <p>The Price here is one cabin sharing by two people. If you want to have one room by yourself, or upgrade the level of the cabin, you have to pay more.</p>
              <table border="0" cellspacing="0" cellpadding="0">
                <tbody>
                   <tr>
                      <td>Preferred Cruises Itinerary:</td>
                      <td>Preferred Cabin:</td>
                      <td>No.of Cabins:</td>
                   </tr>
                   <tr>
                      <td><select style="width:285px;" id="cruise_itinerary_2" name="cruise_itinerary" onchange="if(this.value=='');else style='color:#000; width:285px;'">
                            <option value="<?php echo Cruise::$upCityDays[$model->upcity].Cruise::$upCityArr[$model->upcity];?>"><?php echo Cruise::$upCityDays[$model->upcity].Cruise::$upCityArr[$model->upcity];?></option>
                            <option value="<?php echo Cruise::$downCityDays[$model->downcity].Cruise::$downCityArr[$model->downcity];?>"><?php echo Cruise::$downCityDays[$model->downcity].Cruise::$downCityArr[$model->downcity];?></option>
                           </select>
                      </td>
                      <td><select id="preferred_cabin_2" name="preferred_cabin" onchange="if(this.value=='');else style='color:#000;'">
                            <?php foreach ((array)$cruise_rooms as $k=>$v):?>
                              <option value="<?php echo $v->name;?>"><?php echo $v->name;?></option>
                            <?php endforeach;?>
                          </select>
                      </td>
                      <td><select id="no_of_cabins" name="no_of_cabins:" onchange="if(this.value=='');else style='color:#000;'">
                            <option value="0.5 Cabin">0.5 Cabin</option>
                            <option value="1 Cabin">1 Cabin</option>
                            <option value="1.5 Cabins">1.5 Cabins</option>
                            <option value="2 Cabins">2 Cabins</option>
                            <option value="2.5 Cabins">2.5 Cabins</option>
                            <option value="3 Cabins">3 Cabins</option>
                            <option value="more than 3 Cabins">more than 3 Cabins</option>
                          </select>
                      </td>
                   </tr>
                 </tbody>
             </table>
           </div>
           <div class="three">
              
              <h2><img src="/images/yangtze/three.png"/><span>Maybe other cities you want to tour with Yangtze Cruise</span> <strong><img src="/images/yangtze/down1.gif"  onclick="$(this).parents('.three').find('table').toggle()" /></strong><!-- <strong><img src="/images/yangtze/up1.jpg"  alt="" /></strong> --></h2>

              <p>If the answer is no, please ignore this part and submit your inquiry directly.</p>
              <table border="0" cellspacing="0" cellpadding="0" style="display:none;">
                <tbody>
                    <tr>
                        <td><input type="checkbox" name="other_city[]" value="Beijing (the capital city)"> Beijing (the capital city)</td>
                        <td><input type="checkbox" name="other_city[]" value="Shanghai (the biggest city of china)"> Shanghai (the biggest city of china)</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="other_city[]" value="Xian (the ancient heart of China)"> Xian (the ancient heart of China)</td>
                        <td><input type="checkbox" name="other_city[]" value="Guilin (Li River cruise,Yangshuo)"> Guilin (Li River cruise,Yangshuo)</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="other_city[]" value="Chengdu (the homotown of Panda)"> Chengdu (the homotown of Panda)</td>
                        <td><input type="checkbox" name="other_city[]" value="Tibet (the World's dream)"> Tibet (the World's dream)</td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="checkbox" name="other_city[]" value="Hong Kong (the shopping paradise)"> Hong Kong (the shopping paradise)</td>
                    </tr>
                </tbody>
              </table>
          </div>
          <div class="three">
              <h2><img src="/images/yangtze/four.png" /> <span>Additional Requirements(optional)</span></h2>
              <p>If you have any other informations want us to know, please write it down here. Our CSD will try their best to find best solutions for you!</p>
              <textarea name="other_message" id="other_message" cols="" rows="" style=" border:1px solid #c3c3c3; width:628px; height:70px; margin-top:10px;"></textarea>
          </div>
        </div>
        <div class="departs">
     <div class="departs-title">Cruise departs at the same day</div>
     <div class="departul">
        <?php foreach((array)$recentMonthCruise as $v):?>
        <ul>
           <li class="pic"><img src="<?php echo ImageUtils::getThumbnail(Cruise::UPLOAD_PATH.$v->ufile,"147x96");?>"  alt="<?php echo $v->cruise_name;?>" /></li>
           <li><a href="<?php echo $v->getUrl();?>"><?php echo $v->cruise_name;?></a></li>
           <li class="starnew"><span class="star<?php echo $v->cruise_grade;?>"></span></li>
           <li class="feature"><?php echo substr($v->highlights,0,35);?>...</li>
           <li>From:<span><?php echo SiteUtils::getCurrencyPrice($v->uplowprice);?></span> p/p</li>
           <!--  <li><a href="<?php echo $v->getUrl();?>"><img src="/images/yangtze/enquiry.jpg"></a></li>  -->
       </ul>
       <?php endforeach;?>
      
    </div>
	</div>
        <div class="bott">
            <a href="javascript:;" onclick="submit_cruise_order()"><img src="/images/yangtze/button.png" /></a> <span>Reply within 12Hours! </span>
        </div>
     </div>



<!--弹出层时背景层DIV-->
<div id="fade" class="black_overlay"></div>

<div id="MyDiv" class="white_content">
  <div class="succed">
          <div class="close" onclick="CloseDiv('MyDiv','fade')"><img src="/images/yangtze/closenew.png" /></div>
          <div class="succ-content"><img src="/images/yangtze/succed.jpg"  alt="" /></div>
  </div>
</div>

<script type="text/javascript">

  //弹出隐藏层
  function ShowDiv(show_div,bg_div){
    document.getElementById(show_div).style.display='block';
    document.getElementById(bg_div).style.display='block' ;
    var bgdiv = document.getElementById(bg_div);
    bgdiv.style.width = document.body.scrollWidth;
    $("#"+bg_div).height($(document).height());
  }

  //关闭弹出层
  function CloseDiv(show_div,bg_div)
  {
    document.getElementById(show_div).style.display='none';
    document.getElementById(bg_div).style.display='none';
  }

  function pop_cruise(obj,date){
    return true;
    /*
     $("#pop_itinerary").html($(obj).find("em").html());
     $("#pop_cruise_date").html(date);
     $("#pop_cruise_order").zxxbox({
      bgclose: false,
      title:'',
    });
    */
  }

function submit_cruise_order(){
   var gender = $("#gender").val();
   var full_name = $("#full_name").val();
   
   if(full_name==""){
      alert("Pleaser enter your name.");
      return;
   }
   var adults = $("#adults").val();
   
  var email = $("#email").val();
  var reg = /(\S)+[@]{1}(\S)+[.]{1}(\w)+/;
  if(!reg.test(email)){
    alert('Please input your correct email.');
    $("#email").focus();
    return false;
  }

  var nationality = $("#nationality").val();
  if(nationality == ""){
    alert('Please input your nationality');
    return false;
  }
   var children = $("#children").val();
   var infant = $("#infant").val();
   var entry_date = $("#entry_date").val();
   var cruise_itinerary = $("#cruise_itinerary_2").val();
   var preferred_cabin = $("#preferred_cabin_2").val();
   var no_of_cabins = $("#no_of_cabins").val();

   var other_cities_arr = [];
   $("input[name='other_city[]']:checked").each(function(){
      other_cities_arr.push($(this).val());
   })
   var other_cities = other_cities_arr.join();
   var other_message = $("#other_message").val();

   $.get("<?php echo Yii::app()->createUrl('cruise/submitPopOrder');?>", {gender:gender, full_name:full_name,adults:adults, email:email,
    children:children, infant:infant, entry_date:entry_date, cruise_itinerary:cruise_itinerary,
    preferred_cabin:preferred_cabin,no_of_cabins:no_of_cabins, other_cities:other_cities, other_message:other_message}, function(ret){
      if(ret == 0){
        //alert("Submit Successful！ Thanks for inquiring, our CSD will contact with you within 12 hours.");
        ShowDiv('MyDiv','fade');
        $.zxxbox.hide();
        $("#pop_cruise_order").find("input").val('');
      }
   })
  
  /*
  $("#pop_success_tip").zxxbox({
    bgclose:true,
    title:'',
  });
  */
}
</script>