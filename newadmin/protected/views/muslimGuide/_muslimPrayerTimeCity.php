<div class="food">
    <h2>China Muslim Prayer Times Guide</h2>
    <ul style="width:100%;">
       <?php foreach (MuslimPrayerTime::$prayerTimeCities as $v):?>
       <li style="float:left;width:200px;"><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimPrayerTimeView', array('title'=>strtolower($v)));?>">Prayer Time in <?php echo $v;?></a></li>
	   <?php endforeach;?>
    </ul>      
</div>
