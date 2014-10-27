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