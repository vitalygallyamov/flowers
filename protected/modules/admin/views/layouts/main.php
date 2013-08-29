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
	                )),
	                array('label'=>'Отзывы', 'url'=>'#', 'active'=> (strpos($this->getId(), 'reviews') !== false), 'items' => array(
	                	array('label'=>'Создать', 'url'=>'/admin/reviews/create'),
	                    array('label'=>'Управление', 'url'=>'/admin/reviews/admin'),
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
	    	<div class="span2">
	      	<?php $this->widget('bootstrap.widgets.TbMenu', array(
			    'type'=>'list',
			    'items'=> $this->menu
			    )); ?>
	    	</div>
	    	<div class="span10">
	      		<?php echo $content;?>
	    	</div>
	  	</div>
	</div>
    

  </body>
</html>
