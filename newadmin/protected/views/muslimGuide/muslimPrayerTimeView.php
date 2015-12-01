<?php $month=$_GET['month']?$_GET['month']:1;?>
<link rel="stylesheet" type="text/css" href="/travel/css/muslim.css" />
<div id="banner1"><img src="/images/muslim/banner4.jpg" alt="" /></div>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('muslimTour/index')?>">Muslim Tours</a> <?php echo ucfirst($_GET['title']);?> Prayer Time</div>

<div id="left-muslim">
   <?php $this->renderPartial("/muslimTour/_leftMenu");?>
   <?php //$this->renderPartial('/message/_hotelMessageForm',array('model'=>$message));?>
</div>

<div id="right-muslim">
   <div class="text1">
        <h3>Prayer Schedule in <?php echo ucfirst($_GET['title']);?> of 2013</h3>
            <ul class="y">
                <?php foreach (MuslimPrayerTime::$months as $k=>$v):?>
                <li><a <?php if($k==$month):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('muslimGuide/muslimPrayerTimeView', array('month'=>$k,'title'=>$_GET['title']));?>"><?php echo $v;?></a></li>
                <?php endforeach;?>
            </ul>
					<div id="printAreainfo">
 					 <table cellspacing="0" cellpadding="0">
             <tbody>
                <tr> 
                  <th bgcolor="#FFFFFF">Date</th> 
                  <th bgcolor="#FFFFFF">Day</th>
                  <th bgcolor="#FFFFFF">Fajr</th>
                  <th bgcolor="#FFFFFF">Sunrise</th>
                  <th bgcolor="#FFFFFF">Dhuhr</th>
                  <th bgcolor="#FFFFFF">Asr</th>
                  <th bgcolor="#FFFFFF">Maghrib</th>
                  <th bgcolor="#FFFFFF">Isha</th>
               </tr>
               <?php foreach ($prayerTimeList as $k=>$v):?>
               <tr <?php if($v->date%2==0):?>bgcolor="#F5F5F5"<?php else:?>bgcolor="#ffffff"<?php endif;?>>
                  <td><?php echo $v->date;?></td>
                  <td><?php echo $v->day;?></td>
                  <td><?php echo $v->fajr;?></td>
                  <td><?php echo $v->sunrise;?></td>
                  <td><?php echo $v->dhuhr;?></td>
                  <td><?php echo $v->asr;?></td>
                  <td><?php echo $v->maghrib;?></td>
                  <td><?php echo $v->lsha;?></td>
               </tr>
							 <?php endforeach;?>
          </tbody>
       </table>
     </div>  
     <div class="blank10"></div>
    </div>
  <?php $this->renderPartial('_muslimPrayerTimeCity');?>
</div>
</div>
