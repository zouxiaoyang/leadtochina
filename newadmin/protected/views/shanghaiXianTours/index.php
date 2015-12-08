<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/shanghai.css'); 

?>
<style type="text/css">
<!--
.errorMessage{display:none}
#content{ width:926px; height:auto; padding:10px 21px 10px 14px;}
#left{ width:170px; height:auto; float:left; margin-top:15px; padding:0px 3px 15px 0px;}
#right{ width:737px; height:auto; float:right; margin-top:15px;}
.rightlist h2{ width:163px; height:25px; background:#999999; border-left:4px solid #8c4600; color:#fff; font-size:14px; font-weight:normal; padding-left:3px; line-height:25px; display:block; white-space:nowrap; text-shadow:1px 0px 0px #666;}
.rightlist ul{width:150px;}
#CDSWIDSSP .widSSPData{ width:160px; padding: 7px 4px;}
#CDSWIDSSP.widSSPnarrow .widSSPData .widSSPBranding dd{ width:153px;}
#CDSWIDSSP .widSSPData .widSSPAll .widSSPWriteReview{ padding-left:4px; margin-top:4px;}
#CDSWIDSSP .widSSPData .widSSPH18{ font-size:14px;}
-->
</style>
<!--  index1 start  -->
<div id="index1">
   <!--  menu-tours start  -->
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> Shanghai Xian Tours</div>
   <!--  menu-tours end  -->
   <div id="banner"><img src="/images/beijing_shanghai/banner5.jpg" alt="" /></div> 

    <!--  right start  -->
    <div id="right">
         <!--  text start  -->
         <div class="textnew">
           <div class="textleftnew">
              <h2>Shanghai Xian Tours</h2>
              <p>While Shanghai is the commercial center of China, Xian is one of China's six major ancient capitals. The most famous attractions there is Terra-cotta Warriors. The flights between Shanghai and Xian are plentiful, which only take 2 hours, making it possible for you to take one day round trip from Shanghai to Xian. The fast trains between Shanghai and Xian are an overnight train which means you can save you one night accommodation for Shanghai-Xian train travel.</p>
            </div>
            <div class="callbutton"><a href="/index.php?option=com_diy&template=customize_index"><img src="/images/beijing_shanghai/call.png"></a></div>
        </div>
        <!--  text end  -->
        
        <div class="tab-menu">
           <ul>
             <li onclick="_cityTours.changeTab(this,1);" class="dq"><strong>Best Selling Shanghai Xian Tours</strong><span></span></li>
           </ul>
        </div>
        
        <!--  toplist start  -->
        <div id="c01">
        <div class="toplist">
            <div class="listtwo">
               <ul>
                  <li><a href="/travel/china-1-day-shanghai-xian-tour-by-flight-731.html"><img src="/images/beijing_shanghai/top4.png" alt="" ></a></li>
                  <li>
                      <ol>
                          <li><a href="/travel/china-1-day-shanghai-xian-tour-by-flight-731.html">1 Day Shanghai Xian Tour by Round Flight</a></li>
                          <li>· Terra-cotta Warriors</li>
                          <li>· Ancient City Wall</li>
                          <li>· Private Guide  &amp; Vehicle</li>
                          <li class="price">From <strong>$475</strong> P/P</li>
                      </ol>
                  </li>
               </ul>
           </div>
           <div class="listtwo">
               <ul>
                  <li><a href="/travel/china-2-days-shanghai-xian-tour-733.html"><img src="/images/beijing_shanghai/top7.png" alt="" ></a></li>
                  <li>
                      <ol>
                          <li><a href="/travel/china-2-days-shanghai-xian-tour-733.html">2 Days Shanghai Xian Tour by Round Flight</a></li>
                          <li>· Terra-cotta Warriors</li>
                          <li>· Ancient City Wall</li>
                          <li>· Big Wild Goose Pagoda</li>
                          <li>· Shaanxi Provincial Museum</li>
                          <li class="price">From <strong>$590</strong> P/P</li>
                      </ol>
                  </li>
               </ul>
           </div>
           <div class="listtwo" style="margin-right:0px;">
               <ul>
                  <li><a href="/travel/china-5-days-shanghai-and-xian-relax-tour-838.html"><img src="/images/beijing_shanghai/top8.png" alt="" ></a></li>
                  <li>
                      <ol>
                          <li><a href="/travel/china-5-days-shanghai-and-xian-relax-tour-838.html">5 Days Shanghai and Xian Tour</a></li>
                          <li>· the Bund &amp; Yu Garden</li>
                          <li>· Jade Buddha Temple</li>
                          <li>· Terracotta Warriors</li>
                          <li>· Ancient City Wall</li>
                          <li class="price">From <strong>$990</strong> P/P</li>
                      </ol>
                  </li>
               </ul>
           </div>
        </div>
        </div>
        <!--  toplist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlist1">
           <h2>Xian Tours from Shanghai</h2>
           <div class="listpic1"><img src="/images/beijing_shanghai/pic011.jpg" alt="" ></div>
           <div class="listcontent1"><p>Xian Tour Packages from Shanghai by flight or train. Best way to enjoy Xian sightseeing including Shaanxi Provincial History Museum, Xian Ancient City Wall, The Bell Tower, Forest of Stone Steles Museum, the Terra-cotta Warriors and Banpo Museum and many more.</p></div>
           <div class="listul">
            
              <ul>    
                       <li class="name">By Flight</li>
                       <?php 
                          $tour_ids = '731,733,734,735,736';
                          $tours = ToursPackage::model()->findAll(array(
                           'select' => 'id,name,attractions',
                           'condition' => "id in($tour_ids)"
                          ));
                        ?>
                      <?php foreach($tours as $v):?>
                        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a>
                           <span><strong>FEATURES:</strong><?php echo $v->attractions;?></span>
                        </li>
                      <?php endforeach;?>
                       
                       <li class="name">By Train</li>
                       <?php
                        $tour_ids = '512,732';
                        $tours = ToursPackage::model()->findAll(array(
                         'select' => 'id,name,attractions',
                         'condition' => "id in($tour_ids)"
                        ));
                      ?>
                       <?php foreach($tours as $v):?>
                        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a>
                           <span><strong>FEATURES:</strong><?php echo $v->attractions;?></span>
                        </li>
                      <?php endforeach;?>

                       <li class="name">Excursions Started from Shanghai Cruise Port</li>
                       <?php
                        $tour_ids = '1037,1038';
                        $tours = ToursPackage::model()->findAll(array(
                         'select' => 'id,name,attractions',
                         'condition' => "id in($tour_ids)"
                        ));
                      ?>
                       <?php foreach($tours as $v):?>
                        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a>
                           <span><strong>FEATURES:</strong><?php echo $v->attractions;?></span>
                        </li>
                      <?php endforeach;?>
                    </ul>
           </div>
        </div>
        <!--  tourlist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlist1">
           <h2>Shanghai Tours from Xian</h2>
           <div class="listpic1"><img src="/images/beijing_shanghai/pic012.jpg" alt="" ></div>
           <div class="listcontent1"><p>Shanghai Tours from Xian by flight, Shanghai city &amp; side tours from Xian by train / flight are very convenient. You may customize Shanghai Suzhou Hangzhou Zhouzhuang tours from our help.</p></div>
           <div class="listul">
              <ul>
                      <?php 
                        $tour_ids = '841,842,843';
                        $tours = ToursPackage::model()->findAll(array(
                         'select' => 'id,name,attractions',
                         'condition' => "id in($tour_ids)"
                        ));
                      ?>
                       <?php foreach($tours as $v):?>
                        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a>
                           <span><strong>FEATURES:</strong><?php echo $v->attractions;?></span>
                        </li>
                      <?php endforeach;?>
              </ul>
           </div>
        </div>
        <!--  tourlist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlist1">
           <h2>Shanghai &amp; Xian Tours</h2>
           <div class="listpic1"><img src="/images/beijing_shanghai/pic013.jpg" alt="" ></div>
           <div class="listcontent1"><p>While Shanghai is the commercial center of China, Xian is one of China's six major ancient capitals, where it had been the ancient capital for 6 successive dynasties for over 1000 years. Visiting Xi'an will add much value to your Shanghai China trip, giving you a clear and better picture of China as a whole.</p></div>
           <div class="listul">
              <ul>
                      <?php 
                        $tour_ids = '844,838,840,513';
                        $tours = ToursPackage::model()->findAll(array(
                         'select' => 'id,name,attractions',
                         'condition' => "id in($tour_ids)"
                        ));
                      ?>
                       <?php foreach($tours as $v):?>
                        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a>
                           <span><strong>FEATURES:</strong><?php echo $v->attractions;?></span>
                        </li>
                      <?php endforeach;?>
              </ul>
           </div>
        </div>
        <!--  tourlist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlist1">
           <h2><strong>Xian City &amp; Side Tour</strong> <a href="/travel/city-xian-tours"><img src="/images/beijing_shanghai/more.png" alt="" ></a></h2>
           <div class="listpic1"><img src="/images/beijing_shanghai/pic014.jpg" alt="" ></div>
           <div class="listcontent1"><p>Xian is the capital of Shaanxi Province and the biggest city in the northwest of China. It boasts a mild climate, fertile soil, beautiful scenery, abundant products, and numerous historical relics and sites. It was also the first stop on the Silk Road, linking up the oriental and western civilizations. We are offering you various Xian city and side tours with best service.</p></div>
           <div class="listul">
              <ul>
                      <?php 
                        $tour_ids = '559,570,563,160,154,327';
                        $tours = ToursPackage::model()->findAll(array(
                         'select' => 'id,name,attractions',
                         'condition' => "id in($tour_ids)"
                        ));
                      ?>
                       <?php foreach($tours as $v):?>
                        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a>
                           <span><strong>FEATURES:</strong><?php echo $v->attractions;?></span>
                        </li>
                      <?php endforeach;?>
              </ul>
           </div>
        </div>
        <!--  tourlist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlist1">
           <h2><strong>Shanghai City &amp; Side Tours</strong> <a href="/travel/city-shanghai-tours"><img src="/images/beijing_shanghai/more.png" alt="" ></a></h2>
           <div class="listpic1"><img src="/images/beijing_shanghai/pic015.jpg" alt="" ></div>
           <div class="listcontent1"><p>As one of the top tourist cities and most dynamic metropolis in China, Shanghai city tour and tours from Shanghai are very popular. It is convenient to travel from Shanghai to Beijing, Xian, Yangtze River, Guilin, Hangzhou, Suzhou...If you can not find one you like, you can also tailor-made Shanghai travel freely.</p></div>
           <div class="listul">
              <ul>
                      <?php 
                        $tour_ids = '148,156,124,583,155,734,701';
                        $tours = ToursPackage::model()->findAll(array(
                         'select' => 'id,name,attractions',
                         'condition' => "id in($tour_ids)"
                        ));
                      ?>
                       <?php foreach($tours as $v):?>
                        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a>
                           <span><strong>FEATURES:</strong><?php echo $v->attractions;?></span>
                        </li>
                      <?php endforeach;?>
                     
              </ul>
           </div>
        </div>
        <!--  tourlist end  -->
        
        <!--  questions start  -->
        <div class="questionsnew">
           <h2><img src="/images/citytours/palnning.jpg" alt="" /></h2>
           <div class="questionscont">
              <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr>
                    <td colspan="2">
                    	<textarea name="message" cols="" rows="">&nbsp;</textarea>
                    	<span class="qmessage_error errorMessage">It can't be blank.</span>
                    </td> 
                  </tr>
                  <tr>
                    <td colspan="2">
                    <input style="width:auto; height:auto;" type="checkbox" checked="checked" value="" name=""> Do you want to book a tour / hotel / flights.etc</td>
                  </tr>
                  <tr>
                    <td>Your Name: <input name="username" type="text" />
                    <span class="qusername_error errorMessage">It can't be blank.</span></td>
                    <td>E-mail: <input name="email" type="text" />
                    <span class="qemail_error errorMessage">Please enter correct email.</span>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2"> <input type="button" onclick="_cityTours.submitMessage(this);" class="form_button" style="height:40px;border:0px;cursor:pointer;background:url(/images/view/submit.png) left center no-repeat; dispaly:block; width:221px;" name="yt0" value=""> </td>
                  </tr> 
                </tbody>
              </table>

           </div>
        </div>
        <!--  questions end  -->
    </div>
    <!--  right end  -->
    <!--  left start  -->
    <div id="left">
        <!--  list start  -->
        <div class="rightlist">
           <!-- <h2 style="height:23px;"><img src="/images/beijing_shanghai/title015.jpg" alt="" /></h2> -->
           <h2>Shanghai Xian Tours</h2>
           <ul>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiXianTours/search', array("title"=>'xian-tours-from-shanghai'));?>">Xian Tours from Shanghai</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiXianTours/search', array("title"=>'shanghai-tours-from-xian'));?>">Shanghai Tours from Xian</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiXianTours/search', array("title"=>'shanghai-xian-tours'));?>">Shanghai and Xian Tours</a></li>
           </ul>
           <!-- <h2 style="height:23px;"><img src="/images/beijing_shanghai/title016.jpg" alt="" /></h2> -->
           <h2>Xian Tours</h2>
           <ul>
               <li><a href="/travel/city-xian-tours">Terra-cotta Warriors</a></li>
               <li><a href="/travel/city-xian-tours#xian-private-tour">Xian Private Tours</a></li>
               <li><a href="/travel/city-xian-tours#xian-group-tour">Xian Group Tours</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiXianTours/search', array("title"=>'xian-side-tours'));?>">Xian Side Tours</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('beijingXianTours/index');?>">Beijing Xian Tours</a></li>
           </ul>
           <!-- <h2 style="height:23px;"><img src="/images/beijing_shanghai/title03.jpg" alt="" /></h2> -->
           <h2>Shanghai Tours</h2>
           <ul>
               <li><a href="/travel/city-shanghai-tours">Shanghai City Tours</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiXianTours/search', array("title"=>'shanghai-side-tours'));?>">Shanghai Side Tours</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiBeijingTours/index');?>">Beijing Shanghai Tours</a></li>
               <li><a href="/travel/china-search?starting_city=shanghai#result">China Tours from Shanghai</a></li>
               <li><a href="/travel/cruise-port/shanghai-port-port-excursion-6">Shanghai Port Excursion</a></li>
            </ul>
        </div>
        <!--  list end  -->
        <div class="tripcontent">
        <div id="TA_selfserveprop799" class="TA_selfserveprop">
<ul id="vdOR3kv" class="TA_links nxpFftqNU">
<li id="rObcNYyLZ2c" class="ecPLYkyiUu">25 reviews of <a target="_blank" href="http://www.tripadvisor.com/Attraction_Review-g297403-d3824010-Reviews-Lead_to_China_tours-Hefei_Anhui.html">Lead to China tours</a> in Hefei</li>
</ul>
</div>
<script src="http://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=799&amp;locationId=3824010&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true"></script>  
    </div>
        
    </div>
    <!--  left end  -->
</div>
<!--  index end  -->
<?php echo $this->renderPartial("//common/pop_more_cities");?>

