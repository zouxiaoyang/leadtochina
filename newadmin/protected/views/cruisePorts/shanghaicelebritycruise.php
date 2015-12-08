<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/cruiseport.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.js');?>
<style>
#content{ background:#fff;}
.errorMessage {
    display: none;
}
</style>
<div class="shp_content">
 <div class="cru_menu-tours">
  <strong>You are here:</strong><a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cruisePorts/index2');?>">International Cruise</a> Celebrity Cruise Shore Excursion for Shanghai Port</div>
 <div class="clear"></div>
 <div class="shp_banner">
  <img src="/images/cruisePorts/shanghaiport_banner.jpg" />
  <p class="glright1">Celebrity Cruise Shore Excursion for Shanghai Port</p>
 </div>
 <div class="shp_main">
 <div id="shp_tab">
  <ul>
   <li class="shp_dq" style="margin-left:10px;">SMALL GROUP TOURS</li>
   <li>PRIVATE TOURS</li>
  </ul>
  <p class="shp_tab1"><a href="/index.php?option=com_diy&template=customize_index">TAILOR MADE</a></p>
 </div>
 <div id="c01">
	  <div class="shp_txt">
	   <p><strong>*</strong> Fully Inclusive Group Tours showcase the best of the places we visit. <strong>No Hidden Extras</strong></p>
	   <p><strong>*</strong> <strong>Hand-Picked Accommodation</strong> with good location, clean, safe and comfortable </p>
	   <p><strong>*</strong> Our professinal guide will stayed with the group for the whole tour and offer <strong>24/7 care</strong>.</p>
	   <p><strong>*</strong> The transport selected is intended to combine convenience and comfort with an enjoyably authentic travel experience.</p>
	  </div>
		<?php $tours = ToursPackage::model()->findAll(array(
				'select' => 'id,name,route,departs,package_tour_type,attractions,price,filedir,cruise_recommend_pic',
				'condition' => "id in(693,1041,1043,1044,1042)",
				'order' => 'days asc',
			));
		?>
		<?php foreach($tours as $v):?>
	  <div class="shp_list">
			<div class="shp_listl"><img src="/<?php echo $v->filedir;?>/<?php echo $v->cruise_recommend_pic;?>" width="135" height="110" /></div>
			<div class="shp_listr">
				<div class="shp_listr_txt1">
					<p class="shp_listr_txt1a"><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></p>
					<p class="shp_listr_txt1b"><?php if($v->price!=0):?>from<a href="<?php echo $v->url();?>">$<?php echo $v->price; ?></a><?php endif;?></p>
				</div>
				<div class="clear"></div>
				<div class="shp_listr_txt2">
					<p class="shp_listr_txt2a">Cities: </p>
					<p class="shp_listr_txt2b"><?php echo $v->route;?></p>
				</div>
				<div class="clear"></div>
				<div class="shp_listr_txt2">
					<p class="shp_listr_txt2a">Departure: </p>
					<p class="shp_listr_txt2b"><?php echo $v->departs;?></p>
				</div>
				<div class="clear"></div>
				<div class="shp_listr_txt2">
					<p class="shp_listr_txt2a">Highlights: </p>
					<p class="shp_listr_txt2b"><?php echo  SiteUtils::mb_truncate_text($v->attractions, 170);?></p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
			<?php endforeach;?>
 </div>
 <div id="c02" style="display:none">
  <div class="shp_txt">
   <p>24/7 One-for-one service, you may get quote timely. Authentic travel experiences tailor-made by experts. Flexible to make last minute changes even on tour. Any aspect of the itinerary can be altered, from excursions to accommodations.
</p>
  </div>

	<?php $tours2 = ToursPackage::model()->findAll(array(
			'select' => 'id,name,route,departs,package_tour_type,attractions,price,filedir,cruise_recommend_pic',
			'condition' => "id in(963,965,874,969,321,838,155)",
			'order' => 'days asc',
		));
	?>
	<?php foreach($tours2 as $v):?>
  <div class="shp_list">
   <div class="shp_listl"><img src="/<?php echo $v->filedir;?>/<?php echo $v->cruise_recommend_pic;?>" width="135" height="110" /></div>
   <div class="shp_listr">
    <div class="shp_listr_txt1">
    <p class="shp_listr_txt1a"><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></p>
    <p class="shp_listr_txt1b"><?php if($v->price!=0):?>from<a href="<?php echo $v->url();?>">$<?php echo $v->price; ?></a><?php endif;?></p>
    </div>
 <div class="clear"></div>
    <div class="shp_listr_txt2">
    <p class="shp_listr_txt2a">Cities: </p>
    <p class="shp_listr_txt2b"><?php echo $v->route;?></p>
    </div>
 <div class="clear"></div>
    <div class="shp_listr_txt2">
    <p class="shp_listr_txt2a">Departure: </p>
    <p class="shp_listr_txt2b"><?php echo $v->departs;?></p>
    </div>
 <div class="clear"></div>
    <div class="shp_listr_txt2">
    <p class="shp_listr_txt2a">Highlights: </p>
    <p class="shp_listr_txt2b"><?php echo  SiteUtils::mb_truncate_text($v->attractions, 170);?></p>
    </div>
 <div class="clear"></div>
   </div>
 <div class="clear"></div>
  </div>
