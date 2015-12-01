<?php
//天数范围搜索
$days = array(
  99 => 'Half Day',
  1 => '1 Day',
  2 => '2 Days',
  3 => '3 Days',
  4 => '4 Days',
  5 => '5 Days',
  6 => '6-7 Days',
  8 => '8-10 Days'
);

//价格范围搜索
$price = array(
  1 => 'Below $50',
  2 => '$51-100',
  3 => '$101-200',
  4 => '$201-400',
  5 => '$401-600',
  6 => 'Above $601'
);

//适宜人群
$groups = array(
  1 => 'Individual',
  2 => 'Couple',
  3 => 'Family',
  4 => 'Kid'
);

//交通方式
$vehicles = array(
  1 => 'Walk',
  2 => 'Car',
  7 => 'Coach',
  3 => 'Train',
  4 => 'Air',
  5 => 'Subway',
  6 => 'Bike',
  8 => 'Van',
  9 => 'Cruise'
);

//目的地 
$destination = array(
  1 => 'Great Wall Tours',
  2 => 'Beijing Xian Tours',
  //4 => 'Beijing Huangshan Tours',
  5 => 'Beijing Shanghai Tours',
  6 => 'Beijing Datong Tours',
  7 => 'Beijing Qinhuangdao Tours',
  8 => 'Beijing Chengde Tours',
  9 => 'Beijing Tianjin Tours',
  12 => 'Beijing Xian Shanghai Tours',
  10 => 'Beijing Luoyang Tours',
  11 => 'Beijing Guilin Tours',
  //13 => 'Other Beijing Side Tours'
  14 => 'Hong Kong to Beijing Tour',
  15 => 'Beijing Harbin Tours',
  //16 => '72 Hours Visa Free Tour',
  17 => 'Tianjin Port to Beijing',
  18 => 'Beijing Inner Mongolia Tours',
  19 => 'Beijing Pingyao Tours',
);

//目的地对应条数
$destination_count = array(
	1 => 51,
	2 => 17,
	4 => 1,
	5 => 14,
	6 => 4,
	7 => 1,
	8 => 5,
	9 => 3,
	10 => 2,
  11 => 3,
  12 => 10,
  13 => 10,
  14 => 2,
  15 => 1,
  16 => 10,
  17=>9,
);

//目的地对应图片和说明
$destination_intro = array(
	1 => array('image'=>"great_wall.jpg",'description'=>"Listed as a World Heritage by UNESCO in 1987, Great Wall of China is definitely the wealth of humankind, must-see attractions for its architectural grandeur and historical significance."),
  2 => array('image'=>"beijing_xian.jpg",'description'=>"Xian is one of the top ancient cities of China known for its royal culture. In this tour we will take you to these amazing two cities, and witness Chinese history and culture."),
  4 => array('image'=>"",'description'=>""),
  5 => array('image'=>"Beijing+Shanghai_2.jpg",'description'=>"It is a marvelous combination of the China's Economic and Cultural center to see it's profound and historical past, nice present and prosperous future. You will be amazed by it's marvelous past as well as it's fast development of this country."),
  6 => array('image'=>"Beijing+Datong_2.jpg",'description'=>"Datong, an ancient city with world known Yungang Grottoes and Hanging Monastery at the foot of Mt. Hengshan. These two are mircles on China's Buddhist, Taoist history. To find more about China's Buddhism and Taoism, these two spots are must see."),
  7 => array('image'=>"",'description'=>""),
  8 => array('image'=>"Beijing+Chengde_2.jpg",'description'=>"Located 250 km northeast of Beijing, Chengde is well known for two UNESCO world heritage sites, the Eight Outer Temples listed 1994 and Mountain Resort listed in 1997. Most temples of the Eight Outer Temples were built in Tibetan Style for serving Lamas of Tibet with the hope of strengthening the unification with the minoerity nations."),
  9 => array('image'=>"",'description'=>""),
  10 => array('image'=>"",'description'=>""),
  11 => array('image'=>"Beijing+Guilin_2.jpg",'description'=>"When history,culture meets the breathtaking landscapes, more and more enjoyable activities were found. Extend your China travel from Beijing to Guilin, you will find the last Pure Land of China."),
  12 => array('image'=>"beijing+Xian+Shanghai_2.jpg",'description'=>"Definitely and typically, it's the China Golden Triangle Tour to search the profound China's history, discover imperial wonders of Beijing, historical marverl of Xian, and witness the big achievement of today.")
);

//other beijing side tours对应图片和说明
$other_beijing_side_tours=array(
	'image'=>"Beijing+Other_2.jpg",'description'=>"It is quick and easy for you to combine other interesting places into your Beijing trip, such as Harbin, Pingyao, Luoyang, Beidaihe, Qufu etc. Here listed below are some of your recommended Beijingside trips which may interest you. Free to tell us your needs."
);

