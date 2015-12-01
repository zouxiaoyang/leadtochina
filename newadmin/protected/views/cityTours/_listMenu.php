 <div class="list1">
    <div class="first1">
       <h2>Beijing Tour Services</h2>
       <ul>
          <li><a href="<?php echo $request_uri.'tour_type=1_Private+Tours';?>">Beijing Private Tour</a></li>
          <li><a href="<?php echo $request_uri.'tour_type=2_Join+Groups';?>">Beijing Group Tour</a></li>
          <li><a href="/beijing/tours?v=list&id=1">Great Wall Tours</a></li>
          <li><a href="<?php echo Yii::app()->createUrl('CruisePorts/index');?>#tianjinPort" target="_blank">Tianjin Cruise to Beijing Tour</a></li>
       </ul>
    </div>
    <div class="second">
       <h2>Beijing Side Tours</h2>
       <ul>
          <li><a href="<?php echo Yii::app()->createUrl('beijingXianTours/index');?>">Beijing Xian Tours</a></li>
          <li><a href="<?php echo Yii::app()->createUrl('shanghaiBeijingTours/index');?>">Beijing Shanghai Tours</a></li>
          <li><a href="<?php echo $request_uri.'des=9_Beijing+Tianjin+Tours';?>">Beijing Tianjin Tours</a></li>
          <li><a href="<?php echo $request_uri.'des=8_Beijing+Chengde+Tours';?>">Beijng Chengde Tours</a></li>
          <li><a href="/travel/beijing-xian-shanghai-tours">Beijing Xian Shanghai Tours</a></li>
       </ul>
       <h2>Beijing Theme Tours</h2>
       <ul>
           <li><a href="<?php echo $request_uri.'theme=12_World+Heritage';?>">Beijing World Heritage Tour</a></li>
           <li><a href="<?php echo $request_uri.'theme=37_Local+Feature';?>">Beijing Local Feature Tour</a></li>
           <li><a href="<?php echo $request_uri.'theme=63_Season+Tours';?>">Beijing Season Tours</a></li>
           <li><a href="<?php echo $request_uri.'theme=110_Beijing+Musilm+Tour';?>">Beijing Muslim Tours</a></li>
           <li><a href="<?php echo $request_uri.'theme=113_72+Hours+Visa+Free+Tour';?>">72 Hours Visa Free Tour</a></li>  
       </ul>
    </div>
    <div class="list-bottom"></div>
 </div>
