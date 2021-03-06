<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/promotion.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.js');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.datepicker.js');?>
<style type="text/css">
<!--
#content {
	padding:9px 0px 12px 0px;
	width:961px;
	background:#ffffff;
}
#myFocus {
	width:641px;
	height:301px;
}
.mF_classicHC .pic {
	width:641px;
	height:301px;
}
#month-table1 ul li{cursor:pointer;}
  #ui-datepicker-div{font-size:12px;}
-->
</style>
<script type="text/javascript" src="/travel/js/myfocus-2.0.1.min.js"></script>
<script type="text/javascript">
//ÉèÖÃ
myFocus.set({
	id:'myFocus',//ID
	pattern:'mF_classicHC'//·ç¸ñ
});
</script>
<!--  index start  -->
<div class="index">
  <!--  menu-home start  -->
  <div class="menu-home">
    <!--  menu-tours start  -->
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> Promotion Area</div>
    <!--  menu-tours end  -->
  </div>
  <!--  menu-home end  -->
  <div class="banner"><img src="/images/promotion/banner.jpg" alt="" /></div>
  <div style="clear:both"></div>
  <div class="promotioncont">
    <div class="promotioncont_lef">
      <p class="pt10"><img src="/images/promotion/prom_disc.png" align="absmiddle"/><span class="promotion_txt1">Early Bird Discounts</span></p>
      <p class="promotion_txt2 pt10">The date that your 30% deposit arrives at our bank account:</p>
      <ul>
        <li>Book Tour 3 Months before the start, a 5% discount will be offered. </li>
        <li>Book Tour 2 Months before the start, a 2% discount will be offered. </li>
        <li>Not Available if the Tour Quotation less than $500. </li>
      </ul>
    </div>
    <div class="promotioncont_rig">
      <div class="promotioncont_rig1">
        <p class="promotioncont_rig_img"><img src="/images/promotion/prom_plum.png" align="absmiddle"/></p>
        <p class="promotioncont_rig_txt1">China Tours at a Plummeted Price</p>
      </div>
      <p style="clear:both"></p>
      <ul class="pt10">
        <li>Several specially selected China theme tours with distinguishing regional cultural haracteristics. </li>
        <li>Reduction in price is not a sign of falling standards of service; LTC will always put clients interest first. </li>
        <li>Better Seek advice from LTC trip advisor before settle down your China travel plans. </li>
      </ul>
    </div>
  </div>
  <div style="clear:both"></div>
  <div class="promotioncont_txt1">Book your China tour with us, you will enjoy not only up to 5% early bird savings but a conjunction to specially selected China theme tours at a plummeted price. On the other hand, reduction in price is not a sign of falling standards of service, LTC will always put clients interest first and do our best. Moreover, considering the floating RMB exhange rate and some Unforeseen circumstances, you are very highly recommended to seek advice from LTC trip advisor before pay your hina tour package. </div>
  <div class="promotioncont_spec">
    <div class="promotioncont_spec_txt1">Specially Selected China Tours</div>
    <div style="clear:both"></div>
    <div class="monthlist1" id="monthlist1">
     
  <?php foreach($tours as $v):?>
  <ul>
      <li class="pic"><a href="/<?php echo $v->url();?>"><img src="/<?php echo $v->filedir.$v->pic;?>" style="width:213px;height:137px" /></a></li>
      <li class="name"><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
      <li><?php echo $v->route;?></li>
      <li><span><?php echo SiteUtils::getCurrencyPrice($v->price_yuan);?></span><h2><?php echo SiteUtils::getCurrencyPrice($v->price);?></h2><a href="#"><img src="/images/promotion/inquiry.png" alt="" /></a></li>
      <li><strong>Highlights:<?php echo SiteUtils::mb_truncate_text($v->recommand_reason, 165);?></strong> 

      </li>
  </ul>
  <?php endforeach;?>
    </div>
    <!--  monthly start  -->
     <div class="monthly1">
       <div class="month-table1" id="month-table1">
        <ul>
         <li style="border-left:none;" class="visit1 <?php if(date('n')==1){?>selected<?php }?>"><span>Jan.</span></li>
         <li class="visit1 <?php if(date('n')==2){?>selected<?php }?>"><span>Feb.</span></li>
         <li class="visit1 <?php if(date('n')==3){?>selected<?php }?>"><span>Mar.</span></li>
         <li class="visit1 <?php if(date('n')==4){?>selected<?php }?>"><span>Apr.</span></li>
         <li style="border-left:none;" class="visit1 <?php if(date('n')==5){?>selected<?php }?>"><span>May.</span></li>
         <li class="dq <?php if(date('n')==6){?>selected<?php }?>"><span>Jun.</span></li>
         <li class=" <?php if(date('n')==7){?>selected<?php }?>"><span>Jul.</span></li>
         <li class=" <?php if(date('n')==8){?>selected<?php }?>"><span>Aug.</span></li>
         <li style="border-left:none; border-bottom:none;" class=" <?php if(date('n')==9){?>selected<?php }?>"><span>Sep.</span></li>
         <li style=" border-bottom:none;" class="dq <?php if(date('n')==10){?>selected<?php }?>"><span>Oct.</span></li>
         <li style=" border-bottom:none;" class=" <?php if(date('n')==11){?>selected<?php }?>"><span>Nov.</span></li>
         <li style=" border-bottom:none;"  class=" <?php if(date('n')==12){?>selected<?php }?>"><span>Dec.</span></li>
         </ul></div>
         </div>
      <!--  monthly end  -->
  </div>
  <div style="clear:both"></div>
   <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'tours-package-form',
        'enableClientValidation'=>true,
        'htmlOptions'=>array('onsubmit'=>"return checkOrder()"),
    )); ?>
  <div class="promotioncont_free">
    <div class="promotioncont_free_left"><a href="#" target="_blank"><img alt="" src="/images/promotion/prom_img1.jpg"></a></div>
    <div class="promotioncont_free_right">
	 <div class="prom_title">
	  <div class="prom_note prom_memo">NOTE: <span class="prom_red">*</span>Indicates the field is required.</div>
	  <div class="prom_titletxt">Free Tailor-made Inquiry</div>
	 </div>
		<div class="prom_column prom_borderright">
			<div class="prom_stitle" style=""><img src="/images/promotion/icon1.png" /> Your Trip Ideas</div>
			<table width="100%">
			<tr><td align="right">
            <span class="prom_red">*</span> Adults:</td>
            <td>
              <select id="adults" name="adults" onchange="if(this.value=='');else style='color:#000;'">
              <?php for($i=1; $i<=30; $i++):?>
                <option value="<?php echo $i;?>" <?php if($i==2):?>selected<?php endif;?>><?php echo $i;?></option>
              <?php endfor;?>
              </select>
            <span class="prom_memo">(>12)</span></td>
      </tr>
			
      <tr><td align="right">Children:</td><td>
       <select id="children" name="children" onchange="if(this.value=='');else style='color:#000;'">
          <?php for($i=0; $i<=10; $i++):?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
          <?php endfor;?>
        </select>
        <span class="prom_memo">(2-12)</span> 
        <select id="infant" name="infant" onchange="if(this.value=='');else style='color:#000;'">
          <?php for($i=0; $i<=10; $i++):?>
          <option value="<?php echo $i;?>"><?php echo $i;?></option>
          <?php endfor;?>
        </select>
        <span class="prom_memo">(<2)</span> </td>
      </tr>
      
      <tr><td align="right"><span class="prom_red">*</span>Entry China date:</td><td>
          <?php echo $form->textField($model,'entry_date',array('class'=>'calendar'));?>
      </td>

      </tr>
			<tr><td align="right"><span class="prom_red">*</span>Approximate duration:</td><td>
        <?php echo $form->textField($model,'duration', array('style'=>'width:100px;')); ?> days
      </td></tr>
			<tr><td align="right"><span></span> Hotel choice:</td><td>
			<select name="Hotel_Choice" style="width:200px;">
      <option></option>
      <option> Luxury(5-star)</option>
			<option> Standard(4 or 3-star)</option>
			<option> Economy(3-star)</option>
			<option> Super Deluxe (5-star)</option>
			<option> Booked on my own</option>
			</select>
			</td></tr>
			<tr><td colspan="2" align="center" style="padding-top:10px;">
  			Your preferred destinations and any specific requests:<br />
  			<textarea name="other_message" id="other_message"></textarea>
  			</td>
      </tr>
			</table>
		</div>
		<div class="prom_column" style="width:230px;">
		<div class="prom_stitle"><img src="/images/promotion/icon2.png" />Contact Information</div>
		<table class="prom_tab_guest">
		<tr><td><div>Full Name: <span class="prom_red">*</span></div>
		<select name="Order[gender]" class="gender">
      <option selected="selected" value=""></option>
      <option value="Mr."> Mr.</option>
      <option value="Ms."> Ms.</option>
      <option value="Mrs."> Mrs.</option>
      <option value="Miss"> Miss</option>
    </select> 
      <?php echo $form->textField($model,'full_name', array('style'=>'width:156px;float:left;')); ?>
    </td></tr>
		<tr><td>In Your Team: <br />
      <input type="text" name="your_team" style="width:230px;"/>
    </td></tr>
		<tr><td>Email: <span class="prom_red">*</span><br />
      <?php echo $form->textField($model,'email', array('style'=>'width:230px;')); ?>
    </td></tr>
		<tr><td>Phone No.: <br />
      <?php echo $form->textField($model,'phone', array('style'=>'width:230px;')); ?>
    </td></tr>
		<tr><td align="center"> <input type="submit" name="submit" class="submit" value="" /></td></tr></table>
		</div>
    </div>
  </div>
  <?php $this->endWidget(); ?>
