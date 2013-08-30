<?php
$this->breadcrumbs=array(
	'Поводы'=>array('admin'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Управление','url'=>array('admin')),
);
?>

<h1>Создать повод</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>