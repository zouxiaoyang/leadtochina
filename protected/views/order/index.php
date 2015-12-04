<div class="page-wrapper02" >
<div class="container" >
<h1 class="page-title08">Enquire Form</h1>
<div class="row">
  <div class="col-md-9 col-sm-12 col-xs-12">
    <form id="adminForm" onsubmit="return checksubmit();" name="adminForm" method="post" action="<?php echo Yii::app()->createUrl('order/save');?>" >
      <div class="content">
        <div class="contmod orderinfo">
          <h2 class="title2">Tour Information</h2>
          <div>
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>Tour Code</td>
                  <td><?php echo $ress['package_code'];?></td>
                </tr>
                
                <tr>
                  <td>Route</td>
                  <td><?php echo $ress['route'];?></td>
                </tr>
                <tr class="price">
                  <td>Price Per Person</td>
                  <td><b>From $<?php echo $ress['price'];?></b></td>
                </tr>
                <tr>
                  <td>Remark</td>
                  <td>The price is for reference only, we will work with you to define the final itinerary and offer an accurate price</td>
                </tr>
                <tr>
                  <td class="on"> Your Travel Date<span class="must">*</span></td>
                  <td>                
                          <input id="entry_date" class="Wdate hasDatepicker" type="text" autocomplete="off" name="entry_date"  placeholder=" " />
                          
                       </td>
                </tr>
                <tr>
                  <td>Approx Duration<span class="must">*</span></td>
                  <td><?php echo $ress['days'];?> <span  style="color:#999;float:right;">Day(s)</span></td>
                </tr>
                <tr>
                  <td class="on">Hotel Class<span class="must">*</span></td>
                  <td><div class="inputmod">
                      <select name="hotel" id="TourClass">
                        <option selected="selected" value="">-- Please Select --</option>
                        <option value="Tourist">Tourist</option>
                        <option value="Deluxe">Deluxe</option>
                        <option value="Superior">Superior</option>
                      </select>
                    </div></td>
                </tr>
                <tr>
                  <td class="on">Adults (>11)<span class="must">*</span></td>
                  <td><div class="inputmod">
                      <input type="text" readonly="readonly" placeholder="0" value="0" name="adults" id="Adults">
                      <button class="glyphicon-plus" type="button" onclick="$('#Adults').val(parseInt($('#Adults').val())+1);"></button>
                      <button class="glyphicon-minus" type="button" onclick="if(parseInt($('#Adults').val())>0){$('#Adults').val(parseInt($('#Adults').val())-1)}"></button>
                    </div></td>
                </tr>
                <tr>
                  <td class="on">Children (2-11)<span class="must">*</span></td>
                  <td><div class="inputmod">
                      <input type="text" readonly="readonly" placeholder="0" value="0" name="children" id="Childrens">
                      <button class="glyphicon-plus" type="button" onclick="$('#Childrens').val(parseInt($('#Childrens').val())+1);"></button>
                      <button class="glyphicon-minus" type="button" onclick="if(parseInt($('#Childrens').val())>0){$('#Childrens').val(parseInt($('#Childrens').val())-1)}"></button>
                    </div></td>
                </tr>
                <tr>
                  <td class="on">Infants (<2)<span class="must">*</span></td>
                  <td><div class="inputmod">
                      <input type="text" readonly="readonly" placeholder="0" value="0" name="infant" id="Seniors">
                      <button class="glyphicon-plus" type="button" onclick="$('#Seniors').val(parseInt($('#Seniors').val())+1);"></button>
                      <button class="glyphicon-minus" type="button" onclick="if(parseInt($('#Seniors').val())>0){$('#Seniors').val(parseInt($('#Seniors').val())-1)}"></button>
                    </div></td>
                </tr>
                
                <tr>
                  <td>Remark</td>
                  <td>The price is for reference only, we will work with you to define the final itinerary and offer an accurate price</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="contmod contactinfo">
          <h2 class="title2">Primary Guest Information</h2>
          <div class="table-responsive">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td class="on">Full Name<span class="must">*</span></td>
                  <td><div class="inputmod">
                      <select class="Sex" name="Gender" id="Sex">
                        <option selected="selected" value="Mr">Mr.</option>
                        <option value="Ms">Ms.</option>
                      </select>
                      <input type="text" placeholder="" autocomplete="off" class="FullName" id="FullName" name="FullName" />
                    </div></td>
                </tr>
                <tr>
                  <td class="on">Nationality<span class="must">*</span></td>
                  <td><div class="inputmod">
                  	 <input type="text" placeholder="" autocomplete="off"  id="Nation" name="Nation" />
                   </div></td>
                </tr>
                <tr>
                  <td class="on">Email<span class="must">*</span></td>
                  <td><div class="inputmod">
                      <input type="text" placeholder="" autocomplete="off" id="Email" name="Email" />
                    </div></td>
                </tr>
                <tr>
                  <td class="on">Alternative Email</td>
                  <td><div class="inputmod">
                      <input type="text" placeholder="" onpaste="return false;" autocomplete="off" id="Cemail" name="Cemail" />
                    </div></td>
                </tr>
                <tr>
                  <td>Phone Number</td>
                  <td><div class="inputmod">
                      <input type="text" placeholder="" autocomplete="off" id="PhoneNo" name="PhoneNo">
                    </div></td>
                </tr>
                <tr>
                  <td>Promotion Code (optional)</td>
                  <td><div class="inputmod">
                      <input type="text" autocomplete="off" name="PromotionCode" id="PromotionCode" />
                    </div></td>
                </tr>
                <tr>
                  <td>Your Privacy</td>
                  <td>We promise to keep your personal information safe, and will never pass it on to 3rd parties. </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="contmod otherinfo">
          <h2 class="title2">Additional Requests</h2>
			<textarea  name="other_mes" id="Other" 
				onblur="if(this.value == ''){this.style.color = '#ACA899'; this.value = 'Tell us more about your requirements, e.g non-smoking room, vegetarian, Spanish-speaking guide, etc.'; }" 
				onfocus="if(this.value.indexOf('Tell us more about your requirements')!=-1){this.value =''; this.style.color = '#000000'; }" 
				style="color:#ACA899;">Tell us more about your requirements, e.g non-smoking room, vegetarian, Spanish-speaking guide, etc.
			</textarea> 
        </div>

		<input type="hidden" value="vote" name="task">
		<input type="hidden" value="com_order" name="option">
		<input type="hidden" value="14" name="ordertype">
		<input type="hidden" value="1" name="new_com_order">
		<input type="hidden" value="0" name="order_purpose">
		<input id="referer_url" type="hidden" value="" name="referer_url">
		<input type="hidden" value="" name="pcid">
		<input type="hidden" value="" name="is_tuan_order">
		<input type="hidden" value="<?php echo Yii::app()->session['package_id'];?>" name="packageid">
		<input type="hidden" value="<?php echo $ress['name'];?>" name="package_name">
		<input type="hidden" value="<?php echo $ress['categorieid_str'];?>" name="package_category">
		<input type="hidden" value="<?php echo $ress['package_code'];?>" name="tour_code">
		<input type="hidden" value="<?php echo $ress['route'];?>" name="destinations">
		<input type="hidden" value="<?php echo $ress['days'];?>" name="duration">
		<input type="hidden" value="1" name="92f8c79f2b18b6fdcd4a426f7547d3cd">

        <div class="link">
          <input type="submit" value="Get My Trip Planned" id="BookNowBtn" class="large-button" />
          <p class="description">We will reply in 12 working hours!</p>
        </div>
      </div>
    </form>
  </div>
  <div  class="col-md-3"> 
  	<div class="order-right-view01">
    	<i class="title01">You are inquiring about this trip</i>
        <div class="content01">
        <img src="/images/order-1.jpg" width="262" />
        <span>spirits of japan tour</span>
        <p>spirits of japan tourspirits of japan tourspirits of japan tourspirits of japan tourspirits of japan tourspirits of japan tourspirits of japan tour</p>
        </div>
    </div>
  	<div class="menu">
        <dl class="menumod process">
            <dt>Booking Process</dt>
            <dd class="on">1.Search</dd>
            <dd class="on">2.Select</dd>
            <dd class="on">3.Book</dd>
            <dd class="">4.Enjoy your trip</dd>
        </dl>
    </div>
  </div>
