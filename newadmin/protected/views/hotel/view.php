<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/fancybox/jquery.mousewheel-3.0.4.pack.js');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/fancybox/jquery.fancybox-1.3.4.pack.js');?>
<link rel="stylesheet" type="text/css" href="/travel/js/fancybox/jquery.fancybox-1.3.4.css" />
<link rel="stylesheet" type="text/css" href="/travel/css/hotel.css" />
<script type="text/javascript">
		$(document).ready(function() {
			$("a[rel=hotelPic]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
		});
	</script>
<div id="banner1"><img src="/images/hotel/banner2.jpg" alt="" /></div>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="hotel">Hotel</a> <a href="<?php echo Yii::app()->createUrl('hotel/search',array('city'=>$cityName));?>"><?php echo $cityName;?> Hotel</a> <?php echo $hotelDetail->name;?></div>
<div id="left-hotel">
   <?php $this->renderPartial('_cityGuide',array('cityName'=>$cityName,'sceneryList'=>$sceneryList));?>
   <div class="list-bottom"><img src="/images/hotel/bottombg.jpg" alt="" /></div>
   <div class="list2" style="display:none">
       <?php $this->renderPartial('/message/_hotelMessageForm',array('model'=>$message));?>
   </div>
   <div class="list-bottom" style="margin-bottom:0px;"><img src="/images/hotel/bottombg.jpg" alt="" /></div>
</div>
<div id="right-hotel">
    <div class="specific">
       <h2><?php echo $hotelDetail->name;?> <span class="star<?php if($hotelDetail->hotel_grade==136){echo '3';}elseif($hotelDetail->hotel_grade==137){echo '4';}elseif($hotelDetail->hotel_grade==138){echo '5';}?>"></span></h2>
       <ul>
          <li class="pic"><a href="#"><img src="<?php echo ImageUtils::getThumbnail(JosCosHotel::UPLOAD_PATH . $hotelDetail->ufile, '242x170');?>" alt="<?php echo $hotelDetail->name;?>" /></a></li>
          <li class="review"><img src="<?php echo Yii::app()->request->baseUrl . '/' .JosCosHotel::UPLOAD_PATH . $hotelDetail->seo_title;?>" width="257" height="44"/><br />          
          Data comes from Tripadvisor.com .More information, please click <a href="<?php echo $hotelDetail->seo_key;?>" target="_blank">Tripadvisor</a>.<br/><br/>
		  <b>Location:</b><?php echo $hotelDetail->districtName->name;?><br/>
          <?php echo $hotelDetail->hotel_addr;?><br/>
		  </li>
       </ul>
       <div class="clear"></div>
       <div class="gallary">
       <?php foreach ((array)$hotelDetail->hotelPics as $k=>$v):?>
         <a title="<?php echo $v->pic_alt;?>" href="<?php echo Yii::app()->request->baseUrl . '/' .JosCosHotel::UPLOAD_PATH . $v->pic_path;?>" rel="hotelPic"><img src="<?php echo Yii::app()->request->baseUrl . '/' .JosCosHotel::UPLOAD_PATH . $v->pic_path;?>" alt="<?php echo $v->pic_alt;?>"/></a>
       <?php endforeach;?>
       </div>  
       <?php echo $hotelDetail->description;?>
       <?php echo $hotelDetail->surrounding;?>
       <?php echo $hotelDetail->service;?>
       <div class="clear"></div>
       <?php $form=$this->beginWidget('CActiveForm',array(
       			'id'=>'costomizeOrderForm',
       			'action'=>'#actionForm',
                'enableAjaxValidation'=>false,
       ));?>
       <?php echo $form->errorSummary($model); ?>
        <table border="0" cellspacing="0" cellpadding="0" id="actionForm" style="display:none">
            <tr>
               <td colspan="2"><strong>Hotel Quick Booking or Enquiry</strong><br />
               We thank you for your interest in the hotel above.For a fast response,submit this basic Quick Reservation or Enquiry form below by clicking "<span style="color:#0d0d0d;">Submit</span>".and we'll get back to you  by e-mail within 12 to 24 hours.For urgent booking,call us at 0086 55165355416.</td>
            </tr>
            <tr>
               <td class="top">Hotel Name</td>
               <td><?php echo $form->textField($model,'hotelName',array('value'=>$hotelDetail->name,'readonly'=>true));?></td>
            </tr>
            <tr>
               <td class="top">Your Full Name</td>
               <td>
                 <?php echo $form->dropDownList($model,'gender',array(
                 	'Mr.'=>'Mr.',
                 	'Ms.'=>'Ms.',
                 ),array('style'=>"width:50px; float:left; margin-right:5px;"));?>
                 <?php echo $form->textField($model,'full_name',array('style'=>"width:236px;"));?>
                 <span>*</span>
                 <span style="color:red;"><?php echo $form->error($model,'full_name');?></span>
                 </td>
            </tr>
            <tr>
               <td class="top">E-mail</td>
               <td><?php echo $form->textField($model,'email');?>
               	   <span style="color:red;"><?php echo $form->error($model,'email');?></span>
               </td>
            </tr>
            <tr>
               <td class="top">Nationality</td>
               <td><?php echo $form->textField($model,'nationality');?></td>
            </tr>
            <tr>
               <td class="top">Number of Adults</td>
              <?php $arr=array();
              $model->adults=Yii::app()->user->getstate('orderGuests');
               for($i=1;$i<31;$i++)$arr[$i]=$i;?>
               <td><?php echo $form->dropDownList($model,'adults',$arr);?></td>
            </tr>
            <tr>
               <td class="top">Names of other Guests</td>
               <td><?php echo $form->textArea($model,'other_city');?></td>
            </tr>
            <tr>
               <td class="top">Room Type</td>
               <td><?php echo $form->dropDownList($model,'total_price',array(
               			'Standard Room'=>'Standard Room',
               			'Superior Room'=>'Superior Room',
               			'Deluxe Room'=>'Deluxe Room',
               			'Suite Room'=>'Suite Room'
               ));?></td>
            </tr>
            <tr>
               <td class="top">Num of Rooms</td>
               <?php $arr=array();
               		$model->city=Yii::app()->user->getState('orderRooms');
               		for($i=1;$i<11;$i++)$arr[$i]=$i;	
               ?>
               <td><?php echo $form->dropDownList($model,'city',$arr);?></td>
            </tr>
            <tr>
               <td class="top">Arrival Date</td>
               <td><?php echo $form->textField($model,'entry_date',array('value'=>Yii::app()->user->getState('orderStarttime'),'onClick'=>"WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})",'class'=>'Wdate'));?> <span class="date">(dd-mm-yy) <strong>*</strong></span></td>
            </tr>
            <tr>
               <td class="top">Departure  Date</td>
               <td><?php echo $form->textField($model,'end_date',array('value'=>Yii::app()->user->getState('orderEndtime'),'onClick'=>"WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})",'class'=>'Wdate'));?> <span class="date">(dd-mm-yy) <strong>*</strong></span></td>
            </tr>
            <tr>
               <td class="top">Check-in Time</td>
               <td><?php echo $form->textField($model,'payment_method',array('onClick'=>"WdatePicker({dateFmt:'MM/dd/yyyy H:m:s',minDate:'%y-%M-%d',lang:'en'})",'class'=>'Wdate'));?></td>
            </tr>
            <tr>
               <td class="top">Special Requests Type in  the box</td>
               <td><?php echo $form->textArea($model,'other_message');?></td>
            </tr>
            <tr>
               <td>&nbsp;</td>
               <td class="button"><input class="submit" value="" type="submit" /> <input value="" type="reset" />  <span>Required fields are marked with(*)</span></td>
            </tr>
       </table>
       <?php $this->endWidget();?>
    </div>
</div>
</div>
