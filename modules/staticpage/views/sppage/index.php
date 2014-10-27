<?php
/* @var $this SppageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sppages',
);

$this->menu=array(
	array('label'=>'Create Sppage', 'url'=>array('create')),
	array('label'=>'Manage Sppage', 'url'=>array('admin')),
//		array('label'=>'О нас', 'url'=>array('page=about')),
);
?>

<h1>Sppages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
