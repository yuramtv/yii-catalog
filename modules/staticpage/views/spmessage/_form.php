<?php
/* @var $this SpmessageController */
/* @var $model Spmessage */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'spmessage-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title_ru'); ?>
		<?php echo $form->textField($model,'title_ru',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'title_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_et'); ?>
		<?php echo $form->textField($model,'title_et',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'title_et'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_en'); ?>
		<?php echo $form->textField($model,'title_en',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'title_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'message_ru'); ?>
		<?php echo $form->textArea($model,'message_ru',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'message_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'message_et'); ?>
		<?php echo $form->textArea($model,'message_et',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'message_et'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'message_en'); ?>
		<?php echo $form->textArea($model,'message_en',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'message_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shown'); ?>
		<?php echo $form->textField($model,'shown',array('size'=>0,'maxlength'=>0)); ?>
		<?php echo $form->error($model,'shown'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->