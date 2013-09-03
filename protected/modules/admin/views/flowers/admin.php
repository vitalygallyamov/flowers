<?php
$this->breadcrumbs=array(
	'Цветы'=>array('admin'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Добавить','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('flowers-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Список цветов</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'flowers-grid',
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
