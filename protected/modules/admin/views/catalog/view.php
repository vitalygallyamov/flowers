<?php
$this->breadcrumbs=array(
	'Товары'=>array('admin'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Управление','url'=>array('admin')),
	array('label'=>'Создать','url'=>array('create')),
	array('label'=>'Изменить','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены?')),
);
?>

<h1>Товар #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'title',
		'price',
		'discount_price',
		'desc',
	),
)); ?>

<?php echo CHtml::label('Галерея', 'gallery');?>
<?php
$this->widget('admin_ext.imagesgallery.GalleryManager', array(
	'gallery' => $model->galleryBehavior->getGallery(),
    'controllerRoute' => '/admin/gallery', //route to gallery controller
));
?>
