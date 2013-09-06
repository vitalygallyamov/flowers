<?php
$this->breadcrumbs=array(
	'Заявки на звонок'=>array('admin'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Обновить','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены?')),
	array('label'=>'Управление','url'=>array('admin')),
);
?>

<h1>Заявка #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'phone',
		'name',
		array(
			'name' => 'status',
			'value' => Phones::$statuses[$model->status]
		)
	),
)); ?>
