﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="en" />
<script src="<?php echo Yii::app()->request->baseUrl.'/js/jquery.js';?>"></script>

<style>
*{margin:0;padding:0}
body{
 font-family: Verdana,Arial,Helvetica,sans-serif;
    font-size: 12px;
}
.price-left{
	width:582px;
}
.price{ margin-top:20px;}
.price-left{width:582px; height:auto; float:left;}
.price-title{ width:100%; height:auto; float:left; position:relative;}
/*  .price-title h2{ width:183px; height:17px; display:inline-block; float:left; padding-top:4px;}  */
.price-title h2{ width:582px; height:27px; display:inline-block; float:left; border-bottom:1px solid #dbdbdb;}
.price-title h2 span{ width:112px; height:28px; background:url(/images/view/span-newdq.png) left top no-repeat; display:block; float:left; color:#333333; font-size:14px; cursor:pointer; text-align:center; line-height:28px; margin-right:10px;}
.price-title h2 span.dq,.price-title h2 span:hover{background:url(/images/view/span-new1.png) left top no-repeat; color:#fff;}
.currency{ font-size:10px; width:225px; height:auto; float:right; text-align:right; color:#2e2d2d; position:absolute; right:0px;}
.currency span{ display:block; line-height:19px; float:left; background:url(/images/country/button.png) #fff right center no-repeat; cursor:pointer; border:1px solid #ccc; padding:2px 20px 3px 8px; width:195px; height:16px;}
.currency span img{width:18px; height:12px; border:1px solid #ccc; float:left; display:block; margin-right:13px; margin-top:2px;}
.currency span b{ font-weight:normal; float:left; line-height:18px;}
.currency ul{ width:223px; height:auto; float:left; padding:4px 0px; border:1px solid #dddddd; background:#fff; margin:0px;}
.currency ul li{ width:206px; height:17px; line-height:15px; padding:2px 10px 2px 7px; float:left; display:block; cursor:pointer; text-align:left;}
.currency ul li img{ width:18px; height:12px; border:1px solid #ccc; float:left; display:block; margin-right:13px; margin-top:2px;}
.currency ul li b{ float:left; line-height:17px; width:172px; font-weight:normal;}
.currency ul li:hover{ background:#f08000; color:#ffffff;}
.price-left table{ width:100%; height:auto; border-collapse:collapse; margin-top:12px; float:left; display:block;}
.price-left table tr.top{ background:#454545;}
.price-left table tr.top td{ color:#fff;}
.price-left table tr td{

	 border: 1px solid #CCCCCC;
    color: #333333;
    height: 30px;
    max-height: 30px;
    min-height: 30px;
	max-width: 115px;
    min-width: 115px;
    text-align: center;
    white-space: nowrap;
}
.price-left table tr td a{ color:#cc0000;min-width:70px; background:url(/images/view/cart.png) right center no-repeat; padding-right:20px; text-decoration:none;}

.table-bottom{ width:100%; height:6px; float:left;}
.price1{ width:100%; height:auto; float:left; margin:15px 0px;}
.inclusions{ width:270px; height:auto; float:left; padding-right:20px; border-right:1px solid #cccccc;}
.inclusions h2,.exclusion h2{ width:100%; height:auto; float:left; display:block;}
.exclusion{ width:267px; height:auto; float:right;}
.inclusions ul,.exclusion ul{ width:100%; height:auto; float:left; margin-top:10px; color:#777777; font-size:11px; line-height:16px;}
.inclusions ul li{ width:242px; height:auto; float:left; display:block; background:url(/images/view/bg.png) 0px -232px no-repeat; padding:3px 0px 3px 28px;}
.exclusion ul li{ width:241px; height:auto; float:left; display:block; background:url(/images/view/bg.png) -288px -234px no-repeat; padding:3px 0px 3px 26px;}
.price-right{ width:284px; height:auto; float:right; border:1px solid #dddddd; padding:15px 15px 90px 15px; background:url(/images/view/bg2.jpg) left bottom no-repeat;
}
.price-right h2{ width:100%; height:auto; display:block; margin-top:8px;}
.price-right p{ color:#333333; line-height:18px; padding:10px 0px 6px 0px;}
.line{ width:100%; height:2px; background:url(/images/view/itleftbg.jpg) left center repeat-x; float:left; margin:10px 0px;}
#c14,#c15{ width:100%; height:auto; float:left;}
</style>
</head>
<body>

<div class="price-left">
<div class="price-title"><h2><span class="dq" onclick="_price.tab(1, this);" style="display:none">2013 Price</span><span class="dq" onclick="_price.tab(2, this);">2015 Price</span></h2> 
 <!--  currency start  -->
 <div class="currency" style="display:none">
   <span><img alt="" src="/images/country/US.jpg"><b>USD-United States Dollar</b></span>
   <ul style="display:none;height:110px;overflow-x:hidden;overflow-y:auto;">
     <li val="1"><img alt="" src="/images/country/US.jpg"><b>USD-United States Dollar</b></li>
     <li val="2"><img alt="" src="/images/country/china.jpg"><b>CNY - Chinese Yuan</b></li>
     <li val="3"><img alt="" src="/images/country/Eur.jpg"><b>EUR - Euro</b></li>
     <li val="4"><img alt="" src="/images/country/Japan.jpg"><b>JPY-Japanese Yen</b></li>
     <li val="5"><img alt="" src="/images/country/India.jpg"><b>INR-Indian Rupee</b></li>
     <li val="6"><img alt="" src="/images/country/Russia.jpg"><b>SUR-Russian Ruble</b></li>
     <li val="8"><img alt="" src="/images/country/Britain.jpg"><b>GBP-Pound Sterling</b></li>
     <li val="9"><img alt="" src="/images/country/Canada.jpg"><b>CAD-Canadian Dollar</b></li>
     <li val="10"><img alt="" src="/images/country/Australia.jpg"><b>AUD-Australian Dollar</b></li>
  </ul>
</div>
<!--  currency end  -->
</div>
<div id="c14" style="display:none">
<?php $price_array_2013=unserialize($tour->price_serialize_1); ?>
<table cellspacing="0" cellpadding="0" border="0">
	<tbody>
	  <tr class="top">
	     <td>Date &amp; Price </td>
	     <td>2-5People</td>
	     <td>6-9People</td>
	     <td>≥10People</td>
	     <td>Solo Occupancy</td>
	  </tr>
	  <tr>
        <td>Nov.1 - Mar. 31</td>
        <td><strong><?php echo SiteUtils::getCurrencyPrice($price_array_2013[1]).".00";?></strong></td>
        <td><strong><?php echo SiteUtils::getCurrencyPrice($price_array_2013[2]).".00";?></strong></td>
        <td><strong><?php echo SiteUtils::getCurrencyPrice($price_array_2013[3]).".00";?></strong></td>
        <td><strong><?php echo SiteUtils::getCurrencyPrice($price_array_2013[4]).".00";?></strong></td>
      </tr>
      <tr>
         <td>Apr.1 - Oct.31</td>
         <td><strong><?php echo SiteUtils::getCurrencyPrice($price_array_2013[6]).".00";?></strong></td>
         <td><strong><?php echo SiteUtils::getCurrencyPrice($price_array_2013[7]).".00";?></strong></td>
         <td><strong><?php echo SiteUtils::getCurrencyPrice($price_array_2013[8]).".00";?></strong></td>
         <td><strong><?php echo SiteUtils::getCurrencyPrice($price_array_2013[9]).".00";?></strong></td>
      </tr>
	</tbody>
</table>
<div class="table-bottom"><img src="/images/view/bg1.png"></div>
<div class="clear"></div>
<p><img style="width:22px; height:18px; padding-top:4px; display:block; float:left; margin-right:3px;" src="/images/view/notice.png"> <span style=" float:left; display:inline-block; line-height:24px">Book 3 months in advance, save at least <strong style=" color:#940a0a; font-size:16px;">5%</strong></span></p>
</div>
<div id="c15" style="" class="price_tab">
<?php if(in_array($tour->id, array(938,940))):?>
  <table cellspacing="0" cellpadding="0" border="0">
    <tbody>
      <tr class="top">
         <td>Date</td>
         <td>Price</td>
         <td style="padding:0px 20px">Group Size</td>
         <td style="padding:0px 37px">Cruise Ship</td>
      </tr>
      <?php if($tour->id!=938):?>
      <tr>
          <td>Oct 07th</td>
          <td><a href="###" class="price">$355 p/p</a></td>
          <td><a href="###" style="background:none;">8-14 persons</a></td>
          <td><a href="###" style="background:none;">Celebrity Millennium</a></td>
        </tr>
        <tr>
           <td>Oct 15th</td>
           <td><a href="###" class="price">$355 p/p</a></td>
          <td><a href="###" style="background:none;">8-14 persons</a></td>
          <td><a href="###" style="background:none;">Celebrity Millennium</a></td>
        </tr>
    <?php else:?>
      <tr>
          <td>Apr 21th</td>
          <td><a href="###" class="price">$395 p/p</a></td>
          <td><a href="###" style="background:none;">8-14 persons</a></td>
          <td><a href="###" style="background:none;">Celebrity Millennium</a></td>
        </tr>
    <?php endif;?>
    </tbody>
  </table>
<?php else:?>
  <?php $price_array_2014=unserialize($tour->price_serialize); ?>
  <table cellspacing="0" cellpadding="0" border="0">
  	<tbody>
  	  <tr class="top">
  	     <td>Date &amp; Price </td>
  	     <td>2-5People</td>
  	     <td>6-9People</td>
  	     <td>≥10People</td>
  	     <td>Solo Occupancy</td>
  	  </tr>
  	  <tr>
          <td>Nov.1 - Mar. 31</td>
          <td><a href="###" class="price"><?php echo SiteUtils::getCurrencyPrice($price_array_2014[1]).".00";?></a></td>
          <td><a href="###" class="price"><?php echo SiteUtils::getCurrencyPrice($price_array_2014[2]).".00";?></a></td>
          <td><a href="###" class="price"><?php echo SiteUtils::getCurrencyPrice($price_array_2014[3]).".00";?></a></td>
          <td style="color:#CC0000"><?php echo SiteUtils::getCurrencyPrice($price_array_2014[4]).".00";?></td>
        </tr>
        <tr>
           <td>Apr.1 - Oct.31</td>
           <td><a href="###" class="price"><?php echo SiteUtils::getCurrencyPrice($price_array_2014[6]).".00";?></a></td>
           <td><a href="###" class="price"><?php echo SiteUtils::getCurrencyPrice($price_array_2014[7]).".00";?></a></td>
           <td><a href="###" class="price"><?php echo SiteUtils::getCurrencyPrice($price_array_2014[8]).".00";?></a></td>
           <td style="color:#CC0000"><?php echo SiteUtils::getCurrencyPrice($price_array_2014[9]).".00";?></td>
        </tr>
  	</tbody>
  </table>
<?php endif;?>



<div class="table-bottom"><img src="/images/view/bg1.png"></div>
<div class="clear"></div>
<p><img style="width:22px; height:18px; padding-top:4px; display:block; float:left; margin-right:3px;" src="/images/view/notice.png"> <span style=" float:left; display:inline-block; line-height:24px">Inquire of our Trip Advisor, Enjoy the best Discount Now!</span></p>
</div>
<script   language="javascript">
  (function($){
    $(".currency").click(function(){
      $(this).find("ul").toggle();
      $(this).find("ul>li").click(function(){
        var currency = $(this).attr('val');
        $.get('/travel/site/currency', {currency: currency}, function(ret){
          if(ret == 0) window.location.href="<?php echo Yii::app()->createUrl('toursPackage/price', array('id'=>$tour->id));?>";
        })
      })
    })

    <?php if($_COOKIE['currency']):?>
      var currency = "<?php echo $_COOKIE['currency'];?>";
      $(".currency").find("ul>li").each(function(){
        if($(this).attr('val') == currency){
          $(".currency").find("span img").attr('src', $(this).find("img").attr('src'));
          $(".currency").find("span b").html($(this).find("b").html());
        }
      })
    <?php endif;?>


    $(".price").click(function(){
      parent.document.getElementById("orderForm").submit();
    })

  })(jQuery);

  var _price = {
    tab:function(num, obj){
      if(num == 1){
        $("#c14").show();
        $("#c15").hide();
      }else{
        $("#c14").hide();
        $("#c15").show();
      }
      $(obj).parent("h2").find("span").removeClass("dq");
      $(obj).addClass("dq");
    }

  }
</script>
</body>
</html>
