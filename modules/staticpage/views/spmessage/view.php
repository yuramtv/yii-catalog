<?php
/* @var $this SpmessageController */
/* @var $model Spmessage */

$this->breadcrumbs=array(
	'Spmessages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Spmessage', 'url'=>array('index')),
	array('label'=>'Create Spmessage', 'url'=>array('create')),
	array('label'=>'Update Spmessage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Spmessage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Spmessage', 'url'=>array('admin')),
);
?>

<h1>View Spmessage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title_ru',
		'title_et',
		'title_en',
		'message_ru',
		'message_et',
		'message_en',
		'shown',
	),
)); ?>
