<?php
$this->breadcrumbs=array(
	'Отзывы'=>array('admin'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Управление','url'=>array('admin')),
);
?>

<h1>Создать отзыв</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>