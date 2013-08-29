<?php
$this->breadcrumbs=array(
	'Отзывы'=>array('admin'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Создать','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('reviews-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление отзывами</h1>
<!-- 
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'reviews-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name' => 'img',
			'type' => 'html',
			'value' => 'CHtml::openTag("div", array("style" => "text-align: center")).CHtml::image($data->getPreview("mini")).CHtml::closeTag("div")'
		),
		'fio',
		'msg',
		'link',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
