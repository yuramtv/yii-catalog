<?php
/* @var $this SppageController */
/* @var $model Sppage */

$this->breadcrumbs=array(
	'Sppages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sppage', 'url'=>array('index')),
	array('label'=>'Create Sppage', 'url'=>array('create')),
	array('label'=>'View Sppage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sppage', 'url'=>array('admin')),
);
?>

<h1>Update Sppage <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>