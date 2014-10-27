<?php
/* @var $this SpmessageController */
/* @var $model Spmessage */

$this->breadcrumbs=array(
	'Spmessages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Spmessage', 'url'=>array('index')),
	array('label'=>'Create Spmessage', 'url'=>array('create')),
	array('label'=>'View Spmessage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Spmessage', 'url'=>array('admin')),
);
?>

<h1>Update Spmessage <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>