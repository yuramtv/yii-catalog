<?php
/* @var $this SppageController */
/* @var $model Sppage */

$this->breadcrumbs=array(
	'Sppages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sppage', 'url'=>array('index')),
	array('label'=>'Manage Sppage', 'url'=>array('admin')),
);
?>

<h1>Create Sppage</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>