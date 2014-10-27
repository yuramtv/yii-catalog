<?php
/* @var $this SppageController */
/* @var $model Sppage */

$this->breadcrumbs=array(
	'Sppages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sppage', 'url'=>array('index')),
	array('label'=>'Create Sppage', 'url'=>array('create')),
	array('label'=>'Update Sppage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sppage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sppage', 'url'=>array('admin')),
);
?>

<!--<h1>View Sppage #<?php echo $model->id; ?></h1>-->
<h1><?php echo $model->name_ru; ?></h1>

<?php

foreach($model->messages as $item)
{
  echo '<H2>'.$item->title_ru.'</H2>';
  echo $item->message_ru;
  echo '<br><br>';
}


 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name_ru',
		'name_et',
		'name_en',
		'url',
		'sorting',
		'shown',
	),
)); 

?>
