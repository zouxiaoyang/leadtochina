<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/yangtze.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/myfocus-2.0.1.min.js');?>
<?php Yii::app()->clientScript->registerScriptFile(yii::app()->request->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>
<script type="text/javascript">
myFocus.set({
	id:'myFocus',//ID
	pattern:'mF_taobao2010'//style
});
</script>
<style type="text/css">
<!--
#myFocus{ position:relative; width:940px; height:245px; overflow:hidden;}
.mF_taobao2010 .pic ul{ margin:0px; padding:0px; width:940px; height:245px; position:absolute; border:none;}
.mF_taobao2010 .pic ul li{position:relative;overflow:hidden; width:940px; height:245px;}
.mF_taobao2010 .txt li b{ width:100%; bottom:0px; left:0px;}
.mF_taobao2010 .txt li{ line-height:18px; height:18px;}
.mF_taobao2010 .num{position:absolute; right:3px;}
.mF_taobao2010 .num li{ float:left; margin-right:6px; width:10px;height:10px;overflow:hidden;border:1px solid #000; background:#ccc; cursor:pointer;}
.mF_taobao2010 .num li a{ display:none;}
.mF_taobao2010 .num li.current,.mF_taobao2010 .num li.hover{background:#E92B00;-webkit-transition:all 0.4s;-moz-transition:all 0.4s;-o-transition:all 0.4s;}
-->
</style>
<div id="content">
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a>
  <a href="<?php echo Yii::app()->createUrl('cruise/index');?>">Yangtze Cruise </a> Yangtze Cruise Ships
</div>
<div id="banner">
    <div id="myFocus">
         <div class="pic">
  	         <ul style="width:940px;">
                 <li><a href="#1"><img src="/images/yangtze/banner04.jpg" thumb="" alt="" text="" /></a></li>
                 <li><a href="#2"><img src="/images/yangtze/banner05.jpg" thumb="" alt="" text="" /></a></li>
                 <li><a href="#3"><img src="/images/yangtze/banner06.jpg" thumb="" alt="" text="" /></a></li>
  	         </ul>
        </div>
   </div>
</div>
   <div id="main">
      <div id="left">
           <div class="deals">
              <h2><?php echo date('M');?>. Hot Deals</h2>
              <?php foreach($recommend_cruise as $v):?>
              <ul>
                 <li class="pic"><a href="<?php echo $v->getUrl();?>"><img src="<?php echo ImageUtils::getThumbnail(Cruise::UPLOAD_PATH.$v->ufile,'147x75');?>" alt="" /></a></li>
                 <li>
                    <ol>
                       <li><a href="<?php echo $v->getUrl();?>"><?php echo $v->cruise_name;?></a></li>
                       <li><span class="star<?php echo $v->cruise_grade;?>"></span></li>
                       <li>ROUTE: <?php echo Cruise::$upCityDays[$v->upcity].Cruise::$upCityArr[$v->upcity].','.Cruise::$downCityDays[$v->downcity].Cruise::$downCityArr[$v->downcity];?></li>
                    </ol>
                 </li>
                 <li class="price">From:<span><?php echo SiteUtils::getCurrencyPrice($v->uplowprice);?></span>p/p
                    <a href="<?php echo $v->getUrl();?>#orderForm"><img src="/images/yangtze/inquiry.jpg" alt="" /></a>
                 </li>
              </ul>
              <?php endforeach;?>
           </div>
           <?php foreach (Cruise::$category as $k=>$v):?>
           <div class="list">
              <div class="title"><strong><?php echo $v;?></strong></div>
              <table border="0" cellspacing="0" cellpadding="0">
                   <tr class="top">
                     <td width="142">Cruise Ships</td>
                     <td width="140">Star</td>
                     <td width="282">Departure &amp; Itinerary</td>
                     <td width="74">Price</td>
                     <td width="85">Enquiry</td>
                </tr>
                <?php foreach ((array)$cruises[$k] as $cruise):?>
                   <tr class="col">
                       <td><span><a href="<?php echo $cruise->getUrl();?>"><?php echo $cruise['cruise_name'];?></a></span></td>
                       <td class="starnew"><span class="star<?php echo $cruise->cruise_grade;?>"></span></td>
                       <td>
                            <ul>
                                <li><span><?php echo Cruise::$weekDays[$cruise['up_week']];?></span> <?php echo Cruise::$upCityDays[$cruise['upcity']].Cruise::$upCityArr[$cruise['upcity']];?></li>
                                <li><span><?php echo Cruise::$weekDays[$cruise['down_week']];?></span> <?php echo Cruise::$downCityDays[$cruise['downcity']].Cruise::$downCityArr[$cruise['downcity']];?></li>
                            </ul> 
                       </td>
                       <td><strong><?php echo SiteUtils::getCurrencyPrice($cruise['uplowprice']);?></strong></td>
                       <td><a href="<?php echo $cruise->getUrl();?>#orderForm"><img src="/images/yangtze/inquiry.jpg" alt="<?php echo $cruise['cruise_name'];?>" /></a></td>
                   </tr>                   
                 <?php endforeach;?>
             </table>
           </div>
		<?php endforeach;?>
      </div>
      
      <div id="right">
          <?php $this->renderPartial('_rightSearch');?>
          
          <?php $this->renderPartial('/message/_form',array(
            'model'=>$message,
          )); ?>
          <div class="why">
             <h2>Why Choose Us</h2>
             <ul>
                 <li>Reliable China Travel Agency</li>
                 <li>Multi-Choice of China Tour</li>
                 <li>Honest Price without Hidden Fees</li>
             </ul>
          </div>
          <div class="if">
             <h2>IF</h2>
             <div><p>Still unfamiliar with Yangtze Cruises but want to find the most suitable cruise,  room and related China Tours? Just Click <a href="<?php echo Yii::app()->createUrl('cruise/inquiry'); ?>">Inquiry</a>, and let Hefei Full View Guys do the rest for you!</p></div>
          </div>
      </div>
   </div>
</div>
<script>
function reloadcode(){
	var verify=document.getElementById('safecode');
	verify.setAttribute('src','/index.php?option=com_verifycode&rand='+Math.random());
	}
function checkmessageform(){
	var reg = /(\S)+[@]{1}(\S)+[.]{1}(\w)+/;
	if($('#mes_username').val()==''){
		alert('please input your name!');
		$('#mes_username').focus();
		return ;
	}
	if(!reg.test($('#mes_user_email').val())){
		alert('Please input your email correctly!');
		$('#mes_user_email').focus();
		return ;
	}
	if($('#mes_user_content').val()==''){
		alert('Please input the contact content!');
		$('#mes_user_content').focus();
		return ;
	}
	if($('#validity').val()==''){
		alert('Please enter the verification code!');
		$('#validity').focus();
		return ;
	}
	$('#messageask').submit();
}
</script>