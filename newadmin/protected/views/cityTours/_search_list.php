<?php
$tour_subtag_ids = array();
if($data->tour_subtag_ids){
  $tour_subtag_ids = explode(',', $data->tour_subtag_ids);
}
$themes_sub_tags = ToursPackageTag::getThemeSubTag();
?>
<ul>
   <li class="pic"><a href="<?php echo $data->url();?>"><img src="/<?php echo $data->filedir;?>/<?php echo $data->pic;?>" /></a></li>
   <li>
     <ol>
        <li><a href="<?php echo $data->url();?>"><?php echo $data->name;?></a></li>
        <li class="picleft">Destination: <?php echo $data->route;?><br />
            <span style="display:none">Included:  <?php echo strip_tags($data->tour_intro);?><br></span>
            Highlights: <?php echo SiteUtils::mb_truncate_text($data->attractions,170);?>
        </li>
        <li class="picright">
           <span>[Reviews <a href="<?php echo $data->url();?>"><?php echo $data->reviews;?></a>]</span>
           <span>From <strong><?php echo SiteUtils::getCurrencyPrice($data->price);?></strong></span>
           <a style="display:none" class="details" href="<?php echo $data->url();?>">Itinerary Details</a>
           <a href="<?php echo $data->url();?>" class="details"><img src="/images/beijingtours/new/inquiry.png" alt="" /></a>
       </li>
     </ol>
   </li>
</ul>