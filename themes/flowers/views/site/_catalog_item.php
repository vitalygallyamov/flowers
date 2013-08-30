<div class="item">
	<div class="title"><?=CHtml::encode($data->title)?></div> 
	<div class="images">
		<?foreach($data->gallery->galleryPhotos as $item){?>
			<img src="<?=$item->getUrl('mini')?>" alt="">
		<?}?>
	</div>
	<div class="desc"><?=CHtml::encode($data->desc)?></div>
	<?if(isset($data->discount_price)){?>
	<div class="price"><?=$data->discount_price?></div>
	<?}?>
	<div class="price_old"><?=CHtml::encode($data->price)?> Р</div>
	<input type="submit" value="заказать" />
</div>