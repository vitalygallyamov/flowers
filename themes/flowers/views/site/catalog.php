<style>
	.product .item{
		width: 33.333333%;
		float: left;
		min-height: 426px;
		text-align: center;
	}
	.product .item div{
		text-align: center;
	}
</style>

<?php $this->widget('bootstrap.widgets.TbListView',array(
    'dataProvider'=>$catalog,
    'enablePagination' => true,
    'template' => '{items}<div class="nav">{pager}</div>',
    'itemView'=>'_catalog_item',
    'id' => 'catalog-items',
)); ?>