<div class="list">
      <h2><?php echo $cityName;?> City Guide</h2>
      <ul>
          <li class="facts"><a href="/<?php echo trim(strtolower($cityName));?>/facts.html"><?php echo $cityName;?> Facts</a></li>
          <li class="attractions"><a href="/<?php echo trim(strtolower($cityName));?>/attractions.html"><?php echo $cityName;?> Attractions</a></li>
          <li class="shopping"><a href="/<?php echo trim(strtolower($cityName));?>/shopping.html"><?php echo $cityName;?> Shopping</a></li>
          <li class="nightlife"><a href="/<?php echo trim(strtolower($cityName));?>/nightlife.html"><?php echo $cityName;?> Nightlife</a></li>
          <li class="tours"><a href="/<?php echo trim(strtolower($cityName));?>/tours/"><?php echo $cityName;?> Tours</a></li>
          <li class="restaurants"><a href="/<?php echo trim(strtolower($cityName));?>/food-&-restaurants.html"><?php echo $cityName;?> Food &amp; Restaurants</a></li>
          <li class="tips"><a href="/<?php echo trim(strtolower($cityName));?>/travel-tips.html"><?php echo $cityName;?> Travel Tips</a></li>
          <li class="climate"><a href="/<?php echo trim(strtolower($cityName));?>/climate.html"><?php echo $cityName;?> Climate</a></li>
          <li class="transportations"><a href="/<?php echo trim(strtolower($cityName));?>/transportations.html"><?php echo $cityName;?> Transportations</a></li>
          <li class="hotel1"><a href="<?php echo Yii::app()->createUrl('hotel/search',array('city'=>$cityName));?>"><?php echo $cityName;?> Hotel</a></li>
      </ul>
   </div>
   <div class="list-bottom"><img src="/images/hotel/bottombg.jpg" alt="" /></div>

   <div class="list1">
      <h2><?php echo $cityName;?> City Attractions</h2>
      <ul>
          <?php foreach ($sceneryList as $k=>$v):?>
          <li><a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><?php echo substr($v['name'],0,25);?>...</a></li>
          <?php endforeach;?>
      </ul>
   </div>
