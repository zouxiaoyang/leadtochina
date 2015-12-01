<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinaGuide.css'); 
$cityGuide=array(
	'Beijing'=>"Beijing, the capital city of our great country with a great population of 22 million and covering an area of 1,641,054 sq kilometers, is the center of China's polity, culture, economy. Here is the heart of our country. So thousands of prominent people come here and devote themselves to this historical city.",
	'Xian'=>"As one of the four capitals of ancient civilizations in the world, Xi’an is a world-famous historical and cultural city and one of the biggest core cities in the Chinese portion of the Eurasian Land Bridge. It is located in the center of China’s geographical position, served as the provincial capital of Shaanxi Province; for more it is a bridgehead for Western Development.",
	'Shanghai'=>"Shanghai is a municipality under the direct jurisdiction of the Central Government. It is washed by the East China Sea on the east and Hangzhou Bay on the south. Shanghai is the largest city of China, and also an international metropolis serving as the most influential economic, financial, international trade, cultural, science and technology center in East China.",
	'Hongkong'=>'Hong Kong often called the "Oriental Pearl", is located on the southeast coastline of China, it is to the east of the mouth of Pearl River. Hong Kong consists of Hong Kong Island, Kowloon, The New Territories and a group of 263 islands. Hong Kong has developed into a very modern society and become a world-class monetary, trading and business city.',
	'Guilin'=>"Guilin is a world famous scenic city. Its breathless natural beauty and profound cultural foundation attract many famous people and great poets come to this holly world. Here you can feel a strong natural and cultural ambience. Li River is Guilin’s most scenic area, it was selected by National Geographic Magazine as one of the world’s top ten watery wonders.",
	'Chengdu'=>'Chengdu, which has a history of 2300 years and a population of 10 million, is one of the famous historical and cultural cities in China. Well known precious and enchanted giant pandas, the long-standing Shu Civilization and special folk custom in Chengdu are all the gifts of these abundant fertilized grounds.',
);
$cityIds = array(
  'Beijing' => 11,
  'Xian' => 180,
  'Shanghai' => 14,
  'Hongkong' => 172,
  'Guilin' => 22,
  'Chengdu' => 82
);
?>
<style type="text/css">
<!--
#content{ width:961px; height:auto; padding:0px;}
-->
</style>
<div id="menu-guide"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('chinaGuide/index');?>">China Guide</a> City Guide</div>
<div class="clear"></div>
<!--  guide start  -->
<div id="guide">
    <!--  guide-left start  -->
    <div id="guide-left">
       <!--  text start  -->
       <div class="text">
          <h2>China City Guide</h2>
          <p>With the area of 9.6 million square kilometers, 56 ethnic group and over 5000 years history, China present a differenct culture, attractions and scenery to the world tourists.To make a better China travel guide, we collect huge information of China City Guide, China Attractions, Maps, Culture and others tips for you. Tell you things to do in China including travel, accomadation, travel, shopping, transportation and eating.If you miss something important, be free to tell us and we will give you more details about China tour guide.</p>
       </div>
       <!--  text end  -->
       <div class="clear"></div>
       <div class="city-menu">
         <ul>
            <li class="dq"><a href="/travel/china-guide/beijing-city-guide"><img src="/images/chinaGuide/pic5.jpg" alt="" /> <span>Beijing</span></a></li>
            <li><a href="/travel/china-guide/xian-city-guide"><img src="/images/chinaGuide/pic6.jpg" alt="" /> <span>Xi'an</span></a></li>
            <li><a href="/travel/china-guide/shanghai-city-guide"><img src="/images/chinaGuide/pic7.jpg" alt="" /> <span>Shanghai</span></a></li>
            <li><a href="/travel/china-guide/hongkong-city-guide"><img src="/images/chinaGuide/pic8.jpg" alt="" /> <span>Hongkong</span></a></li>
            <li><a href="/travel/china-guide/guilin-city-guide"><img src="/images/chinaGuide/pic9.jpg" alt="" /> <span>Guilin</span></a></li>
            <li><a href="/travel/china-guide/chengdu-city-guide"><img src="/images/chinaGuide/pic10.jpg" alt="" /> <span>Chengdu</span></a></li>
         </ul>
       </div>
       <?php foreach ($cityGuide as $k=>$v):?>
       <div class="city1" <?php if($k!='Beijing'):?>style="display:none;"<?php endif;?>>
       	<div class="city1-left"><a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>strtolower($k)));?>">
          <img src="/images/chinaGuide/cityGuide_<?php echo $k;?>.jpg" alt="" width="223" height="207" /></a>
        </div>
          <div class="city1-right">
             <h2><?php echo $k;?> City Guide</h2>
             <span><?php echo $v;?>
