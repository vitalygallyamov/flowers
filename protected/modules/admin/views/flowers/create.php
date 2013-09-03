<?php
$this->breadcrumbs=array(
	'Цветы'=>array('admin'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список','url'=>array('admin')),
);
?>

<h1>Создать</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>