<?php
$this->breadcrumbs=array(
	'Reviews',
);

$this->menu=array(
	array('label'=>'Create Reviews','url'=>array('create')),
	array('label'=>'Manage Reviews','url'=>array('admin')),
);
?>

<h1>Reviews</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
