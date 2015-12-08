<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'message-form',
	'enableAjaxValidation'=>false,
)); ?>

<div class="note3">
          <div class="title1 link7">Contact us</div>
          <div class="not link3" style=" padding:8px;">
            <span style="margin-bottom:8px;"><a href="http://messenger.providesupport.com/messenger/travelthing.html" target="_blank"><img src="/images/tourism/left_lc_01_47.jpg"  border="0"/></a></span>
              <span>
              <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-bottom:8px;">
  <tr>
    <td width="35" align="left" valign="top"><img src="/images/tourism/left_lc_02_51.jpg" width="30" height="21" /></td>
    <td align="left" valign="middle">TEL.+86-551-65355416(China)</td>
  </tr>
</table>
              </span>
              <span><table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-bottom:5px;">
  <tr>
    <td width="35" align="left" valign="top"><img src="/images/tourism/left_lc_03_51.jpg" width="19" height="19"  style="padding-left:3px;"/></td>
    <td align="left" valign="top" class="link_hui">E-mail.<br />
      <a href="mailto:support@onlinechinatours.com ">support@onlinechinatours.com </a><br />
      <a href="mailto:service@leadtochina.com ">service@leadtochina.com </a></td>
  </tr>
</table>
              </span><form id="messageask" method="post" name="messageask" action="/index.php?option=com_doask">
              <span><table width="100%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="35" align="left" valign="top" style="padding-bottom:10px;"><img src="/images/tourism/left_lc_04_51.jpg" width="25" height="22" /></td>
    <td align="left" valign="middle" style="padding-bottom:10px;">MSN.topchinatrip@hotmail.com
</td>
  </tr>
</table>
              </span>
              
<span>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style=" width:232px; font-size:14px; font-weight:bold; border-bottom:1px #CCCCCC solid; margin-top:3px;margin-bottom:5px;">
  <tr>
    <td style="padding-bottom:5px;">Send Your Enquiry</td>
  </tr>
</table>
 </span>
              
              <span><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="120" height="30" align="right" class="tourism_td">Name:</td>
    <td width="864"> <label>
    <?php echo $form->textField($model,'username',array('size'=>26,'maxlength'=>100,'style'=>"width:170px; overflow:hidden; padding-left:5px;")); ?>
	<?php echo $form->error($model,'username'); ?>
    </label>
    </td>
  </tr>
  <tr>
    <td height="30" align="right" class="tourism_td">E-mail:</td>
    <td><label>
    <?php echo $form->textField($model,'email',array('size'=>26,'maxlength'=>255, 'style'=>"width:170px; overflow:hidden; padding-left:5px;")); ?>
	<?php echo $form->error($model,'email'); ?>
    </label></td>
  </tr>
  <tr>
    <td height="30" align="right" class="tourism_td">Content:</td>
    <td><label>
    <?php echo $form->textArea($model,'message',array('rows'=>4, 'cols'=>28, 'style'=>"width:170px; overflow:hidden; padding-left:5px;")); ?>
	<?php echo $form->error($model,'message'); ?>
  </label></td>
  </tr>
  <tr>
  <td height="30" align="right">&nbsp;</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="30" width="90"><label>
        <?php echo $form->textField($model,'verifyCode',array('size'=>'10','style'=>'width:78px;')); ?>
         </label></td>
        <td>
        	<?php 
          $this->widget('CCaptcha',
            array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer'))
          ); ?>
        </td>

      </tr>
      <tr><td colspan="2"><?php echo $form->error($model,'verifyCode');?></td><td></td></tr>
    </table></td>
  </tr>
  <tr>
   <td height="30" align="right">&nbsp;</td>
    <td height="30" class="link_contact"><label>
      <input name="checkbox" type="checkbox" id="checkbox" checked="checked" />
    I agree with <a href="/privacy-policy.html" target="_blank">Privacy Policy</a></label></td>
    </tr>
    
  <tr>
    <td height="30" align="right">&nbsp;</td>
    <td height="45"><label>
      <?php echo CHtml::imageButton("/images/tourism/left_lc_06_61.jpg"); ?>
    </label></td>
  </tr>
</table>
              </span></form>
          </div>
          <div><img src="/images/newhomepage/right1_10.jpg" /></div>
        </div>
<?php $this->endWidget(); ?>
