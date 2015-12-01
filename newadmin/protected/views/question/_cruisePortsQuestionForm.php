<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'question-form',
    'enableClientValidation'=>true,
)); ?>
<table cellspacing="0" cellpadding="0" border="0" width="580">
          <tbody><tr>
            <td width="9" align="left"><img width="9" height="48" src="/images/bestindex/bestindex_12_14.jpg"></td>
            <td background="/images/bestindex/bestindex_13_15.jpg" class="title3">Write Your Question</td>
            <td width="11" align="right"><img width="11" height="48" src="/images/bestindex/bestindex_14_18.jpg"></td>
          </tr>
          <tr>
            <td background="/images/bestindex/bestindex_19_20.jpg">&nbsp;</td>
            <td>
                <table width="87%" cellspacing="0" cellpadding="0" border="0">
                  <tbody><tr>
                    <td height="30" colspan="4">You can post as a member (<a href="#">login</a> first) or a guest!</td>
                  </tr>
                  <tr>
                    <td colspan="4">
                    	<label>
                        	<?php echo $form->textArea($questionModel,'content',array('rows'=>5, 'cols'=>60, 'style'=>'border:1px #CCCCCC solid')); ?>
                        	<span style="display:block;float:left;color:red;"><?php echo $form->error($questionModel,'content'); ?></span>
     					</label>
                        </td>
                       </tr>
                       <tr>
                           <td width="18%" height="30">Your Name:</td>
											     <td width="38%">
											     	  <label>
												     	<?php echo $form->textField($questionModel,'username',array('size'=>15,'maxlength'=>128, 'style'=>'border:1px #CCCCCC solid;')); ?>
												     	<span style="display:block;float:left;color:red;"><?php echo $form->error($questionModel,'username'); ?></span>
												      </label>
											    	</td>
														<td width="9%">E-mail:</td>
                    									<td width="35%">	
															<label>
															<?php echo $form->textField($questionModel,'email',array('style'=>'border:1px #CCCCCC solid;')); ?>
												     		<span style="display:block;float:left;color:red;"><?php echo $form->error($questionModel,'email'); ?></span>
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
                                   ),array('id'=>'button','class'=>'form_button','style'=>'width:150px;height:53px;border:0px;cursor:pointer;background:url(/images/ports/bestindex_18_23.jpg) left center no-repeat; dispaly:block;'));
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
            <td width="9" valign="bottom" height="8"><img width="9" height="8" src="/images/bestindex/bestindex_17_22.jpg"></td>
            <td height="8" background="/images/bestindex/bestindex_16_23.jpg"></td>
            <td valign="bottom" height="8"><img width="11" height="8" src="/images/bestindex/bestindex_15_22.jpg"></td>
          </tr>
</tbody></table>
<?php $this->endWidget(); ?>
