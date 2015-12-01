<?php $muslimHalalFoodCityList=MuslimContents::getHalalFoodCityList();?>
<div class="food">
       <h2>Halal Food(Muslim Restaurants) in China</h2>
       <ul>
       <?php foreach ((array)$muslimHalalFoodCityList as $k=>$v):?>
       	<?php if($k<='G'):?>
           <li><?php echo $k;?></li>
           <?php foreach ((array)$v['id'] as $k1=>$v1):?>
           <li><a <?php if($_GET['cityid']==$v1):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('muslimGuide/muslimHalalRestaurantList', array('cityid'=>$v1,'title'=>SiteUtils::stringURLSafe('Halal Food in '.$v['name'][$k1])));?>">Halal Food in <?php echo $v[name][$k1];?></a></li>
           <?php endforeach;?>
        <?php endif;?>
   	   <?php endforeach;?>
       </ul>
       <ul>
       <?php foreach ((array)$muslimHalalFoodCityList as $k=>$v):?>
       	<?php if($k>'G'&&$k<='O'):?>
           <li><?php echo $k;?></li>
           <?php foreach ((array)$v['id'] as $k1=>$v1):?>
           <li><a <?php if($_GET['cityid']==$v1):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('muslimGuide/muslimHalalRestaurantList', array('cityid'=>$v1,'title'=>SiteUtils::stringURLSafe('Halal Food in '.$v['name'][$k1])));?>">Halal Food in <?php echo $v[name][$k1];?></a></li>
           <?php endforeach;?>
        <?php endif;?>
   	   <?php endforeach;?>
       </ul>
       <ul>
       <?php foreach ((array)$muslimHalalFoodCityList as $k=>$v):?>
       	<?php if($k>'O'):?>
           <li><?php echo $k;?></li>
           <?php foreach ((array)$v['id'] as $k1=>$v1):?>
           <li><a <?php if($_GET['cityid']==$v1):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('muslimGuide/muslimHalalRestaurantList', array('cityid'=>$v1,'title'=>SiteUtils::stringURLSafe('Halal Food in '.$v['name'][$k1])));?>">Halal Food in <?php echo $v[name][$k1];?></a></li>
           <?php endforeach;?>
        <?php endif;?>
   	   <?php endforeach;?>
       </ul>
   </div>
