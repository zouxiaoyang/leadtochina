<div id="tab-menu" class="menu-table" style="position: static;">
     <ul>
       <li <?php if($this->action->id == 'beijingXianGuilinItinerary'):?> class="dq" <?php endif;?>><a href="<?php echo Yii::app()->createUrl('adoption/beijingXianGuilinItinerary');?>">Full Itinerary</a></li>
       <li <?php if($this->action->id == 'beijingXianGuilinDatePrice'):?> class="dq" <?php endif;?>><a href="<?php echo Yii::app()->createUrl('adoption/beijingXianGuilinDatePrice');?>">Date & Prices</a></li>
       <li <?php if($this->action->id == 'beijingXianGuilinActivites'):?> class="dq" <?php endif;?>><a href="<?php echo Yii::app()->createUrl('adoption/beijingXianGuilinActivites');?>">Special Activities</a></li>
       <li <?php if($this->action->id == 'beijingXianGuilinReviews'):?> class="dq" <?php endif;?>><a href="<?php echo Yii::app()->createUrl('adoption/beijingXianGuilinReviews');?>">Reviews</a></li>
       <li <?php if($this->action->id == 'beijingXianGuilinKnowBeforeYouGo'):?> class="dq" <?php endif;?>><a href="<?php echo Yii::app()->createUrl('adoption/beijingXianGuilinKnowBeforeYouGo');?>">Know Before You Go</a></li>
       <li class="tesu"><a href="javascript:;" id="adoption_enquiry"><img src="/images/adoptionItinerary/free_quote.jpg"></a></li>
      </ul>
    </div>

<form action="/index.php?option=com_order" method="post" id="adoption_form">
  <input type="hidden" name="type" value="2" />
  <input type="hidden" name="sdate" id="sdate" value="" />
  <input type="hidden" name="adult_price" id="adult_price" value="" />
  <input type="hidden" name="other_children_price" id="other_children_price" value="" />
  <input type="hidden" name="adoption_tour_title" value="Beijing-Xi'an-Guilin plus the Extended Trip to SWI Province" />
</form>

<script>
  $(function(){
    $("#adoption_enquiry").click(function(){
        var sdate = "06/26/2015";
        var adult_price = "1720";
        var other_children_price = "1150";
        $("#adoption_form").find("#sdate").val(sdate);
        $("#adoption_form").find("#adult_price").val(adult_price);
        $("#adoption_form").find("#other_children_price").val(other_children_price);
       
        $("#adoption_form").submit();
    })
  })
</script>
