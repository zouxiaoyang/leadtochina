<ul>
   <?php foreach (MuslimPackages::getMuslimCities() as $k=>$v):?>
   <li><a href="<?php echo Yii::app()->createUrl('muslimTour/muslimCityTour', array('cityid'=>$k,'title'=>SiteUtils::stringURLSafe($v['name'].'-muslim-tour')));?>"><?php echo $v[name];?> Muslim City Tours  <span>- <?php echo $v[packageCount];?> Itineraries</span></a></li>
   <?php endforeach;?>
</ul>