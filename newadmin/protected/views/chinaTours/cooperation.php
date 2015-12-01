<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/studenttour.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/koala.min.1.5.js');
$this->setPageTitle("China Student Tours Cooperation, China Student Tours Partner");
Yii::app()->clientScript->registerMetaTag('keywords','Cooperation on Educational Tours to China, Partner of School Trips to China.'); 
Yii::app()->clientScript->registerMetaTag('description','Lead to China is a reliable China Student tours operator offering Student educational tours to China.');?>
<style type="text/css">
#content{ background:#eee; margin:0; padding-top:5px;}
</style>
<div id="content">
 <div class="stu_content">
  <div class="stu_menu-tours">
  <strong>You are here:</strong>  <a href="/">Home</a>  <a href="/travel/china-tours">China Tours</a>  <a href="/travel/china-student-tours">China Student Tours</a>  Cooperation</div>
  <div class="clear"></div>
  
  <?php require_once('_stu_focus.php');?>

  <div class="stu_menu">
   <ul>
    <li><a href="<?php echo Yii::app()->createUrl('chinaTours/studentTours');?>">SUGGESTED ITINERARIES</a></li>
    <li><a href="<?php echo Yii::app()->createUrl('chinaTours/culturalExchange');?>">CULTURAL ACTIVITIES</a></li>
    <li class="dq"><a href="">COOPERATION</a></li>
    <li><a href="<?php echo Yii::app()->createUrl('chinaTours/successfulCases');?>">SUCCESSFUL CASES</a></li>
    <li><a href="<?php echo Yii::app()->createUrl('chinaTours/WhyUs');?>">WHY US</a></li>
   </ul>
  </div>
  <div class="clear"></div>
  <div class="stu_coop">
  <div class="stu_coop1">
   <p class="coop_tit1">China Partner</p>
   <p>Looking for a reliable, honest China local tour operator with competitive price and good reputation? a professional tour operator with years experiences of handing different-sized tourist groups successfully?<br />
   Want to have the timely, firsthand and updated tourism information? <br />
   Feeling troubled by the diverse demands from your clients about touring China? <br />
   Prefer a "click-deal" business and give pressure of arranging tour to a professional China tour operator?<br />
   If the answer is <span class="coop_txt1"><strong>"YES"</strong></span>, <span class="coop_txt1"><strong>LEAD TO CHINA</strong></span> is your first choice.</p>
   </div>
  <div class="stu_coop1 coop_pt10">
   <p class="coop_tit1">What We Have for You?</p>
   <p><img src="/images/studenttour/stu_ico1.jpg" style="margin-right:5px;" /><strong>Low Price!</strong><br />
   Direct quotation from our local branch offices; low-priced, specially offered seasonal travel itineraries with transparent travel pieces' quotation. </p>
   <p><img src="/images/studenttour/stu_ico1.jpg" style="margin-right:5px;" /><strong>Save your time, money as well as your staff.</strong><br />
   LEAD TO CHINA will be your China tour service provider since the first inquiry from your side; you do the sales and we do everything related to China tour to ensure your clients a smooth tour in China.</p>
   <p><img src="/images/studenttour/stu_ico1.jpg" style="margin-right:5px;" /><strong>Tailor-made Trips!</strong><br />
    Besides the existing 400+ China tour packages, LEAD TO CHINA has already tailor-made hundreds of China tour packages for its clients. </p>
   <p><img src="/images/studenttour/stu_ico1.jpg" style="margin-right:5px;" /><strong>Safety-Guaranteed, Great Tour Service with Formal Insurance!</strong><br />
    Every clean and tidy Vehicle for sightseeing and transfer has formal insurance and authorized by the local tourism bureau. </p>
   <p><img src="/images/studenttour/stu_ico1.jpg" style="margin-right:5px;" /><strong>Government-authorized Inbound China tour operator!</strong><br />
    Based on Hefei City, 430 kilometers west of Shanghai, LEAD TO CHINA is the property of Hefei FULL VIEW Travel company (License No.: L-AH000952) which have set up branch offices in 12 cities across China.  </p>
   </div>
  <div class="stu_coop1 coop_pt10">
   <p class="coop_tit1">How to Cooperate with LEAD TO CHINA?</p>
   <p><img src="/images/studenttour/stu_ico1.jpg" style="margin-right:5px;"/><strong>Net Quotation for Regular Cooperation</strong><br />
    LEAD TO CHINA provides all China land tour packages at net prices to your company, so you can sell the travel products at your own price. Then, we do the everything related to China tour to ensure your clients a smooth tour in China.</p>
   </div>
  <div class="stu_coop2">
   <p class="coop_tit3">Contact with LEAD TO CHINA</p>
   <form id="messageask" method="post" name="messageask" action="/index.php?option=com_doask">
    <input name="con_type" type="text" value="12" style="width:170px; display:none;"/> 
    <div class="coop_form">
    <div class="coop_tit2">Contact Information</div>
    <div class="coop_formpt">
    <div class="coop_forml">
     <p class="coop_forml_label"><label for="name" style="">Full Name: <span class="req">*</span></label></p>
     <p class="coop_forml_input">
     <select id="sex" name="Gender" style="float:left; margin-right:5px; width:60px">
        <option value="Mr.">Mr.</option>
        <option value="Mrs.">Mrs.</option>
        <option value="Miss.">Miss.</option>
        </select>
        <input name="mes_username" type="text" style="width:170px;"/> <span class="req">*</span></p>
    </div>
    <div class="coop_formr">
     <p class="coop_forml_label"><label for="Nationality" style="">Nationality: <span class="req">*</span></label></p>
     <p class="coop_forml_input"><input name="country" type="text" style="width:240px;" /></p>
     </div>
     </div>
     <div class="clear"></div>
    <div class="coop_formpt">
    <div class="coop_forml">
     <p class="coop_forml_label"><label for="Email address" style="">Email address: <span class="req">*</span></label></p>
     <p class="coop_forml_input">
        <input name="mes_user_email" type="text" style="width:240px;"/></p>
    </div>
    <div class="coop_formr">
     <p class="coop_forml_label"><label for="Phone" style="">Phone No: </label></p>
     <p class="coop_forml_input"><input name="phone" type="text" style="width:240px;" /></p>
     </div>
     </div>     
   </div>
   <div class="coop_form">
    <div class="coop_tit2">Company Information</div>
    <div class="coop_formpt">
    <div class="coop_forml">
     <p class="coop_forml_label"><label for="" style="">Agency ID Type: <span class="req">*</span></label></p>
     <p class="coop_forml_input"><select onchange="type_num(this)" name="message_type" style="float:left; margin-right:5px; width:240px">
        <option value="IAIA Number">IAIA Number</option>
        <option value="ARC Number">ARC Number</option>
        <option value="CLIA Number">CLIA Number</option>
        <option value="License Number">License Number</option>
        <option selected="seleated" value="N/A">N/A</option>
        </select>
        </p>
    </div>
    <div class="coop_formr" style="display:none" id="company_num">
     <p class="coop_forml_label"><label for="Company Name" style="">Agency Number: <span class="req">*</span></label></p>
     <p class="coop_forml_input"><input name="Company_Num" type="text" style="width:240px;"/></p>
     </div>
     </div>
     <div class="clear"></div>
    <div class="coop_formpt">
    <div class="coop_forml">
     <p class="coop_forml_label"><label for="Company Name" style="">Company Name: <span class="req">*</span></label></p>
     <p class="coop_forml_input"><input name="Company_Name" type="text" style="width:240px;"/></p>
     </div>
    <div class="coop_formr">
     <p class="coop_forml_label"><label for="" style="">Fax:</label></p>
     <p class="coop_forml_input">
        <input name="fax" type="text" style="width:240px;"/></p>
    </div>
     </div>
     <div class="clear"></div>
    <div class="coop_formpt">
    <div class="coop_forml">
     <p class="coop_forml_label"><label for="Website" style="">Website: </label></p>
     <p class="coop_forml_input"><input name="Website" type="text" style="width:240px;" /></p>
     </div>
    <div class="coop_formr">
     <p class="coop_forml_label"><label for="" style="">Address:</label></p>
     <p class="coop_forml_input">
        <input name="Address" type="text" style="width:240px;"/></p>
    </div>
     </div>
     <div class="clear"></div>
    <div class="coop_formpt">
    <div class="coop_forml">
     <p class="coop_forml_label"><label for="" style="">City:</label></p>
     <p class="coop_forml_input">
        <input name="City" type="text" style="width:240px;"/></p>
    </div>
    <div class="coop_formr">
     <p class="coop_forml_label"><label for="" style="">Postal/Zip Code:</label></p>
     <p class="coop_forml_input"><input name="postalcode" type="text" style="width:240px;" /></p>
     </div>
     </div>
     <div class="clear"></div>
     <div class="coop_formpt">
      <p class="coop_forml_label"><label for="" style="">Additional Comments:</label></p>
      <p class="coop_forml_texta"><textarea class="" name="mes_user_content"></textarea></p>
     </div>
     <div class="clear"></div>
	<div class="clear"></div>
     <div class="coop_formpt">
      <p class="coop_forml_label"></p>
      <p class="coop_forml_input"><input type="text" name="validity" id="validity" size="10" style="width:69px; float:left; margin-right:6px;" />
      <img src="/index.php?option=com_verifycode" alt="" id="safecode" style="cursor:pointer;margin:0px; padding:2px 0 0 0; float:left;" onclick="reloadcode()" /></p>
     </div>
     <div class="clear"></div>
     <div class="coop_formpt" style="padding-top:15px;">
      <p class="coop_forml_label"><label for="" style=""></label></p>
      <p class="coop_forml_sub"><input type="image" style="vertical-align:bottom" src="/images/studenttour/stu_btn.jpg"></p>
     </div>
     
     </div>    
   </form> 
   <script>
  function type_num(i){
    if($(i).val()=="N/A"){
      $("#company_num").hide();
    }else{
      $("#company_num").show();
    }
  }
</script>
   </div>
   <div class="clear"></div>
  <div class="stu_coop1 coop_pt10">
   <p class="coop_tit1">How to Choose Reliable Tour Operator?</p>
   <p><img src="/images/studenttour/stu_ico1.jpg" style="margin-right:5px;"/><strong>Asking for Operating License</strong><br />
    Better copy, from which you can have the tour operator's full name, registration number, address and foundation date and validation period clearly. Your friends could identify it easily by giving a phone call to local tourism bureau.</p>
   <p><img src="/images/studenttour/stu_ico1.jpg" style="margin-right:5px;" /><strong>Payment Method</strong><br />
    From this one, you can have the full name of the company and some certifications from third parties, such as PayPal, Bank Account.</p>
   <p><img src="/images/studenttour/stu_ico1.jpg" style="margin-right:5px;" /><strong>By Reviews</strong><br />
    Nowadays, with the explosive development of Internet, clients can check the quality of services via some third parties on traveling rather easily, such as Tripadvisor, Yahoo answers.</p>
   </div>
   
  </div>
 </div>

</div>