<?php
/* @var $this AssortimentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Assortiments',
);

$this->menu=array(
	array('label'=>'Create Assortiment', 'url'=>array('create')),
	array('label'=>'Manage Assortiment', 'url'=>array('admin')),
);
?>

<h1>Assortiments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
