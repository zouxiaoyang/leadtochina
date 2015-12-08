<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinaGuide.css'); ?>
<script type="text/javascript" src="/travel/js/myfocus-2.0.1.min.js"></script>
<style type="text/css">
<!--
#content{ width:961px; height:auto; padding:0px;}
#myFocus{ width:648px; height:284px;}
-->
</style>
<script type="text/javascript">
myFocus.set({
	id:'myFocus',//ID
	pattern:'mF_sohusports'
});
</script>
<div id="menu-guide"><strong>You are here:</strong> <a href="/">Home</a> China Guide</div>
<div class="clear"></div>
<!--  guide start  -->
<div id="guide">
    <!--  guide-left start  -->
    <div id="guide-left">
       <div id="banner1">
            <div id="myFocus">
               <div class="pic"><!--ͼƬ�б�-->
  	             <ul>
                      <li><a href="#1"><img src="/images/chinaGuide/banner1.jpg" thumb="" alt="Tibet is Ready to Re-open to Foreign Tourists" text="Tibet is ready to re-open to foreign tourists without group size and nationality limitations since this April 1st. So no matter you are joining private tours or groups tours, you can stroll along the world roof." /></a></li> 
                      <li><a href="#2"><img src="/images/chinaGuide/banner2.jpg" thumb="" alt="The Third Beijing International Film Festival held" text="The third Beijing International Film Festival will be held at the China National Convention Center in Beijing starting from April 16th to 23rd.Over 500 films have been signed up for the awards section, and 17 of which will be shortlisted. The shortlist will be announced by the end of next month." /></a></li>
                      <li><a href="#3"><img src="/images/chinaGuide/banner3.jpg" thumb="" alt="Guangzhou Becomes the 3rd 72- hour Visa-free City in China" text="After Beijing and Shanghai to allow foreign visitors to transit for 72 hours without a visa, Guangzhou is expected to become the third city in China. After the policy is applied, tourists would be able to travel to sites around the Pearl River Delta Region within 72 hours." /></a></li>
                      <li><a href="#4"><img src="/images/chinaGuide/banner4.jpg" thumb="" alt="Beautiful Morning Landscape in Hongcun" text="The photo shows the morning scenery of local residences in Hongcun of Huangshan City, east China's Anhui Province." /></a></li>
  	</ul>
  </div>
