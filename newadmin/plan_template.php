<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title></title>

<link href="http://www.leadtochina.com/tour/css/tourplan.css" rel="stylesheet" type="text/css">
<script src="http://www.leadtochina.com/tour/js/jquery.js"></script>
<style type="text/css">
	#preview{display:none; position:absolute;}
</style>
</head>
<body>
<div id="container">
  <div id="content">
   <!-- content start  -->
   <div class="content">
       <div class="title"><?php echo $tourInfo->title;?> for <span><?php echo $tourInfo->username;?></span></div>
       <!-- banner start  -->
      <div class="banner"><img src="http://www.leadtochina.com/tour/images/banner/<?php echo $tourInfo->pic;?>.jpg"  /></div>
       <!-- banner end  -->
       
       <!-- track start  -->
       <div class="track"><span><strong>Tracking Code:</strong><?php echo $tourInfo->tracking_code;?></span> 
                          <span><strong>Travel Consultant:</strong><?php echo $tourInfo->travel_advisor;?></span>
                          <span><strong>Tel:</strong> <?php echo $tourInfo->tel;?></span>    
                          <span><strong>E-mail:</strong><?php echo $tourInfo->email;?></span>  
       </div>
       <!-- track end  -->
       
       <!-- summary start  -->
       <!--sprint01-->
       <div class="summary">
           <ul>
              <li class="tit">Part 1: Itinerary &amp; Price Details</li>
              <li><a href="#itinerary_menu">Brief &amp; Full Itinerary</a></li> 
              <li><a class="li3" href="#hotel">Hotels Details</a></li> 
              <li><a class="li4" href="#quotation">Price Quotation</a></li> 
              <li><a class="li5" href="#quotation1">Price Includes &amp; Excludes</a></li>
           </ul>
           <ul style="margin-top:15px;">
              <li class="tit">Part 2: Important Notes Before You Book</li>
              <li><a class="li6" href="#why">Why Choose Us</a></li> 
              <li><a class="li7" href="#methods">Methods of Payment</a></li> 
              <li style="display:none;"><a class="li8" href="#">Changes and Cancellations</a></li> 
              <li><a class="li9" href="#travel">China Travel Insurance</a></li>
              <li><a class="li10" href="#tourist">China Visa Application</a></li>
              <li><a class="li11" href="#tips">Other Tips</a></li>
           </ul>
           <!-- print start  -->
           <div class="print">
              <a href="###" onClick="doPrint('simple')">Print Summary Only</a>
              <a href="###" onClick="doPrint('detail')">Print Itinerary Only</a>
              <a class="small" href="###" onClick="doPrint('all')">Print All</a>
           </div>
           <!-- print end  -->
       </div>
       <!--eprint01-->
       <!-- summary end  -->
       
       <!-- menu start  -->       
       <div class="menu" id="itinerary_menu"><span class="dq">Simple Itinerary</span><span>Detailed Itinerary</span></div>
       <!-- menu end  -->
       
       <!-- simple start  -->
       <!--sprint02-->
       <div id="simple" style="">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
               <tr class="top">
                 <td width="14%">Day &amp; Date</td>
                 <td width="23%">Place &amp; Transport</td>
                 <td width="37%">Today’s Activities</td>
                 <td width="19%">Accommodation</td>
                 <td width="7%">Meals</td>
            </tr>
				<?php foreach((array)$tourItinerary as $v):?>
               <tr>
                   <td><span>Day <?php echo $v->days;?></span> <?php echo $v->today_date;?></td>
                   <td></span> <?php echo $v->place_transport;?></td>
                   <td width="10%"><?php echo $v->today_activities;?></td>
                   <td width="30%"><?php echo $v->accommodation;?></td>
                   <td><?php echo $v->meals;?></td>
               </tr>
			   <?php endforeach;?>           
          </table>
       </div>
       <!-- simple end  -->
       
       <!-- detailed start  -->
       <div id="detailed" style="display:none">
          <!-- days start  -->
          <div class="days">
			 <?php foreach((array)$tourItinerary as $v):?>
             <h2><span>Day <?php echo $v->days;?></span> <strong><?php echo date('D',strtotime($v->today_date)).'  '.date('j-M-y',strtotime($v->today_date));?></strong></h2>
             <div class="clear"></div>
             <!-- days-content1 start  -->
             <div class="days-content">
                <div class="photo">
					<?php if($sceneries[$v->days] ):?>
						<?php foreach($sceneries[$v->days] as $scenery):?>			
						<a class="preview" href="<?php echo Yii::app()->request->baseUrl; ?>/images/uploads/scenery/<?php echo $scenery->ufile;?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/uploads/scenery/<?php echo $scenery->ufile;?>" /></a>
						<?php endforeach;?>
					<?php endif;?>
				</div>
                <p class="no"><strong>Place &amp; Transport:</strong> <?php echo $v->place_transport;?><br />
                <strong>Accommodation:</strong> <?php echo $v->accommodation;?><br />
                <strong>Today's Activities:</strong> <?php echo $v->today_activities;?> <br />
                <strong>Meals:</strong> <?php echo $v->meals;?>
				</p>
				<?php if($sceneries[$v->days] ):?>
						<?php foreach($sceneries[$v->days] as $scenery):?>
						 <p><strong><?php echo $scenery->name;?> (<?php echo $scenery->browse_time;?>):</strong><?php echo strip_tags($scenery->description);?></p>
						<?php endforeach;?>
				<?php endif;?>
			
             </div>
			 <?php endforeach;?>
             <!-- days-content1 end  -->
             
        
          </div>
          <!-- days end  -->   
       </div>
       <!--eprint02-->
       <!-- detailed end  -->
       
       <?php if($hotels):?>
       <!-- hotel start  -->
          <div id="hotel">
             <h2>Hotels for This Tour</h2>
             <!-- hotel-list1 start  -->
			 <?php foreach((array)$hotels as $v):?>
             <div class="hotel-list">
                 <div class="photo1">
					 <?php $i=0; foreach((array)$hotel_pics[$v['id']] as $pic):?>
						 <?php if($i>=3) break;?>
						<a class="preview" href="/uploads/hotel/<?php echo $pic;?>"><img src="/uploads/hotel/<?php echo $pic;?>" alt="" /></a>
					 <?php $i++;endforeach;?>
				 </div>
                 <strong><?php echo $v['city_name'];?> Hotels:</strong> <span><?php echo $v['name'];?></span><br />
                 <strong>Rating:</strong> <?php echo $hotel_grade[$v['hotel_grade']];?><br />
                 <strong>Room Type:</strong><?php echo $hotel_room_types[$v[id]];?><br />
                 <strong>Address:</strong><?php echo $v['hotel_addr'];?>
             </div>
			 <?php endforeach;?>
             <!-- hotel-list1 end  -->
          </div>
          <!-- hotel end  -->
        <?php endif;?>
          
          <!-- quotation start  -->
          <div id="quotation">
              <h2>Quotation</h2>
              <p>
				<?php echo $tourInfo->quotation;?>
			  </p>
          </div>
          <!-- quotation end  -->
          
          <!-- quotation1 start  -->
          <div id="quotation1">
            <h2>Quotation Includes &amp; Excludes</h2>
             <div class="clear"></div>
             <table width="100%" cellspacing="1" cellpadding="0">
                <tr>
                   <td width="21%" class="top">Quotation Includes</td>
                   <td width="79%">
                      <div><?php echo $tourInfo->price_include;?></div>
                    </td>
                </tr>
                <tr>
                   <td class="top">Quotation Excludes</td>
                   <td>
                    <div><?php echo $tourInfo->price_exclude?></div>
                   </td>
                </tr>
            </table>
          </div>
          <!-- quotation1 end  -->
          
          <!-- why start  -->
          <div id="why">
             <h2>Why Choose Us:</h2>
             <ul>
                 <li><strong>One-for-one Customize Service:</strong> 24/7 Professional Travel Advisor will help you online.</li>
                 <li><strong>Money Back Guarantee:</strong> 100% refund when cancellation if no incurred fees like booked flights or hotels. </li>
                 <li><strong>No forced Shopping:</strong> If you will taking a shopping tour to buy local products or specialties.  Our guide will ask your preference before going to the shops and will never force you to buy anything.</li>
                 <li><strong>Get 1-st Hand Price:</strong> We know China better. We will help you save money and get super value service. </li>
             </ul>
             <div class="with"><strong>With 5 years experience, we have got good reviews from previous customers. Check what they say on us:</strong> 
