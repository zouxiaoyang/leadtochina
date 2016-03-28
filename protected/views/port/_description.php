<?php
	
	$tianjin = 'Tianjin Port is the first home port in Northern China, and the largest home port in East Asia. It is 160 kilometers from Beijing and 60 kilometers from the city center of Tianjin. Tianjin is also the gateway to Beijing where you can see miraculous Forbidden City, Great Wall and so on.
Lead to China collects many <a id="port_content'.$id.'" rel="example3" onclick="get_newwindow(\'port_content'.$id.'\')" href="'.Yii::app()->createUrl('port/getImageList', array("id"=>$id,"name"=>SiteUtils::stringURLSafe($name))).'">Tianjin port photos</a> and essential <a href="'.Yii::app()->createUrl('port/portIntroduction', array("id"=>$id,"name"=>SiteUtils::stringURLSafe($name))).'">travel guide</a> for passengers who will cruise from or to Tianjin harbor. As a China based travel agency, we have managed to help thousands of visitors arrange Tianjin port transfer service as well as Beijing excursions. That’s means you will get first-hand price and valued service.
';
	$shanghai = 'Shanghai, one of the most attractive cities of China, is a melting pot with all-embracing tolerance of cultures and a fascinating metropolis blending dynamic fashion and graceful nostalgia. The major ports of Shanghai are Shanghai Port International Cruise Terminal, Shanghai Wusongkou Cruise Ship Terminal and Waigaoqiao Port Cruise Terminal. 
Lead to China collects many <a id="port_content'.$id.'" rel="example3" onclick="get_newwindow(\'port_content'.$id.'\')" href="'.Yii::app()->createUrl('port/getImageList', array("id"=>$id,"name"=>SiteUtils::stringURLSafe($name))).'">Shanghai port photos</a> and essential <a href="'.Yii::app()->createUrl('port/portIntroduction', array("id"=>$id,"name"=>SiteUtils::stringURLSafe($name))).'">travel guide</a> for passengers who will cruise from or to Shanghai harbor. As a China based travel agency, we have managed to help thousands of visitors arrange Shanghai port transfer service as well as land tours in/from Shanghai. That’s means you will get first-hand price and valued service.
';
	$dalian = 'Facing the sea in three directions, with a coastline of 2211 kilometers, Dalian is a well-known summer resort and livable city of mild continental monsoon climate with maritime characteristics and neither extremely hot summers nor extremely cold winters which has been awarded such honors and titles as "Global 500 by UNEP", China "Habitat Award" and "International Garden City". The Port of Dalian founded in 1899 lies at the southern tip of Liaodong Peninsula in Liaoning province and is the most northern ice-free port in China. 
Lead to China collects many <a id="port_content'.$id.'" rel="example3" onclick="get_newwindow(\'port_content'.$id.'\')" href="'.Yii::app()->createUrl('port/getImageList', array("id"=>$id,"name"=>SiteUtils::stringURLSafe($name))).'">Dalian port photos</a> and essential <a href="'.Yii::app()->createUrl('port/portIntroduction', array("id"=>$id,"name"=>SiteUtils::stringURLSafe($name))).'">travel guide</a> for passengers who will cruise to Dalian harbor. As a China based travel agency, we have managed to help thousands of visitors arrange Dalian port transfer service as well as Dalian land tours. That’s means you will get first-hand price and valued service.
';
	$xiamen  = 'Xiamen is a relatively prosperous tiny city on the southeast coast of China across from Taiwan and has a population of two million people. In addition many historical sites, some beaches and park areas, and Gulangyu Island are the highlights of travelling to the city. Situated in the southeast of the Fujian Province, the Xiamen Port is nestled on the Coast of Xiamen Island in the Taiwan Strait. It is one of the trunk line ports in the Asia-Pacific region. 
Lead to China collects many <a id="port_content'.$id.'" rel="example3" onclick="get_newwindow(\'port_content'.$id.'\')" href="'.Yii::app()->createUrl('port/getImageList', array("id"=>$id,"name"=>SiteUtils::stringURLSafe($name))).'">Xiamen port photos</a> and essential <a href="'.Yii::app()->createUrl('port/portIntroduction', array("id"=>$id,"name"=>SiteUtils::stringURLSafe($name))).'">travel guide</a> for passengers who will cruise to Xiamen port. As a China based travel agency, we have managed to help thousands of visitors arrange Xiamen port transfer service as well as land tours. That’s means you will get first-hand price and valued service.
';
	$hongkong = 'Hong Kong is a very modern society and world-class monetary, trading and business city. Remnants of its colonial past and the British culture and values, share space with the Chinese tradition. Kai Tak Cruise Terminal is a cruise ship terminal that opened at the site of the former Kai Tak Airport. 
Lead to China collects many <a id="port_content'.$id.'" rel="example3" onclick="get_newwindow(\'port_content'.$id.'\')" href="'.Yii::app()->createUrl('port/getImageList', array("id"=>$id,"name"=>SiteUtils::stringURLSafe($name))).'">HK port photos</a> and essential <a href="'.Yii::app()->createUrl('port/portIntroduction', array("id"=>$id,"name"=>SiteUtils::stringURLSafe($name))).'">travel guide</a> for passengers who will cruise to HK port. As a China based travel agency, we have managed to help thousands of visitors arrange Hong Kong port transfer service as well as land tours. That’s means you will get first-hand price and valued service.
';
	switch($id){
	
		case 5:echo $tianjin;break;
		case 6:echo $shanghai;break;
		case 7:echo $dalian;break;
		case 11:echo $xiamen;break;
		case 13:echo $hongkong;break;

		default:break;


	}