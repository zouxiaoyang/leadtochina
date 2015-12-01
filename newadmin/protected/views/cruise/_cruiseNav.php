  <div class="cruise_menu">
		<ul>
			<li><a <?php if(Yii::app()->getController()->action->id == "cruiseOverview"):?> class="dq" <?php endif;?> href="<?php echo Yii::app()->createUrl("cruise/cruiseOverview", array('id'=>$model->id,'name'=>SiteUtils::stringURLSafe($model->cruise_name)));?>">Overview</a></li>
			<li><a  <?php if(Yii::app()->getController()->action->id == "cruisePrice"):?> class="dq" <?php endif;?> href="<?php echo Yii::app()->createUrl("cruise/cruisePrice", array('id'=>$model->id,'name'=>SiteUtils::stringURLSafe($model->cruise_name)));?>">Price</a></li>
			<li><a  <?php if(Yii::app()->getController()->action->id == "cruiseItinerary"):?> class="dq" <?php endif;?> href="<?php echo Yii::app()->createUrl("cruise/cruiseItinerary", array('id'=>$model->id,'name'=>SiteUtils::stringURLSafe($model->cruise_name)));?>">Itineray</a></li>
			
			<li><a  <?php if(Yii::app()->getController()->action->id == "cruiseDate"):?> class="dq" <?php endif;?> href="<?php echo Yii::app()->createUrl("cruise/cruiseDate", array('id'=>$model->id,'name'=>SiteUtils::stringURLSafe($model->cruise_name)));?>">Cruise Date</a></li>
			<li><a  <?php if(Yii::app()->getController()->action->id == "cruiseImages"):?> class="dq" <?php endif;?> href="<?php echo Yii::app()->createUrl("cruise/cruiseImages", array('id'=>$model->id,'name'=>SiteUtils::stringURLSafe($model->cruise_name)));?>">Images</a></li>
			<li><a  <?php if(Yii::app()->getController()->action->id == "cruiseOnboard"):?> class="dq" <?php endif;?> href="<?php echo Yii::app()->createUrl("cruise/cruiseOnboard", array('id'=>$model->id,'name'=>SiteUtils::stringURLSafe($model->cruise_name)));?>">Life Onboard</a></li>
			<li style="background:none; padding-right:0px;"><a  <?php if(Yii::app()->getController()->action->id == "cruiseTips"):?> class="dq" <?php endif;?> href="<?php echo Yii::app()->createUrl("cruise/cruiseTips", array('id'=>$model->id,'name'=>SiteUtils::stringURLSafe($model->cruise_name)));?>">Tips</a></li>
		</ul>
        <div class="booking-button"><a href="<?php echo Yii::app()->createUrl('cruise/cruiseOrder', array('cruiseid'=>$model->id));?>"><img src="/images/yangtze/booking.png" alt="" /></a></div>
        </li>
	</div>