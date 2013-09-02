<?php
$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Orders','url'=>array('index')),
	array('label'=>'Create Orders','url'=>array('create')),
	array('label'=>'Update Orders','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Orders','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Orders','url'=>array('admin')),
);
?>

<h1>View Orders #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fio',
		'phone',
		'address',
		'date_order',
		'msg',
		'status',
		'date_create',
	),
)); ?>
