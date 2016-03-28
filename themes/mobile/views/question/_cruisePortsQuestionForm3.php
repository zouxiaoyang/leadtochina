 <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'question-form',
    'enableClientValidation'=>true,
)); ?>
  <table border="0" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td>
						<?php echo $form->textArea($questionModel,'content',array('rows'=>5, 'cols'=>65, 'style'=>'border:1px #CCCCCC solid')); ?>
						<span style="display:block;float:left;color:red;"><?php echo $form->error($questionModel,'content'); ?></span>
        </td>
      </tr>
      <tr>
	     <td style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><input type="checkbox" name="" value="" style=" float:none; width:auto; border:none;"> Do you want to book a tour / hotel / flights.etc</td>
	  </tr>
      <tr>
        <td>Your Name:
        	<?php echo $form->textField($questionModel,'username',array('size'=>15,'maxlength'=>128, 'style'=>'border:1px #CCCCCC solid;')); ?>
					<span style="display:block;float:left;color:red;"><?php echo $form->error($questionModel,'username'); ?></span>
        </td>
      </tr>
      <tr>  
        <td>E-mail:
        	<?php echo $form->textField($questionModel,'email',array('style'=>'border:1px #CCCCCC solid;')); ?>
					<span style="display:block;float:left;color:red;"><?php echo $form->error($questionModel,'email'); ?></span>
          </td>
	  </tr>
	  <tr>
        <td>
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
				),array('id'=>'button','class'=>'form_button','style'=>'height:40px;border:0px;cursor:pointer;background:url(/images/view/submit.png) left center no-repeat; dispaly:block; width:221px;'));
				?>
				<?php echo $form->hiddenField($questionModel,'question_type', array('value'=>$question_type)); ?>
				<div id="AjaxLoader" style="display: none">submiting...</div>
			</label>
         </td>
      </tr>
    </tbody>
  </table>
<?php $this->endWidget(); ?>