//Private Group tours对应图片和说明
$private_intro=array(
	'image'=>"private_tour.jpg",'description'=>"
The private Beijing tour provides <b>private car&guide</b> for you can enjoy the Great Wall, Forbidden City,Tiananmen Square, Summer Palace, Temple Heaven and etc in a comfortable&flexible way."
);
$group_intro=array(
	'image'=>"group_tour.jpg",'description'=>"We offer Beijing small group tour with no more than <b>15 tourists</b> to ensure you travel comfortableness. By sharing professional speaking guide, and one bus/coach, you will <b>save more</b>. "
);


//旅游类型
$tour_type = array(
  1 => 'Private Tours',
  2 => 'Join Groups'
);

//一级分类列表页
$one_category=array(
  'great_wall_tour' => array(
      1 => 'Mutianyu Section',
      2 => 'Badaling Section',
      3 => 'Jinshanling Section',
      4 => 'Juyongguan Section',
      5 => 'Gubeikou Section',
      6 => 'Simatai Section',
      7 => 'Huanghuacheng Section',
      /*
      8 => 'Ruined Badaling Section',
      9 => 'Yunmengshan Section',
      10 => 'Xiangshuihu Section',
      11 => 'Luanling Section',
      12 => 'Zhuangdaokou Section',
      13 => 'Xiaoxihu Great Wall Tour',
      14 => 'Jiangjunguan Section',
      15 => 'Bolitai Great Section',
      16 => 'Changyucheng Section',
       */
   ),
   'beijing_shanghai_tour' => array(
      /*
      17 => 'Beijing to Shanghai Tours',
      18 => 'Shanghai to Beijing Tours',
      19 => 'China Tours with Beijing and Shanghai',
      */
      
      17 => 'Beijing to Shanghai',
      18 => 'Shanghai to Beijing',
      19 => 'Beijing+Shanghai+Other',
      26 => 'Beijing and Shanghai',  
   ),
   'beijing_xian_shanghai_tour' => array(
      20 => 'Private Tour',
      21 => 'Group Tour',
   ),
   'beijing_xian_tour' => array(
      22 => 'Beijing Xian Tour by Flight',
      23 => 'Beijing Xian Tour by Train',
      24 => 'Beijing Xian Tour with Flight and Train',
      25 => 'Beijing Xian Extended Tour',
      27 => 'Beijing & Xian Tour',
   )
 );
 
