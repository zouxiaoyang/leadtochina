<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>
<link rel="stylesheet" type="text/css" href="/travel/css/hotel.css" />
<div id="banner1"><img src="/images/hotel/banner2.jpg" alt="" /></div>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('hotel');?>">Hotel</a> <a href="<?php echo Yii::app()->createUrl('hotel/search',array('city'=>ucfirst(trim($_GET['city']))));?>"><?php echo ucfirst(trim($_GET['city']));?> Hotel</a> Search</div>
<div id="left-hotel">
   <div class="search">
      <h2>Search China Hotels</h2>
      <form action="<?php echo Yii::app()->createUrl('hotel/search')?>" method="get">
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
           <td>Destination City:</td>
        </tr>
        <tr>
           <td><input name="city" type="text" value="<?php echo ucfirst(trim($_GET['city']));?>" /></td>
        </tr>
        <tr>
           <td>Check-in:</td>
        </tr>
        <tr>
           <td><input class="calendar" name="starttime" type="text" onclick="WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})"/></td>
        </tr>
        <tr>
           <td>Check-out:</td>
        </tr>
        <tr>
           <td><input class="calendar" name="endtime" type="text" onclick="WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})"/></td>
        </tr>
        <tr>
           <td style="text-align:center;"><input class="sear" name="" type="submit" value="" /></td>
        </tr>
     </table>
     </form>
   </div>
   <div class="list-bottom"><img src="/images/hotel/bottombg.jpg" alt="" /></div>
   <div class="list2">
    <?php $this->renderPartial('/message/_hotelMessageForm',array('model'=>$message));?>
   </div>
   <div class="list-bottom" style="margin-bottom:0px;"><img src="/images/hotel/bottombg.jpg" alt="" /></div>
</div>
<div id="right-hotel">
    <div class="zero" <?php if($dataProviderList->totalItemCount>0):?>style="display:none;"<?php endif;?>>
       Sorry, no hotels found ! You may click " <a href="http://messenger.providesupport.com/messenger/travelthing.html">live chat</a>" and inquiry online.
    </div>
    <div class="city-hotel">
   			 <?php $this->widget('zii.widgets.CListView', array(
                 'dataProvider'=>$dataProviderList,
                 'itemView'=>'_list',
                 'ajaxUpdate'=>false,
		              'pager'=>array(
                    'cssFile'=>False,
                    'header'=>'',
                  ),
                 'template'=>"{items}\n{pager}",
               )); ?>
    </div>
  <?php if($randomCityTours):?>  
   <div class="recommend">
      <h2>Recommended Short Breaks in &amp; around <?php echo $_GET['city']?>:</h2>
      <ul>
      <?php foreach ((array)$randomCityTours as $k=>$v):?>
      <?php if ($v['url']) $url = $v['url']; else $url = "/index.php?option=com_showpc&view=default&pcid=" . $v['id']; ?>
         <li><a href="<?php echo $url;?>"><?php echo $v['name'];?></a></li>
      <?php endforeach;?>
      </ul>
   </div>
  <?php endif;?>
</div>
</div>
