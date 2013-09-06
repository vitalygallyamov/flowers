<?php
$this->breadcrumbs=array(
	'Телефоны'=>array('admin'),
	'Управление',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('phones-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'phones-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'phone',
		'name',
		array(
            'name' => 'status',
            'value' => 'Phones::$statuses[$data->status]',
        ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
