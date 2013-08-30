<?php
$this->breadcrumbs=array(
	'Поводы'=>array('admin'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Создать','url'=>array('create')),
	array('label'=>'Обновить','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены')),
	array('label'=>'Управление','url'=>array('admin')),
);
?>

<h1>Просмотр #<?php echo $model->name; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'name',
	),
)); ?>
