<?php
$this->breadcrumbs=array(
	'Заказы'=>array('admin'),
	'Управление',
);

/*$this->menu=array(
	array('label'=>'List Orders','url'=>array('index')),
	array('label'=>'Create Orders','url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('orders-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление заказами</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'orders-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'fio',
		'phone',
		'address',
		'date_order',
		'msg',
		/*
		'status',
		'date_create',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
