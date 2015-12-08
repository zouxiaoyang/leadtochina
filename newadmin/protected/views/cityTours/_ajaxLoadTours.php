<?php
include_once(SITEROOT.'/config/beijingtours.php');
$destination_name=$destination[$destination_id];

?>
<div id="c05">
             <div class="desc05"><?php if($destination_id==0){ echo $other_beijing_side_tours['description'];}else{ echo $destination_intro[$destination_id]['description'];}?></div>
             <div class="list-side">
                 <div class="pic05"><img width="194" height="152" src="/images/beijingtours/<?php if($destination_id==0){ echo $other_beijing_side_tours['image']; }else{ echo $destination_intro[$destination_id]['image'];}?>" alt="" /></div>
                 <div class="tour-list">
                    <ul>

	                    <?php foreach ((array)$ajaxLoadToursList as $k=>$v):?>
                          <?php 
                            $url=Yii::app()->createUrl('toursPackage/view',array('id'=>$v['id'],'title'=>SiteUtils::stringURLSafe($v['name'])));
                            $price_array=unserialize($v['price_serialize']);                    
                          ?>
	                        <li><p><a href="<?php echo $url;?>"><?php echo $v['name'];?></a> Destinations: <?php echo $v['route'];?></p>
	                            <span>From <b>$<?php echo $price_array[1];?> p/p</b><em style="display:none;">/per person</em></span></li>
	                    <?php endforeach;?>

                    </ul>
                 </div>
             </div>

             <?php if(in_array($destination_id,array(5,12))):?>
             <div class="more5">
              <a href="<?php echo Yii::app()->createUrl('cityTours/best', array('title'=>'beijing-tours','id'=>$destination_id));?>">More <span><?php echo substr($destination_name,0,strpos($destination_name,'Tours'));?></span>Tours</a>
            </div>
         		 <?php endif;?>
          </div>
<?php Yii::app()->end();?>
