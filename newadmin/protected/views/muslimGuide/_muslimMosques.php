<?php $muslimMosquesCityList=MuslimContents::getMosquesCityList();?>
<div class="food">
       <h2>China Mosque(Masjid) Guide</h2>
       <ul>
        <?php foreach ((array)$muslimMosquesCityList as $k=>$v):?>
       	<?php if($k<='H'):?>
           <li><?php echo $k;?></li>
           <?php foreach ((array)$v['id'] as $k1=>$v1):?>
           <li><a <?php if($_GET['CityId']==$v1):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('muslimGuide/muslimMosquesList', array('cityid'=>$v1,'title'=>strtolower($v[name][$k1].'-mosques')));?>"><?php echo $v[name][$k1];?> Mosques</a></li>
           <?php endforeach;?>
        <?php endif;?>
   	   <?php endforeach;?>
       </ul>
       <ul>
        <?php foreach ((array)$muslimMosquesCityList as $k=>$v):?>
       	<?php if($k>'H'&&$k<'T'):?>
           <li><?php echo $k;?></li>
           <?php foreach ((array)$v['id'] as $k1=>$v1):?>
           <li><a <?php if($_GET['CityId']==$v1):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('muslimGuide/muslimMosquesList', array('cityid'=>$v1,'title'=>strtolower($v[name][$k1].'-mosques')));?>"><?php echo $v[name][$k1];?> Mosques</a></li>
           <?php endforeach;?>
        <?php endif;?>
   	   <?php endforeach;?>
       </ul>
       <ul>
        <?php foreach ((array)$muslimMosquesCityList as $k=>$v):?>
       	<?php if($k>='T'):?>
           <li><?php echo $k;?></li>
           <?php foreach ((array)$v['id'] as $k1=>$v1):?>
           <li><a <?php if($_GET['CityId']==$v1):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('muslimGuide/muslimMosquesList', array('cityid'=>$v1,'title'=>strtolower($v[name][$k1].'-mosques')));?>"><?php echo $v[name][$k1];?> Mosques</a></li>
           <?php endforeach;?>
        <?php endif;?>
   	   <?php endforeach;?>
       </ul>
       
   </div>