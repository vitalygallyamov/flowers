<?php
$this->breadcrumbs=array(
	'Отзывы'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Управление','url'=>array('admin')),
	array('label'=>'Создать','url'=>array('create')),
	array('label'=>'Просмотреть','url'=>array('view','id'=>$model->id)),
);
?>

<h1>Обновить отзыв <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>