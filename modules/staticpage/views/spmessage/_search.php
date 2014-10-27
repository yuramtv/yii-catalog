<?php
/* @var $this SpmessageController */
/* @var $model Spmessage */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title_ru'); ?>
		<?php echo $form->textField($model,'title_ru',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title_et'); ?>
		<?php echo $form->textField($model,'title_et',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title_en'); ?>
		<?php echo $form->textField($model,'title_en',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'message_ru'); ?>
		<?php echo $form->textArea($model,'message_ru',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'message_et'); ?>
		<?php echo $form->textArea($model,'message_et',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'message_en'); ?>
		<?php echo $form->textArea($model,'message_en',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shown'); ?>
		<?php echo $form->textField($model,'shown',array('size'=>0,'maxlength'=>0)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->