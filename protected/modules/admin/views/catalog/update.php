<?php
$this->breadcrumbs=array(
	'Каталог'=>array('admin'),
	$model->title=>array('view','id'=>$model->title),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Управление','url'=>array('admin')),
	array('label'=>'Создать','url'=>array('create')),
	array('label'=>'Просмотреть','url'=>array('view','id'=>$model->id)),
);
?>

<h1>Обновить букет <?php echo $model->title; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>