<?php
/* @var $this SppageController */
/* @var $model Sppage */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sppage-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name_ru'); ?>
		<?php echo $form->textField($model,'name_ru',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_et'); ?>
		<?php echo $form->textField($model,'name_et',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name_et'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_en'); ?>
		<?php echo $form->textField($model,'name_en',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sorting'); ?>
		<?php echo $form->textField($model,'sorting'); ?>
		<?php echo $form->error($model,'sorting'); ?>
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