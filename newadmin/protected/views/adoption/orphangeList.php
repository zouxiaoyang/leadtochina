<div class="content1">
 <div class="orphanage">
  <?php $provinceids_arr = array_chunk($provinceids, 9);

  ?>
  <div class="orphanagelist">
      <ul>
        <?php foreach($provinceids_arr[0] as $v):?>
            <li class="title3"><?php echo $province_arr[$v];?></li>
            <?php foreach($orphanage_list as $address):?>
                <?php if($address->provinceid == $v):?>
                    <li><a href="<?php echo Yii::app()->createUrl('adoption/OrphanageTravelGuide', array('id'=>$address->id));?>"><?php echo $address->orphanage_name;?></a></li>
                <?php endif;?>
            <?php endforeach;?>
        <?php endforeach;?>
        
      </ul>
      
      <ul>
       <?php foreach($provinceids_arr[1] as $v):?>
            <li class="title3"><?php echo $province_arr[$v];?></li>
            <?php foreach($orphanage_list as $address):?>
                <?php if($address->provinceid == $v):?>
                   <li><a href="<?php echo Yii::app()->createUrl('adoption/OrphanageTravelGuide', array('id'=>$address->id));?>"><?php echo $address->orphanage_name;?></a></li>
                <?php endif;?>
            <?php endforeach;?>
        <?php endforeach;?>
      </ul>
      
      <ul style="background:none; margin-right:0px;">
        <?php foreach($provinceids_arr[2] as $v):?>
            <li class="title3"><?php echo $province_arr[$v];?></li>
            <?php foreach($orphanage_list as $address):?>
                <?php if($address->provinceid == $v):?>
                   <li><a href="<?php echo Yii::app()->createUrl('adoption/OrphanageTravelGuide', array('id'=>$address->id));?>"><?php echo $address->orphanage_name;?></a></li>
                <?php endif;?>
            <?php endforeach;?>
        <?php endforeach;?>
      </ul>
  </div>
 </div>
</div>