<?php endforeach;?>
 </div>
 </div>
 <div class="shp_ques">
  <div class="shp_quesl"></div>
  <div class="shp_quesr">
   <div class="shp_quesr_txt">Please fill in the form below. We will reply you within 1 working day! Your privacy is highly valued with Lead To China! You are always welcome to visit our office.</div>
   <div class="shp_quesr_name">
    <div class="shp_quesr_name1">
    <p>Title <span class="shp_rep">*</span></p>
    <p>
    <select name="Gender" id="Gender" class="shp_selected">
     <option value="Mr.">Mr.</option>
     <option value="Mrs.">Mrs.</option>
     <option value="Ms.">Ms.</option>
	 <option value="Miss.">Miss.</option>
     <option value="Dr.">Dr.</option>
     <option value="Prof.">Prof.</option>
     <option value="Lord.">Lord.</option>
     <option value="Lady.">Lady.</option>
     <option value="Sir.">Sir.</option>
    </select></p>
    </div>
    <div class="shp_quesr_name2">
    <p>Full name <span class="shp_rep">*</span></p>
    <p><input name="full_name" id="full_name" type="text" />
                <br />
                <span class="qusername_error errorMessage">It can't be blank.</span></p>
    </div>
   </div>
 <div class="clear"></div>
   <div class="shp_quesr_name">
    <div class="shp_quesr_name2" style="margin-left:0">
    <p>Email <span class="shp_rep">*</span></p>
    <p><input name="email" id="email" type="text" />
                <br />
                <span class="qemail_error errorMessage">Please enter correct email.</span></p>
    </div>
    <div class="shp_quesr_name2">
    <p>Telephone</p>
    <p><input name="telephone" type="text" /></p>
    </div>
   </div>
 <div class="clear"></div>
   <div class="shp_quesr_plans">
    <p>Travel plans<span class="shp_rep">*</span></p>
    <p><textarea name="message" id="message" cols="" rows=""></textarea>
                <br />
                <span class="qmessage_error errorMessage">It can't be blank.</span></p>
   </div>
   <div class="shp_quesr_but">
<a name="" type="button"  onclick="_cityTours.submitMessage(this)" style=" display:block;width:265px; height:31px; background:url(/images/cruisePorts/shp_but.jpg) no-repeat; border:none; margin-top:10px; cursor:pointer"></a>   </div>
  </div>
 </div>
 
</div>
<script>
$(function(){
  $("#shp_tab li").bind("click", function(){
    var inx = parseInt($(this).index())+1;
    $("#c01,#c02").hide();
    $("#c0"+inx).show();
    $("#shp_tab li").removeClass("shp_dq");
    $(this).addClass("shp_dq");
  })
})
</script>
<script type="text/javascript">
var _cityTours = {
    submitMessage:function(obj){
        var message = $("#message").val();
        var username = $("#full_name").val();
        var email = $("#email").val();
        if($.trim(username) == ''){
          $(".qusername_error").show();
          return false;
        }else{
         $(".qusername_error").hide();
        }

        if(!/(\S)+[@]{1}(\S)+[.]{1}(\w)+/.test(email)) {
          $(".qemail_error").show();return false;
        }else{
          $(".qemail_error").hide();
        }

        if($.trim(message) == ''){ 
          $(".qmessage_error").show();
          return false;
        }else{
         $(".qmessage_error").hide();
        }
        var YII_CSRF_TOKEN = "<?php echo Yii::app()->request->csrfToken;?>";
        $.post("<?php echo Yii::app()->createUrl("toursPackage/ajaxAddMessage");?>", {message:message, username:username, email:email,  YII_CSRF_TOKEN:YII_CSRF_TOKEN}, function(ret){
          /*
          alert("Submit Successful.");
          $(obj).parents("table").find("textarea[name='message']").val("");
          $(obj).parents("table").find("input").val("");
          */
          location.href="/succeed.html";
        })
      }
}
</script>