<a href="http://www.tripadvisor.com/ShowTopic-g303685-i10955-k5494171-Has_anyone_used_the_hefei_full_view_travel_service-Huangsh
an_Anhui.html">http://www.tripadvisor.com/ShowTopic-g303685-i10955-k5494171-Has_anyone_used_the_hefei_full_view_travel_service-Huangsh
an_Anhui.html</a>
<a href="http://www.tripadvisor.com/ShowTopic-g294211-i642-k5586089-Online_China_Tours-China.html">http://www.tripadvisor.com/ShowTopic-g294211-i642-k5586089-Online_China_Tours-China.html</a></div>
          </div>
          <!-- why end  -->
          
          <!-- methods start  -->
          <div id="methods">
              <h2>Methods of Payment : </h2>
              <p>As for payment method, we accept <strong>PayPal (or credit card via Paypal)</strong> and <strong>Bank Transfer (or T/T)</strong>.  Each of them will charge you some transfer fees. Please see two based payment methods below. You can refer to this payment guide on our website: <a href="http://www.leadtochina.com/payment-guide/">http://www.leadtochina.com/payment-guide/</a></p>
              <p><strong>A. PayPal (Fast &amp; Safest Way to Pay):</strong><br />
                 Log into your PayPal account at <a href="http://www.paypal.com">www.paypal.com</a> and send payment directly to <a href="">support@topchinatrip.com</a>.<br />
                 Transfer fees: The transfer fees for Paypal are 3.5% of the total payment. </p>
              <p><strong>B. Wire Transfer/Bank Transfer</strong> <br />
                 If an online payment is not convenient, we recommend a wire/bank Transfer from you. You need only transfer the money from your bank and scan the bank receipt to us. <br />
                 <strong>Company Name:</strong> Hefei Full-view Travel Service Co., Ltd <br />
                 <strong>Chinese Name:</strong> 合肥畅景旅行社有限公司 <br />
                 <strong>Account:</strong> 130 201 2209 2000 60551 <br />
                 <strong>Bank Name:</strong> INDUSTRIAL AND COMMERCIAL BANK OF CHINA ANHUI PROVINCIAL BR. <br />
                 <strong>BIC/SWIFT-Code:</strong> ICBKCNBJAHI <br />
                 <strong>Bank Address:</strong> No.616 Huizhou Road, Hefei, Anhui, P.R. China <br />
                 <strong>SWIFT#:</strong> CHASUS33 <br />
                 <strong>Transfer fees:</strong> USD35 for each payment</p>
          </div>
          <!-- methods end  -->  
          
          <!-- travel start  --> 
          <div id="travel">
             <h2>China Travel Insurance:</h2>
             <p>Our tour packages include China Life Tourist Accident/Casualty Insurance and is provided free of charge as part of our package. However, we highly recommend that you have full travel insurance cover from your own country. Insurance provided by us is not applicable where 
