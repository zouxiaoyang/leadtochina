<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
<head>
<title></title>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jv.moomenu.css" type="text/css" />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/adoption.css" type="text/css" />
<?php Yii::app()->clientScript->registerScriptFile('/templates/jv_news_ii/js/My97DatePicker/WdatePicker.js');?>

<style type="text/css">
<!--
#myFocus{ width:245px; height:169px; float:left; margin-top:15px;}
-->
</style>
</head>
<body id="bd" class="fs3">
<div id="header">
  <div class="head">
		
  </div>
</div>
<div class="clear"></div>
<!-- contentnew start  -->
<div class="contentnew">
  <!-- leftspace start  -->
  <div class="leftspace"> 
     <!-- content start  -->
     <div id="content">
        <div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('adoption/index');?>">China Adoption Tours</a> Pre-adoption Travel</div>
        <!-- adoption-left start  -->
		<?php $this->renderPartial('left');?>
        <!-- adoption-left end  -->
        
        <!-- adoption-right start  -->
        <div id="adoption-right">
            <!-- text start  -->
            <div class="text">
               <h2><?php echo $preAdoptionArticle->title;?></h2>
               	<?php echo $preAdoptionArticle->description;?>
            </div>
            <!-- text end  -->
            
            <!-- list1 start  -->
            <div class="list1">
               <ul>
                   <li>Land tours only</li>
                   <li>Hotel reservations</li>
                   <li>Ground transportation</li>
               </ul>
               <ul class="two">
                   <li>China tour arrangements</li>
                   <li>Air + Hotels</li>
                   <li>Interpreting and translations</li>
               </ul>
               <ul class="two">
                   <li>Side trip to other cities/countries</li>
                   <li>Air + Hotels + Car</li>
                   <li>Provide wholesale cheap flights</li>
               </ul>
            </div>
            <!-- list1 end  -->
            
            <!-- city-table start  -->
            <div class="city-table">
                 <table cellspacing="0" cellpadding="0">
                       <tr class="top">
                            <td rowspan="2" class="center">City</td>
                            <td rowspan="2">Services your may need to visit china</td>
                            <td colspan="4" class="center">Prices in dollar as the unit</td>
                       </tr>
                       <tr class="top">
                            <td>Bus</td>
                            <td>1people</td>
                            <td>2-5people</td>
                            <td>6-9people</td>
                       </tr>
                       <tr>
                            <td rowspan="9" class="center">
                            	<?php foreach ($serviceCities as $k=>$v):?>
                                <a href="<?php echo Yii::app()->createUrl('adoption/preadoption', array('city_id'=>$v->id));?>"><?php if($cityid==$v->id) echo "<b>".$v->city_name."</b>"; else echo $v->city_name;?></a>
                                <?php endforeach;?>
                            </td>                          
                       </tr>
                       <?php foreach ($servicesList as $k=>$v):?>
                       <tr>
                            <td><?php echo $v->services_name;?></td>
                            <td><?php echo $v->price_bus;?></td>
                            <td><?php echo $v->price_1;?></td>
                            <td><?php echo $v->price_2_5;?></td>
                            <td><?php echo $v->price_6_9;?></td>
                       </tr>
                       <?php endforeach;?>
                       
                 </table> 
          </div>
            <!-- city-table end  -->
          <div class="title" id="title">Fast Enquiry</div>
          <!-- fast start  -->       
          <div class="fast">
          <form action="<?php echo Yii::app()->createUrl('adoption/saveorder')?>" name="adoptionOrder" id="adoptionOrder" method="post">
              <input type="hidden" name="YII_CSRF_TOKEN" value="<?php echo Yii::app()->request->csrfToken; ?>" />
              <table border="0" cellspacing="0" cellpadding="0">
                   <tr>
                      <td><h2>1、Choose Destinations</h2></td>
                   </tr>
                   <tr>
                      <td class="nopadding">
                          <table border="0" cellspacing="0" cellpadding="0">
                               <tr>
                                    <td><input name="destination[]" type="checkbox" value="Beijing" /> Beijing(3-5 nights)</td>
                                    <td><input name="destination[]" type="checkbox" value="Chengdu" /> Chengdu(2 nights)</td>
                                    <td><input name="destination[]" type="checkbox" value="Guangzhou" /> Guangzhou(1-2 nights)</td>
                                    <td><input name="destination[]" type="checkbox" value="Guilin" /> Guilin(3 nights)</td>
                               </tr>
                               <tr>
                                    <td><input name="destination[]" type="checkbox" value="Hangzhou" /> Hangzhou(1-2 nights)</td>
                                    <td><input name="destination[]" type="checkbox" value="Harbin" /> Harbin(1-2 nights)</td>
                                    <td><input name="destination[]" type="checkbox" value="Huangshan" /> Huangshan(2-3 nights)</td>
                                    <td><input name="destination[]" type="checkbox" value="Hongkong" /> Hongkong(2-3nights)</td>
                               </tr>
                               <tr>
                                    <td><input name="destination[]" type="checkbox" value="Lhasa" /> Lhasa(3-4 nights)</td>
                                    <td><input name="destination[]" type="checkbox" value="Luoyang" /> Luoyang (2-3 nights)</td>
                                    <td><input name="destination[]" type="checkbox" value="Macau" /> Macau(1-2 nights)</td>
                                    <td><input name="destination[]" type="checkbox" value="Sanya" /> Sanya(1-2 nights)</td>
                               </tr>
                               <tr>
                                    <td><input name="destination[]" type="checkbox" value="Shanghai" /> Shanghai(2-3 nights)</td>
                                    <td><input name="destination[]" type="checkbox" value="Shenzhen" /> Shenzhen(1-2 nights)</td>
                                    <td><input name="destination[]" type="checkbox" value="Xiamen" /> Xiamen(1-2 nights)</td>
                                    <td><input name="destination[]" type="checkbox" value="Xian" /> Xian(2-3 nights)</td>
                               </tr>
                               <tr>
                                    <td><input name="destination[]" type="checkbox" value="Yangshuo" /> Yangshuo(1-2 nights)</td>
                                    <td><input name="destination[]" type="checkbox" value="Yangzhou" /> Yangzhou(1-2 nights)</td>
                                    <td><input name="destination[]" type="checkbox" value="Yangtze" /> Yangtze(3-5 nights)</td>
                               </tr>
                           </table>
                      </td>
                   </tr>
                   <tr>
                      <td><h2>2、Choose Services</h2></td>
                   </tr>
                   <tr>
                      <td class="nopadding">
                          <table border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td><input name="services[]" type="checkbox" value="Escorted tour with HFV" /> Escorted tour with HFV</td>
                                       <td><input name="services[]" type="checkbox" value="Pick up service between hotel &amp; train station only" /> Pick up service between hotel &amp; train station only</td>
                                  </tr>
                                  <tr>
                                       <td><input name="services[]" type="checkbox" value="Pick up service between hotel &amp; airpot only" /> Pick up service between hotel &amp; airpot only</td>
                                       <td><input name="services[]" type="checkbox" value="Inter preter rental service only" <?php if($_GET['bookguide']):?>checked="checked"<?php endif;?>/> Interpreter rental service only</td>
                                  </tr>
                                  <tr>
                                       <td><input name="services[]" type="checkbox" value="Car rental service only" <?php if($_GET['carrental']):?>checked="checked"<?php endif;?>/> Car rental service only</td>
                                       <td>&nbsp;</td>
                                  </tr>
                          </table>
                      </td>
                   </tr>
                   <tr>
                      <td><h2>3、Hotel Booking</h2></td>
                   </tr>
                   <tr>
                      <td class="nopadding">
                          <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="273">Hotel Class 
                                          <select name="hotelClass">
                                                 <option value=""> -------------------- </option>
                                                 <option value="3 Star"> -------3 Star------- </option>
                                                 <option value="4 Star"> -------4 Star------- </option>
                                                 <option value="5 Star"> -------5 Star------- </option>
                                          </select>
                              </td>
                                <td width="156"><input name="smoking[]" type="checkbox" value="Smoking Room" /> Smoking Room</td>
                              <td width="202"><input name="smoking[]" type="checkbox" value="Nonsmoking Room" <?php if($_GET['bookhotel']):?>checked="checked"<?php endif;?> /> Nonsmoking Room</td>
                            </tr>
                          </table>
                      </td>
                   </tr>
                   <tr>
                      <td><h3>Room Class</h3></td>
                   </tr>
                   <tr>
                      <td class="nopadding">
                          <table width="526" border="0" cellpadding="0" cellspacing="0">