$one_category_desc =array(
 			1 => array('image'=>"1.jpg",'description'=>"A little far away from the Beijing, less crowded than other popular Great Wall sections, such as Badaling Great Wall. There are 20 towers on the <strong style='color:#9b6835;'>Mutianyu Great Wall</strong> snaking the ridge for about 3000 meters. There are <strong style='color:#9b6835;'>two cable cars</strong> that will take you to the of the wall and back down again. The wall is fully restored, and has hand rails to protect you!"),
      2 => array('image'=>"2.jpg",'description'=>"Well preserved <strong style='color:#9b6835;'>Ming Dynasty Great Wall</strong > with original appearance, one of the most gorgeous and magnificent part of the Great Wall, <strong style='color:#9b6835;'>Badaling Great Wall</strong> is crowded by tourists all the time, especially in weekends and holidays. The left side is steeper and less crowded and the right side is longer and easier to climb. Climbing to the top at the little fortresses could get very slow as people stop in the entrances to take pictures or just hang out."),
      3 => array('image'=>"3.jpg",'description'=>"Located about 150km from downtown Beijing, <strong style='color:#9b6835;'>Jinshanling Great Wall</strong> is the most preserved section of the Great Wall. It is one of the most challenging part of the <strong style='color:#9b6835;'>Great Wall for hiking</strong> (ruined, preserved and original). Besides, it does not attract tourist hordes. The walk takes about 2-3 hours depending on fitness levels. <strong style='color:#9b6835;'>one way up Cable car</strong> takes you up the mountain(optional)."),
      4 => array('image'=>"4.jpg",'description'=>"<strong style='color:#9b6835;'>Juyongguan Pass</strong> was planned by General Xuda and completed in the first year of the reign of the Emperor Hongwu of the Ming Dynasty. The Great Wall around the Pass extends over <strong style='color:#9b6835;'>4 Km</strong> snaking the ridge of the mountains forming the valley. It is a long steep climb over steps of unequal tread height, and it's not a wide wall so passing is at times difficult. Besides, you can find the <strong style='color:#9b6835;'>double entrapment</strong> of the construction in this tight valley."),
      5 => array('image'=>"5.jpg",'description'=>"Situated between Shanhaiguan Pass and Juyongguan Pass, and about 100 kilometers (62 miles) to Beijing, <strong style='color:#9b6835;'>Gubeikou Great Wall</strong> is mainly composed of Panlonshan Great Wall and Wohushan Great Wall.There are <strong style='color:#9b6835;'>14 beacon towers, 143 watch towers, 16 strategic pass</strong>, three citadels and many other military constructions. Many of them are famous cultural relics, such as the <strong style='color:#9b6835;'>Big Flower Beacon Tower</strong> of the Northern Qi Dynasty, Fairy Tower, General Tower, and the dominant Wangjing Tower."),
      6 => array('image'=>"6.jpg",'description'=>"<strong style='color:#9b6835;'>Simatai Great Wall</strong> was built in Ming Dynasty. It is about 120km from Beijing and 5km long. Jinshanling Great Wall is in the west of it. There are 16 beacon towers in the east part of Simatai Great Wall and 18 beacon towers in the west part of it. Tourists now enjoy it's <strong style='color:#9b6835;'>original appearance</strong>."),
      7 => array('image'=>"7.jpg",'description'=>"The 10800m Great Wall is about 65km from Beijing City which located in Huairou District. It is an informal section of Great Wall and being greeted with increasing approval among hikers. <strong style='color:#9b6835;'>Mountains and lakes are along Huanghuacheng Great Wall</strong> resort. The Wall is surrounded by a sea of yellow wild flowers when summer comes."),
      8 => array('image'=>"8.jpg",'description'=>"The <strong style='color:#9b6835;'>ruined Badaling Great Wall</strong>  is the west gate of Badaling Great Wall and 10km apart from Badaling Great Wall. <strong style='color:#9b6835;'>Lofty mountains, high ranges and danger gullies</strong> are all preserved original. It's not a easy climbed resort and you'd better prepare casual wear."),
      9 => array('image'=>"9.jpg",'description'=>"<strong style='color:#9b6835;'>Yunmengshan Great Wall</strong> is 90km from Beijing city. It borders Miyun Artificial Lake in the east, Mt. Yunmeng in the west. The Wall was constructed under a famouse general in Ming Dynasty named Qi Jiguang. It is called <strong style='color:#9b6835;'>'Mt. Yellow in the north'</strong> as the Wall is Often hidden in a cloud of steam."),
      10 => array('image'=>"10.jpg",'description'=>"<strong style='color:#9b6835;'>Xiangshuihu</strong> is in the west of Mutianyu Great Wall. It is 28km from Beijing. The Wall is among with gurgling lake, mountains, ancient caves and waterfalls. It is so precipitous that only <strong style='color:#9b6835;'>5 beacon towers in the 1000m long Wall</strong>. The resort show varies features by seasons."),
      11 => array('image'=>"11.jpg",'description'=>"<strong style='color:#9b6835;'>Dazhenyu</strong> is called ' <strong style='color:#9b6835;'>horns of the bull</strong>' by the local peaple as there are three Sharp turn. It may be the most steep one among all the Great Walls. <strong style='color:#9b6835;'>Luanling Great Wall</strong> is one of the three which located in the west of Xiangshuihu Great Wall. The west section is so dangerous that it is forbidden for tourism. A better view of the west section if you reach the east. "),
      12 => array('image'=>"12.jpg",'description'=>"<strong style='color:#9b6835;'>Zhuangdaokou Great Wall Pass</strong> is also called \"<strong style='color:#9b6835;'>Zhenluguan</strong>\". It's 500m apart from north of Jiuduhe Town Huairou District. There two stone plaques at gate on both sides, north and south. The south one read \"Zhuangdaokou\" and the north one read \"Zhenluguan\". It was said the <strong style='color:#9b6835;'>invaders were scared by sonic boom</strong> from the all over mountains' pine trees as they mistook the noise was from army."),
      13 => array('image'=>"13.jpg",'description'=>"<strong style='color:#9b6835;'>Xiaoxihu Great Wall</strong> is the extended of Huanghuacheng Great Wall. It's only 70km between Xiaoxihu Great Wall and Asian Sports Village. The Wall is <strong style='color:#9b6835;'>an unique resort</strong> as human landscape is an part of it besides it surounded by mountains and water, say natural landscape."),
      14 => array('image'=>"14.jpg",'description'=>"<strong style='color:#9b6835;'>Jiangjunguan</strong> is the eastern furthest part of the Great Wall in Beijing, built 600 years ago during the Ming Dynasty.There are 3 floors gateway platform in the enemy tower. Nowadays, only the foundation bed of gateway platform still exist. As the <strong style='color:#9b6835;'>No.3 pass of the Great Wall of China</strong>, You can come to view the splendid countryside scenery there."),
      15 => array('image'=>"15.jpg",'description'=>"The <strong style='color:#9b6835;'>Bolitai Great Wall</strong>  is in Bolitai Village, it is quite different from other great walls in China. The Great Wall here is <strong style='color:#9b6835;'>made of slabs and stones</strong>, not bricks made in kilns. So hiking the Bolitai Great Wall is quite challenging but exciting."),
      16 => array('image'=>"16.jpg",'description'=>"<strong style='color:#9b6835;'>Changyucheng Great Wall</strong> is the <strong style='color:#9b6835;'>highest Great Wall</strong> in Beijing, you can see the highest roundness watch tower from the Great wall, which has an altitude of 1460 meters. Changyucheng Village at Changyucheng Great Wall is an ancient village which keeps the original village style and features."),
      17 => array('image'=>"17.jpg",'description'=>"<strong style='color:#9b6835;'>Beijing</strong> is the capital of China as well as <strong style='color:#9b6835;'>political and cultural center. Shanghai</strong> is a amazing metropolis with rich history and culture. We start the exciting tour from Beijing city, surely your tour is not complete without a Shanghai visit."),
      18 => array('image'=>"18.jpg",'description'=>"Start the tour from Shanghai, experiencing the <strong style='color:#9b6835;'>modern metropolis</strong> with our professional tour guide. Then take train or flight to Beijing city, to roam in the <strong style='color:#9b6835;'>rich culture and attractive scenery</strong>, you can have a thoroughly  sublimate before ending your tour."),                    
      19 => array('image'=>"19.jpg",'description'=>"Beijing is the best-known travel destination in China as well as Shanghai, the <strong style='color:#9b6835;'>fashionable modern city</strong>. Once you travel in these two cities, don't forget the others nearby, such as <strong style='color:#9b6835;'>Hangzhou, Suzhou</strong> or more, these <strong style='color:#9b6835;'>beautiful cities</strong> constitute a wonderful picture of the north China, making your trip more unforgettable."),
      20 => array('image'=>"20.jpg",'description'=>"In this tour, you <strong style='color:#9b6835;'>private tour</strong> guide will take you tavel between Beijing, Xian and Shanghai by the air-conditioned commercial vehicle. You can experiece the <strong style='color:#9b6835;'>Chinese culture and modern atomophere</strong> freely, or have a witness of ancient wonders and fashion landmarks."),
      21 => array('image'=>"21.jpg",'description'=>"With the <strong style='color:#9b6835;'>professional tour guide</strong> service and <strong style='color:#9b6835;'>comfortable coach</strong>, this tour will take you to explore Beijing Xian and Shanghai city. Join the group together, enjoying the most woderful scenery and ancient culture with a lower price."),
      22 => array('image'=>"22.jpg",'description'=>"Beijing amd Xian, the two most historically significant cities, have <strong style='color:#9b6835;'>the most world heritages in China</strong>. Love to be awed by the entombed <strong style='color:#9b6835;'>Terracotta Warriors</strong>? or the dragon-like <strong style='color:#9b6835;'>Great Wall</strong>? These two cities are the paradise for culture and history enthusiast. Beijing is only one and half hours away from Xian by flight, which means it could <strong style='color:#9b6835;'>save you plenty of time</strong> and give you <strong style='color:#9b6835;'>comfortable experience</strong> on the way."), 
      23 => array('image'=>"23.jpg",'description'=>"To tour these two amazing cities by train is not a bad idea to save money and enjoy the views on the train. We offer <strong style='color:#9b6835;'>soft sleepers</strong>, which have four-be cabin and two-bed cabin. The two-bed cabin has a private washing room while the people in the four-cabin use the public. However, all the cabin have <strong style='color:#9b6835;'>small TV, Free hot water</strong>. "), 
      24 => array('image'=>"24.jpg",'description'=>"The ways connected Beijing and Xian are really convenient. If you want to save time, the flight is the best choice, which only takes <strong style='color:#9b6835;'>1.5 hours from Beijing to Xian</strong>. If you want to meet some real Chinese people on the way, 4-bed cabin on the train will be nice to know each other. You might find some guys talking in English and give you more about China. It takes <strong style='color:#9b6835;'>13 hours by overnight T or Z train from Beijing to Xian</strong>, while the Bullet train only needs 9 hours."), 
    
      25 => array('image'=>'25.jpg','description'=>'In addition to Beijing and Xian, there are some important destinations between them, such as <strong style="color:#9b6835;">Datong(Yungang Grottoes)</strong> and <strong style="color:#9b6835;">Pingyao(Ancient City)</strong> of Shanxi Province. Besides, <strong style="color:#9b6835;">Mt. Hua</strong> of Huayin County is also a nice place if you like hiking on the most precipitous peak in China.'),
);

//二级分类
$two_category=array(
  'beijing_shanghai_tour' => array(
      1 => 'Flight',
      2 => 'Train',
   ),
   'beijing_xian_shanghai_tour' => array(
      3 => 'Economy',
      4 => 'Standard',
      5 => 'Luxury',

   )
);

