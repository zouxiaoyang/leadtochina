<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/newbeijing1.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>
<?php
include_once(SITEROOT.'/config/beijingtours.php');
$request_uri = Yii::app()->createUrl('cityTours/search',array('title'=>$title)).'?';
?>
<style type="text/css">
<!--
.contentnew{ background:#eee; overflow:hidden; font-size:12px; margin-top:8px; padding-bottom:15px;}
#left,#rightnew{ margin-top:4px;}
#right{ margin-top:0px;}
.get_start{ margin-top:12px;}
.errorMessage{display:none}
-->
</style>
<div class="content-beijing">
<div id="menu-tours"><strong>You are here: </strong><a href="/">Home</a><a href="/citytour">City Tours</a> 
  <a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>$title));?>">Beijing Tours</a>
  <?php 
    if($_GET['theme']) echo $themes[(int)$_GET['theme']];
    elseif($_GET['tour_type']){
      echo $tour_type[(int)$_GET['tour_type']];
    }elseif($_GET['des']){
      echo $destination[(int)$_GET['des']];
    }elseif($_GET['days']){
      echo $_GET['days'];
    }
  ?>
</div>
<!--  left start  -->
<div id="left">
    <div class="choices">
          <h2>
            <?php 
              if($_GET['theme']) echo $themes[(int)$_GET['theme']];
              elseif($_GET['tour_type']){
                echo $tour_type[(int)$_GET['tour_type']];
              }elseif($_GET['des']){
                echo $destination[(int)$_GET['des']];
              }
            ?>
          </h2>
          <ul>
             <li class="title2"><?php echo $dataProvider->totalItemCount;?> choices!</li>
             <?php if($dataProvider->totalItemCount):?>
                <?php if($this->order == 'price_down'):?>
                <li><a href="<?php echo $request_uri.http_build_query(array_merge($this->query,array('order'=>'price_up')));?>" style="cursor:pointer;">Price ↓</a></li>
                <?php else:?>
                  <li><a href="<?php echo $request_uri.http_build_query(array_merge($this->query,array('order'=>'price_down')));?>" style="cursor:pointer;">Price ↑</a></li>
                <?php endif;?>
                <?php if($this->order == 'day_down'):?>
                  <li><a href="<?php echo $request_uri.http_build_query(array_merge($this->query,array('order'=>'day_up')));?>" style="cursor:pointer;">Days ↓</a></li>
                <?php else:?>
                  <li><a href="<?php echo $request_uri.http_build_query(array_merge($this->query,array('order'=>'day_down')));?>" style="cursor:pointer;">Days ↑</a></li>
                <?php endif;?>
                <?php if($this->order == 'reviews_down'):?>
                  <li><a href="<?php echo $request_uri.http_build_query(array_merge($this->query,array('order'=>'reviews_up')));?>" style="cursor:pointer;">Reviews ↓</a></li>
                <?php else:?>
                <li><a href="<?php echo $request_uri.http_build_query(array_merge($this->query,array('order'=>'reviews_down')));?>" style="cursor:pointer;">Reviews ↑</a></li>
                <?php endif;?>
              <?php endif;?>
          </ul>
       </div>
   <div class="beijing_list">
      
           
          <?php if($dataProvider->totalItemCount):?>
              <?php $this->widget('zii.widgets.CListView', array(
                 'dataProvider'=>$dataProvider,
                 'itemView'=>'_search_list',
                 'ajaxUpdate'=>false,
                  'pager'=>array(
                    'cssFile'=>False,
                    'header'=>'',
                  ),
                 'template'=>"{items}\n{pager}",
               )); ?>
             <?php endif;?>

           
          <div class="clear"></div>
       </div>  

       <?php if($_GET['des'] == 6):?>
       <!-- add_datong start -->
       <div class="add_datong"><a name="beijing-to-datong">  &nbsp;&nbsp;</a>
       <div class="chinamenu" style="margin-top:15px;">
         <ul>
            <li class="dq" style="cursor:default;"><strong>Beijing to Datong Train Schedule &amp; Fares</strong><span></span></li>
         </ul>
       </div>
       <div class="datong">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            	<tbody>
                   <tr class="top_datong">
                     <td>Train No.</td>
                     <td>Departs</td>
                     <td>Arrives</td>
                     <td>Duration</td>
                     <td>Seat Fares(RMB)</td>
                     <td>Hard Sleeper Fares(RMB)</td>
                     <td>Soft Sleeper Fares(RMB)</td>
                  </tr>
                  <tr>
                     <td>K220/K217</td>
                     <td>Beijing West 0:35am</td>
                     <td>Datong 6:52am</td>
                     <td>6 h 17m</td>
                     <td>54/-</td>
                     <td>100/105/108</td>
                     <td>153/159</td>
                  </tr>
                  <tr>
                     <td>K1114/K1111</td>
                     <td>Beijing 2:49am</td>
                     <td>Datong 9:03am</td>
                     <td>6 h 14m</td>
                     <td>54/-</td>
                     <td>100/105/108</td>
                     <td>153/159</td>
                  </tr>
                  <tr>
                     <td>1714/1711</td>
                     <td>Beijing 2:55am</td>
                     <td>Datong 9:17am</td>
                     <td>6 h 22m</td>
                     <td>48/-</td>
                     <td>94/99/102</td>
                     <td>147/153</td>
                  </tr>
                  <tr>
                     <td>1458/1455</td>
                     <td>Beijing North 6:48am</td>
                     <td>Datong 2:26pm</td>
                     <td>7 h 38m</td>
                     <td>46/-</td>
                     <td>92/97/100</td>
                     <td>144/150</td>
                  </tr>
                  <tr>
                     <td>K23</td>
                     <td>Beijing 8:05am</td>
                     <td>Datong 2:04pm</td>
                     <td>5 h 59m</td>
                     <td>31/-</td>
                     <td>-/-/-</td>
                     <td>-/-</td>
                  </tr>
                  <tr>
                     <td>K3</td>
                     <td>Beijing 8:05am</td>
                     <td>Datong 2:04pm</td>
                     <td>5 h 59m</td>
                     <td>-/-</td>
                     <td>-/-/-</td>
                     <td>100/104</td>
                  </tr>
                  <tr>
                     <td>K43A</td>
                     <td>Beijing 10:55am</td>
                     <td>Datong 5:24pm</td>
                     <td>6 h 29m</td>
                     <td>54/-</td>
                     <td>100/105/108</td>
                     <td>153/159</td>
                  </tr>
                  <tr>
                     <td>K43B</td>
                     <td>Beijing 10:55am</td>
                     <td>Datong 5:24pm</td>
                     <td>6 h 29m</td>
                     <td>54/-</td>
                     <td>100/105/108</td>
                     <td>153/159</td>
                  </tr>
                  <tr>
                     <td>K615</td>
                     <td>Beijing 3:36pm</td>
                     <td>Datong 9:59pm</td>
                     <td>6 h 23m</td>
                     <td>54/-</td>
                     <td>100/105/108</td>
                     <td>153/159</td>
                  </tr>
                  <tr>
                     <td>K600/K597</td>
                     <td>Beijing West 8:25pm</td>
                     <td>Datong 2:24am</td>
                     <td>5 h 59m</td>
                     <td>54/-</td>
                     <td>100/105/108</td>
                     <td>153/159</td>
                  </tr>
                  <tr>
                     <td>K573</td>
                     <td>Beijing West 8:52pm</td>
                     <td>Datong 2:52am</td>
                     <td>6 h 0m</td>
                     <td>54/-</td>
                     <td>100/105/108</td>
                     <td>153/159</td>
                  </tr>
                  <tr>
                     <td>1136/1133</td>
                     <td>Beijing West 11:01pm</td>
                     <td>Datong 5:17am</td>
                     <td>6 h 16m</td>
                     <td>48/-</td>
                     <td>94/99/102</td>
                     <td>147/153</td>
                  </tr>
                  <tr>
                     <td>2602/2603</td>
                     <td>Beijing 11:42pm</td>
                     <td>Datong 6:01am</td>
                     <td>6 h 19m</td>
                     <td>48/-</td>
                     <td>94/99/102</td>
                     <td>147/153</td>
                   </tr>
                </tbody>
             </table>
          </div>
          
       <div class="chinamenu" style="margin-top:15px;">
         <ul>
            <li class="dq" style="cursor:default;"><strong>Datong to Beijing Train Schedule &amp; Fares</strong><span></span></li>
         </ul>
       </div>
       <div class="datong">
             <table width="100%" border="0" cellspacing="0" cellpadding="0">
            	<tbody>
                   <tr class="top_datong">