only hotel or flight bookings are made through us.</p>
             <p>We recommend you visit <a href="http://www.worldnomads.com">http://www.worldnomads.com</a> to select a suitable policy. </p>
             <p>Alternatively, if you are over 65 years of age, you can choose to buy your insurance at <a href="http://www.insuremytrip.com">http://www.insuremytrip.com</a> (US &amp; Canada) or <a href="http://www.globelink.co.uk">http://www.globelink.co.uk</a> (rest of the world). </p>
             <p>We are not responsible for any death or injury caused by a third party during your tour but we do carry accident insurance cover for your protection. We will assist should any claim be necessary. </p>
             <p>We recommend you have travel insurance before you begin your journey and suggest you refer to <a href="http://www.worldnomads.com">http://www.worldnomads.com</a>. </p>
          </div>    
          <!-- travel end  -->
          
          <!-- tourist start  -->
          <div id="tourist">
              <h2>China Tourist Visa Application:</h2>
              <p>Normally speaking, visitors with regular passport from USA, UK, Canada, Australia, Germany, French etc. to China will only require a tourist visa which will allow them to travel freely in most parts of China as tourists or to visit or accompany Chinese family members. Please make sure that you have got your valid passport and visa before your entry to China. We can send you a free official invitation letter to assist you in obtaining your visa after the reservation deposit is received.</p>
              <p><strong>Requirements</strong> <br />
                 <span>1</span>Applicant' passport with at least 6 months remaining validity and available blank pages; <br />
                 <span>2</span>One truly completed Visa Application Form. If someone else traveling with you shares the same passport, or if you are applying for a visa in a country or territory other than the country of your current nationality, you should fill out the Supplementary Visa Application Form. Please fill in every column of the application form, using "N/A" if not applicable. If the application form is not filled out truly, completely and legibly, this can cause a delay in processing or refusal of the requested visa.<br />
                <span>3</span> A recent passport-size color photo with white background stuck on the application form. For tourism, applicants also need provide the below required documents.<br />
                <span>4</span>Under some situations, the original and copy of Chinese Hotel Booking and Return Air Ticket are required.<br />
                <span>5</span>For applicants who will travel into Tibet, they must obtain a Tibet Travel Permit. This can either be obtained by joining a group or by obtaining the permit from Tourism Bureau of Tibet Autonomous Region (Tel +86 891 6834313 or Fax +86 891 6834632).</p>
                <p><strong>How to Apply</strong><br />
                   You can come to the Chinese Embassies, Consulates and other Chinese diplomatic missions to submit application in person; if you can't come personally, you can entrust someone else, a travel agency or a visa agency to act on your behalf. Applications by mailing are not acceptable and will be refused at most of Chinese embassies or consulates. No appointment is required.</p>
                <p><strong>Processing Time</strong><br />
                   It regularly takes 4 working days for processing. For express service, additional fees of US$ 20 will be charged per visa for second or third working day releasing. For rush service, additional fees of US$30 per visa will be charged for the same working day releasing.</p>
          </div>  
          <!-- tourist end  -->
          
          <!-- tips start  -->
          <div id="tips">
              <h2>Other Tips :</h2>
              <p><span>1</span><strong>This is not your booking confirmation!</strong><br />
                 Quotations, flight numbers and proposed hotels are subject to change until confirmed. All the hotels and flights proposed above are available at the time of proposal, but we are not able to guarantee availability until we have secured the booking after receiving your confirmation of your acceptance of our proposal. If we are not able to book what we have proposed, we will give you alternative options and ask for your approval before securing the booking. We do appreciate an early confirmation from you.</p>
              <p><span>2</span><strong>Alteration of Itinerary</strong><br />
                 LeadtoChina.com reserve the right to alter or modify the itinerary of any tour if there are air schedule or surface transport changes, and/or events beyond our control make such alteration necessary. If such a situation arises, the increase or decrease in the tour price will be calculated and charged accordingly.</p>
              <p><span>3</span><strong>Futhure Change of Itinerary</strong><br />
                 LeadtoChina.com is a company who specialzed in China tour tailo make. Please feel free to tell us if you wish to amend this tour itinerary, it's our pleasure to do it. Thank you! </p>
          </div>
          <!-- tips end  --> 
   </div>
   <!-- content end  -->
   <div class="clear"></div>
   <!-- footer start  -->
   <div id="footer">
      <div class="foot"><a href="#">www.leadtochina.com</a></div>
   </div>
   <!-- footer end  -->
  </div>
