<?php
/* @var $this AssortimentController */
/* @var $model Assortiment */

$this->breadcrumbs=array(
	'Assortiments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Assortiment', 'url'=>array('index')),
	array('label'=>'Manage Assortiment', 'url'=>array('admin')),
);
?>

<h1>Create Assortiment</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>