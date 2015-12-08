<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>
<?php $rentalController=strtolower(Yii::app()->getController()->action->id);?> 
<?php $form=$this->beginWidget('CActiveForm', array(
                  'id'=>'costomizeOrderForm',
				  'action'=>'#orderForm',
                  'enableAjaxValidation'=>false,
                )); ?>
<div class="one">
                   <h3><span>1</span> <b><?php if($rentalController=='carrental'):?>Rent Beijing Vehicle<?php elseif ($rentalController=='guiderental'):?>Hire Beijing Tour Guide Detail<?php endif;?></b></h3>
                   <table cellspacing="0" cellpadding="0">
                      <tr>
                      <?php if($rentalController=='carrental'):?>
                         <td align="right">Occasion</td>
                         <td>
                         <?php echo $form->dropDownList($model,'executor',array( //executor=>Occasion
	                         'Airport to Downtown'=>'Airport to Downtown',
	                         'Downtown to Airport'=>'Downtown to Airport',
	                         'Railway to Downtown'=>'Railway to Downtown',
	                         'Downtown to Railway'=>'Downtown to Railway',
	                         'Half Day Beijing Tour(4 Hours)'=>'Half Day Beijing Tour(4 Hours)',
	                         'One Day Beijing Tour (8 Hours)'=>'One Day Beijing Tour (8 Hours)',
	                         'Badaling Great Wall and Ming Tomb Tour(8 Hours)'=>'Badaling Great Wall and Ming Tomb Tour(8 Hours)',
	                         'Mutianyu Great Wall Tour(8 Hours)'=>'Mutianyu Great Wall Tour(8 Hours)',
	                         'Simatai Great Wall Tours (8 Hours)'=>'Simatai Great Wall Tours (8 Hours)',
	                         'Tianjin Xingang Port to Downtown Beijing'=>'Tianjin Xingang Port to Downtown Beijing',
	                         'Downtown Beijing to Tianjin Xingang Port'=>'Downtown Beijing to Tianjin Xingang Port',
                         ));?>
                         </td>
                         <td align="right">Vehicle Type</td>
                         <td>
                         <?php echo $form->dropDownList($model,'nationality',array( //nationality=>vehicle Type
                         	'Red Flag'=>'Red Flag',
                         	'Santana 3000'=>'Santana 3000',
                         	'Refine(Van)'=>'Refine(Van)',
                         	'MB100(Van)'=>'MB100(Van)',
                         	'Buick GL8'=>'Buick GL8',
                         	'Audi A6'=>'Audi A6',
                         	'Mercedes S320'=>'Mercedes S320',
                         	'Coaster(22 Seats)'=>'Coaster(22 Seats)',
                         	'King Long(45 Seats)'=>'King Long(45 Seats)',
                         ));?>
                         </td>
                       <?php elseif ($rentalController=='guiderental'):?>
                        <td align="right">Language</td>
                         <td>
                         <?php echo $form->dropDownList($model,'addr',array( //addr=>Language
                         	'English'=>'English',
                         	'Arabic'=>'Arabic',
                         	'Chinese'=>'Chinese',
                         	'French'=>'French',
                         	'German'=>'German',
                         	'Italian'=>'Italian',
                         	'Japanese'=>'Japanese',
                         	'Korean'=>'Korean',
                         	'Portuguese'=>'Portuguese',
                         	'Russian'=>'Russian',
                         	'Spanish'=>'Spanish',
                         	'Other'=>'Other',
                         ));?>
                         </td>
                         <td align="right">Gender</td>
                         <td>
                         <?php echo $form->dropDownList($model,'entry_city',array( //entry_city=>Gender
                         	'Random'=>'Random',
                         	'Male'=>'Male',
                         	'Female'=>'Female',
                         ));?>
                         </td>
                       <?php endif;?>
                      </tr>
                      <tr>
                          <td align="right">Start Date</td>
                          <td><?php echo $form->textField($model,'entry_date',array('onclick'=>"WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})",'class'=>'cal'));?></td>
                          <td align="right">End Date</td>
                          <td><?php echo $form->textField($model,'end_date',array('onclick'=>"WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})",'class'=>'cal'));?></td>
                      </tr>
                      <tr>
                          <td align="right">Your Hotel</td>
                          <td><?php echo $form->textField($model,'destination'); //destination=>Your Hotel
                          ?></td>
                          <td align="right">Hotel Tel.</td>
                          <td><?php echo $form->textField($model,'city'); //city=>Hotel Tel.
                          ?></td>
                      </tr>
                      <tr>
                          <td align="right">Pick Up Time</td>
                          <td>
                          	<?php echo $form->textField($model,'duration', //duration=>Pick Up Time
                          	array('value'=>'09:00','style'=>'color:#b5b5b5;'));?>
                          </td>
                          <td align="right">Num. of Travelers</td>
                          <td><?php echo $form->textField($model,'other_city'); //other_city=>Num of Travelers
                          ?></td>
                      </tr>
                   </table>
              </div>
              <div class="two">
                   <h3><span>2</span> <b>Personal Information and Additional Requirements</b></h3>
                   <div class="twoleft">
                      <table cellspacing="0" cellpadding="0">
                         <tr>
                            <td>Full Name:<span>*</span></td>
                         </tr>
                         <tr>
                            <td>
                            <?php echo $form->dropDownList($model,'gender',array(
                            	'Mr.'=>'Mr.',
                            	'Ms.'=>'Ms.'
                            ));?>
                            <?php echo $form->textField($model,'full_name',array('style'=>'width:221px;'));?>
                            <?php echo $form->error($model,'full_name');?>
                            </td>
                         </tr>
                         <tr>
                            <td>Email Address:<span>*</span></td>
                         </tr>
                         <tr>
                            <td><?php echo $form->textField($model,'email');?>
                            	<?php echo $form->error($model,'email');?>
                            </td>
                         </tr>
                         <tr>
                            <td>Telephone:</td>
                         </tr>
                         <tr>
                            <td><?php echo $form->textField($model,'phone');?></td>
                         </tr>
                         <!-- 
                         <tr>
                            <td>Verify Code:<span>*</span></td>
                         </tr>
                         <tr>
                            <td>
                            	<?php //if (extension_loaded('gd')): ?>
						                  <?php //echo $form->textField($model,'verifyCode',array('style'=>'width:90px;')); ?>
                              <?php //$this->widget('CCaptcha'); ?>
                              <div class="clear"></div>
						                  <?php //echo $form->error($model,'verifyCode');?>
						         <?php //endif; ?>

                            	</td>
                         </tr>
                          -->
                      </table>
                   </div>
                   <div class="tworight">
                      <table cellspacing="0" cellpadding="0">
                         <tr>  
                            <td>Additional Requirements:(Optional)</td> 
                         </tr>
                         <tr>  
                            <td>
                            <?php echo $form->textArea($model,'other_message',array('onfocus'=>'textFocus()','onblur'=>'textBlur();'));?>
                            </td> 
                         </tr>
                         <tr>  
                            <td style="font-size:11px; line-height:16px; color:#6d6d6d;">Note: If you have our Promotion Code, please submit it in the Addtional Requirements to get further discount, thanks.</td> 
                         </tr>
                         <tr>  
                            <td>
                            <div class="otherRequest01">
                               <div class="submitButton">
                               		<input type="hidden" name="Order[ordertype]" value="<?php if($rentalController=='carrental'):?>15<?php elseif($rentalController=='guiderental'):?>16<?php endif;?>"/>
                                   <?php echo CHtml::imageButton("/images/newhomepage/confirm-submit-button.jpg"); ?>
                                <span>No booking fees!</span> 
                            </div>
                        </div></td> 
                         </tr>
                      </table>
                   </div>
              </div>
          <?php $this->endWidget();?>
