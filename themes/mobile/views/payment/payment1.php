<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/payment.css'); ?>
<div id="payment01">
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> Payment Guide</div>
   <div class="payment">
     <div class="paytitle">Payment Guide</div>
     <div class="paycontent">
        <p><strong>1. Online Payment</strong>
        Online payment method like PayPal, Credit Card, Skrill has many advantages: fast, easy and safe. Fill in the blanks and leave your personal information. Then input the agreement price and choose the right on-line payment method you prefer and complete your payment. Then we will trail your order within 12 working hours.</p>
       <form method="post" action="https://www.paypal.com/cgi-bin/webscr" id="toursearchpanelform">
       <div class="payleft">
         <table cellspacing="0" cellpadding="0" border="0">
             <tbody>
                                          <tr>
			                              <td colspan="2"><strong>1. Fill up your information</strong></td>
                                          </tr>
                                          <tr>
			                                         <td width="13%" style="text-align:right;">Full Name:<font color="orange" style="display:none">**</font></td>
<td width="87%"><select id="item_name" name="item_name" style="width:50px;">
	                                                       <option value="" selected="selected">Mr.</option>
	                                                       <option value="">Ms.</option>
                                                   </select>
                                                   <input class="width3" type="text" msg="Please enter your last name" vtype="notNull" size="50" id="last_name" name="last_name" style="width:150px"><span id="last_nameerr"></span></td>
                                      </tr>
			                                    <tr>
			                                         <td style="text-align:right;">Email:<font color="orange" style="display:none">**</font></td>
			                                         <td><input class="width3" type="text" msg="Email has error" vtype="email" style="width:204px;" id="payer_email" name="email"><span id="payer_emailerr"></span></td>
		                                      </tr>
			                                    <tr>
			                                         <td style="text-align:right;">payment for:<font color="orange" style="display:none">**</font></td>
			                                         <td><select id="item_name" name="item_name" style=" width:207px;">	                        
	                                                       <option value="hotel">hotel</option>
	                                                       <option value="flight">flight</option>
	                                                       <option value="train">train</option>
	                                                       <option value="travel package" selected>travel package</option>
	                                                       <option value="others">others</option>
                                                   </select>
                                               </td>
		                                      </tr>
			                                    <tr>
			                                         <td valign="top" style="text-align:right;">messages:</td>
			                                         <td><textarea rows="5" cols="23" id="txt_area" name="txt_area"></textarea></td>
		                                      </tr>
			                                    <tr>
			                                         <td style="text-align:right;">Amount:<font style="color:#f60;">**</font></td>
			                                         <td><p><input class="width3" type="text" msg="Please input amount" vtype="price" id="amount" name="amount"> <font style="font-weight: bold; color: #f60;">USD</font>&nbsp;&nbsp;&nbsp;&nbsp;  <span id="amounterr"></span></p></td>
		                                     </tr>  
		              </tbody></table></div>
                      <div class="payright">
                         <table cellspacing="0" cellpadding="0" border="0">
                  			            <tbody>
                                        <tr>
                                               <td colspan="4"><strong>2. Choose the payment method</strong></td>
		                                    </tr>
                                            <tr>
			                                                           <td><img width="90" height="45" alt="Paypal" src="/images/paypal/Paypalx.gif"></td>
			                                                           <td style="padding-right:20px;"><input type="radio" id="paypal" name="payment" value="paypal"> PayPal</td>
			                                                           <td><img width="107" height="88" alt="Corangeit" src="/images/paypal/btn_card.gif"></td>
			                                                           <td><input type="radio" checked="checked" id="Corangeit" name="payment" value="Corangeit"> Credit Card <br />through Paypal</td>
		                                                      </tr>
			                                                     <tr>
			                                                           <td><img width="90" height="45" alt="Visa" src="/images/paypal/visax.gif"></td>
			                                                           <td style="padding-right:20px;"><input type="radio" id="payment" name="payment" value="Visa"> Visa</td>
			                                                           <td><img width="90" height="45" alt="MoneyBookers" src="/images/paypal/MoneyBookersx.gif"></td>
			                                                           <td><input type="radio" id="MoneyBookers" name="payment" value="Skrill"> Skrill</td>
		                </tr>
		              </tbody></table>
                      </div>
             <div class="paybutton">
                <input type="hidden" name="business" value="pay@leadtochina.com" />
                <input type="hidden" name="cmd" value="_xclick" />
                <input type="hidden" name="return" value="http://www.leadtochina.com/succeed1.html" />  
                <input type="hidden" name="currency_code" value="USD" />
                <input type="hidden" name="pay_to_email" value="cuckoosong@gmail.com" />
                <input type="hidden" name="detail1_description" value="Your ip:<?php echo $_SERVER['REMOTE_ADDR'];?>" />
                <input type="hidden" name="transaction_id" value="<?php echo $md5traid;?>" />
                <input type="hidden" name="hide_login" value="1" />
                <input type="hidden" name="currency" value="USD" />
                <input type="hidden" name="language" value="EN" />
                <input type="hidden" name="status_url" value="1275550521@qq.com" />
              <div class="check-online" onClick="checkForm();" style="cursor:pointer;"></div>
             </div>    
             </form>                 
        <div class="clear"></div>
        <p style="padding-bottom:4px;"><strong>2. Wire transfer</strong>
        Bank Transfer takes 2 days to 3 weeks before the payment to be settled. Because generally it requires less transfer fees, if there are more than 20 days prior to your arrival date, this method is suggested. Our Bank Account Information:</p>
        <div class="transfer">
           <h2>TRANSFER DETAIL</h2>
           <p>Company Name: <strong>Hefei Full-view Travel Service Co., Ltd</strong> <br />
           Chinese Name: <strong>合肥畅景旅行社有限公司</strong><br />
           Account: <strong>130 201 2209 2000 60551</strong><br />
           Bank Name: <strong>INDUSTRIAL AND COMMERCIAL BANK OF CHINA ANHUI PROVINCIAL BR.</strong> <br />
           BIC/SWIFT-Code: <strong>ICBKCNBJAHI</strong> <br />
           Bank Address: <strong>No.616 Huizhou Road, Hefei, Anhui, P.R. China</strong> <br />
           SWIFT#: <strong>CHASUS33</strong> </p>
        </div>
     </div>
   </div>
</div>


<script>
$("#payment,#MoneyBookers").click(function(){
  $("#last_name").attr("name","firstname");
  $("#payer_email").attr("name","pay_from_email");
  $("#txt_area").attr("name","detail1_text");
  $("#toursearchpanelform").attr("action","https://www.skrill.com/pay");
});

$("#paypal,#Corangeit").click(function(){
  $("#last_name").attr("name","last_name");
  $("#payer_email").attr("name","email");
  $("#txt_area").attr("name","txt_area");
  $("#toursearchpanelform").attr("action","https://www.paypal.com/cgi-bin/webscr");
});

function checkForm(){
  /*
  if($("#last_name").val()==""){
    alert("Please enter your last name");
    $("#last_name").focus();
    return false;
  }
  if($("#payer_email").val()==""){
    alert("Please enter your Email");
    $("#payer_email").focus();
    return false;
  }
  */
  if($("#amount").val()==""){
    alert("Please input amount");
    $("#amount").focus();
    return false;
  }

  $("#toursearchpanelform").submit();
}
</script>
