<?php $this->beginContent('/layouts/main'); ?>
<div class="span2">
	<?php $this->widget('bootstrap.widgets.TbMenu', array(
    	'type'=>'list',
    	'items'=> $this->menu
    )); ?>
</div>
<div class="span10">
	<div class="span12" id="main-content">
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		    'links'=>$this->breadcrumbs,
		    'homeLink'=>CHtml::link('Главная',array('/admin')),
		)); ?>
	    <?php echo $content; ?>
	</div><!-- content -->
</div>
<?php $this->endContent(); ?>