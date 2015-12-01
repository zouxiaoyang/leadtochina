<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/fancybox/jquery.mousewheel-3.0.4.pack.js');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/fancybox/jquery.fancybox-1.3.4.pack.js');?>
<link rel="stylesheet" type="text/css" href="/travel/css/ports.css" />
<link rel="stylesheet" type="text/css" href="/travel/js/fancybox/jquery.fancybox-1.3.4.css" />
<script type="text/javascript">
		$(document).ready(function() {
			$("a#single_image").fancybox({
				'titlePosition' 	: 'inside',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">' + (title.length ? ' &nbsp; ' + title : 'Cruise to China Map') + '</span>';
				}
			});
		});
	</script>
<style>
#fancybox-title-over {
    color: white;
    font-size: 20px;
}
</style>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> Cruise Ports
<div id="breadcrumb_currency">
  <div style="position:relative; width:225px; height:auto; float:right;">
    <div id="dollar" class="currency">
      <span><img src="/images/country/US.jpg" alt="" /><b>USD-United States Dollar</b></span>
      <ul style="display:none;">
        <li val="1"><img src="/images/country/US.jpg" alt="" /><b>USD-United States Dollar</b></li>
        <li val="2"><img src="/images/country/china.jpg" alt="" /><b>CNY - Chinese Yuan</b></li>
        <li val="3"><img src="/images/country/Eur.jpg" alt="" /><b>EUR - Euro</b></li>
        <li val="4"><img src="/images/country/Japan.jpg" alt="" /><b>JPY-Japanese Yen</b></li>
        <li val="5"><img src="/images/country/India.jpg" alt="" /><b>INR-Indian Rupee</b></li>
        <li val="6"><img src="/images/country/Russia.jpg" alt="" /><b>SUR-Russian Ruble</b></li>
        <li val="8"><img src="/images/country/Britain.jpg" alt="" /><b>GBP-Pound Sterling</b></li>
        <li val="9"><img src="/images/country/Canada.jpg" alt="" /><b>CAD-Canadian Dollar</b></li>
        <li val="10"><img src="/images/country/Australia.jpg" alt="" /><b>AUD-Australian Dollar</b></li>
      </ul>
    </div>
  </div>
</div>
</div>
<?php $this->renderPartial('_left');?>

