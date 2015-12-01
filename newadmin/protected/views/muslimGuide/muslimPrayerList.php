<link rel="stylesheet" type="text/css" href="/travel/css/muslim.css" />
<div id="banner1"><img src="/images/muslim/banner4.jpg" alt="" /></div>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a><a href="<?php echo Yii::app()->createUrl('muslimTour/index')?>">Muslim Tours</a> Prayer Time</div>

<div id="left-muslim">
   <?php $this->renderPartial("/muslimTour/_leftMenu");?>
   <?php //$this->renderPartial('/message/_hotelMessageForm',array('model'=>$message));?>
</div>

<div id="right-muslim">
   <div class="text1">
       <h2 class="align">Prayer Time in China</h2>
       <p><img src="/images/muslim/pic17.jpg" alt="" /></p>
       <p>Ritual prayers, called Salāh or Salāt, must be performed five times a day. Salah is intended to focus the mind on God, and is seen as a personal communication with him that expresses gratitude and worship. Salah is compulsory but flexibility in the specifics is allowed depending on circumstances. The prayers are recited in the Arabic language, and consist of verses from the Qur'an.</p>
       <p>A mosque is a place of worship for Muslims, who often refer to it by its Arabic name, masjid. The word mosque in English refers to all types of buildings dedicated to Islamic worship, although there is a distinction in Arabic between the smaller, privately owned mosque and the larger, "collective" mosque (masjid jāmi`). Although the primary purpose of the mosque is to serve as a place of prayer, it is also important to the Muslim community as a place to meet and study. Modern mosques have evolved greatly from the early designs of the 7th century, and contain a variety of architectural elements such as minarets.</p>
   </div>
   <?php $this->renderPartial('_muslimPrayerTimeCity');?>
</div>