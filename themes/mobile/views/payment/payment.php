

<div class="container">
	<div class="crumbs">
		<h4>
			<div class="breadcrumbs02"> <a href="/">Home</a> » <a href="/site/contact">Payment Guide</a></div>
		</h4>
	</div>
	<h1 class="page-title15">Payment Guide</h1>
	<div class="payment_mid">
		<div>
			<h2 class="payment_txt1 page-title09">1. Online Payment</h2>
			<p class="payment_txt2">Online payment method like PayPal, Credit Card, Skrill has many advantages: fast, easy and safe. Fill in the blanks and leave your personal information. Then input the agreement price and choose the right on-line payment method you prefer and complete your payment. Then we will trail your order within 12 working hours.</p>
		</div>
		<form method="post" action="https://www.paypal.com/cgi-bin/webscr" id="toursearchpanelform" onsubmit="return checkForm();" >
			<div class="row">
				<div class="col-sm-8 col-xs-12">
					<div class="payment_tit1 pb10"><span class="glyphicon glyphicon-circle-arrow-right"></span> Fill up your information</div>
					<div class="row pb10">
						<div class="col-lg-3 col-sm-3 col-xs-12">Full Name:</div>
						<div class="col-lg-9 col-sm-9 col-xs-12 payment_input">
							<select id="item_name" name="item_name" style="width:25%">
								<option value="" selected="selected">Mr.</option>
								<option value="">Ms.</option>
							</select>
							<input type="text" msg="Please enter your last name" vtype="notNull" id="last_name" name="last_name" style="width:67%" >
							<span id="last_nameerr"></span> </div>
					</div>
					<div class="row pb10">
						<div class="col-lg-3 col-sm-3 col-xs-12">Email:</div>
						<div class="col-lg-9 col-sm-9 col-xs-12 payment_input">
							<input type="text" msg="Email has error" vtype="email" id="payer_email" name="email" style="width:93%"  />
							<span id="payer_emailerr"></span> </div>
					</div>
					<div class="row pb10">
						<div class="col-lg-3 col-sm-3 col-xs-12">payment for:</div>
						<div class="col-lg-9 col-sm-9 col-xs-12 payment_input">
							<select id="item_name" name="item_name" style=" width:93%;">
								<option value="hotel">hotel</option>
								<option value="flight">flight</option>
								<option value="train">train</option>
								<option value="travel package" selected>travel package</option>
								<option value="others">others</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-sm-3 col-xs-12">messages:</div>
						<div class="col-lg-9 col-sm-9 col-xs-12 payment_input">
							<textarea id="txt_area" name="txt_area" class="payment_textarea" ></textarea>
						</div>
					</div>
					<div class="row pb10">
						<div class="col-lg-3 col-sm-3 col-xs-12">Amount:<font style="color:#C00;">**</font></div>
						<div class="col-lg-9 col-sm-9 col-xs-12 payment_input">
							<input type="text" msg="Please input amount" vtype="price" id="amount" name="amount" style=" width:80%;" />
							<font style="font-weight: bold; color: #c00;">USD</font> </div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-xs-12">
					<div class="payment_tit1"><span class="glyphicon glyphicon-circle-arrow-right"></span>  Choose the payment method</div>
					<div class="row">
						<div class="col-lg-6 col-sm-6 col-xs-12 pb10" style="padding-top:20px;">
							<div class="row">
								<div class="col-lg-6 col-sm-6 col-xs-6"><img alt="Paypal" src="/images/payment-img/Paypalx.gif" class="img-responsive" align="absmiddle" /></div>
								<div class="col-lg-6 col-sm-6 col-xs-6 pt10">
									<input type="radio" id="paypal" name="payment" value="paypal"  style="cursor:pointer;" />
									PayPal </div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-6 col-xs-12">
							<div class="row">
								<div class="col-lg-6 col-sm-6 col-xs-6"><img alt="Corangeit" src="/images/payment-img/btn_card.gif" class="img-responsive" align="absmiddle" /> </div>
								<div class="col-lg-6 col-sm-6 col-xs-6 pt10">
									<input type="radio" checked="checked" id="Corangeit" name="payment" value="Corangeit"  style="cursor:pointer;" />
									Credit Card <br />
									through Paypal</div>
							</div>
						</div>
					</div>
					<div class="row" style="padding-top:20px;">
						<div class="col-lg-6 col-sm-6 col-xs-12 pb10">
							<div class="row">
								<div class="col-lg-6 col-sm-6 col-xs-6"><img alt="Visa" src="/images/payment-img/visax.gif" class="img-responsive" align="absmiddle" /></div>
								<div class="col-lg-6 col-sm-6 col-xs-6 pt10">
									<input type="radio" id="payment" name="payment" value="Visa"  style="cursor:pointer;" />
									Visa</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-6 col-xs-12">
							<div class="row">
								<div class="col-lg-6 col-sm-6 col-xs-6"><img alt="MoneyBookers" src="/images/payment-img/MoneyBookersx.gif" class="img-responsive" align="absmiddle"  /> </div>
								<div class="col-lg-6 col-sm-6 col-xs-6 pt10">
									<input type="radio" id="MoneyBookers" name="payment" value="Skrill"  style="cursor:pointer;" />
									Skrill</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- hidden post messageQ!-->
			<input type="hidden" name="business" value="pay@leadtochina.com" />
			<input type="hidden" name="cmd" value="_xclick" />
			<input type="hidden" name="return" value="http://www.leadtochina.com/succeed1.html" />
			<input type="hidden" name="currency_code" value="USD" />
			<input type="hidden" name="pay_to_email" value="cuckoosong@gmail.com" />
			<input type="hidden" name="detail1_description" value="Your ip:<?php echo $_SERVER['REMOTE_ADDR'];?>" />
			<input type="hidden" name="transaction_id" value="<?php echo isset($md5traid)?$md5traid:'';?>" />
			<input type="hidden" name="hide_login" value="1" />
			<input type="hidden" name="currency" value="USD" />
			<input type="hidden" name="language" value="EN" />
			<input type="hidden" name="status_url" value="1275550521@qq.com" />
			<div style=" padding:15px 0px;">
				<input type="submit" class="large-button" value="Next Step" />
			</div>
		</form>
		<p class="payment_txt1 page-title09">2. Wire transfer
		<p>
		<p class="payment_txt2">Bank Transfer takes 2 days to 3 weeks before the payment to be settled. Because generally it requires less transfer fees, if there are more than 20 days prior to your arrival date, this method is suggested. Our Bank Account Information:</p>
		<div class="transfer" style="margin-bottom:50px;">
			<p class="transfer_txt1">TRANSFER DETAIL</p>
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
<script>
$('#paypal').attr('checked',true);
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