<div class="item">
    <div class="bx">
        <div class="price<? if(isset($data->discount_price)) echo " old"; ?>">
            <span class="col">
            	<? if(isset($data->discount_price)){?>
            		<span class="col">
            			<s><?=CHtml::encode($data->price)?> &#8399;</s>
            			<span><?=CHtml::encode($data->discount_price)?> &#8399;</span>
            		</span>
            	<?}else{?>
					<span class="col"><span><?=CHtml::encode($data->price)?> &#8399;</span></span>
            	<?}?>
            </span>
        </div>
        <div class="text">
            <span class="name"><?=CHtml::encode($data->title)?></span>
            <div class="desc">
                <?=CHtml::encode($data->desc)?>
            </div>
            <div class="submit">
                <dl>
                    <dt>
                    	<? if(isset($data->discount_price)){
                    		echo CHtml::encode($data->discount_price).'&#8399';
                    	}else{
                    		echo CHtml::encode($data->price).'&#8399';
                    	}?>
                    </dt>
                    <dd>
                        <input data-good="<?=$data->id?>" class="set-order" type="submit" value="Заказать" />
                    </dd>
                </dl>
            </div>
        </div>
        <div class="images">
            <?foreach($data->gallery->galleryPhotos as $item){?>
				<img src="<?=$item->getUrl('mini')?>" alt="">
			<?}?>
        </div>
    </div>
</div>