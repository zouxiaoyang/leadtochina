<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/diytours.css');?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.js');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.datepicker.js');?>
<?php
$this->setPageTitle("Customize China Tours, Free to DIY Your China Trip, Tailor make China Tours");
Yii::app()->clientScript->registerMetaTag('keywords', 'customize china tours, diy china tour, tailor make china tours');
Yii::app()->clientScript->registerMetaTag('description','We are specialized in customizing unique China tours for individuals, families and small groups.');
?>
<style>
  #ui-datepicker-div{font-size:12px;}
</style>

<div class="diy_cont">
 <div class="diy_banner"></div>
 <div class="diy_cust">
  <p class="diy_cust_tit">Customize your tour</p>
  <p>Couldn't find your favorite travel routes in our ready-made itineraries? Whether you wish to modify a tour package on our website or have a special holiday built from scratch, the local travel experts at Lead to China Tours Company can customize the ideal itinerary for you. </p>
  <p>Some examples of customizations include:</p>
  <ul class="diy_cust_ul">
  <li><span class="req">·</span> adding extra nights or activities to a package</li>
  <li><span class="req">·</span> accommodating large groups or travellers with special needs</li>
  <li><span class="req">·</span> assisting with vegetarian diet</li>
  <li><span class="req">·</span> adding special touches to a package for a honeymoon</li>
  </ul>
  <p>Let us know what we can do for you in the form below. Please try to give as many details as possible-even estimates are helpful. 
