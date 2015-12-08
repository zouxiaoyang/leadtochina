 <?php $provinceList=Province::getAllSortProvince();
 $arrException=array('28','36','37',15,9,26);
 ?>
 <ul>
    <?php foreach ((array)$provinceList as $k=>$v):?>
    <?php if(!in_array($v->id,$arrException)):?>
    <li><a href="<?php echo Yii::app()->createUrl('adoption/homelandprovince', array('id'=>$v->id));?>" <?php if(in_array($v->id, array(21,8,17,35,5,7))):?>style="font-weight:bold;" <?php endif;?>><?php echo $v->name;?> Reunion</a></li>
    <?php endif;?>
    <?php endforeach;?>
</ul>