</div>

<script>
	$(function(){
		$("#itinerary_menu span").click(function(){			
			if($(this).index() == 0){
				$("#simple").show();
				$("#detailed").hide();
			}else{
				$("#simple").hide();
				$("#detailed").show();
			}
		})
	})
</script>

<script language=javascript>
function doPrint(print_type){
  if(print_type == 'simple'){
    $(".content").find("div").css("display","none");
    $('#itinerary_menu').show().find("span").eq(1).hide();
    $(".content").find("#simple").show();
    $("#simple").show();
    $("#detailed").hide();
    print();
    $(".content").find("*").show();
  }
  if(print_type=='detail'){
    $(".content").find("div").css("display","none");
    $('#itinerary_menu').show().find("span").eq(0).hide();
    $("#detailed").show().find("*").show();
    $("#simple").hide();
    $("#detailed").show();
    print();
    $(".content").find("*").show();
  }

  if(print_type == 'all'){
    $("#simple").show();
    $("#detailed").show();
    print();
  }
}
</script>
<script type="text/javascript">
(function($){
this.imagePreview = function(){
	xOffset = 10;
	yOffset = 30;
	$("a.preview").hover(function(e){
	   this.t = this.title;
	   this.title = "";
	   var c = (this.t != "") ? "<br/>" + this.t : "";
	   $("body").append("<p id='preview' style='border:1px solid #ccc;padding:3px;background-color:#fff;'><img src='"+ this.href +"' alt='Image preview' width='320' height='240' />"+ c +"</p>");        

	   $("#preview")
		.css("top",(e.pageY - xOffset) + "px")
		.css("left",(e.pageX + yOffset - 360) + "px")
		.fadeIn("fast");      
		},
	function(){
	   this.title = this.t;
	   $("#preview").remove();
		});
	$("a.preview").mousemove(function(e){
	   $("#preview")
		.css("top",(e.pageY - xOffset) + "px")
		.css("left",(e.pageX + yOffset - 360) + "px");
	});   
};

$(document).ready(function(){
	imagePreview();
});
})(jQuery)
</script>
</body>
</html>
