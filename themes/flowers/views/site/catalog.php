<?php $this->widget('zii.widgets.CListView',array(
    'dataProvider'=>$catalog,
    'enablePagination' => true,
    'template' => '{items}{pager}',
    'itemView'=>'_catalog_item',
    'id' => 'catalog-items',
    'pager' => 'CatalogPager',
    'pagerCssClass' => 'nav',
    'afterAjaxUpdate' => 'js:function(){
    	$("#catalog .nav ul").append(\'<li><a class="show-all" href="/site/index?ajax=catalog-items&show_all=1">Показать все</a></li>\');
    	$(".item .images").fotorama({width:320, height:378, nav:"none", arrows: "true"});
    }'
)); ?>