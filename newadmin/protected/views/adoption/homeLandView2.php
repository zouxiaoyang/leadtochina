<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/adoptionHome.css" type="text/css" />
<style type="text/css">
<!--
.errorMessage{display:none}
#content{padding: 10px 21px 10px 20px; width: 920px;}
.addthis_toolbox a{ color:#666;}
-->
</style>
<!-- contentnew start  -->
<div class="contentnew">
  <!-- leftspace start  -->
  <div class="leftspace"> 
     <!-- content start  -->
     <div id="content">
        <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('adoption/index');?>">China Adoption Tours</a> <a href="<?php echo Yii::app()->createUrl('adoption/homelandprovince/'.$provinceid);?>" style="background:none;"><?php echo $provinceDescription->name;?> Reunions</a></div>
        
        <!-- HomeLand start  -->
        <div id="HomeLand">
            <!-- HomeLandLeft start  -->
            <div class="HomeLandLeft">
               <h2><?php echo $homeLandView->title;?></h2>
               <table border="0" cellspacing="0" cellpadding="0">
                  <tr> 
                     <td width="65%">User Rating:
                     <?php if($homeLandView->rate_time==0):?>
                     <img id="rate_star" src="/images/M_images/rating_star0.png">
                     <?php else:?>
                     <img id="rate_star" src="/images/M_images/rating_star<?php echo floor($homeLandView->rate_value/$homeLandView->rate_time);?>.png">
                     <?php endif;?>
                      / <b id="rate_time"><?php if($homeLandView->rate_time==0) echo "0"; else echo $homeLandView->rate_time;?></b></td>
                     <td width="35%"> <div class="addthis_toolbox addthis_default_style"> <a href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4d3cdb303668116a" class="addthis_button_compact">Share&nbsp;|</a> <a class="addthis_button_preferred_1"></a> <a class="addthis_button_preferred_2"></a> <a class="addthis_button_preferred_3"></a> <a class="addthis_button_preferred_4"></a></div>
        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4d3cdb303668116a"></script>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="2">Poor
					<input type="radio" value="1" name="rate_value" alt="vote 1 star"/>
					<input type="radio" value="2" name="rate_value" alt="vote 2 star"/>
					<input type="radio" value="3" name="rate_value" alt="vote 3 star"/>
					<input type="radio" value="4" name="rate_value" alt="vote 4 star"/>
					<input type="radio" checked="checked" value="5" name="rate_value" alt="vote 5 star"/>
					Best 
					<input class="button" type="button" name="submit_vote" id="submit_vote"/></td>
                  </tr>
               </table>
               <div class="clear"></div>
              <?php echo $homeLandView->description;?> 
            </div>
            <!-- HomeLandLeft start  -->
            
            <!-- HomeLandRight start  -->
            <div class="HomeLandRight">
                <!-- HomeLandList start  -->
                <div class="HomeLandList">
                    <ul>
                       <li class="title"><?php echo $provinceDescription->name;?> Guide</li>
                       <?php if(count($provinceArticle)==5)array_pop($provinceArticle);?>
                       <?php foreach ((array)$provinceArticle as $k=>$v):?>             
                          <li><a href="<?php echo Yii::app()->createUrl('adoption/homeLandView',array('id'=>$v->id,'provinceid'=>$provinceid));?>"><?php echo $v->title;?></a></li>
                       <?php endforeach;?>   
                       <li><a href="<?php echo Yii::app()->createUrl('adoption/homelandprovince', array('id'=>$provinceDescription->id));?>"><?php echo $provinceDescription->name; ?> Reunion Tour</a></li>
                    </ul>
                </div> 
                <!-- HomeLandList end  -->
                
                <div id="customize"><a href="<?php echo Yii::app()->createUrl("adoption/customizeAdoption"); ?>"><img src="/images/adoption/customize.jpg"></a></div>
            </div>
            <!-- HomeLandRight start  -->            
        </div>
        <!-- HomeLand end  -->
        
      <!--  questions start  -->
      <?php echo $this->renderPartial("_adoptionQuestion", array('commonQuestion'=>$commonQuestion, 'chinaTripQuestion'=>$chinaTripQuestion));?>
      <!--  questions end  -->
     </div>
     <!-- content end  -->
  </div>
  <!-- leftspace end  -->
</div>
<!-- contentnew end  -->


