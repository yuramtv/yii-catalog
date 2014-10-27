<?php
/* @var $this SppageController */
/* @var $data Sppage */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_ru')); ?>:</b>
	<?php echo CHtml::encode($data->name_ru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_et')); ?>:</b>
	<?php echo CHtml::encode($data->name_et); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_en')); ?>:</b>
	<?php echo CHtml::encode($data->name_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sorting')); ?>:</b>
	<?php echo CHtml::encode($data->sorting); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shown')); ?>:</b>
	<?php echo CHtml::encode($data->shown); ?>
	<br />


</div>