<tr>
                                  <td width="124"><input name="roomClass[]" type="checkbox" value="Single Room" /> Single Room</td>
                    <td width="127"><input name="roomClass[]" type="checkbox" value="Deluxe Suite" /> Deluxe Suite</td>
                    <td width="105"><input name="roomClass[]" type="checkbox" value="King Bed" /> King Bed</td>
                    <td width="170"><input name="roomClass[]" type="checkbox" value="Twin Beds" /> Twin Beds</td>
                            </tr>
                        </table>
                     </td>
                   </tr>
              </table>
              <div class="clear"></div>
            <div class="confirm">
              <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><h2>4、Your Information</h2></td>
                        </tr>
                        <tr>
                            <td class="nopadding">
                                <table border="0" cellspacing="0" cellpadding="0">
                                   <tr>
                                       <td width="43%">Full Name:<span>*</span><br />
                                                     <select name="gender" style=" width:52px; margin-right:5px; float:left; line-height:24px; height:22px;">
                                                          <option value="Mr." selected="selected"> Mr. </option>
                                                          <option value="Mrs."> Mrs. </option>
                                                          <option value="Miss."> Miss. </option>
                                                     </select>
                                                     <input name="fullName" id="fullName" type="text" class="name" />
                                      </td>
                                      <td width="45%">E-mail Address:<span>*</span><br />
                                                      <input name="email" id="email" type="text" />
                                      </td>
                                   </tr>
                                   <tr>
                                        <td>Tour Starting Date:<br />
                                            <input name="entry_date" id="entry_date" onclick="WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})" type="text" class="date" />
                                        </td>
                                        <td>Duration:<br />
                                            <input name="duration" type="text" />
                                        </td>
                                   </tr>
                                   <tr> 
                                      <td colspan="2" width="88%" class="nopadding"> 
                                          <table border="0" cellspacing="0" cellpadding="0"> 
                                             <tr> 
                                                 <td width="24%">Adults(&gt;12)<br />  
                                                     <select name="adults" style="width:145px;">
                                                     	<option value="1">1</option>
                                                        <option value="2" selected="selected"> 2 </option> 
                                                        <?php for($i=3;$i<31;$i++):?>
                                                        <option value="<?php echo $i;?>"> <?php echo $i;?> </option>
                                              			<?php endfor;?>
                                                     </select>
                                                 </td>
                                                 <td width="24%">Children(2-12)<br />
                                                      <select name="children" style="width:145px;"> 
                                                          <?php for($i=0;$i<31;$i++):?>
                                                          <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                          <?php endfor;?>
                                                      </select>
                                                 </td>
                                                 <td width="24%">Babies(0-2)<br />
                                                      <select name="infant" style="width:145px;">
                                                          <?php for($i=0;$i<11;$i++):?>
                                                          <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                          <?php endfor;?>
                                                      </select>
                                                 </td>
                                              </tr>
                                          </table>
                                      </td>
                                   </tr>
                            </table>
                           </td>
                        </tr>
                        <tr>
                                      <td>Additional Requirements:(Optional)<br />
                                               <textarea name="otherMessage" id="otherMessage" cols="" rows="">Any more requirements,please input here.</textarea>
                                      </td>
                                  </tr>
                                  <tr>
                                     <td style=" line-height:18px;"><span>Note:</span> If you have our promotion code,please submit it in the addtional requirements to get further discount , thanks.</td>
                                  </tr>
                                  <tr>
                                      <td class="nopadding">
                                          <table border="0" cellspacing="0" cellpadding="0">
                                             <tr>
