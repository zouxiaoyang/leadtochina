<ul>
  <li class="pic">
    <a href="<?php echo $data->url();?>">
      <img style="width:213px;height:266px;" src="/images/grey.gif" data-original="/<?php echo $data->filedir;?>/<?php  if($data->pic_big) echo $data->pic_big; else echo $data->pic;?>" />
    </a>
    <ol <?php if($index==0):?> style="display:block;"<?php endif;?>>
    
       <li><strong>DURATION:</strong>
         <?php if($data->days== 1):?>
             <?php echo $data->days;?> Day
         <?php elseif($data->is_half_day):?>
             Half Day
         <?php else:?>
             <?php echo $data->days;?> Days
         <?php endif;?>
       </li>
       
       <?php if(strpos($data->route,',')):?><li><strong>DESTINATION:</strong> <?php echo $data->route;?></li><?php endif;?>
       <li><strong>PRICE:</strong> From <b class="tour_price"><?php echo SiteUtils::getCurrencyPrice($data->price);?></b> p/p</li>
       <?php if(strpos($data->route,',')):?>
         <li><strong>PRICE INCLUDE:</strong> <?php echo strip_tags($data->tour_intro);?></li>
       <?php else:?>
         <li><strong>ATTRACTIONS:</strong> <?php echo strip_tags($data->attractions);?></li>
       <?php endif?>
    </ol>
  </li>
  <li class="name" style="min-height:43px;"><a href="<?php echo $data->url();?>" class="tour_title"><?php echo $data->name;?></a></li>
  <li class="button1">
    <a href="<?php echo $data->url();?>"><img src="/images/chinatours/enquiry.png" alt="" /></a> 
    <span onclick="_comparison.add_tour(this, <?php echo $data->id;?>)"><img src="/images/chinatours/join.png" /></span>
  </li>
</ul>