<td>Train No.</td>
                     <td>Departs</td>
                     <td>Arrives</td>
                     <td>Duration</td>
                     <td>Seat Fares(RMB)</td>
                     <td>Hard Sleeper Fares(RMB)</td>
                     <td>Soft Sleeper Fares(RMB)</td>
                  </tr>
                  <tr>
                     <td>K574</td>
                     <td>Datong 3:07am</td>
                     <td>Beijing West 9:10am</td>
                     <td>6 h 3m</td>
                     <td>54/-</td>
                     <td>100/105/108</td>
                     <td>153/159</td>
                  </tr>
                  <tr>
                     <td>1134/1135</td>
                     <td>Datong 4:20am</td>
                     <td>Beijing West 10:30am</td>
                     <td>6 h 10m</td>
                     <td>48/-</td>
                     <td>94/99/102</td>
                     <td>147/153</td>
                  </tr>
                  <tr>
                     <td>K616</td>
                     <td>Datong 7:55am</td>
                     <td>Beijing 2:36pm</td>
                     <td>6 h 41m</td>
                     <td>54/-</td>
                     <td>85/85/85</td>
                     <td>138/138</td>
                  </tr>
                  <tr>
                     <td>K4</td>
                     <td>Datong 8:11am</td>
                     <td>Beijing 2:04pm</td>
                     <td>5 h 53m</td>
                     <td>-/-</td>
                     <td>-/-/-</td>
                     <td>100/104</td>
                  </tr>
                  <tr>
                     <td>1456/1457</td>
                     <td>Datong 12:47pm</td>
                     <td>Beijing North 8:05pm</td>
                     <td>7 h 18m</td>
                     <td>46/-</td>
                     <td>92/97/100</td>
                     <td>144/150</td>
                  </tr>
                  <tr>
                     <td>K44A</td>
                     <td>Datong 1:40pm</td>
                     <td>Beijing 7:42pm</td>
                     <td>6 h 2m</td>
                     <td>54/-</td>
                     <td>85/85/85</td>
                     <td>138/138</td>
                  </tr>
                  <tr>
                     <td>K44B</td>
                     <td>Datong 1:40pm</td>
                     <td>Beijing 7:42pm</td>
                     <td>6 h 2m</td>
                     <td>54/-</td>
                     <td>85/85/85</td>
                     <td>138/138</td>
                  </tr>
                  <tr>
                     <td>2604/2601</td>
                     <td>Datong 9:40pm</td>
                     <td>Beijing 3:56am</td>
                     <td>6 h 16m</td>
                     <td>48/-</td>
                     <td>94/99/102</td>
                     <td>147/153</td>
                  </tr>
                  <tr>
                     <td>K218/K219</td>
                     <td>Datong 9:56pm</td>
                     <td>Beijing West 4:11am</td>
                     <td>6 h 15m</td>
                     <td>54/-</td>
                     <td>100/105/108</td>
                     <td>153/159</td>
                  </tr>
                  <tr>
                     <td>K1112/K1113</td>
                     <td>Datong 10:08pm</td>
                     <td>Beijing 4:37am</td>
                     <td>6 h 29m</td>
                     <td>54/-</td>
                     <td>100/105/108</td>
                     <td>153/159</td>
                  </tr>
                  <tr>
                     <td>1712/1713</td>
                     <td>Datong 10:24pm</td>
                     <td>Beijing 4:27am</td>
                     <td>6 h 3m</td>
                     <td>48/-</td>
                     <td>94/99/102</td>
                     <td>147/153</td>
                  </tr>
                  <tr>
                     <td>K598/K599</td>
                     <td>Datong 11:04pm</td>
                     <td>Beijing West 4:58am</td>
                     <td>5 h 54m</td>
                     <td>54/-</td>
                     <td>100/105/108</td>
                     <td>153/159</td>
                   </tr>
                </tbody>
             </table>
          </div>   
      </div>
      <!-- add_datong end -->
      <?php elseif($_GET['des'] == 19):?>
      
      <!-- add_pingyao start -->
       <div class="add_datong"><a name="beijing-to-datong">  &nbsp;&nbsp;</a>
       <div class="chinamenu" style="margin-top:15px;">
         <ul>
            <li class="dq" style="cursor:default;"><strong>Beijing to Pingyao Train Schedule &amp; Fares</strong><span></span></li>
         </ul>
       </div>
       <div class="datong">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            	<tbody>
                   <tr class="top_datong">
                       <td width="11%">Train No.</td>
                     <td width="16%">Departs</td>
                     <td width="15%">Arrives</td>
                     <td width="9%">Duration</td>
                     <td width="12%">Seat Fares<br />
                     (CNY Yuan)</td>
                     <td width="19%">Hard Sleeper Fares<br />
                     (CNY Yuan)</td>
                     <td width="18%">Soft Sleeper Fares<br />
                     (CNY Yuan)</td>
                  </tr>
                   <tr>
                       <td>K603</td>
                       <td>Beijing 5:17pm</td>
                       <td>Pingyao 5:18am</td>
                       <td>12 h 1m</td>
                       <td>93/-</td>
                       <td>163/168/174</td>
                       <td>251/263</td>
                   </tr>
                   <tr>
                       <td>2602/2603</td>
                       <td>Beijing 11:42pm</td>
                       <td>Pingyao 2:05pm</td>
                       <td>14 h 23m</td>
                       <td>98/-</td>
                       <td>180/186/194</td>
                       <td>287/301</td>
                   </tr>
                   <tr>
                       <td>K609</td>
                       <td>Beijing 11:51pm</td>
                       <td>Pingyao 9:35am</td>
                       <td>9 h 44m</td>
                       <td>102/-</td>
                       <td>178/184/190</td>
                       <td>274/285</td>
                   </tr>
                </tbody>
             </table>
          </div>
          
       <div class="chinamenu" style="margin-top:15px;">
         <ul>
            <li class="dq" style="cursor:default;"><strong>Pingyao to Beijing Train Schedule &amp; Fares</strong><span></span></li>
         </ul>
       </div>
       <div class="datong">
             <table width="100%" border="0" cellspacing="0" cellpadding="0">
            	<tbody>
                   <tr class="top_datong">
                       <td width="11%">Train No.</td>
                     <td width="17%">Departs</td>
                       <td width="14%">Arrives</td>
                     <td width="10%">Duration</td>
                     <td width="11%">Seat Fares<br />(CNY Yuan)</td>
                       <td width="19%">Hard Sleeper Fares<br />(CNY Yuan)</td>
                     <td width="18%">Soft Sleeper Fares<br />(CNY Yuan)</td>
                   </tr>
                   <tr>
                       <td>2604/2601</td>
                       <td>Pingyao 1:11pm</td>
                       <td>Beijing 3:56am</td>
                       <td>14 h 45m</td>
                       <td>98/-</td>
                       <td>180/186/194</td>
                       <td>287/301</td>
                   </tr>
                   <tr>
                       <td>K604</td>
                       <td>Pingyao 5:25pm</td>
                       <td>Beijing 5:37am</td>
                       <td>12 h 12m</td>
                       <td>93/-</td>
                       <td>163/168/174</td>
                       <td>251/263</td>
                   </tr>
                   <tr>
                       <td>K610</td>
                       <td>Pingyao 10:32pm</td>
                       <td>Beijing 6:09am</td>
                       <td>9 h 37m</td>
                       <td>102/-</td>
                       <td>178/184/190</td>
                       <td>274/285</td>
                   </tr>
                </tbody>
             </table>
          </div> 
       
       
       <div class="chinamenu" style="margin-top:15px;">
         <ul>
            <li class="dq" style="cursor:default;"><strong>Beijing to Taiyuan High Speed Train Schedules &amp; Fares</strong><span></span></li>
         </ul>
       </div>
       <div class="datong">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            	<tbody>
                   <tr class="top_datong">
                       <td>Train No.</td>
                       <td>Departs</td>
                       <td>Arrives</td>
                       <td>Duration</td>
                       <td>2nd Class Seat Fares<br />(CNY Yuan)</td>
                       <td>1st Class Seat Fares<br />(CNY Yuan)</td>
                       <td>Business Class or Special Class Seat Fares<br />(CNY Yuan)</td>
                   </tr>
                   <tr>
                       <td>D2001</td>
                       <td>Beijing West 7:10am</td>
                       <td>Taiyuan 10:31am</td>
                       <td>3 h 21m</td>
                       <td>152</td>
                       <td>217</td>
                       <td>-</td>
                   </tr>
                   <tr>
                       <td>G601</td>
                       <td>Beijing West 7:35am</td>
                       <td>Taiyuan 10:20am</td>
                       <td>2 h 45m</td>
                       <td>194</td>
                       <td>285</td>
                       <td>605</td>
                   </tr>
                   <tr>
                       <td>G91</td>
                       <td>Beijing West 8:30am</td>
                       <td>Taiyuan 11:00am</td>
                       <td>2 h 30m</td>
                       <td>194</td>
                       <td>285</td>
                       <td>364</td>
                   </tr>
                   <tr>
                       <td>G603</td>
                       <td>Beijing West 9:15am</td>
                       <td>Taiyuan 12:08pm</td>
                       <td>2 h 53m</td>
                       <td>194</td>
                       <td>285</td>
                       <td>605</td>
                   </tr>
                   <tr>
                       <td>G605</td>
                       <td>Beijing West 10:15am</td>
                       <td>Taiyuan 1:07pm</td>
                       <td>2 h 52m</td>
                       <td>194</td>
                       <td>285</td>
                       <td>605</td>
                   </tr>
                   <tr>
                       <td>G607</td>
                       <td>Beijing West 11:32am</td>
                       <td>Taiyuan 2:17pm</td>
                       <td>2 h 45m</td>
                       <td>194</td>
                       <td>285</td>
                       <td>605</td>
                   </tr>
                   <tr>
                       <td>D2003</td>
                       <td>Beijing West 1:19pm</td>
                       <td>Taiyuan 4:46pm</td>
                       <td>3 h 27m</td>
                       <td>152</td>
                       <td>217</td>
                       <td>-</td>
                   </tr>
                   <tr>
                       <td>G609</td>
                       <td>Beijing West 3:08pm</td>
                       <td>Taiyuan 6:03pm</td>
                       <td>2 h 55m</td>
                       <td>194</td>
                       <td>285</td>
                       <td>364</td>
                   </tr>
                   <tr>
                       <td>D2005</td>
                       <td>Beijing West 3:29pm</td>
                       <td>Taiyuan 6:43pm</td>
                       <td>3 h 14m</td>
                       <td>152</td>
                       <td>217</td>
                       <td>-</td>
                   </tr>
                   <tr>
                       <td>G611</td>
                       <td>Beijing West 5:00pm</td>
                       <td>Taiyuan 7:54pm</td>
                       <td>2 h 54m</td>
                       <td>194</td>
                       <td>285</td>
                       <td>605</td>
                   </tr>
                   <tr>
                       <td>G613</td>
                       <td>Beijing West 5:56pm</td>
                       <td>Taiyuan 8:43pm</td>
                       <td>2 h 47m</td>
                       <td>194</td>
                       <td>285</td>
                       <td>605</td>
                   </tr>
                   <tr>
                       <td>G615</td>
                       <td>Beijing West 8:21pm</td>
                       <td>Taiyuan 11:13pm</td>
                       <td>2 h 52m</td>
                       <td>194</td>
                       <td>285</td>
                       <td>605</td>
                   </tr>
                </tbody>
             </table>
          </div>
          
       <div class="chinamenu" style="margin-top:15px;">
         <ul>
            <li class="dq" style="cursor:default;"><strong>Taiyuan to Beijing High Speed Train Schedules &amp; Fares</strong><span></span></li>
         </ul>
       </div>
       <div class="datong">
             <table width="100%" border="0" cellspacing="0" cellpadding="0">
            	<tbody>
                   <tr class="top_datong">
                      <td>Train No.</td>
                       <td>Departs</td>
                       <td>Arrives</td>
                       <td>Duration</td>
                       <td>2nd Class Seat Fares<br />(CNY Yuan)</td>
                       <td>1st Class Seat Fares<br />(CNY Yuan)</td>
                       <td>Business Class or Special Class Seat Fares<br />(CNY Yuan)</td>
                   </tr>
                   <tr>
                       <td>G602</td>
                       <td>Taiyuan 7:07am</td>
                       <td>Beijing West 9:53am</td>
                       <td>2 h 46m</td>
                       <td>194</td>
                       <td>285</td>
                       <td>605</td>
                   </tr>
                   <tr>
                       <td>G92</td>
                       <td>Taiyuan 8:30am</td>
                       <td>Beijing West 11:00am</td>
                       <td>2 h 30m</td>
                       <td>194</td>
                       <td>285</td>
                       <td>-</td>
                   </tr>
                   <tr>
                       <td>D2002</td>
                       <td>Taiyuan 9:10am</td>
                       <td>Beijing West 12:59pm</td>
                       <td>3 h 49m</td>
                       <td>152</td>
                       <td>217</td>
                       <td>-</td>
                   </tr>
                   <tr>
                       <td>D2004</td>
                       <td>Taiyuan 11:11am</td>
                       <td>Beijing West 2:56pm</td>
                       <td>3 h 45m</td>
                       <td>152</td>
                       <td>217</td>
                       <td>-</td>
                   </tr>
                   <tr>
                       <td>G604</td>
                       <td>Taiyuan 11:40am</td>
                       <td>Beijing West 2:35pm</td>
                       <td>2 h 55m</td>
                       <td>194</td>
                       <td>285</td>
                       <td>364</td>
                   </tr>
                   <tr>
                       <td>G606</td>
                       <td>Taiyuan 12:41pm</td>
                       <td>Beijing West 3:28pm</td>
                       <td>2 h 47m</td>
                       <td>194</td>
                       <td>285</td>
                       <td>605</td>
                   </tr>
                   <tr>
                       <td>G608</td>
                       <td>Taiyuan 1:43pm</td>
                       <td>Beijing West 4:38pm</td>
                       <td>2 h 55m</td>
                       <td>194</td>
                       <td>285</td>
                       <td>605</td>
                   </tr>
                   <tr>
                       <td>G610</td>
                       <td>Taiyuan 2:38pm</td>
                       <td>Beijing West 5:24pm</td>
                       <td>2 h 46m</td>
                       <td>194</td>
                       <td>285</td>
                       <td>605</td>
                   </tr>
                   <tr>
                       <td>D2006</td>
                       <td>Taiyuan 5:15pm</td>
                       <td>Beijing West 9:14pm</td>
                       <td>3 h 59m</td>
                       <td>152</td>
                       <td>217</td>
                       <td>-</td>
                   </tr>
                   <tr>
                       <td>G612</td>
                       <td>Taiyuan 6:06pm</td>
                       <td>Beijing West 8:57pm</td>
                       <td>2 h 51m</td>
                       <td>194</td>
                       <td>285</td>
                       <td>605</td>
                   </tr>
                   <tr>
                       <td>G614</td>
                       <td>Taiyuan 6:32pm</td>
                       <td>Beijing West 9:40pm</td>
                       <td>3 h 8m</td>
                       <td>194</td>
                       <td>285</td>
                       <td>605</td>
                   </tr>
                   <tr>
                       <td>G616</td>
                       <td>Taiyuan 8:14pm</td>
                       <td>Beijing West 11:14pm</td>
                       <td>3 h</td>
                       <td>194</td>
                       <td>285</td>
                       <td>605</td>
                   </tr>
                </tbody>
             </table>
          </div>   
      </div>
      <!-- add_pingyao end -->
    <?php endif;?>
