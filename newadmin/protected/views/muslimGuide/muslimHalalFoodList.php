<link rel="stylesheet" type="text/css" href="/travel/css/muslim.css" />
<div id="banner1"><img src="/images/muslim/banner2.jpg" alt="" /></div>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a><a href="<?php echo Yii::app()->createUrl('muslimTour/index')?>">Muslim Tours</a> Halal Food in China</div>

<div id="left-muslim">
   <?php $this->renderPartial("/muslimTour/_leftMenu");?>
   <?php //$this->renderPartial('/message/_hotelMessageForm',array('model'=>$message));?>
</div>

<div id="right-muslim">
   <div class="text1">
       <h2 class="align">Halal Food in China</h2>
       <p>Due to China's multicultural background Muslim cuisine retains its own style and characteristics according to regions. In Beijing there is the well renowned Donglaishun hot pot, Yueshengzhai's spiced beef and mutton is also a must try along with famous snacks such as Tasimi. Lanzhou's Beef Lamian (hand pulled noodles), Xinjiang's lamb kebab and Xi'an's Yangroupaomo are just some of the representative Muslim dishes in China. </p>
       <p><strong>Halal Food in China</strong>Halal Food,Qingzhen Cai (清真菜), has a long history in China. It was brought to China with the arrival of Arabian and Persian merchants during the Tang and Song dynasty. It's easy to find in most major cities in China given the large Muslim population in China, as well as some small cities or towns with small Muslim restaurants and food stalls. Those restaurants are usually run by Muslim migrants, and mutton and lamb are the predominant ingredient. The cooking methods are usually braising, roasting, steaming, stewing and many more.</p>
       <p>Meanwhile, reflected by regional culture and custom, some Muslim restaurants do change a lot it tastes and appearance and create its own style. Wheat food and products are eaten more frequently than rice, and various dishes and snacks are made from wheat flour. Sweet flavors take an important role, probably related to Arabian Muslims' preference for a sweet taste. Beef and mutton are also widely eaten. Donglaishun Hotpot, Yueshengzhai's spiced beef and mutton in Beijing, Lanzhou's Beef Lamian (hand pulled noodles), Xinjiang's lamb kebab and Xi'an's Yangroupaomo are must try Muslim dishes in China.</p>
   </div>
   <?php $this->renderPartial('_muslimHalalFood');?>
   
</div>