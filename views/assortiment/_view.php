<?php
/* @var $this AssortimentController */
/* @var $data Assortiment */
?>
<?php echo '<a name="'.$data->id.'"></a>'; ?>

<div class="view">

<b><?php echo CHtml::encode($data->getAttributeLabel('name_ru')); ?>:</b>
<?php echo CHtml::link(CHtml::encode($data->name_ru), array('view','id'=>$data->id)); ?>
<br /> 

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	
<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
<?php echo CHtml::encode($data->category->name_ru); ?>
<br />	

<?php //echo $this->assortiment_image($data->id, $data->name_ru) ; ?>

<?php echo $this->assortiment_image($data->id, $data->name_ru, 'assortiment_img',array('view', 'id'=>$data->id) ) ; ?>

<br />	

	<b><?php echo CHtml::encode($data->getAttributeLabel('description_ru')); ?>:</b>
	<?php echo CHtml::encode($data->description_ru); ?>
	<br />

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('description_et')); ?>:</b>
	<?php echo CHtml::encode($data->description_et); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description_en')); ?>:</b>
	<?php echo CHtml::encode($data->description_en); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating')); ?>:</b>
	<?php echo CHtml::encode($data->rating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shown')); ?>:</b>
	<?php echo CHtml::encode($data->shown); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('name_ru')); ?>:</b>
	<?php echo CHtml::encode($data->name_ru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_et')); ?>:</b>
	<?php echo CHtml::encode($data->name_et); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_en')); ?>:</b>
	<?php echo CHtml::encode($data->name_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prise')); ?>:</b>
	<?php echo CHtml::encode($data->prise); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prise_old')); ?>:</b>
	<?php echo CHtml::encode($data->prise_old); ?>
	<br />

	*/ ?>

</div>