</div>
<!--  index end  -->
<div class="clear"></div>
<script type="text/javascript">
  $(function(){
   

    $("#month-table1 li").click(function(){
      $("#month-table1 li").removeClass("selected");
      var month = $("#month-table1 li").index(this);
      $(this).addClass("selected");
      $.get("<?php echo Yii::app()->createUrl('promotion/getMonthRecommendTours');?>", {month:month}, function(ret){
        
        $("#monthlist1").html(ret);
      })      

    })
  })


function checkOrder(){
  var email = $("#Order_email").val();
  if( email == ""){
    alert("Please input your email!");
    return false;
  }

  if($("#Order_entry_date").val() == ""){
    alert("Please input Entry China date.");
    return false;
  }

  if($("#Order_duration").val() == ""){
    alert("Please input Approximate duration.");
    return false;
  }
 
	var str=$("#other_message").val();
	str = str.replace(/\s+/g, "");
　　var sear1='www';
　　var sear2='.com';
　　var sear3='http';

  if(str.toLowerCase().indexOf(sear1)!=-1 || str.toLowerCase().indexOf(sear2)!=-1 || str.toLowerCase().indexOf(sear3)!=-1 ){
    alert("Please enter the correct information!");
    return false;
  }
  return true;
}

$("#Order_entry_date").datepicker({
  changeMonth: true,
  numberOfMonths: 2,
});
</script>