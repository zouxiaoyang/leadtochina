<?php
/* @var $this QuestionController */
/* @var $questionModel Question */
/* @var $form CActiveForm */
?>
<div class="clear"></div>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'question-form',
    'enableClientValidation'=>true,
)); ?>
<table border="0" cellpadding="0" cellspacing="0">
     <tbody>
        <tr>
           <td align="left" width="9"><img src="/images/bestindex/bestindex_12_14.jpg" height="48" width="9"></td>
           <td width="599" background="/images/bestindex/bestindex_13_15.jpg" class="title3">Write Your Question</td>
          <td align="right" width="11"><img src="/images/bestindex/bestindex_14_18.jpg" height="48" width="11"></td>
       </tr>
        <tr>
        <td background="/images/bestindex/bestindex_19_20.jpg">&nbsp;</td>
        <td>
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                   <tbody>
                      <tr>
                        <td colspan="4" height="30">You can post as a member (<a href="#">login</a> first) or a guest!</td>
                      </tr>
                      <tr>
                        <td colspan="4">
                        	<label>
                        		 <?php echo $form->textArea($questionModel,'content',array('rows'=>5, 'cols'=>65, 'style'=>'border:1px #CCCCCC solid')); ?>
                        		 <?php echo $form->error($questionModel,'content'); ?>
     											 </label>
                        </td>
                       </tr>
                       <tr>
                           <td height="30" width="14%">Your Name:</td>
											     <td width="23%">
												     	<label>
												     	<?php echo $form->textField($questionModel,'username',array('size'=>15,'maxlength'=>128, 'style'=>'border:1px #CCCCCC solid;')); ?>
												     	<?php echo $form->error($questionModel,'username'); ?>
												      </label>
											    	</td>
														<td width="6%">E-mail:</td>
														<td width="57%">
															<label>
															<?php echo $form->textField($questionModel,'email',array('style'=>'border:1px #CCCCCC solid;')); ?>
												     	<?php echo $form->error($questionModel,'email'); ?>
											      	</label>
											      </td>
                     </tr>
                      <tr>
                         <td colspan="4" height="60">
                         	<label>
                         		<?php 
                         		echo CHtml::ajaxSubmitButton('','',
                               array(
                                   'dataType'=>'json',
                                   'type'=>'post',
                                   'success'=>'function(data) {
                                       $("#AjaxLoader").hide();  
                                      if(data.status=="success"){
                                       //location.href="/succeed.html";
                                       alert("form submitted successfully.");
                                       $("#Question_content").val("");
                                       $("#Question_username").val("");
                                       $("#Question_email").val("");
                                      }else{
                                        $.each(data, function(key, val) {
                                          $("#"+key+"_em_").text(val);
                                          $("#"+key+"_em_").show();
                                        });
                                      }       
                                  }',                    
                                   'beforeSend'=>'function(){                        
                                         $("#AjaxLoader").show();
                                    }'
                                   ),array('id'=>'button','class'=>'form_button','style'=>'width:150px;height:53px;border:0px;cursor:pointer;background:url(/images/newhomepage/bestindex_18_23.jpg) left center no-repeat; dispaly:block;'));
                                    ?>
                                    <?php echo $form->hiddenField($questionModel,'question_type', array('value'=>$question_type)); ?>
                                   <div id="AjaxLoader" style="display: none">submiting...</div>
      										</label>
      										</td>
                       </tr>
                  	</tbody>
                  </table>
        </td>
        <td background="/images/bestindex/bestindex_20_22.jpg">&nbsp;</td>
     </tr>
     <tr>
        <td height="8" valign="bottom" width="9"><img src="/images/bestindex/bestindex_17_22.jpg" height="8" width="9"></td>
        <td background="/images/bestindex/bestindex_16_23.jpg" height="8"></td>
        <td height="8" valign="bottom"><img src="/images/bestindex/bestindex_15_22.jpg" height="8" width="11"></td>
     </tr>
</tbody></table>
<?php $this->endWidget(); ?>

</div><!-- form -->
<script>

</script>