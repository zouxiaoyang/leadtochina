<link rel="stylesheet" type="text/css" href="/travel/css/hotel.css" />
<div id="banner1"><img src="/images/hotel/banner2.jpg" alt="" /></div>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="hotel">Hotel</a> <?php echo ucfirst(htmlspecialchars($_GET['cityname']));?> Hotel</div>
<div id="left-hotel">
   <?php $this->renderPartial('_cityGuide',array('cityName'=>$cityName,'sceneryList'=>$sceneryList));?>
   <div class="list-bottom"><img src="/images/hotel/bottombg.jpg" alt="" /></div>
   <div class="list2">
       <?php $this->renderPartial('/message/_hotelMessageForm',array('model'=>$message));?>
   </div>
   <div class="list-bottom" style="margin-bottom:0px;"><img src="/images/hotel/bottombg.jpg" alt="" /></div>
</div>
<div id="right-hotel">
    <div class="city-hotel">
    	 <?php $this->widget('zii.widgets.CListView', array(
                 'dataProvider'=>$hotelList,
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
      <h2>Recommended Short Breaks in &amp; around <?php echo $cityName;?>:</h2>
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