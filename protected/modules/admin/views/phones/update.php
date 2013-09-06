<?php
$this->breadcrumbs=array(
	'Заявки на звонок'=>array('admin'),
	$model->name=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Управление','url'=>array('admin')),
);
?>

<h1>Обновить заявку № - <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>