</div>
<!--  left end  -->

<!--  right start  -->
<div id="rightnew">
  <!-- <div class="right_list">
      <h2>Beijing Day Tours</h2>
      <ul>
         <li><span></span><a href="/travel/search-beijing-tours?days=1+Day">&gt; 1-Day Beijing Tour</a></li>
         <li><span></span><a href="/travel/search-beijing-tours?days=2+days">&gt; 2-Days Beijing Tour</a></li>
         <li><span></span><a href="/travel/search-beijing-tours?days=3+Days">&gt; 3-Days Beijing Tour</a></li>
         <li><span></span><a href="/travel/search-beijing-tours?days=4+Days">&gt; 4-Days Beijing Tour</a></li>
         <li class="tesu"><img src="/images/beijingtours/new/tesu.jpg" alt="" /></li>
      </ul>
   </div>  -->
   <div class="right_list">
      <h2>Beijing City &amp; Side Tour</h2>
      <ul>
         <li><a href="/travel/search-beijing-tours?tour_type=1_Private+Tours">&gt; Beijing Private Tours</a></li>
         <li><a href="/travel/search-beijing-tours?tour_type=2_Join+Groups">&gt; Beijin Coach Tours</a></li>
         <li><a href="/travel/beijing-xian-tours">&gt; Beijing Xian Tours</a></li>
         <li><a href="/travel/beijing-shanghai-tours">&gt; Beijing Shanghai Tours</a></li>
         <li><a href="/travel/cruise-port/tianjin-port-port-excursion-5">&gt; Tianjin Port Beijing Excursion</a></li>
         <li><a href="/travel/search-beijing-tours?des=9_Beijing+Tianjin+Tours">&gt; Beijing Tianjin Tours</a></li>
         <li><a href="/travel/search-beijing-tours?des=8_Beijing+Chengde+Tours">&gt; Beijng Chengde Tours</a></li>
         <li><a href="/travel/beijing-xian-shanghai-tours">&gt; Beijing Xian Shanghai Tours</a></li>
         <li><a href="/travel/beijing-side-trips">&gt; More Beijing Side Tours</a></li>
      </ul>
     </div>

