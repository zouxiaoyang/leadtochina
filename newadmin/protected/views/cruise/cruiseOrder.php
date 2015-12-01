<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/yangtze3.css'); ?>

<div id="content">
<div id="pop_cruise_order" class="inquiring">
        <div class="titlenew">You’re inquiring about the "<?php echo $model->cruise_name;?>" Ship</div>
        <div class="inq-content">
           <div class="tell">Please tell us more about your travel plans witin just a few steps. We’ll get back to you with a quotation in 0.5-23.5 hours.</div>
           <div class="firstleft">
                <h2><img src="/images/yangtze/one_new.png"  alt="" /> <span>Personal Information</span></h2>
                <table border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                     <tr>
                         <td>Full Name:</td>
                         <td>Adults(&gt;12)</td>
                         <td>Children(2-12)</td>
                         <td>Badies(0-2)</td>
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
                          <td>
                          <select id="children" name="children" onchange="if(this.value=='');else style='color:#000;'">
                            <?php for($i=0; $i<=10; $i++):?>
                              <option value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php endfor;?>
                          </select>
                         </td>
                         <td>
                            <select id="infant" name="infant" onchange="if(this.value=='');else style='color:#000;'">
                              <?php for($i=0; $i<=10; $i++):?>
                              <option value="<?php echo $i;?>"><?php echo $i;?></option>
                              <?php endfor;?>
                            </select>
                          </td>
                      </tr>
                     <tr>
                         <td>Email Address:</td>
                         <td colspan="3">Nationality:</td>
                      </tr>
                      <tr>
                         <td><input type="text" id="email" name="email" class="email"></td>
                         <td colspan="3"><input type="text" style="width:330px;" maxlength="50" id="nationality" name="nationality" class="telephone"></td>
                     </tr>
                     <tr>
                         <td colspan="4">Cruise Date:</td>
                     </tr>
                     <tr>
                         <td colspan="4"><input type="text" maxlength="100" id="entry_date" name="entry_date" class="Wdate" onclick="WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})"></td>
                     </tr>
                  </tbody>
                </table>
                <div class="clear"></div>
                <h2 style="margin-bottom:4px;"><img src="/images/yangtze/second_new.png"  alt="" /> <span>About the Ship</span></h2>
              <p>The Price here is one cabin sharing by two people. If you want to have one room by yourself, or upgrade the level of the cabin, you have to pay more.</p>
           </div>
           <div class="firstright">
               <div class="booking">
                  <h2>Your Booking Summary</h2>
                  <p>Cruise ship: <?php echo $model->cruise_name;?><br />
                     <!--Price:<span>from <?php echo SiteUtils::getCurrencyPrice($model->getPrice());?></span> person<br />
                     Cruise date:<span id="pop_cruise_date"></span><br />
                     Itinerary:<span id="pop_itinerary">Chongqing-Yichang</span>-->
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
              
              <table border="0" cellspacing="0" cellpadding="0">
                <tbody>
                   <tr>
                      <td>Preferred Cruises Itinerary:</td>
                      
                      <td>No.of Cabins:</td>
                   </tr>
                   <tr>
                      <td><select style="width:285px;" id="cruise_itinerary_2" name="cruise_itinerary" onchange="if(this.value=='');else style='color:#000; width:285px;'">
                            <option value="<?php echo Cruise::$upCityDays[$model->upcity].Cruise::$upCityArr[$model->upcity];?>"><?php echo Cruise::$upCityDays[$model->upcity].Cruise::$upCityArr[$model->upcity];?></option>
                            <option value="<?php echo Cruise::$downCityDays[$model->downcity].Cruise::$downCityArr[$model->downcity];?>"><?php echo Cruise::$downCityDays[$model->downcity].Cruise::$downCityArr[$model->downcity];?></option>
                           </select>
                      </td>
                     
                      <td><select id="no_of_cabins" name="no_of_cabins:" onchange="if(this.value=='');else style='color:#000;'">
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
              
              <h2><img src="/images/yangtze/three_new.png"/><span>Maybe other cities you want to tour with Yangtze Cruise</span> <strong style="display:none;"><img src="/images/yangtze/down1.gif" /></strong><!-- <strong><img src="/images/yangtze/up1.jpg"  alt="" /></strong> --></h2>

              <p>If the answer is no, please ignore this part and submit your inquiry directly.</p>
              <table border="0" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td><input type="checkbox" name="other_city[]" value="Beijing (the capital city)"> Beijing (the capital city)</td>
                        <td><input type="checkbox" name="other_city[]" value="Shanghai (the biggest city of china)"> Shanghai (the biggest city of china)</td>
                        <td><input type="checkbox" name="other_city[]" value="Xian (the ancient heart of China)"> Xian (the ancient heart of China)</td>
                    </tr>
                    <tr>  
                        <td><input type="checkbox" name="other_city[]" value="Guilin (Li River cruise,Yangshuo)"> Guilin (Li River cruise,Yangshuo)</td>
                        <td><input type="checkbox" name="other_city[]" value="Chengdu (the homotown of Panda)"> Chengdu (the homotown of Panda)</td>
                        <td><input type="checkbox" name="other_city[]" value="Tibet (the World's dream)"> Tibet (the World's dream)</td>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="checkbox" name="other_city[]" value="Hong Kong (the shopping paradise)"> Hong Kong (the shopping paradise)</td>
                    </tr>
                </tbody>
              </table>
          </div>
          <div class="three">
              <h2><img src="/images/yangtze/four_new.png" /> <span>Additional Requirements(optional)</span></h2>
              <p>If you have any other informations want us to know, please write it down here. Our CSD will try their best to find best solutions for you!</p>
              <textarea name="other_message" id="other_message" cols="" rows="" style=" border-color: #5E5E5E #B7B7B7 #B7B7B7 #5E5E5E; border-radius: 4px; border-style: solid; border-width: 1px; width:880px; height:120px; margin-top:10px;margin-bottom:5px;"></textarea>

<br />
<input type="checkbox" checked style="height:5px;margin-right:5px;border: 1px solid #CCCCCC;" /><span>I agree with <a href="/privacy-policy.html" target="_blank" style="color: #352E2C;text-decoration: underline;">Privacy Policy</a></span>
 
          </div>
        </div>
        <div class="bott">
            <a href="javascript:;" onclick="submit_cruise_order()"><img src="/images/yangtze/button.png" /></a> <span>Reply within 12Hours! </span>
        </div>
     </div>
</div>

<script>
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
        //ShowDiv('MyDiv','fade');
        //$.zxxbox.hide();
        $("#pop_cruise_order").find("input").val('');
        location.href="/succeed.html";
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
