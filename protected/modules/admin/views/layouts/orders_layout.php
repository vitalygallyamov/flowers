<?php $this->beginContent('/layouts/main'); ?>
<div class="span12">
	<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
	    'links'=>$this->breadcrumbs,
	    'homeLink'=>CHtml::link('Главная',array('/admin')),
	)); ?>
    <?php echo $content; ?>
</div>
<?php $this->endContent(); ?>