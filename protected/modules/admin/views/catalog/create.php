<?php
// $this->breadcrumbs=array(
// 	'Flowers'=>array('index'),
// 	'Create',
// );

$this->menu=array(
	array('label'=>'Управление','url'=>array('admin')),
);
?>

<h1>Добавить букет</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>