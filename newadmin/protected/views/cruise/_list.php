 <?php $sailling_city = (int)$_GET['sailling_city']; 
 $price_serialize = unserialize($data->price_serialize);
 ?>
 <ul>
    <li class="pic"><a href="<?php echo $data->getUrl();?>"><img src="<?php echo ImageUtils::getThumbnail(Cruise::UPLOAD_PATH.$data->ufile, '190x105');?>" alt="<?php echo $data->cruise_name;?>" /></a></li>
    <li>
       <ol>
           <li class="name"><a href="<?php echo $data->getUrl();?>"><?php echo $data->cruise_name;?></a><span class="star<?php echo $data->cruise_grade;?>"></span></li>
           <li>
              <?php if(strpos($_GET['sailling_city'], 'up')):?>
                Route: <?php echo Cruise::$upCityDays[$sailling_city];?> <?php echo Cruise::$upCityArr[$sailling_city];?>
              <?php elseif(strpos($_GET['sailling_city'], 'down')):?>
                 Route: <?php echo Cruise::$downCityDays[$sailling_city];?> <?php echo Cruise::$downCityArr[$sailling_city];?>
               <?php else:?>
                Route: <?php echo $price_serialize[1] . ' days ' . $price_serialize[2] ;?>, <?php echo $price_serialize[6] . ' days ' . $price_serialize[7] ;?>
              <?php endif;?>
            </li>
            <li class="price">Price: <span><?php echo $data->downlowprice;//echo SiteUtils::getCurrencyPrice($data->downlowprice);?></span>
           <li class="date1">
               <strong>Date:</strong>
               <?php echo $data->getCruiseSailling();?>
           </li>
       </ol>
    </li>

    <!--<li class="price">Price: <span><?php echo SiteUtils::getCurrencyPrice($data->downlowprice);?></span> <a href="<?php echo $data->getUrl();?>#orderForm"><img src="/images/yangtze/book.png" alt="" /></a> --></li>
</ul>
