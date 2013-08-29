<?php
// $this->breadcrumbs=array(
// 	'Flowers'=>array('index'),
// 	'Manage',
// );

$this->menu=array(
	array('label'=>'Создать','url'=>array('create')),
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

<h1>Каталог</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'flowers-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'price',
		'discount_price',
		'desc',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
