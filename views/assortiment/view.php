<?php
/* @var $this AssortimentController */
/* @var $model Assortiment */

$this->breadcrumbs=array(
	'Assortiments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Assortiment', 'url'=>array('index')),
	array('label'=>'Create Assortiment', 'url'=>array('create')),
	array('label'=>'Update Assortiment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Assortiment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Assortiment', 'url'=>array('admin')),
);
?>

<h1>View Assortiment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description_ru',
		'description_et',
		'description_en',
array(
'label'=>'Category',
'type'=>'raw',
'value'=>$model->category->name_ru,
),

array(
'label'=>'Photo',
'type'=>'raw',
// If image exests- show image, else show no photo image
'value'=> $this->assortiment_image($model->id, $model->name_ru,'',
//Yii::app()->urlManager->baseUrl.
'/images/assortiment_img/'.$model->id.'_assortiment.jpg','_blank'),	
),

array(
'label'=>'description',
'type'=>'html',
'value'=>$model->description_ru,
),
		'rating',
		'shown',
		'name_ru',
		'name_et',
		'name_en',
		'prise',
		'prise_old',
	),
)); ?>
