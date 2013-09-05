<?php
$this->breadcrumbs=array(
	'Заказы'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Посмотреть','url'=>array('view','id'=>$model->id)),
	array('label'=>'Управление','url'=>array('admin')),
);
?>

<h1>Обновить заказ № - <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>