<?php
/* @var $this CategoryController */
/* @var $model Category */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'category-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name_ru'); ?>
		<?php echo $form->textField($model,'name_ru',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_et'); ?>
		<?php echo $form->textField($model,'name_et',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name_et'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_en'); ?>
		<?php echo $form->textField($model,'name_en',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shown'); ?>
		<?php echo $form->radioButtonList($model,'shown', array('yes' => 'yes','no' => 'no'));?> 		
		<?php // echo $form->textField($model,'shown',array('size'=>0,'maxlength'=>0)); ?>
		<?php echo $form->error($model,'shown'); ?>
	</div>
	

<?php 
// Вывести картинку или картинку no_photo.gif 
echo $this->category_image($model->id, $model->name_ru, '50','my') ?>
<?
//Если файл картинки сужествует
if(file_exists($_SERVER['DOCUMENT_ROOT'].
//Yii::app()->urlManager->baseUrl.
'/images/category_img/'.$model->id.'_category.gif'))
// Показать блок с чекбоксом Удалить картинку
{
echo '<div class="row">';
echo $form->labelEx($model,'del_img'); 
echo $form->checkBox($model,	'del_img' );   	
echo '</div>';
}
?>	 
<? echo '<br />' ?>
<?php echo CHtml::activeFileField($model, 'icon'); ?>
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->