<a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>strtolower($k)));?>">Details</a></span>
             <ul>
                <li><a href="<?php echo Yii::app()->createUrl('cityTours/list',array('title'=>SiteUtils::stringURLSafe($k.' tours')));?>"><?php echo $k;?> Tours</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/cityAttraction',array('cityname'=>SiteUtils::stringURLSafe($k)));?>"><?php echo $k;?> Attractions</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($k),'title'=>'transportations','catid'=>'264'));?>"><?php echo $k;?> Transportation</a></li>
                <li style="display:none"><a href="<?php echo Yii::app()->createUrl('hotel/list',array('cityname'=>strtolower($k),'hotelid'=>$cityIds[$k]));?>"><?php echo $k;?> Hotel</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($k),'title'=>'climate','catid'=>'266'));?>"><?php echo $k;?> Climate</a></li>
                <li><a href="/<?php echo strtolower($k);?>/map.html"><?php echo $k;?> Maps</a></li>
             </ul>
          </div>
       </div>
       <?php endforeach;?>       
    
       <div class="destinations" id="destcity">
          <h2>China Destinations Guide</h2>
          <div class="leftters">
             <ul class="two">             
                <li class="big"><span>A</span></li>
                <li>1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'anyang'));?>">Anyang</a></li>
                <li class="big"><span>B</span></li>
                <li class="hot">1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'beijing'));?>">Beijing</a></li>
                <li>2. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'beihai'));?>">Beihai</a></li>
                <li>3. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'baotou'));?>">Baotou</a></li>
                <li class="big"><span>C</span></li>
                <li>1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'chengdu'));?>">Chengdu</a></li>
                <li>2. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'chongqing'));?>">Chongqing</a></li>
                <li>3. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'changchun'));?>">Changchun</a></li>
                <li>4. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'changsha'));?>">Changsha</a></li>
                <li>5. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'chengde'));?>">Chengde</a></li>
                <li>6. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'chaozhou'));?>">Chaozhou</a></li>
                <li class="big"><span>D</span></li>
                <li>1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'dalian'));?>">Dalian</a></li>
                <li>2. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'dali'));?>">Dali</a></li>
                <li>3. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'datong'));?>">Datong</a></li>
                <li>4. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'dengfeng'));?>">Dengfeng</a></li>
                <li>5. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'dunhuang'));?>">Dunhuang</a></li>
                <li class="big"><span>E</span></li>
                <li>1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'erdos'));?>">Erdos</a></li>
                <li class="big"><span>F</span></li>
                <li>1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'foshan'));?>">Foshan</a></li>
                <li>2. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'fuzhou'));?>">Fuzhou</a></li>
                <li class="big"><span>G</span></li>
                <li>1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'guangzhou'));?>">Guangzhou</a></li>
                <li class="hot">2. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'guilin'));?>">Guilin</a></li>
                <li>3. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'guiyang'));?>">Guiyang</a></li>
             </ul>
             <ul>
                <li class="big"><span>H</span></li>
                <li>1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'haikou'));?>">Haikou</a></li>
                <li class="hot">2. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'hangzhou'));?>">Hangzhou</a></li>
                <li class="hot">3. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'harbin'));?>">Harbin</a></li>
                <li>4. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'hefei'));?>">Hefei</a></li>
                <li class="hot">5. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'huangshan'));?>">Huangshan</a></li>
                <li>6. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'hohhot'));?>">Hohhot</a></li>
                <li class="hot">7. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'hongkong'));?>">Hongkong</a></li>
                <li>8. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'handan'));?>">Handan</a></li>
                <li>9. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'hezhou'));?>">Hezhou</a></li>
                <li class="big"><span>J</span></li>
                <li class="hot">1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'jiuzhaigou'));?>">Jiuzhaigou</a></li>
                <li>2. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'jinan'));?>">Jinan</a></li>
                <li>3. <a href="/jilin/">Jilin</a></li>
                <li>4. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'jiuquan'));?>">Jiuquan</a></li>
                <li class="big"><span>K</span></li>
                <li class="hot">1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'kunming'));?>">Kunming</a></li>
                <li>2. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'kaifeng'));?>">Kaifeng</a></li>
                <li>3. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'kaili'));?>">Kaili</a></li>
                <li class="hot">4. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'kashgar'));?>">Kashgar</a></li>
                <li class="big"><span>L</span></li>
                <li class="hot">1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'lhasa'));?>">Lhasa</a></li>
                <li>2. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'lijiang'));?>">Lijiang</a></li>
                <li class="hot">3. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'luoyang'));?>">Luoyang</a></li>
                <li>4. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'lanzhou'));?>">Lanzhou</a></li>
                <li>5. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'liuzhou'));?>">Liuzhou</a></li>
             </ul>
             <ul class="three">
                <li class="big"><span>M</span></li>
                <li>1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'macau'));?>">Macau</a></li>
                <li class="big"><span>N</span></li>
                <li>1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'nanchang'));?>">Nanchang</a></li>
                <li>2. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'nanjing'));?>">Nanjing</a></li>
                <li>3. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'nanning'));?>">Nanning</a></li>
                <li class="big"><span>P</span></li>
                <li class="hot">1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'pingyao'));?>">Pingyao</a></li>
                <li class="big"><span>Q</span></li>
                <li>1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'qingdao'));?>">Qingdao</a></li>
                <li>2. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'quanzhou'));?>">Quanzhou</a></li>
                <li class="big"><span>S</span></li>
                <li>1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'sanya'));?>">Sanya</a></li>
                <li class="hot">2. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'shanghai'));?>">Shanghai</a></li>
                <li>3. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'suzhou'));?>">Suzhou</a></li>
                <li>4. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'shijiazhuang'));?>">Shijiazhuang</a></li>
                <li>5. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'shenyang'));?>">Shenyang</a></li>
                <li>6. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'shenzhen'));?>">Shenzhen</a></li>
                <li>7. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'sanjiang'));?>">Sanjiang</a></li>
                <li class="big"><span>T</span></li>
                <li class="hot">1. <a href="/tibet/">Tibet</a></li>
                <li>2. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'taiyuan'));?>">Taiyuan</a></li>
                <li>3. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'tianjin'));?>">Tianjin</a></li>
                <li>4. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'tianshui'));?>">Tianshui</a></li>
                <li>5. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'taipei'));?>">Taipei</a></li>
                <li>6. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'turpan'));?>">Turpan</a></li>
                <li>7. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'taian'));?>">Taian</a></li>
             </ul>
             <ul class="three">
                <li class="big"><span>U</span></li>
                <li>1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'urumqi'));?>">Urumqi</a></li>
                <li class="big"><span>W</span></li>
                <li>1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'wuhan'));?>">Wuhan</a></li>
                <li>2. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'wuxi'));?>">Wuxi</a></li>
                <li class="hot">3. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'wuzhen'));?>">Wuzhen</a></li>
                <li>4. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'weifang'));?>">Weifang</a></li>
                <li>5. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'weihai'));?>">Weihai</a></li>
                <li class="big"><span>X</span></li>
                <li class="hot">1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'xian'));?>">Xi'an</a></li>
                <li>2. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'xiamen'));?>">Xiamen</a></li>
                <li>3. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'xining'));?>">Xining</a></li>
                <li class="big"><span>Y</span></li>
                <li class="hot">1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'yangshuo'));?>">Yangshuo</a></li>
                <li>2. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'yinchuan'));?>">Yinchuan</a></li>
                <li>3. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'yangzhou'));?>">Yangzhou</a></li>
                <li>5. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'yiwu'));?>">Yiwu</a></li>
                <li>6. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'yantai'));?>">Yantai</a></li>
                <li class="big"><span>Z</span></li>
                <li>1. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'zhangjiajie'));?>">Zhangjiajie</a></li>
                <li>2. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'zhengzhou'));?>">Zhengzhou</a></li>
                <li>3. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'zunyi'));?>">Zunyi</a></li>
                <li>4. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'zhaoxing'));?>">Zhaoxing</a></li>
                <li>5. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'zhuhai'));?>">Zhuhai</a></li>
                <li>6. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'zhaoqing'));?>">Zhaoqing</a></li>
                <li>7. <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>'zhenjiang'));?>">Zhenjiang</a></li>
             </ul>
          </div>
       </div>
       <div class="city-maps" id="citymaps">
          <h2>China City Maps</h2>
          <div id="map">
             <h3 class="mapl" style="margin: 165px 0px 0px 396px;"><a style="font-weight: bold; color: /beijing/map.htmlff0000" href="/beijing/map.html">Beijing</a></h3>
             <h3 class="mapl" style="margin: 110px 0px 0px 465px"><a href="/changchun/map.html">Changchun</a></h3>
             <h3 class="mapr" style="margin: 283px 0px 0px 225px"><a href="/chengdu/map.html">Chengdu</a></h3>
             <h3 class="mapr" style="margin: 300px 0px 0px 245px"><a href="/chongqing/map.html">Chongqing</a></h3>
             <h3 class="mapl" style="margin: 158px 0px 0px 448px"><a href="/dalian/map.html">Dalian</a></h3>
             <h3 class="mapl" style="margin: 370px 0px 0px 390px"><a href="/guangzhou/map.html">Guangzhou</a></h3>
             <h3 class="mapl" style="margin: 338px 0px 0px 305px"><a href="/guiyang/map.html">Guiyang</a></h3>
             <h3 class="mapl" style="margin: 296px 0px 0px 445px"><a href="/hangzhou/map.html">Hangzhou</a></h3>
             <h3 class="mapr" style="margin: 225px 0px 0px 232px"><a href="/lanzhou/map.html">Lanzhou</a></h3>
             <h3 class="mapr" style="Z-INDEX: 100; margin: 250px 0px 0px 312px"><a href="/luoyang/map.html">Luoyang</a></h3>
             <h3 class="mapl" style="margin: 317px 0px 0px 360px"><a href="/changsha/map.html">Changsha</a></h3>
             <h3 class="mapl" style="margin: 255px 0px 0px 430px"><a href="/nanjing/map.html">Nanjing</a></h3>
             <h3 class="mapl" style="margin: 214px 0px 0px 427px"><a href="/qingdao/map.html">Qingdao</a></h3>
             <h3 class="mapl" style="margin: 280px 0px 0px 458px"><a style="font-weight: bold; color: /beijing/map.htmlff0000" href="/shangshai/map.html">Shangshai</a></h3>
             <h3 class="mapl" style="margin: 142px 0px 0px 445px"><a href="/shenyang/map.html">Shenyang</a></h3>
             <h3 class="mapl" style="margin: 115px 0px 0px 145px"><a href="/urumqi/map.html">Urumqi</a></h3>
             <h3 class="mapr" style="margin: 272px 0px 0px 327px;"><a href="/wuhan/map.html">Wuhan</a></h3>
             <h3 class="mapr" style="margin: 238px 0px 0px 305px"><a href="/xian/map.html">Xi'an</a></h3>
             <h3 class="mapl" style="margin: 353px 0px 0px 424px"><a href="/xiamen/map.html">Xiamen</a></h3>
             
             
             <h3 class="mapr" style="margin: 165px 0px 0px 305px"><a href="/hohhot/map.html">Hohhot</a></h3>
             <h3 class="mapr" style="margin: 165px 0px 0px 135px"><a href="/dunhuang/map.html">Dunhuang</a></h3>
			       <h3 class="mapr" style="margin: 340px 0px 0px 390px"><a href="/fuzhou/map.html">Fuzhou</a></h3> 
             <h3 class="mapr" style="margin: 350px 0px 0px 310px"><a href="/guilin/map.html">Guilin</a></h3>
             <h3 class="mapr" style="margin: 362px 0px 0px 225px"><a href="/kunming/map.html">Kunming</a></h3>
             <h3 class="mapr" style="margin: 195px 0px 0px 310px"><a href="/taiyuan/map.html">Taiyuan</a></h3>
             <h3 class="mapl" style="margin: 178px 0px 0px 405px; z-index:4;"><a href="/tianjin/map.html">Tianjin</a></h3>
             <h3 class="mapr" style="margin: 80px 0px 0px 460px"><a href="/harbin/map.html">Harbin</a></h3>
             <h3 class="mapr" style="margin: 283px 0px 0px 360px;"><a href="/huangshan/map.html">Huangshan</a></h3>
             <h3 class="mapr" style="margin: 380px 0px 0px 340px"><a href="/hongkong/map.html">Hongkong</a></h3>
             <h3 class="mapr" style="margin: 255px 0px 0px 207px"><a href="/jiuzhaigou/map.html">Jiuzhaigou</a></h3>
             <h3 class="mapl" style="margin: 235px 0px 0px 375px"><a href="/kaifeng/map.html">Kaifeng</a></h3>
             <h3 class="mapl" style="margin: 155px 0px 0px 35px"><a href="/kashgar/map.html">Kashgar</a></h3>
             <h3 class="mapr" style="margin: 290px 0px 0px 150px"><a href="/lhasa/map.html">Lhasa</a></h3>
             <h3 class="mapr" style="margin: 330px 0px 0px 210px"><a href="/lijiang/map.html">Lijiang</a></h3>
             <h3 class="mapl" style="margin: 390px 0px 0px 370px"><a href="/macau/map.html">Macau</a></h3>
             <h3 class="mapr" style="margin: 210px 0px 0px 310px"><a href="/pingyao/map.html">Pingyao</a></h3>
             <h3 class="mapl" style="margin: 430px 0px 0px 335px"><a href="/sanya/map.html">Sanya</a></h3>
             <h3 class="mapr" style="margin: 290px 0px 0px 410px"><a href="/wuzhen/map.html">Wuzhen</a></h3>
             <h3 class="mapr" style="margin: 213px 0px 0px 215px"><a href="/xining/map.html">Xining</a></h3>
             <h3 class="mapl" style="margin: 360px 0px 0px 340px"><a href="/yangshuo/map.html">Yangshuo</a></h3>
          </div>
       </div>
       <div class="china-tours"><a href="/tour/2014-china-tours/"><img src="/images/chinaGuide/tours.jpg" alt="" /></a></div>
    </div>
    <!--  guide-left end  -->
    
    <!--  guide-right start  -->
    <div id="guide-right">
        <!--  right1 start  -->
        <div class="right1">
          <?php $this->renderPartial('/common/chinaTravelGuide');?>
        </div>
        <!--  right1 end  -->
        <div class="rightbottom"></div>
        <!--  right1 start  -->
        <div class="right1" style="margin-top:25px;">
          <h2>China City Tours</h2>
          <ul style=" background:#f8f8f8;">
             <li class="desc">Looking for leisure city tours during your stay in China? Check our remarkable  selection of city tours.</li>
             <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'beijing-tours'));?>">Beijing Tours</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'shanghai-tours'));?>">Shanghai Tours</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'xian-tours'));?>">Xian Tours</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'guilin-tours'));?>">Guilin Tours</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'hangzhou-tours'));?>">Hangzhou Tours</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'hong-kong-tours'));?>">Hong Kong Tours</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'lhasa-tours'));?>">Lhasa Tours</a></li>
          </ul>
        </div>
        <!--  right1 end  -->
        <div class="rightbottom"></div>
        <div class="right4">
            <?php echo $this->renderPartial('/common/customizeTour');?>
        </div>
    </div>
    <!--  guide-right end  -->
</div>
<!--  guide end  -->
<script>
	$('.city-menu ul li').hover(function(){
			$('.city-menu ul li').removeClass('dq');
			$(this).attr('class','dq');
			var index_city=$('.city-menu ul li').index(this);
			$('.city1').hide();
			$('.city1').eq(index_city).show();
		});
</script>