</div>
</div>
</div>
<script type="text/javascript">
	var bFlag=true;
	function clearTip(){
			var oTxt=document.getElementByIdx_x("txt1");
			 if(bFlag==true){
			   oTxt.value="";
			   bFlag=false;
			}
	}
function checksubmit(){

	var reg = /^[^\@]+@.*\.[a-z]{2,6}$/i;

	var status = false;


	if(!$('#entry_date').val()){
		status=true;
		$('#entry_date').css('border','1px dotted #F00');
	}else{
		$('#entry_date').css('border','0 none');
	}

	if(!$('#TourClass').val()){
		status=true;
		$('#TourClass').css('border','1px dotted #F00');
	}else{
		$('#TourClass').css('border','0 none');
	}

	if(!$('#Adults').val()){
		status=true;
		$('#Adults').css('border','1px dotted #F00');
	}else{
		$('#Adults').css('border','0 none');
	}
	
	if(!$('#FullName').val()){
		status=true;
		$('#FullName').css('border','1px dotted #F00');
	}else{
		$('#FullName').css('border','0 none');
	}

	if(!$('#Nation').val()){
		status=true;
		$('#Nation').css('border','1px dotted #F00');
	}else{
		$('#Nation').css('border','0 none');
	}
	
	if(!reg.test($('#Email').val())){
		status=true;
		$('#Email').css('border','1px dotted #F00');
	}else{
		$('#Email').css('border','0 none');
	}

	if(status){
		return false;
	}else{
	  return true;
	}

}
</script>