<?php $action_name=Yii::app()->getController()->getAction()->id;?>
    <!-- adoption-left start -->
        <div id="adoption-left">
            <div class="listtop"><img src="/images/adoption/listtop.png" alt="" /></div>
            <!-- list-index start -->
            <div class="list-index">
                <ul>
                    <li class="big"><a href="<?php echo Yii::app()->createUrl('adoption/index')?>">China Adoption Travel</a></li>
                    <li>
                        <ol>
                           <li><a href="<?php echo Yii::app()->createUrl('adoption/preadoption')?>">Pre-adoption Travel</a></li>
                           <li><a href="<?php echo Yii::app()->createUrl('adoption/homeland')?>">Homeland Tour</a></li>
                           <li><a href="<?php echo Yii::app()->createUrl('adoption/themetours')?>">Theme Tours</a></li>
                           <li><a href="/travel/china-diy-tours" target="_blank">Customize Tour</a></li>
                        </ol>
                    </li>
                    <li class="big"><a href="<?php echo Yii::app()->createUrl('adoption/chinaguide')?>">China Guide</a></li>
                    <li>
                        <ol>
                           <li><a href="<?php echo Yii::app()->createUrl('adoption/chinaguideview',array('id'=>124));?>">Chinese Holidays</a></li>
                           <li><a href="/climate/" target="_blank">Temperature Guide</a></li>
                           <li><a href="<?php echo Yii::app()->createUrl('adoption/chinaguideview',array('id'=>122));?>">China Visa</a></li>
                           <li><a href="<?php echo Yii::app()->createUrl('adoption/chinaguideview',array('id'=>128));?>">China Welfare Houses</a></li>
                        </ol>
                    </li>
                    <li class="big"><a href="<?php echo Yii::app()->createUrl('adoption/tipstravel')?>">Adoption Travel Tips</a></li>
                    <li>
                        <ol>
                           <li><a href="<?php echo Yii::app()->createUrl('adoption/tipstravel')?>">Tips for Tour with Kids</a></li>
                           <li><a href="<?php echo Yii::app()->createUrl('adoption/chinaguideview',array('id'=>127));?>">Travel Preparations</a></li>
                           <li><a href="<?php echo Yii::app()->createUrl('adoption/chinaguideview',array('id'=>130));?>">Travel Docs Required</a></li>
                        </ol>
                    </li>
                </ul>
            </div>
            <!-- list-index end -->
            <div class="listbottom"><img src="/images/adoption/listbottom.png" alt="" /></div>
            <div class="save"><img src="/images/adoption/save.png" alt="" /></div>        
        </div>
        <!-- adoption-left end -->
        
