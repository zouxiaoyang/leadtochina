 <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'question-form',
    'enableClientValidation'=>true,
)); ?>
  <div class="cru_view_writecont">
  <table border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
        <td colspan="3" class="cru_wit_tit1">Write Your Question</td>
      </tr>
      <tr>
        <td colspan="3">You can post as a member!</td>
      </tr>
      <tr>
        <td colspan="3">
						<?php echo $form->textArea($questionModel,'content',array('rows'=>5, 'cols'=>65, 'style'=>'border:1px #CCCCCC solid')); ?>
						<span style="display:block;float:left;color:red;"><?php echo $form->error($questionModel,'content'); ?></span>
        </td>
      </tr>
      <tr>
        <td class="tesu">Your Name:
        	<?php echo $form->textField($questionModel,'username',array('size'=>15,'maxlength'=>128, 'style'=>'border:1px #CCCCCC solid;')); ?>
					<span style="display:block;float:left;color:red;"><?php echo $form->error($questionModel,'username'); ?></span>
          </td>
        <td class="tesu">E-mail:
        	<?php echo $form->textField($questionModel,'email',array('style'=>'border:1px #CCCCCC solid;')); ?>
					<span style="display:block;float:left;color:red;"><?php echo $form->error($questionModel,'email'); ?></span>
          </td>
        <td class="tesu">
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
                       ),array('id'=>'button','class'=>'form_button','style'=>'height:25px;border:0px;cursor:pointer;background:url(/images/cruisePorts/submit.png) no-repeat; dispaly:block;width:179px'));
                        ?>
                        <?php echo $form->hiddenField($questionModel,'question_type', array('value'=>$question_type)); ?>
                       <div id="AjaxLoader" style="display: none">submiting...</div>
							</label>
         </td>
      </tr>
    </tbody>
  </table>
</div>
<?php $this->endWidget(); ?>