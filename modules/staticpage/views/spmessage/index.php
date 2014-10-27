<?php
/* @var $this SpmessageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Spmessages',
);

$this->menu=array(
	array('label'=>'Create Spmessage', 'url'=>array('create')),
	array('label'=>'Manage Spmessage', 'url'=>array('admin')),
);
?>

<h1>Spmessages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