<!--                                                 <td>Verify Code:<br />-->
<!--                                                     <input name="validity" id="validity" type="text" style="width:85px; margin-bottom:3px;" /><br />-->
<!--                                                     <img src="/index.php?option=com_verifycode" alt="" id="safecode" style="cursor:pointer; float:right; margin-top:3px;" onclick="reloadcode()" /> -->
<!--                                                 </td>-->
                                                 <td>
                                                   <div class="button">
                                                   <input type="button" id="submit_button" />
                                                   <span>No booking fees!</span>
                                                   </div>
                                                 </td>
                                             </tr>
                                        </table>
                                      </td>
                                 </tr>
                   </table>
              </div>
              </form>
          </div>       
          <!-- fast end  -->
          <?php $this->renderPartial('noteBook');?>
        </div>
        <!-- adoption-right end  -->
     </div>
     <!-- content end  -->
  </div>
  <!-- leftspace end  -->
</div>
<!-- contentnew end  -->
</body>
</html>
<script type="text/javascript">
$('#submit_button').click(function(){
	var reg = /(\S)+[@]{1}(\S)+[.]{1}(\w)+/;
	if($('#fullName').val()==''){
		alert('Please input your full name!');
		$('#fullName').focus();
		return;
	}

	if(!reg.test($('#email').val())){
		alert('Please input your email correctly!');
		$('#email').focus();
		return false;
	}
	/*
	if($('#validity').val()==''){
		alert('Please enter the verification code!');
		$('#validity').focus();
		return false;
	}
*/
	if($('#otherMessage').val()=="Any more requirements,please input here."){
		$('#otherMessage').val('');
	}

	$('#adoptionOrder').submit();
});

$('#otherMessage').focus(function(){
	if($('#otherMessage').val()=="Any more requirements,please input here."){
		$('#otherMessage').val('');
	}
});

$('#otherMessage').blur(function(){
	if($('#otherMessage').val()==""){
		$('#otherMessage').val('Any more requirements,please input here.');
	}
});

function reloadcode(){
	var verify=document.getElementById('safecode');
	verify.setAttribute('src','/index.php?option=com_verifycode&rand='+Math.random());
	} 
</script>
