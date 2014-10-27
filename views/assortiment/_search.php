<?php
/* @var $this AssortimentController */
/* @var $model Assortiment */
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
		<?php echo $form->label($model,'description_ru'); ?>
		<?php echo $form->textArea($model,'description_ru',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description_et'); ?>
		<?php echo $form->textArea($model,'description_et',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description_en'); ?>
		<?php echo $form->textArea($model,'description_en',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rating'); ?>
		<?php echo $form->textField($model,'rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shown'); ?>
		<?php echo $form->textField($model,'shown',array('size'=>0,'maxlength'=>0)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_ru'); ?>
		<?php echo $form->textField($model,'name_ru',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_et'); ?>
		<?php echo $form->textField($model,'name_et',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_en'); ?>
		<?php echo $form->textField($model,'name_en',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prise'); ?>
		<?php echo $form->textField($model,'prise'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prise_old'); ?>
		<?php echo $form->textField($model,'prise_old'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->