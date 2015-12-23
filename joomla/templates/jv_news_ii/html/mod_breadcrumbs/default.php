<?php // no direct access
defined('_JEXEC') or die('Restricted access');
//exit;
$bread_array=array("WhatToSee","WhatToKnow","WhatToEat","WhatToBuy","Drama","Reviews","Song","Comedy","ChinaHighlights");
$bread_in_array=array("hotels","flights","train");

?>
<span class="breadcrumbs pathway">
    

<?php for ($i = 0; $i < $count; $i ++) :
        //var_dump($list);
	// If not the last item in the breadcrumbs add the separator
	if ($i < $count -1) {
		$string = str_replace(' ','',$list[$i]->name);

		if(in_array($string,$bread_array)){
			continue;
		}else{

		$temp_name=strtolower($list[$i]->name);
		//echo $temp_name;
                //echo $list[$i]->link;
		
		if(in_array($temp_name,$bread_in_array)){

			$list[$i]->name="China ".$list[$i]->name;
		}

		if(!empty($list[$i]->link)) {
			echo '<a href="'.$list[$i]->link.'" class="pathway">'.$list[$i]->name.'</a>';
		} else {
			echo $list[$i]->name;
		}
		echo ' '.$separator.' ';
		}
	}else if ($params->get('showLast', 1)) { // when $i == $count -1 and 'showLast' is true
		$temp_name=strtolower($list[$i]->name);
		//echo $temp_name;
		
		if(in_array($temp_name,$bread_in_array)){

			$list[$i]->name="China ".$list[$i]->name;
		}
              echo $list[$i]->name;
            
            
	}

	
endfor; ?>

</span>
<span style="float:right" id="breadfacebook">

</span>
