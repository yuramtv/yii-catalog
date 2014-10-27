<?php
/* @var $this AssortimentController */
/* @var $model Assortiment */

$this->breadcrumbs=array(
	'Assortiments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Assortiment', 'url'=>array('index')),
	array('label'=>'Create Assortiment', 'url'=>array('create')),
	array('label'=>'View Assortiment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Assortiment', 'url'=>array('admin')),
);
?>

<h1>Update Assortiment <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>