<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'message-form',
  'enableAjaxValidation'=>false,
)); ?>
<div class="question">
           <h2><img alt="" src="/images/citytours/palnning.jpg" width="693px"></h2>
           <div class="questioncont">
           <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr>
                    <td colspan="2">
                      <?php echo $form->textArea($model,'message',array('rows'=>4, 'cols'=>28, 'style'=>"width:96%; border:1px solid #b8b8b8; background:#fff; padding-left:5px; margin-top:3px; height:143px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; line-height:18px;","default"=>"abc")); ?>
                      <?php echo $form->error($model,'message'); ?>
                    	
                    </td> 
                  </tr>
                  <tr>
                    <td>Your Name: <span style="color:#ff0000; font-weight:bold;">*</span>
                      <?php echo $form->textField($model,'username',array('size'=>26,'maxlength'=>20,'style'=>"width:90%; height:22px; border:1px solid #b8b8b8; background:#fff; padding-left:5px; margin-top:3px; line-height:22px;")); ?>
                      <?php echo $form->error($model,'username'); ?>
                    </td>
                    <td>E-mail: <span style="color:#ff0000; font-weight:bold;">*</span>
                       <?php echo $form->textField($model,'email',array('size'=>26,'maxlength'=>50, 'style'=>"width:90%; height:22px; border:1px solid #b8b8b8; background:#fff; padding-left:5px; margin-top:3px; line-height:22px;")); ?>
                       <?php echo $form->error($model,'email'); ?>
                    </td>
                  </tr>
                  <tr>
             <td colspan="2">
              <?php echo $form->textField($model,'verifyCode',array('size'=>'10','style'=>'border:1px solid #b8b8b8; background:#fff; padding-left:5px; margin-top:3px;margin-right:8px; float:left; width:120px; height:22px; line-height:22px;')); ?>
              <?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer;float:left;'))); ?>
              <br /><?php echo $form->error($model,'verifyCode');?>
              </td>
           </tr>
                  <tr>
                    <td colspan="2">

                      <input type="image" value="" name="yt0" style="height:29px;border:0px;cursor:pointer;dispaly:block; width:221px;" src="/images/view/submit.png" class="form_button"> 
                    </td>
                  </tr> 
                </tbody>
              </table>
            </div>
       </div>
<?php $this->endWidget(); ?>
