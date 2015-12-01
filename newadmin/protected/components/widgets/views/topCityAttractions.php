          <h2>Top <?php echo $cityInfo->name ;?> Attractions</h2>
<ul>
   <?php foreach($sceneries as $scenery):?>
        <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/attractionView', array('cityname'=>strtolower($cityInfo->name),'title'=>SiteUtils::stringURLSafe($scenery['name']),'id'=>$scenery['id']));?>"><?php echo $scenery['name'];?></a></li>
      <?php endforeach;?>
</ul>        
