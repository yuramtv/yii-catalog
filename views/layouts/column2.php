<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
	
$this->beginWidget('zii.widgets.CPortlet', array(
 'title'=>'Operations',
));
$this->widget('zii.widgets.CMenu', array(
'items'=>array(
array('label'=>'Manage Category', 'url'=>array('/category/admin'), 
'visible'=>!Yii::app()->user->isGuest),
array('label'=>'Manage Assortiment', 'url'=>array('/assortiment/admin'), 
'visible'=>!Yii::app()->user->isGuest),
array('label'=>'Manage Pages', 'url'=>array('/staticpage/sppage/admin'), 
'visible'=>!Yii::app()->user->isGuest),
array('label'=>'Manage Messages', 'url'=>array('/staticpage/spmessage/admin'), 
'visible'=>!Yii::app()->user->isGuest),)    
 
 ,
 'htmlOptions'=>array('class'=>'operations'),
 ));
 $this->endWidget(); 
	
	
	if(!Yii::app()->user->isGuest)
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		else
		$this->widget('zii.widgets.CMenu', array(
			'items'=>Category::All_shown(),
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>