We do our best to reply to you in a few hours, maximum 24 hours!</p>
  <p>Mandatory fields are marked with an asterisk (<span class="req">*</span>).</p>
 </div>
 <div class="diy_self">
   <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'tours-package-form',
        'enableClientValidation'=>true,
        'htmlOptions'=>array('onsubmit'=>"return checkOrder()"),
    )); ?>
  <p class="diy_self_tit">About yourself</p>
  <div class="">
   <div class="diy_self_form diy_sty" onmouseover="this.style.backgroundColor='#F4F9FD'" onmouseout="this.style.backgroundColor='#FFFFFF'" >
    <label for="name" style=""><span class="req">*</span> <strong>Name:</strong></label>
    
    <?php echo $form->textField($model,'full_name'); ?>
    

    <label for="name" style="margin-left:84px"><span class="req">*</span> <strong>Nationality:</strong></label>
    <?php echo $form->textField($model,'nationality'); ?><br />
    <label for="email" style="margin-left:2px"><span class="req">*</span> <strong>Email:</strong></label>
    <?php echo $form->textField($model,'email'); ?>
    

    <label for="reemail" style="margin-left:30px;"><span class="req">*</span> <strong>Re-type your email:</strong></label>
    <input type="text" name="reemail" value=""/>  
   <p style="margin-top:10px;"><strong>Numbers of travellers in your party:</strong> <em>(We can also accommodate large groups)</em> </p>
   </div>
   <div class="diy_self_form diy_sty" onmouseover="this.style.backgroundColor='#F4F9FD'" onmouseout="this.style.backgroundColor='#FFFFFF'" >
    <label for="adults" style=""><span class="req">*</span> <strong>Adults:</strong></label>
    <input type="text" name="adults" value="" style="width:45px"/>

    <label for="youths" style="padding-left:17px"><strong>Youths (age 12-17):</strong></label>
    <input type="text" name="youths" value="" style="width:45px"/>
    <label for="children" style="padding-left:17px"><strong>Children (age 3-11):</strong></label>
    <input type="text" name="children" value="" style="width:45px"/>
    <label for="infants" style="padding-left:17px"><strong>Infants (age 0-2):</strong></label>
    <input type="text" name="infants" value="" style="width:45px"/>
   </div>
   <div class="diy_self_form" onmouseover="this.style.backgroundColor='#F4F9FD'" onmouseout="this.style.backgroundColor='#FFFFFF'" >
    <p style="margin-top:10px;"><strong>Comments regarding your travelling group </strong> <em>(example: couples, family, friends etc.)</em> </p>
    <textarea name="regard_travel_group" class=""></textarea>
   </div>
   </div>
   <p class="diy_self_tit" style="padding-top:15px;">About your vacation</p>
   <div class="">
    <div class="pt15 diy_sty diy_self_form" onmouseover="this.style.backgroundColor='#F4F9FD'" onmouseout="this.style.backgroundColor='#FFFFFF'" >
     <p> If you would like to customize an existing package, please insert its product code:</p>
     <input type="text" name="tour_code" value="" style="margin:10px 0 0 0"/>
     <label for="youths" style="padding-left:17px">Example: BXT-04</label>
    </div>
    <div class="diy_self_form" onmouseover="this.style.backgroundColor='#F4F9FD'" onmouseout="this.style.backgroundColor='#FFFFFF'" >
    <p style="margin-top:10px;"><strong> Please select your ideal destination(s): </strong> <em>(choose more than one if you would like a combo tour)</em></p>
    <div class="diy_self_city" style="margin-top:5px;">
     <ul>
      <li><input type="checkbox" name="city[]" value="Beijing">Beijing</li>
      <li><input type="checkbox" name="city[]" value="Hong Kong">Hong Kong</li>
      <li><input type="checkbox" name="city[]" value="Huangshan">Huangshan</li>
     </ul>
     <ul>
      <li><input type="checkbox" name="city[]" value="Xi'an">Xi'an</li>
      <li><input type="checkbox" name="city[]" value="Yangtze Cruise">Yangtze Cruise</li>
      <li><input type="checkbox" name="city[]" value="Zhangjiajie">Zhangjiajie</li>
     </ul>
     <ul>
      <li><input type="checkbox" name="city[]" value="Shanghai">Shanghai</li>
      <li><input type="checkbox" name="city[]" value="Tibet">Tibet</li>
      <li><input type="checkbox" name="city[]" value="Guangzhou">Guangzhou</li>
     </ul>
     <ul>
      <li><input type="checkbox" name="city[]" value="Guilin/Yangshuo">Guilin/Yangshuo</li>
      <li><input type="checkbox" name="city[]" value="Suzhou">Suzhou</li>
      <li><input type="checkbox" name="city[]" value="Silk Road">Silk Road</li>
     </ul>
     <ul>
      <li><input type="checkbox" name="city[]" value="Chengdu">Chengdu</li>
      <li><input type="checkbox" name="city[]" value="Hangzhou">Hangzhou</li>
      <li><input type="checkbox" name="city[]" value="Yunnan">Yunnan</li>
     </ul>
    </div>
    <textarea name="city[]" class="" style="margin-top:5px"></textarea>
    <p style="clear:both"></p>
    </div>
    <div class="diy_vaca diy_self_form" onmouseover="this.style.backgroundColor='#F4F9FD'" onmouseout="this.style.backgroundColor='#FFFFFF'" >
    <p style="margin-top:15px;"><strong>  Please select your ideal vacation type or special interests:  </strong></p>
    <div class="diy_vaca_int" style="margin-top:5px;">
     <ul>
      <li><input type="checkbox" name="interests[]" value="Family Vacation">Family Vacation</li>
      <li><input type="checkbox" name="interests[]" value="Culture & History">Culture & History</li>
      <li><input type="checkbox" name="interests[]" value="Culinary Tour">Culinary Tour</li>
     </ul>
     <ul>
      <li><input type="checkbox"  name="interests[]"  value="Senior Tour">Senior Tour</li>
      <li><input type="checkbox"  name="interests[]"  value="Landscape & Nature">Landscape & Nature</li>
      <li><input type="checkbox"  name="interests[]"  value="Cycling Excursion">Cycling Excursion</li>
     </ul>
     <ul>
      <li><input type="checkbox"  name="interests[]"  value="Honey Moon">Honey Moon</li>
      <li><input type="checkbox"  name="interests[]"  value="Ethnic Culture & Art">Ethnic Culture & Art</li>
      <li><input type="checkbox"  name="interests[]"  value="Culinary Tour">Hiking & Climbing</li>
     </ul>
     <p style="clear:both"></p>
    </div>
    </div>
    <div class="diy_vaca_star diy_self_form" onmouseover="this.style.backgroundColor='#F4F9FD'" onmouseout="this.style.backgroundColor='#FFFFFF'" >
    <p style="margin:15px 0 5px 0;"><strong>Level of Accommodation </strong></p>
    <span><input type="radio" name="star" value="5 Stars">5 Stars</span> <span style="margin-left:15px;"><input type="radio" name="star"  value="4 Stars">4 Stars</span> <span style="margin-left:15px;"><input type="radio" name="star"  value="3 Stars">3 Stars</span> <span style="margin-left:15px;"><input type="radio" name="star"  value="No Need">No Need</span>
    </div>
    <div class="diy_self_form" onmouseover="this.style.backgroundColor='#F4F9FD'" onmouseout="this.style.backgroundColor='#FFFFFF'" >
     <p style="margin:15px 0 0px 0;"><strong>Train v Plane</strong></p>
     <p class="diy_txt1">Most customers prefer to fly, but a bullet train can offer a unique experience and some savings.</p>
     <div class="diy_vaca_tra" style="margin-top:5px;">
      <ul>
       <li><input type="radio" name="traffic" value="Flights Prefered" id="flights">Flights Prefered</li>
       <li><input type="radio" name="traffic" value="Bullet Trains Prefered" id="train">Bullet Trains Prefered</li>
      </ul>
      <ul>
       <li><input type="radio" name="traffic" value="Bullet Trains & Flights" id="trainflights">Bullet Trains & Flights</li>
       <li><input type="radio" name="traffic" value="Self Booking" id="selfbooking">Self Booking</li>
      </ul>
     <p style="clear:both"></p>
    </div>
    </div>
    <div class="diy_self_form" style="padding-top:5px" onmouseover="this.style.backgroundColor='#F4F9FD'" onmouseout="this.style.backgroundColor='#FFFFFF'" >
    <div class="">
     <label for="date" style=""><strong>Departure Date: </strong></label>
     <?php echo $form->textField($model,'entry_date',array('class'=>'diy_date_sty'));?>
     
     <input type="checkbox" value="I'm flexible on the date" name="flexible" style="margin:0 10px 0 20px">I'm flexible on the date</div>
    <div class="">
     <label for="stay" style=""><strong>Length of stay: </strong></label>
     <select name="length_of_stay" style=" height:26px;margin-left:13px;width:280px; ">
     <option value="1 day">1 day</option>
     <option value="2-3 days">2-3 days</option>
     <option value="4-7 days">4-7 days</option>
     <option value="8-11 days">8-11 days</option>
     <option value="12-15 days">12-15 days</option>
     <option value="15-21 days">15-21 days</option>
     <option value="up to 1 month">up to 1 month</option>
     <option value="Other- please specify in message">Other- please specify in message</option>
    </select>
     </div>
   <div class="">
    <p style="margin-top:15px;"><strong>Comments regarding length of stay:</strong></p>
    <textarea name="comment_length_of_stay" class=""></textarea>
   </div>
   </div>
    <div class="diy_self_form" onmouseover="this.style.backgroundColor='#F4F9FD'" onmouseout="this.style.backgroundColor='#FFFFFF'" >
     <div class="" style=" position:relative; width:690px;">
     <div style="float:left; line-height:12px;margin-top:18px;"><strong>Per Person Budget </strong><br /><span class="diy_txt2">Exclude International Airfare</span></div>
     <div style="float:left;">
     <select name="per_person_budget" style=" height:26px;margin-left:13px; width:280px;">
      <option value="_none">- Select a value -</option>
      <option value="500-1000">Per Person: $500 - $1000 USD</option>
      <option value="1000-1500">Per Person: $1000 - $1500 USD</option>
      <option value="1500-2000">Per Person: $1500 - $2000 USD</option>
      <option value="2000-2500">Per Person: $2000 - $2500 USD</option>
      <option value="2500-3000">Per Person: $2500 - $3000 USD</option>
      <option value="3000-4000">Per Person: $3000 - $4000 USD</option>
      <option value="4000-5000">Per Person: $4000 - $5000 USD</option>
      <option value="Over $5000">Per Person: Over $5000 USD</option>
    </select></div>
    <div class="diy_description" id="person_price_des">Budget <b><i>per person</i></b> for all the services you’re requesting.  If you're unsure, please give us your best guess and we’ll provide you guidance if necessary.</div>
    <p style="clear:both"></p>
     </div>
     <div class="">
     <label for="stay" style=""><strong>Is Budget Flexible? </strong></label>
     <select name="budget_flexible" style=" height:26px;margin-left:41px; width:280px;">
     <option value="">- Select a value -</option>
     <option value="The above is my maximum budget">The above is my maximum budget</option>
     <option value="Flexible: I can increase up to 20% if needed">Flexible: I can increase up to 20% if needed</option>
     <option value="Very flexible: Plan me the trip I want. Do not focus on specific budget">Very flexible: Plan me the trip I want. Do not focus on specific budget</option>
    </select>
     </div>  
    <div class="">
     <p style="margin-top:15px;"><strong>What Would You Like To See And Do?</strong></p>
     <textarea name="want_see_and_do" class="" placeholder="Any specific destinations or interests (e.g. food, culture, romance, adventure, local life, etc.)? No-shopping? What would make this your dream trip?"></textarea>
     <p><input type="checkbox" value="1" checked style="margin:10px 5px 0 0">I Would like my Travel Specialists to make Suggestions based on my interests.</p>
    </div>
    </div>
    <div class="diy_self_form" style="margin:15px 0" onmouseover="this.style.backgroundColor='#F4F9FD'" onmouseout="this.style.backgroundColor='#FFFFFF'" >
    
     <p style="padding-top:10px;"><input class="btn-submit" type="image" src="/images/diy/diy_btn1.jpg" style="vertical-align:bottom"></p>
    </div>
     </div>
 <?php $this->endWidget(); ?>
 </div>

</div>
<script>
$(function(){
  $("select,input,textarea").click(function(){
    if($(this).attr('name') == "per_person_budget"){
      $("#person_price_des").show();    
    }else{
      $("#person_price_des").hide();    
    }
  })

})

function checkOrder(){
  if($("#Order_full_name").val() == ""){
    alert("Please input your name!");
    return false;
  }

  if($("#Order_nationality").val() == ""){
    alert("Please input your nationality!");
    return false;
  }

  var email = $("#Order_email").val();
  if( email == ""){
    alert("Please input your email!");
    return false;
  }

  var reemail = $("input[name='reemail']").val();
  if(email != reemail){
    alert("Plese confirm your email again.");
    return false;
  }


  if($("input[name='adults']").val() == ""){
    alert("Please input adults num.");
    return false;
  }

  return true;
}

$("#Order_entry_date").datepicker({
  changeMonth: true,
  numberOfMonths: 2,
});
</script>
