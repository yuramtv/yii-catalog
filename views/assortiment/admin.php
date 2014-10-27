<?php
/* @var $this AssortimentController */
/* @var $model Assortiment */

$this->breadcrumbs=array(
	'Assortiments'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Assortiment', 'url'=>array('index')),
	array('label'=>'Create Assortiment', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#assortiment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Assortiments</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'assortiment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'description_ru',
		'description_et',
		'description_en',

array(
'name'=>'id',
'headerHtmlOptions'=>array('width'=>'50px')),
'name_ru',
array(
'name'=>'icon',
'type'=>'image',
//тут самое интересное: если файла картинки нет, 
// то отображается файл no_photo.gif
// Значение value обрабатывается функцией eval() поэтому 
// тут такие странные ковычки.
'value'=> 'file_exists($_SERVER[DOCUMENT_ROOT]."/images/assortiment_img/thumb/".$data->id."_assortiment.jpg") ? 
"/images/assortiment_img/thumb_small/".$data->id."_assortiment.jpg" : 
"/images/assortiment_img/thumb_small/no_photo.jpg"',
'filter'=>'','headerHtmlOptions'=>array('width'=>'54px'),
),

array(
'name' => 'category_id',
'filter' => CHtml::listData(Category::model()->findAll(), 'id', 'name_ru'),
'value' => '$data->category->name_ru',
),
		'rating',

array(
'name' => 'shown',
'filter' => CHtml::listData(Assortiment::model()->findAll(), 
'shown', 
'shown'),
'value' => '$data->shown',
),
		/*
		'name_ru',
		'name_et',
		'name_en',
		'prise',
		'prise_old',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
