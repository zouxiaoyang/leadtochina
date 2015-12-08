<?php
/* @var $this FeedbackQuestionController */
/* @var $data FeedbackQuestion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer_list')); ?>:</b>
	<?php echo CHtml::encode($data->answer_list); ?>
	<br />


</div>