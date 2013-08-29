<?php
// $this->breadcrumbs=array(
// 	'Flowers'=>array('index'),
// 	$model->title=>array('view','id'=>$model->id),
// 	'Update',
// );

$this->menu=array(
	array('label'=>'List Flowers','url'=>array('index')),
	array('label'=>'Create Flowers','url'=>array('create')),
	array('label'=>'View Flowers','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Flowers','url'=>array('admin')),
);
?>

<h1>Обновить букет <?php echo $model->title; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>