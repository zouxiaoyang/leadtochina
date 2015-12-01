<?php
$tours = ToursPackage::getToursByIds($tourids);
?>
<?php foreach($tours as $v):?>
 <ul>
    <li class="pic"><a href="<?php echo $v->url();?>"><img src="/<?php echo $v->filedir;?>/<?php if($v->pic_big) echo $v->pic_big; else echo $v->pic;?>" /></a></li>
    <li <?php if(in_array($v->id, array(149,868,846,849,1060))):?> class="hotul"<?php endif;?>><a href="<?php echo $v->url();?>"><?php echo $v->name;?> <img src="/images/citytours/hot.gif" alt="" /></a> 
        <?php if(substr_count($v->route,',') > 2):?>
             <span><strong>DESTINATIONS:</strong> <?php echo strip_tags($v->route);?></span> 
        <?php else:?>
            <span><strong>DESTINATIONS:</strong> <?php echo SiteUtils::mb_truncate_text($v->attractions, 190);?></span> 
        <?php endif;?>
           
    </li>
 </ul>
<?php endforeach;?>