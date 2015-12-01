 <ul>
   <li <?php if(Yii::app()->getController()->action->id == "earlyBirdDiscounts"):?>class="dq"<?php endif;?>><a href="<?php echo Yii::app()->createUrl('promotion/earlyBirdDiscounts');?>">Early Bird Discounts</a><span></span></li>
   <li <?php if(Yii::app()->getController()->action->id == "payViaPaypal"):?>class="dq"<?php endif;?>><a href="<?php echo Yii::app()->createUrl('promotion/payViaPaypal');?>">Pay Via Paypal</a><span></span></li>
   <li <?php if(Yii::app()->getController()->action->id == "regularCustomers"):?>class="dq"<?php endif;?>><a href="<?php echo Yii::app()->createUrl('promotion/regularCustomers');?>">Regular Customers</a><span></span></li>
   <li <?php if(Yii::app()->getController()->action->id == "beFaceBookFan"):?>class="dq"<?php endif;?>><a href="<?php echo Yii::app()->createUrl('promotion/beFaceBookFan');?>">Be Face Book Fan</a><span></span></li>
   <li <?php if(Yii::app()->getController()->action->id == "monthlySpecialOffer"):?>class="dq"<?php endif;?>><a href="<?php echo Yii::app()->createUrl('promotion/monthlySpecialOffer');?>">Monthly Special Offer</a><span></span></li>
   <li <?php if(Yii::app()->getController()->action->id == "themeActivities"):?>class="dq"<?php endif;?>><a href="<?php echo Yii::app()->createUrl('promotion/themeActivities');?>">Theme Activities</a><span></span></li>                         
</ul>