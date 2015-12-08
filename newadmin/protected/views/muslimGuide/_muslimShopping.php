<?php $muslimShoppingCityList=MuslimContents::getShoppingCityList();?>
<div class="food">
       <h2>Shopping in China Guide</h2>
       <ul>
       <?php foreach ((array)$muslimShoppingCityList as $k=>$v):?>
       	<?php if($k<='H'):?>
           <li><?php echo $k;?></li>
           <?php foreach ((array)$v['id'] as $k1=>$v1):?>
           <li><a <?php if($_GET['CityId']==$v1):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('muslimGuide/muslimShoppingList', array('cityid'=>$v1,'title'=>strtolower($v[name][$k1].'-shopping')));?>"><?php echo $v[name][$k1];?> Shopping</a></li>
           <?php endforeach;?>
        <?php endif;?>
   	   <?php endforeach;?>
       </ul>
       <ul>
       <?php foreach ((array)$muslimShoppingCityList as $k=>$v):?>
       	<?php if($k>'H'&&$k<'T'):?>
           <li><?php echo $k;?></li>
           <?php foreach ((array)$v['id'] as $k1=>$v1):?>
           <li><a <?php if($_GET['CityId']==$v1):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('muslimGuide/muslimShoppingList', array('cityid'=>$v1,'title'=>strtolower($v[name][$k1].'-shoping')));?>"><?php echo $v[name][$k1];?> Shopping</a></li>
           <?php endforeach;?>
        <?php endif;?>
   	   <?php endforeach;?>
       </ul>
       <ul>
       <?php foreach ((array)$muslimShoppingCityList as $k=>$v):?>
       	<?php if($k>='T'):?>
           <li><?php echo $k;?></li>
           <?php foreach ((array)$v['id'] as $k1=>$v1):?>
           <li><a <?php if($_GET['CityId']==$v1):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('muslimGuide/muslimShoppingList', array('cityid'=>$v1,'title'=>strtolower($v[name][$k1].'-shoping')));?>"><?php echo $v[name][$k1];?> Shopping</a></li>
           <?php endforeach;?>
        <?php endif;?>
   	   <?php endforeach;?>
       </ul>
   </div>
