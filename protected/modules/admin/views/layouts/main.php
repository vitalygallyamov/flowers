<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo CHtml::encode(Yii::app()->name).' | Admin';?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>

    <?php $this->widget('bootstrap.widgets.TbNavbar', array(
	    'type'=>'inverse', // null or 'inverse'
	    'brand'=> CHtml::encode(Yii::app()->name),
	    'brandUrl'=>'#',
	    'fluid' => true,
	    'collapse'=>true, // requires bootstrap-responsive.css
	    'items'=>array(
	        array(
	            'class'=>'bootstrap.widgets.TbMenu',
	            'items'=>array(
	            	//example
	                array('label'=>'Цветы', 'url'=>'#', 'active'=> (strpos($this->getId(), 'catalog') !== false), 'items' => array(
	                	array('label'=>'Создать', 'url'=>'/admin/catalog/create'),
	                    array('label'=>'Управление', 'url'=>'/admin/catalog/admin'),
	                    '---',
	                    array('label'=>'Категории'),
	                    array('label'=>'Создать', 'url'=>'/admin/category/create'),
	                    array('label'=>'Управление', 'url'=>'/admin/category/admin'),
	                    '---',
	                    array('label'=>'Поводы'),
	                    array('label'=>'Создать', 'url'=>'/admin/reasons/create'),
	                    array('label'=>'Управление', 'url'=>'/admin/reasons/admin'),
	                    '---',
	                    array('label'=>'Цветы'),
	                    array('label'=>'Создать', 'url'=>'/admin/flowers/create'),
	                    array('label'=>'Управление', 'url'=>'/admin/flowers/admin'),
	                )),
	                array('label'=>'Отзывы', 'url'=>'#', 'active'=> (strpos($this->getId(), 'reviews') !== false), 'items' => array(
	                	array('label'=>'Создать', 'url'=>'/admin/reviews/create'),
	                    array('label'=>'Управление', 'url'=>'/admin/reviews/admin'),
	                )),
	                array('label'=>'Заказы', 'url'=>'#', 'active'=> (strpos($this->getId(), 'orders') !== false), 'items' => array(
	                    array('label'=>'Управление', 'url'=>'/admin/orders/admin'),
	                )),
	                array('label'=>'Заявки на звонок', 'url'=>'#', 'active'=> (strpos($this->getId(), 'phones') !== false), 'items' => array(
	                    array('label'=>'Управление', 'url'=>'/admin/phones/admin'),
	                )),
	            ),
	        ),
	        array(
	            'class'=>'bootstrap.widgets.TbMenu',
	            'htmlOptions'=>array('class'=>'pull-right'),
	            'items'=>array(
	                array('label'=>'Выйти', 'url'=>'/admin/user/logout'),
	            ),
	        ),
	    ),
	)); ?>

    <div class="container-fluid">
		<div class="row-fluid">
			<?php echo $content;?>
	    	
	  	</div>
	</div>
    

  </body>
</html>
