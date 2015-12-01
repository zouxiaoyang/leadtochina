<div class="page-wrapper02" >
<div class="container" >
<h1 class="page-title08">Enquire Form</h1>
<div class="row">
  <div class="col-md-9 col-sm-12 col-xs-12">
    <form id="adminForm" onsubmit="return checksubmit();" name="adminForm" method="post" action="index.php?option=com_order" >
      <div class="content">
        <div class="contmod orderinfo">
          <h2 class="title2">Tour Information</h2>
          <div>
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>Tour Code</td>
                  <td>CTA-PKG-01</td>
                </tr>
                
                <tr>
                  <td>Route</td>
                  <td>Beijing - Xian - Shanghai</td>
                </tr>
                <tr class="price">
                  <td>Price Per Person</td>
                  <td><b>From $1213</b></td>
                </tr>
                <tr>
                  <td>Remark</td>
                  <td>The price is for reference only, we will work with you to define the final itinerary and offer an accurate price</td>
                </tr>
                <tr>
                  <td class="on"> Your Travel Date<span class="must">*</span></td>
                  <td>                
                          <input id="d5221" class="Wdate hasDatepicker" type="text" autocomplete="off" name="entry_date"  placeholder=" " />
                          
                       </td>
                </tr>
                <tr>
                  <td>Approx Duration<span class="must">*</span></td>
                  <td>8 <span  style="color:#999;float:right;">Day(s)</span></td>
                </tr>
                <tr>
                  <td class="on">Hotel Class<span class="must">*</span></td>
                  <td><div class="inputmod">
                      <select name="TourClass" id="TourClass">
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
                      <input type="text" readonly="readonly" placeholder="0" value="0" name="Adults" id="Adults">
                      <button class="glyphicon-plus" type="button"></button>
                      <button class="glyphicon-minus" type="button"></button>
                    </div></td>
                </tr>
                <tr>
                  <td class="on">Children (2-11)<span class="must">*</span></td>
                  <td><div class="inputmod">
                      <input type="text" readonly="readonly" placeholder="0" value="0" name="Childrens" id="Childrens">
                      <button class="glyphicon-plus" type="button"></button>
                      <button class="glyphicon-minus" type="button"></button>
                    </div></td>
                </tr>
                <tr>
                  <td class="on">Infants (<2)<span class="must">*</span></td>
                  <td><div class="inputmod">
                      <input type="text" readonly="readonly" placeholder="0" value="0" name="Seniors" id="Seniors">
                      <button class="glyphicon-plus" type="button"></button>
                      <button class="glyphicon-minus" type="button"></button>
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
                      <select class="Sex" name="Sex" id="Sex">
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
			<textarea  name="Other" id="Other" 
				onblur="if(this.value == ''){this.style.color = '#ACA899'; this.value = 'Tell us more about your requirements, e.g non-smoking room, vegetarian, Spanish-speaking guide, etc.'; }" 
				onfocus="if(this.value.indexOf('Tell us more about your requirements')!=-1){this.value =''; this.style.color = '#000000'; }" 
				style="color:#ACA899;">Tell us more about your requirements, e.g non-smoking room, vegetarian, Spanish-speaking guide, etc.
			</textarea> 
        </div>
        <div class="link">
          <input type="button" value="Get My Trip Planned" id="BookNowBtn" class="large-button" />
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
</script>