<link rel="stylesheet" type="text/css" href="/travel/css/muslim.css" />
<div id="banner1"><img src="/images/muslim/banner3.jpg" alt="" /></div>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a><a href="<?php echo Yii::app()->createUrl('muslimTour/index')?>">Muslim Tours</a> Mosques in China</div>

<div id="left-muslim">
   <?php $this->renderPartial("/muslimTour/_leftMenu");?>
   <?php //$this->renderPartial('/message/_hotelMessageForm',array('model'=>$message));?>
</div>

<div id="right-muslim">
   <div class="text1">
       <h2 class="align">Mosques in China</h2>
       <p><img style="float:left;margin-right:10px;width:270px;height:360px;" src="/images/muslim/pic15.jpg" alt="" />Mosque is the place in which Muslims perform religious tasks,carry on Dah' wa(preaching), propagate Islamic culture and hold Islamic education sessions. Since Tang and Song Dynasties, with the spread and development of the Islam in China, Mosques began to appear in places where Chinese Muslims were concentrated. In the very begining, Muslims reached the seacoast areas, and there are four ancient mosques there: The Huaisheng Mosque in Guangzhou, the Qingjing Mosque in Quanzhou, the Xianheng Mosque in Yangzhou and the Fenghuang Mosque in Hangzhou. All these mosques were built during the Tang and Song Dynasties, and are precious heritages of the world famous marine "Silk Road".</p>
       <p>Over 1,300 year ago, a large number of Arabic and Persian businessmen settled in Guangzhou and other places along the seacoast of China. They lived in compat communities, and did business with local people. They stayed there for so long that they did not want to go back. They cultivated the land, married local women and raised children. The next generation formed a special group which believed in Islam. While accepting traditional Chinese culture, they followed the Islamic Shariah and built Islamic communities revolving around mosques. This created the conditions for Islam to spread and develop in China.</p>
       <p>Another route for Islam to spread to the east was the "Silk Road" over land. From the Song Dynasty on the economy and politics achieved tremendous development in China's inland cities, such as Xi'an, Beijing, Kaifeng and Jinan. Because of the need for business development, Muslim began to move inland from the coastal areas. Thus, there are many mosques over 1,000 years old in China, such as the Botou Mosque in Heber province, Qingzhou Mosque in Shandong Province, Dongda Mosque in Jinan City, Shandong province, Taiyuan Mosque in Shanxi Province, Dongsi Mosque in Beijing and Xiguan Mosque in Lnzhou City,Gansu province, Dongguan.</p>
   </div>
	<?php $this->renderPartial('_muslimMosques');?>
</div>