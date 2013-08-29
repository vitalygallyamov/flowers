<dl class="item">
    <dt>
        <?=CHtml::encode($data->msg)?>
    </dt>
    <dd>
        <ul>
            <li class="name">
                <a href="#">
                    <?=CHtml::encode($data->fio)?>
                </a>
            </li>
            <li>
                <a href="<?=CHtml::encode($data->link)?>" class="icon vk">
                    <i></i>
                    <?=CHtml::encode($data->link)?>
                </a>
            </li>
        </ul>
    </dd>
    <dd class="ava">
        <div class="bx">
            <img src="<?=CHtml::encode($data->getPreview('mini'))?>" alt="" title="" />
        </div>
    </dd>
</dl>