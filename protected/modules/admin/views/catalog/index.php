<?php
$this->breadcrumbs=array(
	'Flowers',
);

$this->menu=array(
	array('label'=>'Create Flowers','url'=>array('create')),
	array('label'=>'Manage Flowers','url'=>array('admin')),
);
?>

<h1>Flowers</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
