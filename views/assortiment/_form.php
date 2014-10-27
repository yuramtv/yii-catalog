<?php
/* @var $this AssortimentController */
/* @var $model Assortiment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'assortiment-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'description_ru'); ?>
		<?php echo $form->textArea($model,'description_ru',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description_et'); ?>
		<?php echo $form->textArea($model,'description_et',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description_et'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description_en'); ?>
		<?php echo $form->textArea($model,'description_en',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php // echo $form->textField($model,'category_id'); ?>
		<?php echo $form->dropDownList($model,'category_id', Category::All(), array('empty' => '(Select a category)'));?> 
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rating'); ?>
		<?php echo $form->textField($model,'rating'); ?>
		<?php echo $form->error($model,'rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shown'); ?>
		<?php echo $form->radioButtonList($model,'shown', array('yes' => 'yes','no' => 'no'));?> 
		<?php //echo $form->textField($model,'shown',array('size'=>0,'maxlength'=>0)); ?>
		<?php echo $form->error($model,'shown'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_ru'); ?>
		<?php echo $form->textField($model,'name_ru',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_ru'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'name_et'); ?>
		<?php echo $form->textField($model,'name_et',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_et'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_en'); ?>
		<?php echo $form->textField($model,'name_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_en'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'prise'); ?>
		<?php echo $form->textField($model,'prise'); ?>
		<?php echo $form->error($model,'prise'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prise_old'); ?>
		<?php echo $form->textField($model,'prise_old'); ?>
		<?php echo $form->error($model,'prise_old'); ?>
	</div>
<!--добавил начало-->

<?  echo $this->assortiment_image($model->id, $model->name_ru, '100','my') ;
// Вывод уже загруженной картинки или изображения No_photo

//Если картинка для данного товара загружена, 
//предложить её удалить отметив чекбокс
echo '<br/>'.$_SERVER['DOCUMENT_ROOT'].'/images/assortiment_img/'.$model->id.'_assortiment.jpg';
if(file_exists($_SERVER['DOCUMENT_ROOT'].'/images/assortiment_img/'.$model->id.'_assortiment.jpg'))
{
echo '<div class="row">';
echo $form->labelEx($model,'del_img'); 
echo $form->checkBox($model,'del_img' );   
echo '</div>';
 }
echo '<br />';
//Поле загрузки файла
echo CHtml::activeFileField($model, 'icon'); ?>

<!--добавил конец-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->