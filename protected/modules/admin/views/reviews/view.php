<?php
$this->breadcrumbs=array(
	'Отзывы'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Управление','url'=>array('admin')),
	array('label'=>'Создать','url'=>array('create')),
	array('label'=>'Изменить','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены?')),
);
?>

<h1>Отзыв #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fio',
		'msg',
		'link',
		array(
			'name' => 'img',
			'type' => 'html',
			'value' => CHtml::image($model->getPreview('mini'))
		),
	),
)); ?>
