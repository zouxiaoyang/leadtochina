<?php if($tours):?>
  <?php foreach($tours as $v):?>
  <ul>
      <li class="pic"><a href="/<?php echo $v->url();?>"><img src="/<?php echo $v->filedir.$v->pic;?>" style="width:213px;height:137px" /></a></li>
      <li class="name"><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
      <li><?php echo $v->route;?></li>
      <li><span><?php echo SiteUtils::getCurrencyPrice($v->price_yuan);?></span><h2><?php echo SiteUtils::getCurrencyPrice($v->price);?></h2><a href="#"><img src="/images/promotion/inquiry.png" alt="" /></a></li>
      <li><strong>Highlights:<?php echo SiteUtils::mb_truncate_text($v->recommand_reason, 165);?></strong> 

      </li>
  </ul>
  <?php endforeach;?>
<?php endif;?>