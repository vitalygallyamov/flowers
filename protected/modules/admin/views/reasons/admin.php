<?php
$this->breadcrumbs=array(
	'Подводы'=>array('admin'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Создать','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('reasons-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление Поводами</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'reasons-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'name',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
