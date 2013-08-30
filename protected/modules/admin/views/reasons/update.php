<?php
$this->breadcrumbs=array(
	'Поводы'=>array('admin'),
	$model->name=>array('view','id'=>$model->name),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Управление','url'=>array('admin')),
	array('label'=>'Создать','url'=>array('create')),
	array('label'=>'Просмотреть','url'=>array('view','id'=>$model->id)),
);
?>

<h1>Обновить повод - <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>