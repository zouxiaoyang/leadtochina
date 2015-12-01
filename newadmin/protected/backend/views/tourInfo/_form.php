<?php
/* @var $this TourInfoController */
/* @var $model TourInfo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tour-info-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php
    $this->widget('ext.ueditor.Ueditor',
            array(
                'getId'=>'TourInfo_quotation',
                'UEDITOR_HOME_URL'=>"/",
                'options'=>'toolbars:[["fontfamily","fontsize","forecolor","bold","italic","strikethrough","|","insertunorderedlist","insertorderedlist","blockquote","|","link","unlink","highlightcode","|","undo","redo","source"]],
                    wordCount:false,
                    elementPathEnabled:false,
                    imagePath:"/attachment/ueditor/",
                    ',
            ));

        $this->widget('ext.ueditor.Ueditor',
            array(
                'getId'=>'TourInfo_price_include',
                'UEDITOR_HOME_URL'=>"/",
                'options'=>'toolbars:[["fontfamily","fontsize","forecolor","bold","italic","strikethrough","|","insertunorderedlist","insertorderedlist","blockquote","|","link","unlink","highlightcode","|","undo","redo","source"]],
                    wordCount:false,
                    elementPathEnabled:false,
                    imagePath:"/attachment/ueditor/",
                    ',
            ));

            $this->widget('ext.ueditor.Ueditor',
            array(
                'getId'=>'TourInfo_price_exclude',
                'UEDITOR_HOME_URL'=>"/",
                'options'=>'toolbars:[["fontfamily","fontsize","forecolor","bold","italic","strikethrough","|","insertunorderedlist","insertorderedlist","blockquote","|","link","unlink","highlightcode","|","undo","redo","source"]],
                    wordCount:false,
                    elementPathEnabled:false,
                    imagePath:"/attachment/ueditor/",
                    ',
            ));
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php 
			$model->title=$model->title ? $model->title : 'X Days China Trip Proposal & Quotation';
			echo $form->textField($model,'title',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'pic'); ?>
		<?php echo $form->radioButtonList($model,'pic',TourInfo::getBanners(),array('separator'=>'','labelOptions'=>array('style'=>'display:inline;margin-right:5px;'))); ?>
		<?php echo $form->error($model,'pic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tracking_code'); ?>
		<?php echo $form->textField($model,'tracking_code',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tracking_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'travel_advisor'); ?>
		<?php echo $form->textField($model,'travel_advisor',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'travel_advisor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel'); ?>
		<?php 
			$model->tel=$model->tel ? $model->tel : '+86-551-65355443';
			echo $form->textField($model,'tel',array('size'=>20,'maxlength'=>20)); 
		?>
		<?php echo $form->error($model,'tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php 
			$model->email=$model->email ? $model->email : 'support@onlinechinatours.com';
			echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30)); 
		?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tour_days'); ?>
		<?php echo $form->textField($model,'tour_days'); ?>
		<?php echo $form->error($model,'tour_days'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quotation'); ?>
		<?php 
			$model->quotation = $model->quotation ? $model->quotation : '<p>
    <strong>Quotation per person</strong> (Based on a group of 4 persons, Double Occupancy): CNYXXX (US$XXX)<br />
    <strong>Total Amount for 4 Adults :</strong> CNYXXX (US$XXX) 
</p>
<p>
    <strong>Deposit:</strong> USD per person (30%)<br />
    Balance: USD per person (70%, due on 10/30/2012)
</p>
<p>
    <strong>NOTE:</strong><img src="http://www.leadtochina.com/tour/images/note.jpg" /><br />
    (<strong>Exchange rate:</strong> US$1.00=CNY 6.2)<br />
    The USD quote is based on current exchange rate, it may change according to the currency fluctuation, while the RMB quote will be remained the same.  So honestly to avoid the exchange loss from your side, the early booking would be highly suggested.
</p>
<p>
    <br />
</p>';
			echo $form->textArea($model,'quotation',array('rows'=>6, 'cols'=>50)); 
		?>
		<?php echo $form->error($model,'quotation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_include'); ?>
		<?php 
			$model->price_include = $model->price_include ? $model->price_include : '<p>
        <strong>Entrance fees:</strong> All entrance fees for the tourist sites specified in the itinerary.
    </p>
    <p>
        <strong>Domestic flight tickets rates :</strong> Domestic flight tickets rates with taxes and insurance (Economy):
    </p>
    <p>
        <strong>Hotels:</strong> Based on two persons sharing one room with a king size bed or Twin beds Room (Non smoking) in the specified hotels. All hotels as listed in the above itinerary serve daily western or Chinese breakfast. All rooms are air-conditioned with private facilities.
    </p>
    <p>
        <strong>Private Transfers:</strong> Transfers between airports/train station, hotels and scenic spots in each city by private air-conditioned vehicle with a driver and English-speaking guide.
    </p>
    <p>
        <strong>Private Guide Service:</strong> Your personal guide and driver will remain with you throughout the tour time. Normally speaking, each sightseeing day, they will be waiting for you at the hotel lobby at your service 10 minutes before your arrival.
    </p>
    <p>
        <strong>Meals:</strong> Meals as specified in the itinerary.
    </p>
    <p>
        <strong>Luggage Transfers:</strong> Between airports and hotels
    </p>
    <p>
        <strong>Insurance:</strong> China Life Tourist Accident/Casualty Insurance
    </p>
    <p>
        <strong>Service Charge  &amp; Government Taxes:</strong> The planning, handling, operational and communication charges  &amp; Government Taxes.
    </p>';
			echo $form->textArea($model,'price_include'); 
		?>
		<?php echo $form->error($model,'price_include'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_exclude'); ?>
		<?php 
			$model->price_exclude = $model->price_exclude ? $model->price_exclude : '<p>
    Entry or Exit China International Airfare or train tickets.
</p>
<p>
    China Entry Visa Fees
</p>
<p>
    Personal Expenses: Expenses of a purely personal nature such as laundry, drinks, fax, telephone call, Excess Baggage Charges
</p>
<p>
    Tips to guides or drivers
</p>
<p>
    Transfer fees for the payment
</p>';
			echo $form->textArea($model,'price_exclude'); 
		?>
		<?php echo $form->error($model,'price_exclude'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : '点击保存,并添加每天具体行程'); ?>
		<?php 
		/*
		echo CHtml::linkButton('预览',array(
            'submit'=>$this->createUrl('tourInfo/preview',array('tid'=>$model->id)),
			'target'=>"_blank",
			'style'=>'margin-left:30px')
		); 
		*/
		?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->