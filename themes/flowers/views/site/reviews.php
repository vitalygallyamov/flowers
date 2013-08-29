<?=CHtml::hiddenField('items', ($this->reviews_limit - $reviews->itemCount), array('class' => 'r_offset'))?>

<?php $this->widget('bootstrap.widgets.TbListView',array(
    'dataProvider'=>$reviews,
    'enablePagination' => true,
    'template' => '{items}',
    'itemView'=>'_review_view',
    'id' => 'reviews',
)); ?>