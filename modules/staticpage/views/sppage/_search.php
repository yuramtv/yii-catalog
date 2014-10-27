<?php
/* @var $this SppageController */
/* @var $model Sppage */
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
		<?php echo $form->label($model,'name_ru'); ?>
		<?php echo $form->textField($model,'name_ru',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_et'); ?>
		<?php echo $form->textField($model,'name_et',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_en'); ?>
		<?php echo $form->textField($model,'name_en',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sorting'); ?>
		<?php echo $form->textField($model,'sorting'); ?>
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