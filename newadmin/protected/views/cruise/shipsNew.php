<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/yangtzenew.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(yii::app()->request->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>
<style type="text/css">
<!--
#menu-home{ width:911px;}
.not_morelist{ top:240px;}
#CDSWIDSSP{ width:100% !important}
-->
</style>
<!--  middle1 start   -->
<div id="middle1">
    <!--  menu-home start   -->
    <div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cruise/index');?>">Yangtze Cruise</a> Yangtze Cruise Ships</div>
    <!--  menu-home end   -->
    <div class="clear"></div>
    <!--  left start   -->
    <div id="left">
       <!--  deals start   -->
       <div class="deals">
          <div class="shipstitle1"><img src="/images/yangtze/deals.png"/></div>
          <div class="clear"></div>
          <?php foreach($recommend_cruise as $v):?>
          <ul>
             <li class="pic" style="width:192px;height:79px;"><a href="<?php echo $v->getUrl();?>"><img src="<?php echo ImageUtils::getThumbnail(Cruise::UPLOAD_PATH.$v->ufile,'192x79');?>" /></a></li>
             <li class="name"><a href="<?php echo $v->getUrl();?>"><?php echo $v->cruise_name;?></a><span class="star<?php echo $v->cruise_grade;?>"></span></li>
             <li class="route"><strong>ROUTE:</strong> <span><?php echo Cruise::$upCityDays[$v->upcity].Cruise::$upCityArr[$v->upcity];?></span>
                                      <span><?php echo Cruise::$downCityDays[$v->downcity].Cruise::$downCityArr[$v->downcity];?></span>
             </li>
             <li class="price">From:<strong><?php echo $v->uplowprice;?></strong> p/p</li>
             <!-- <li><a href="<?php echo $v->getUrl();?>#orderForm"><img src="/images/yangtze/inquiry.png" alt="" /></a></li> -->
          </ul>
          <?php endforeach;?>
       </div>
       <!--  deals end   -->
       
       <!--  ships1 start   -->
       <div class="ships1">
            <div class="shipstitle1"><img src="/images/yangtze/ships1.png" /></div>
            <div class="clear"></div>
            <!--  ships1list start   -->

            <?php foreach (Cruise::$category as $k=>$v):?>
            <div class="ships1list">
                <table border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                       <tr>
                         <td rowspan="<?php echo count($cruises[$k])+1;?>" valign="middle" style="background:none;">
                           <a href="<?php echo Yii::app()->createUrl('cruise/categoryList', array('category'=>$k));?>"><img src="/images/yangtze/logo<?php echo $k;?>.jpg" /></a>
                         </td>
                         <td class="toptd">Cruise Ships</td>
                         <td class="toptd">Departure &amp; Itinerary</td>
                         <td class="toptd">Price</td>
                         <td class="toptd">Enquiry</td>
                        </tr>
                        <?php foreach ((array)$cruises[$k] as $i=>$cruise):?>
                        <tr <?php if($i%2 == 0):?>class="backgno"<?php endif;?>>
                         <td><a href="<?php echo $cruise->getUrl();?>" class="name" style="white-space:nowrap;"><?php echo $cruise['cruise_name'];?></a>
                             <span class="star5"></span>
                         </td>
                         <td><strong><?php echo Cruise::$weekDays[$cruise['up_week']];?>:</strong> <?php echo Cruise::$upCityDays[$cruise['upcity']].Cruise::$upCityArr[$cruise['upcity']];?><br />
                             <strong><?php echo Cruise::$weekDays[$cruise['down_week']];?>:</strong> <?php echo Cruise::$downCityDays[$cruise['downcity']].Cruise::$downCityArr[$cruise['downcity']];?></td>
                         <td width="120"><h2><?php echo $cruise['uphighprice'];//SiteUtils::getCurrencyPrice($cruise['uphighprice']);?></h2></td>
                         <td><a href="<?php echo $cruise->getUrl();?>"><img src="/images/yangtze/inquiry1.png" alt="" /></a></td>
                        </tr>
                        <?php endforeach;?>
                   </tbody>
                </table>
            </div>
            <?php endforeach;?>

            <!--  ships1list end   -->
          
       </div>
       <!--  ships1 end   -->
    </div>
    <!--  left end   -->
    
    <!--  right start   -->
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
  <div class="code" style="clear:both; padding-top:15px; width:245px">
      <script type="text/javascript" src="/travel/js/tripadvisor.js"></script>
     
  </div>
    </div>
    <!--  left end   -->
</div>
<!--  middle1 end   -->
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