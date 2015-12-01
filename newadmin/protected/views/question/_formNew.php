<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'question-form',
    'enableClientValidation'=>true,
)); ?>
<!--  write start  -->
<div class="write">
 <h2><img src="/images/view/write.png" alt="" /></h2>
   <div class="writecont" id="writecont">
    <table border="0" cellspacing="0" cellpadding="0">
       <tbody>
           <tr>
               <td colspan="3">You can post as a member!</td>
           </tr>
           <tr>
               <td colspan="3">
                <?php echo $form->textArea($questionModel,'content',array('rows'=>5, 'cols'=>65, 'style'=>'border:1px #CCCCCC solid')); ?>
                <?php echo $form->error($questionModel,'content'); ?>
               </td>
           </tr>
           <tr>
               <td class="tesu">Your Name: 
                <?php echo $form->textField($questionModel,'username',array('size'=>15,'maxlength'=>128, 'style'=>'border:1px #CCCCCC solid;')); ?>
                <?php echo $form->error($questionModel,'username'); ?>
               </td>
               <td class="tesu">E-mail:
                  <?php echo $form->textField($questionModel,'email',array('style'=>'border:1px #CCCCCC solid;')); ?>
                  <?php echo $form->error($questionModel,'email'); ?>
               </td>
               <td class="tesu">

                <?php 
                            echo CHtml::ajaxSubmitButton('','',
                               array(
                                   'dataType'=>'json',
                                   'type'=>'post',
                                   'success'=>'function(data) {
                                       $("#AjaxLoader").hide();  
                                      if(data.status=="success"){
                                       $.colorbox({href:"/travel/toursPackage/sendsecced",iframe:true, innerWidth:700, innerHeight:220,})
	//location.href="/succeed.html";
                                       //alert("form submitted successfully.");
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
                                   ),array('id'=>'button','class'=>'form_button','style'=>'height:29px; width:221px;border:0px;cursor:pointer;background:url(/images/view/submit.png) left center no-repeat; dispaly:block;'));
                                    ?>
                                    <?php echo $form->hiddenField($questionModel,'question_type', array('value'=>$question_type)); ?>
                                   <div id="AjaxLoader" style="display: none">submiting...</div>

                
              </td>
           </tr>
        </tbody>
     </table>
   </div>
</div>
<script>
	$(function(){
	  $("#cboxTopRight").click(function(){
		parent.jQuery.colorbox.close();
	  })

	})
	$(function(){
	  $("#cboxclose").click(function(){
		parent.jQuery.colorbox.close();
	  })

	})
</script>
<!--  write end  -->
<?php $this->endWidget(); ?>