</div>
       </div>
       <!--  text start  -->
       <div class="text">
          <h2><a href="<?php echo Yii::app()->createUrl('chinaGuide/cityGuide');?>">China City Guide</a></h2>
           <form name="searchcity" id="searchcity" action="/index.php?option=com_searchcity&Itemid=180" method="post">
          <p>With the area of 9.6 million square kilometers, 56 ethnic group and over 5000 years history, China present a differenct culture, attractions and scenery to the world tourists.To make a better China travel guide, we collect huge information of China City Guide, China Attractions, Maps, Culture and others tips for you. Tell you things to do in China including travel, accomadation, travel, shopping, transportation and eating.If you miss something important, be free to tell us and we will give you more details about China tour guide. 
          <input name="cityname" id="searchContent" type="text" value="Province/City/Region/Attraction" />
          <span style=" width:24px; height:20px; vertical-align:top"><img id="submitSearch" src="/images/chinaGuide/go.png" alt="" /></span>
          </p>
          </form>
       </div>
       <!--  text end  -->
       
       <!--  city-guide start  -->
       <div class="city-guide">
          <!--  city-left start  -->
          <div class="city-left">
              <ul>
              	<?php foreach ($guideCity['picGuideCity'] as $v):?>
              	<?php $url=Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>SiteUtils::stringURLSafe($v)));?>
                  <li><a href="<?php echo $url;?>"><img src="/images/chinaGuide/<?php echo strtolower($v);?>.jpg" alt="<?php echo $v;?> Guide" title="<?php echo $v;?> Guide"/></a> <a href="<?php echo $url;?>"><?php if($v=='Xian')echo 'Xi\'an';else echo $v;?></a></li>
                <?php endforeach;?>
              </ul>
          </div>
          <!--  city-left end  -->
          
          <!--  other-city start  -->
          <div class="other-city">
             <h2>Other City Guide</h2>
             <ul>
             	<?php foreach ($guideCity['otherGuideCity'] as $v):?>
              	<?php $url=Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>SiteUtils::stringURLSafe($v)));?>
                <li><a href="<?php echo $url;?>"><?php echo $v;?></a></li>
              <?php endforeach;?>
                <li class="more"><a href="<?php echo Yii::app()->createUrl('chinaGuide/cityGuide');?>#destcity">More</a></li>
             </ul>
          </div>
          <!--  other-city end  -->
       </div>
       <!--  city-guide end  -->
       <div class="clear"></div>
       <!--  culture start  -->
       <div class="culture">
         <div class="culture-top"></div>
         <!--  culture-cont start  -->
         <div class="culture-cont">
           <div class="culture-left">
               <h2><a href="/travel/china-guide/culture">Chinese Culture</a></h2>
               <ul>
                  <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureList',array('cultureid'=>607,'title'=>'arts'));?>">Arts</a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureList',array('cultureid'=>608,'title'=>'traditions'));?>">Traditions</a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureList',array('cultureid'=>610,'title'=>'history'));?>">History</a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureList',array('cultureid'=>609,'title'=>'food'));?>">Food and Health</a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureList',array('cultureid'=>612,'title'=>'chinese-literature'));?>">Chinese Literature</a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureList',array('cultureid'=>611,'title'=>'architecture'));?>">Architecture</a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureList',array('cultureid'=>699,'title'=>'chinese-language'));?>">Chinese Language</a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureList',array('cultureid'=>700,'title'=>'chinese-religions'));?>">Chinese Religions</a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureList',array('cultureid'=>701,'title'=>'china-ethnic-groups'));?>">China Ethnic Groups</a></li>
               </ul>
           </div>
           <div class="culture-right"><img src="/images/chinaGuide/culture.jpg" alt="" /></div>
         </div>
         <!--  culture-cont end  -->
         <div class="culture-bottom"></div>
       </div>
       <!--  culture end  -->
       <div class="clear"></div>
       <div class="travel">
           <div class="tips">
               <h2><a href="/china-guide/travel-tips/">China Travel Tips</a></h2>
               <ul>
               	<?php foreach ($travelTips as $v):?>
                  <!-- <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/articleView',array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>"><?php echo $v->title;?></a></li> -->
                  <li><a href="/travel-tips/<?php echo SiteUtils::stringURLSafe($v->title);?>.html"><?php echo $v->title;?></a></li>
             		<?php endforeach;?>
               </ul>
           </div>
           <div class="tools">
               <h2><a href="/china-guide/travel-tools/">China Travel Tools</a></h2>
               <ul>           
                <?php foreach ($travelTools as $v):?>
                  <!-- <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/articleView',array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>"><?php echo $v->title;?></a></li> -->
                  <li><a href="/travel-tools/<?php echo SiteUtils::stringURLSafe($v->title);?>.html"><?php echo $v->title;?></a></li>
             		<?php endforeach;?>
               </ul>
           </div>
       </div>
       <div class="clear"></div>
       <div class="lastcon">
          <ul>
             <li><a href="/tour/best-china-tours/"><img src="/images/chinaGuide/pic1.jpg" alt="" /> <span>Top 10 China Tours</span></a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?theme=8"><img src="/images/chinaGuide/pic2.jpg" alt="" /> <span>Minority Discovery</span></a></li>
             <li style="margin-right:0px;"><a href="<?php echo Yii::app()->createUrl('muslimTour/index');?>"><img src="/images/chinaGuide/pic3.jpg" alt="" /> <span>China Muslim Tours</span></a></li>
          </ul>
       </div>
    </div>
    <!--  guide-left end  -->
    
    <!--  guide-right start  -->
    <div id="guide-right">
        <!--  right1 start  -->
        <div class="right1">
          <h2><a href="/travel/china-guide/attractions">Famous China Attractions</a></h2>
          <ul>
             <li><a href="/forbidden-city/">Forbidden City-Beijing</a></li>
             <li><a href="/great-wall/">Great Wall-Beijing</a></li>
             <li><a href="/li-river/">Li River-Guilin</a></li>
             <li><a href="/terra-cotta-warriors/">Terracotta Warriors-Xi'an</a></li>
             <li><a href="/potala-palace/">Potala Palace-Tibet</a></li>
             <li><a href="/travel/china-huangshan-attractions/">Huangshan-Anhui</a></li>
             <li><a href="/silk-road/">Silk Road</a></li>
             <li><a href="/yangtze-river/">Yangtze River</a></li>
             <li class="more"><a href="<?php echo Yii::app()->createUrl('chinaGuide/attractions');?>">More China Attractions</a></li>
          </ul>
        </div>
        <!--  right1 end  -->
        <div class="rightbottom"></div>
        <!--  right2 start  -->
        <div class="right2">
           <div class="list">
             <h2>Things to Do in China</h2>
             <ul class="top5">
                <li class="pic"><img src="/images/chinaGuide/pic4.jpg" alt="" /></li>
                <?php foreach ($topthingsList as $k=>$v):?>
                <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>SiteUtils::stringURLSafe($v['title']), 'id'=>$v['id']));?>"><span><?php echo $k+1;?></span> <b><?php echo $v['title']?></b></a></li>
                <?php endforeach;?>
             </ul>
             <h2 style="margin-top:15px;">Things to Do in Cities</h2>
             <ul class="things">
                 <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsList', array('title'=>'things-to-do-in-beijing','catid'=>44));?>">Beijing</a></li>
                 <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsList', array('title'=>'things-to-do-in-xian','catid'=>45));?>">Xian</a></li>
                 <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-shanghai','id'=>552));?>">Shanghai</a></li>
                 <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-guilin','id'=>989));?>">Guilin</a></li>
                 <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-hongkong','id'=>998));?>">Hongkong</a></li>
                 <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-lhasa','id'=>1023));?>">Lhasa</a></li>
                 <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-chengdu','id'=>1019));?>">Chengdu</a></li>
                 <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-hangzhou','id'=>1031));?>">Hangzhou</a></li>
                 <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-luoyang','id'=>996));?>">Luoyang</a></li>
                 <li class="more"><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsList');?>"><img src="/images/chinaGuide/more.png" alt="" /></a></li>
             </ul>
           </div>
        </div>
        <!--  right2 end  -->
        <div class="rightbottom"></div>
        <!--  right3 start  -->
        <div class="right3">
            <h2>China Maps</h2>
            <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityGuide');?>#citymaps"><img src="/images/chinaGuide/map.jpg" alt="" /></a>
        </div>
        <!--  right3 end  -->
        <div class="rightbottom"></div>
        <div class="right4"><?php $this->renderPartial('/common/customizeTour');?></div>
    </div>
    <!--  guide-right end  -->
</div>
<!--  guide end  -->
<script>
	$('#searchContent').focus(function(){
		if($(this).val()=='Province/City/Region/Attraction'){
				$(this).val('');
			}
		});
	$('#searchContent').blur(function(){
		if($(this).val()==''){
				$(this).val('Province/City/Region/Attraction');
			}
		});
	$('#submitSearch').click(function(){
			$('#searchcity').submit();
		});
</script>

