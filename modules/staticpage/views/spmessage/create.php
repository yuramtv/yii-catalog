<?php
/* @var $this SpmessageController */
/* @var $model Spmessage */

$this->breadcrumbs=array(
	'Spmessages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Spmessage', 'url'=>array('index')),
	array('label'=>'Manage Spmessage', 'url'=>array('admin')),
);
?>

<h1>Create Spmessage</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>