<?php $des = (int)$_GET['des']; ?>
  <?php if($des == 6):?>
     <!-- datong guide list -->
     <div class="right_list">
      <h2>Datong Guide</h2>
      <ul>
        <li><a href="/travel/china-datong-facts-guide-42">&gt; Datong Facts</a></li>
        <li><a href="/travel/china-datong-attractions">&gt; Datong Attractions</a></li>
        <li><a href="/travel/city-datong-tours">&gt; Datong Tours</a></li>
        <li><a href="/travel/datong-hotels-95">&gt; Datong Hotel</a></li>
        <li><a href="/datong/map.html">&gt; Datong Maps</a></li>
        <li><a href="/travel/china-datong-climate-guide-266">&gt; Datong Climate</a></li>
        <li><a href="/travel/china-datong-transportations-guide-264">&gt; Transportations</a></li>
        <li><a href="/travel/china-datong-travel-tips-guide-265">&gt; Datong Travel Tips</a></li>
        <li><a href="/travel/china-datong-food-restaurants-guide-41">&gt; Food &amp; Restaurants</a></li>
        <li><a href="/travel/china-datong-nightlife-guide-43">&gt; Datong Nightlife</a></li>
     </ul>
   </div>
 <?php endif;?>

<?php if($des == 19):?>
   <!-- pingyao guide list -->
     <div class="right_list">
      <h2>Pingyao Guide</h2>
      <ul>
        <li><a href="/travel/china-pingyao-facts-guide-42">&gt; Pingyao Facts</a></li>
        <li><a href="/travel/china-pingyao-attractions">&gt; Pingyao Attractions</a></li>
        <li><a href="/travel/city-pingyao-tours">&gt; Pingyao Tours</a></li>
        <li><a href="/travel/pingyao-hotels-96">&gt; Pingyao Hotel</a></li>
        <li><a href="/pingyao/map.html">&gt; Pingyao Maps</a></li>
        <li><a href="/travel/china-pingyao-climate-guide-266">&gt; Pingyao Climate</a></li>
        <li><a href="/travel/china-pingyao-transportations-guide-264">&gt; Transportations</a></li>
        <li><a href="/travel/china-pingyao-travel-tips-guide-265">&gt; Pingyao Travel Tips</a></li>
        <li><a href="/travel/china-pingyao-food-restaurants-guide-41">&gt; Food &amp; Restaurants</a></li>
        <li><a href="/travel/china-pingyao-nightlife-guide-43">&gt; Pingyao Nightlife</a></li>
    </ul>
   </div>
<?php endif;?>  
   <div id="right">
       <div class="tripcont"><a href="/index.php?option=com_diytour"><img src="/images/beijingtours/new/diy.jpg" alt="" /></a></div>
       <?php $this->renderPartial("_message");?>   
       <div class="tripcont">
           <div id="TA_selfserveprop475" class="TA_selfserveprop">
<ul id="l6BhK7bvATl" class="TA_links g2MkIx9">
<li id="w6TX2X" class="GN8ZBPkFh">
<a target="_blank" href="http://www.tripadvisor.com/"><img src="http://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a>
</li>
</ul>
</div>
<script src="http://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=475&amp;locationId=3824010&amp;lang=en_US&amp;rating=true&amp;nreviews=2&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true"></script>
       </div>
    </div>
</div>
<!--  right end  -->
</div>
<!-- Google Code for &#30331;&#24405;&#36807;BEIJING TOURS -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1001932638;
var google_conversion_label = "xYT9COLs_AIQ3o7h3QM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1001932638/?value=1.000000&amp;label=xYT9COLs_AIQ3o7h3QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