<div id="right-muslim">
   <div class="photo"><a href="/images/ports/cruise_map.jpg" id="single_image"><img alt="" src="/images/ports/map.jpg"></a></div>
   <div class="ports">
       <table border="0" cellspacing="0" cellpadding="0" style="width:662px;">
         <tr class="top"> 
            <td width="106"><img alt="" src="/images/ports/icon1.png"> Cruise</td>
           <td width="183"><img alt="" src="/images/ports/icon2.png"> Port</td>
           <td width="211"><img alt="" src="/images/ports/icon3.png"> Port City &amp; Side Tour</td>
           <td width="162"><img alt="" src="/images/ports/icon4.png"> Highlights</td>
         </tr>
         <?php foreach ((array)$allPortInfos as $k=>$v):?>
         <tr> 
            <td class="city"><a href="<?php echo Yii::app()->createUrl('CruisePorts/PortView', array('id'=>$v['id'],'cityname'=>SiteUtils::stringURLSafe($v['cityName'])))?>"><?php echo $v['cityName'];?></a></td>
            <td><?php echo substr(strip_tags($v['portIntro']),0,70);?>...<a href="<?php echo Yii::app()->createUrl('CruisePorts/PortView', array('id'=>$v['id'],'cityname'=>SiteUtils::stringURLSafe($v['cityName'])))?>" class="read">Read More</a></td>
            <td>
                <ul>
                <?php $catNameUrl=unserialize($v['catNameUrl']); foreach ((array)$catNameUrl['name'] as $k1=>$v1):?>
                   <li><a href="<?php echo $catNameUrl['url'][$k1];?>" title="<?php echo $v1;?>"><?php if(strlen($v1)>34)echo substr($v1,0,34)."...";else echo $v1;?></a></li>
                <?php endforeach;?>
                </ul>
            </td>
            <td>
              <span>
              	<?php foreach ((array)$v['scenery'] as $k2=>$v2):?>
                  <a href="<?php echo $v2['url'];?>" title="<?php echo $v2['name'];?>"><?php if(strlen($v2['name'])>22)echo substr($v2['name'],0,22)."...";else echo $v2['name'];?></a>
                <?php endforeach;?>
              </span>
            </td>
         </tr>
        <?php endforeach;?>
      </table>
   </div>

   <?php foreach ((array)$allPortInfos as $k=>$v):?>
   <?php
    if($k==0 || $k == 1) $url = Yii::app()->createUrl('CruisePorts/tianjinCruisePort');
    elseif($k == 2) $url = Yii::app()->createUrl('CruisePorts/shanghaiCruisePort');
   ?>
   <div class="port-list" <?php if($k==1):?>id="tianjinPort"<?php endif;?>>
   <h2><span><?php echo $k+1;?></span> <b><?php echo $v['cityName'];?> Cruise Port &amp; <?php echo $v['cityName'];?> Tour</b><?php if($k<=2):?><a href="<?php echo $url;?>">More &raquo;</a><?php endif;?></h2>
      <ul>
         <li class="pic"><a><img alt="<?php echo $v['cityName'];?> Cruise Port &amp; <?php echo $v['cityName'];?> Tour" src="<?php echo ImageUtils::getThumbnail(CruisePorts::UPLOAD_PATH.$v['pic'], '201x145');?>"></a></li>
         <li class="desc" style="line-height:18px;"><?php echo $v['tourIntro'];?></li>
         <li>
            <ol>
               <?php foreach ($v['tour'] as $kk=>$vv):?>
               <?php if ($vv['url']) $url = $vv['url']; else $url = "/index.php?option=com_showpc&view=default&Itemid=137&pcid=" . $vv['id'];?>
               <li><a href="<?php echo $url;?>" title="<?php echo $vv['name'];?>"><?php if(strlen($vv['name'])>70)echo substr($vv['name'],0,70)."...";else echo $vv['name'];?></a> <span>From <?php echo SiteUtils::getCurrencyPrice($vv['price']);?> p/p</span></li>
               <?php endforeach;?>
            </ol>
         </li>
      </ul>
   </div>
	<?php endforeach;?>
   <div class="title02">Quick Booking of China Port Transfer Services</div>
   <div class="booking">
    <p>Welcome to Leadtochina.com. If you are interested in booking a China port transfer and port side tours with us, please leave your information from below. The professional HFV trip consultant will reply you within 12 hours. For urgent booking, please call us at 0086-551-65355416.</p>
    <div class="clear"></div>
    <?php $form=$this->beginWidget('CActiveForm', array(
                  'id'=>'cruisePortsOrderForm',
                  'enableAjaxValidation'=>true,
                )); ?>
       <table cellspacing="0" cellpadding="0" border="0">
          <tbody>
             <tr>
                <td width="248" class="align">Your Full Name</td>
                <td width="397">
                 <?php echo $form->dropDownList($model,'gender',array('Mr.'=>'Mr.','Ms.'=>'Ms.'),array('style'=>'width:50px; float:left; margin-right:5px;'));?>
                 <?php echo $form->textField($model,'full_name',array('style'=>'width:250px; float:left;'));?>
                 <span> *</span>
                 <span style="display:block;float:left;"><?php echo $form->error($model,'full_name');?></span>
                 </td>
             </tr>
             <tr>
                <td class="align">E-mail</td>
                <td><?php echo $form->textField($model,'email');?>
                <span>*</span><br/>
                <span style="display:block;float:left;"><?php echo $form->error($model,'email');?></span>
                </td>
             </tr>
             <tr>
                <td class="align">Nationality</td>
                <td><?php echo $form->textField($model,'nationality');?></td>
             </tr>
             <tr>
                <td class="align">Adults</td>
                <td>
                 <?php
                  for($i=1;$i<31;$i++) $arr[$i]=$i;
                     echo $form->dropDownList($model,'adults', $arr); 
                 ?>         
                </td>
             </tr>
             <tr>
                <td class="align">Children(0-12)</td>
                <td>
                  <?php
                  for($i=1;$i<31;$i++) $arr[$i]=$i;
                     echo $form->dropDownList($model,'children', $arr); 
                 ?>
                </td>
            </tr>
            <tr>
                  <td class="align">Babies(1-2)</td>
                 <td>
                <?php
                   for($i=0;$i<10;$i++) $arr3[$i]=$i;
                      echo $form->dropDownList($model,'infant', $arr3); 
                ?>
                </td>
         </tr>
         <tr>
              <td class="align">Hotel Class</td>
              <td>
                <?php echo $form->dropDownList($model,'final_price',array( //final_price=>Hotel Class
                		'3 star'=>'3 star',
                		'4 star'=>'4 star',
                		'5 star'=>'5 star',
                		'No Need'=>'No Need',
                		)); ?>
			 </td>
         </tr>
         <tr>
              <td class="align">Num of Rooms</td>
              <td>
                <?php echo $form->textField($model,'total_price'); //total_price=>Num of Rooms
                ?>
              </td>
         </tr>
         <tr>
              <td class="align">Arrival Date</td>
              <td>
              <?php echo $form->textField($model,'entry_date',array('onclick'=>"WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})",'class'=>'Wdate'));?>
              <?php echo $form->error($model,'entry_date');?>
              </td>
         </tr>
         <tr>
              <td class="align">Departure Date</td>
              <td>
              <?php echo $form->textField($model,'end_date',array('onclick'=>"WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})",'class'=>'Wdate'));?>
              <?php echo $form->error($model,'end_date');?>
              </td>
              
         </tr>
         <tr>
              <td class="align">Special Requests Type in the box</td>
              <td>
                <?php echo $form->textArea($model,'other_message');?>
			 </td>
         </tr>
         <tr>
              <td>&nbsp;</td>
              <td>
                  
                  <input type="submit" value="" name="yt0" style="background:url(/images/ports/bg.png) -483px -1px no-repeat; width:77px;height:27px; border:none; margin-right:12px; float:left; margin-top:3px; cursor:pointer;)" class="form_button" id="order_button">                
                  <input type="reset" style="width:77px;height:27px; border:none; background:url(/images/ports/bg.png) -564px -1px no-repeat; float:left; margin-top:3px; cursor:pointer;" name="yt1" value="">
              </td>
         </tr>
         <tr>
              <td>&nbsp;</td>
              <td>Required filelds are marked with(<span>*</span>)</td>
         </tr>
    </tbody>
   </table>
   <?php $this->endWidget();?>
  </div>
</div>
