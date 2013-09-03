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
		//'id',
		'fio',
		'phone',
		'address',
		array(
            'name' => 'date_order',
            'value' => 'date("d.m.Y H:m", CDateTimeParser::parse($data->date_order, "yyyy-MM-dd hh:mm:ss"))',
        ),
		'msg',
		array(
            'name' => 'pay_type',
            'value' => 'Orders::$types[$data->pay_type]',
        ),
		array(
            'name' => 'status',
            'value' => 'Orders::$statuses[$data->status]',
        ),
		array(
            'name' => 'date_create',
            'value' => 'date("d.m.Y H:m", CDateTimeParser::parse($data->date_create, "yyyy-MM-dd hh:mm:ss"))',
        ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
