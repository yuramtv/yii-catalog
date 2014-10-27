<?php
/* @var $this SpmessageController */
/* @var $data Spmessage */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title_ru')); ?>:</b>
	<?php echo CHtml::encode($data->title_ru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title_et')); ?>:</b>
	<?php echo CHtml::encode($data->title_et); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title_en')); ?>:</b>
	<?php echo CHtml::encode($data->title_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('message_ru')); ?>:</b>
	<?php echo CHtml::encode($data->message_ru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('message_et')); ?>:</b>
	<?php echo CHtml::encode($data->message_et); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('message_en')); ?>:</b>
	<?php echo CHtml::encode($data->message_en); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('shown')); ?>:</b>
	<?php echo CHtml::encode($data->shown); ?>
	<br />

	*/ ?>

</div>