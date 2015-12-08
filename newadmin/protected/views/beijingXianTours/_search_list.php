<?php
  $tour_subtag_ids = array();
  if($data->tour_subtag_ids){
    $tour_subtag_ids = explode(',', $data->tour_subtag_ids);
  }
  $themes_sub_tags = ToursPackageTag::getThemeSubTag();
?>
<ul>
   <li class="pic"><a href="<?php echo $data->url();?>"><img src="/<?php echo $data->filedir;?>/thumb/thumb_<?php echo $data->pic;?>" /></a></li>
   <li>
     <ol>
        <li><a href="<?php echo $data->url();?>"><?php echo $data->name;?></a></li>
        <li class="desc"><strong>Destination:</strong><span><?php echo $data->route;?></span><br />
            <strong>Included:</strong>  <?php echo strip_tags($data->tour_intro);?><br>
            <strong>Highlights</strong>:<?php $tag_arr = array(); foreach($tour_subtag_ids as $k=>$tag):?>
              <?php if($themes_sub_tags[$tag]) $tag_arr[] = $themes_sub_tags[$tag];?>
              <?php endforeach;?>
              <?php if($tag_arr) echo implode(',', $tag_arr);?>
        </li>
     </ol>
   </li>
   <li class="picright">
       <span>[Reviews <a href="<?php echo $data->url();?>"><?php echo $data->reviews;?></a>]</span>
       <span>From <strong><?php echo SiteUtils::getCurrencyPrice($data->price);?></strong></span>
       <a class="details" href="<?php echo $data->url();?>"><img src="/images/beijing_shanghai/itinerary.png" alt="" /></a>
   </li>
</ul>