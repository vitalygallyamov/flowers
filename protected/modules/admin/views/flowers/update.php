<?php
$this->breadcrumbs=array(
	'Цветы'=>array('admin'),
	$model->name=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Создать','url'=>array('create')),
	array('label'=>'Управление','url'=>array('admin')),
);
?>

<h1>Обновить <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>