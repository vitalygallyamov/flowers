   <div id="phone-form" style="display: none;">
       <?php $this->renderPartial('/phones/_form', array('model' => $phone));?>
   </div>
   <div class="panel">
        <div class="wr">
            <nav>
                <ul>
                    <li>
                        <a href="#">
                            Каталог
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Акции
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            Как заказать
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Как оплатить
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Отзывы
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="filter">
                <form action="" id="catalog-filter">
                    <?php echo Chtml::dropDownList('Filter[category]', 0, Category::getList(array(0 => 'Категория'))); ?>
                    <?php echo Chtml::dropDownList('Filter[price]', 0, Catalog::getPriceBoundsList()); ?>
                    <?php echo Chtml::dropDownList('Filter[flower]', 0, Flowers::getList(array(0 => 'Цветы'))); ?>
                    <?php echo Chtml::dropDownList('Filter[reason]', 0, Reasons::getList(array(0 => 'Повод'))); ?>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div id="catalog" class="product">
        <div class="flash"><?php echo Yii::app()->user->getFlash('order-confirm'); ?></div>
        <!-- <img src="<?=$this->getAssetsUrl()?>/images/prod.png" alt="" title=""/> -->
        <div class="items"><? $this->renderPartial('catalog', array('catalog' => $catalog));?></div>
        <div id="order-form" style="display: none;">
            <? $this->renderPartial('_order_form', array('model' => $order)); ?>
        </div>
        <?/*
        <div class="items">

            <div class="item">
                <div class="bx">
                    <div class="price">
                        <span class="col">
                            <span>9999 &#8399;</span>
                        </span>
                    </div>
                    <div class="text">
                        <span class="name">Жоржетта</span>
                        <div class="desc">
                            розы, гладиоусы, пионы, ромашки, гортензии, фиалки, лиллии, тюльпаны
                        </div>
                        <div class="submit">
                            <dl>
                                <dt>
                                    9999 &#8399;
                                </dt>
                                <dd>
                                    <input type="submit" value="Заказать" />
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="images">
                        <img src="<?=$this->getAssetsUrl()?>/images/1.png" alt="" title="" />
                        <img src="<?=$this->getAssetsUrl()?>/images/1.png" alt="" title="" />
                        <img src="<?=$this->getAssetsUrl()?>/images/1.png" alt="" title="" />
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="bx">
                    <div class="price">
                        <span class="col">
                            <span>9999 &#8399;</span>
                        </span>
                    </div>
                    <div class="text">
                        <span class="name">Жоржетта</span>
                        <div class="desc">
                            розы, гладиоусы, пионы, ромашки, гортензии, фиалки, лиллии, тюльпаны
                        </div>
                        <div class="submit">
                            <dl>
                                <dt>
                                    9999 &#8399;
                                </dt>
                                <dd>
                                    <input type="submit" value="Заказать" />
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="images" id="fl_1">
                        <img src="<?=$this->getAssetsUrl()?>/images/1.png" alt="" title="" />
                        <img src="<?=$this->getAssetsUrl()?>/images/1.png" alt="" title="" />
                        <img src="<?=$this->getAssetsUrl()?>/images/1.png" alt="" title="" />
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="bx">
                    <div class="price old">
                        <span class="col"><s>12000 &#8399;</s><span>9999 &#8399;</span></span>
                    </div>
                    <div class="text">
                        <span class="name">Жоржетта</span>
                        <div class="desc">
                            розы, гладиоусы, пионы, ромашки, гортензии, фиалки, лиллии, тюльпаны
                        </div>
                        <div class="submit">
                            <dl>
                                <dt>
                                    9999 &#8399;
                                </dt>
                                <dd>
                                    <input type="submit" value="Заказать" />
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="images">
                        <img src="<?=$this->getAssetsUrl()?>/images/1.png" alt="" title="" />
                        <img src="<?=$this->getAssetsUrl()?>/images/1.png" alt="" title="" />
                        <img src="<?=$this->getAssetsUrl()?>/images/1.png" alt="" title="" />
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="bx">
                    <div class="price">
                        <span class="col">
                            <span>9999 &#8399;</span>
                        </span>
                    </div>
                    <div class="text">
                        <span class="name">Жоржетта</span>
                        <div class="desc">
                            розы, гладиоусы, пионы, ромашки, гортензии, фиалки, лиллии, тюльпаны
                        </div>
                        <div class="submit">
                            <dl>
                                <dt>
                                    9999 &#8399;
                                </dt>
                                <dd>
                                    <input type="submit" value="Заказать" />
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="images">
                        <img src="<?=$this->getAssetsUrl()?>/images/1.png" alt="" title="" />
                        <img src="<?=$this->getAssetsUrl()?>/images/1.png" alt="" title="" />
                        <img src="<?=$this->getAssetsUrl()?>/images/1.png" alt="" title="" />
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="bx">
                    <div class="price">
                        <span class="col">
                            <span>9999 &#8399;</span>
                        </span>
                    </div>
                    <div class="text">
                        <span class="name">Жоржетта</span>
                        <div class="desc">
                            розы, гладиоусы, пионы, ромашки, гортензии, фиалки, лиллии, тюльпаны
                        </div>
                        <div class="submit">
                            <dl>
                                <dt>
                                    9999 &#8399;
                                </dt>
                                <dd>
                                    <input type="submit" value="Заказать" />
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="images">
                        <img src="<?=$this->getAssetsUrl()?>/images/1.png" alt="" title="" />
                        <img src="<?=$this->getAssetsUrl()?>/images/1.png" alt="" title="" />
                        <img src="<?=$this->getAssetsUrl()?>/images/1.png" alt="" title="" />
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="bx">
                    <div class="price">
                        <span class="col">
                            <span>9999 &#8399;</span>
                        </span>
                    </div>
                    <div class="text">
                        <span class="name">Жоржетта</span>
                        <div class="desc">
                            розы, гладиоусы, пионы, ромашки, гортензии, фиалки, лиллии, тюльпаны
                        </div>
                        <div class="submit">
                            <dl>
                                <dt>
                                    9999 &#8399;
                                </dt>
                                <dd>
                                    <input type="submit" value="Заказать" />
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="images">
                        <img src="<?=$this->getAssetsUrl()?>/images/1.png" alt="" title="" />
                        <img src="<?=$this->getAssetsUrl()?>/images/1.png" alt="" title="" />
                        <img src="<?=$this->getAssetsUrl()?>/images/1.png" alt="" title="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="nav">
                    <ul>
                        <li>
                            Страницы:
                        </li>
                        <li>
                            <a href="#">
                                1
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                2
                            </a>    
                        </li>
                        <li class="active">
                            <a href="#">
                                3
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                4
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Показать все
                            </a>
                        </li>
                    </ul>
                </dd>
            </dl>
        </div>
        <a href="#" class="button prev">Назад</a>
        <a href="#" class="button next">Вперед</a>*/?>
    </div>

    <div class="plus">

        <dl class="time">
            <dt>
                60 <br/>минут
            </dt>
            <dd>
                Среднее время доставки
            </dd>
        </dl>
        <dl class="grnt">
            <dt>
                Гарантия возврата &#8399;
            </dt>
            <dd>
                Если букет вам не понравиться, мы вернем вам деньги
            </dd>
        </dl>
        <dl class="bkt">
            <dt>
                1689 букетов
            </dt>
            <dd>
                Доставлено по Удмуртии
            </dd>
        </dl>
    </div>

    <div class="step">
        <h2>
            Как заказать и оплатить
        </h2>
        <ul class="list">
            <li class="step1">
                <span class="iocn tel">
                    <i></i>
                    <span class="head">
                        Позвонить
                    </span>
                    <span class="num">
                        77-34-75
                    </span>
                </span>
            </li>
            <li class="step2">
                <span class="iocn cite">
                    <i></i>
                    <span class="head">
                        Оставить заявку
                    </span>
                    <span class="desc">
                        на сайте
                    </span>
                </span>
                <a href="#" class="submit">Оставить заявку</a>
            </li>
            <li class="step3">
                <span class="iocn inf">
                    <i></i>
                    <span class="head">
                        Мы уточняем данные
                    </span>
                    <span class="desc">
                        для доставки
                    </span>
                </span>
            </li>
            <li class="step6">
                <span class="iocn membr">
                    <i></i>
                    <span class="head">
                        Курьер доставляет
                    </span>
                    <span class="desc">
                        цветы и радость Вашим близким
                    </span>
                </span>
            </li>
            <li class="step5">
                <span class="iocn pay">
                    <i></i>
                    <span class="head">
                        Вы оплачиваете
                    </span>
                    <span class="desc">
                        любым удобным способом
                    </span>
                    <a href="#" class="submit">Подробнее об оплате</a>
                </span>
            </li>
            <li class="step4">
                <span class="iocn fl">
                    <i></i>
                    <span class="head">
                        И составляем букет
                    </span>
                </span>
            </li>
        </ul>
    </div>
    <!--online pay-->
    <div class="online">
        <div class="wr">
            <div class="sp1">
                <h3>
                    On-line оплата через сайт
                </h3>
                <ul>
                    <li class="step1">
                    <span class="head">
                        Нажмите
                    </span>
                    <span class="desc">
                        на кнопку Заказать
                    </span>
                    </li>
                    <li class="step2">
                    <span class="head">
                        Заполните
                    </span>
                    <span class="desc">
                        данные в форме и нажмите Купить
                    </span>
                    </li>
                    <li class="step3">
                    <span class="head">
                        Перейдите
                    </span>
                    <span class="desc">
                        в платежную систему и выберите способ оплаты
                    </span>
                    </li>
                    <li class="step6">
                    <span class="head">
                        Получите
                    </span>
                    <span class="desc">
                        смс-уведомление об оплате
                    </span>
                    </li>
                    <li class="step5">
                    <span class="head">
                        Проверьте
                    </span>
                    <span class="desc">
                        данные, введя пароль из смс
                    </span>
                    </li>
                    <li class="step4">
                    <span class="head">
                        Заполните
                    </span>
                    <span class="desc">
                        информацию о своей карте
                    </span>
                    </li>
                </ul>
            </div>
            <div class="sp2">
                <h3>
                    Наличными $ или &#8399;
                </h3>

                <div class="bg">
                    <dl class="coll-en">
                        <dt>
                            Курьеру
                        </dt>
                        <dd>
                            Курьер подъедет по указанному Вами адресу, возьмет оплату и оставит Вам чек
                        </dd>
                    </dl>
                    <dl class="coll-de">
                        <dt>
                            Евросеть, Связной
                        </dt>
                        <dd>
                            В любом отделении Евросети или Связного, назвав номер Вашего Яндекс-кошелька
                        </dd>
                    </dl>
                    <dl class="coll-tre">
                        <dt>
                            В отделе
                        </dt>
                        <dd>
                            Вы можете приехать в нам в гости, мы находимся по адресу Ленина 102в (Ипподром)
                        </dd>
                    </dl>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="sp3">
                <h3>
                    On-line оплата<br/> через платежные системы
                </h3>

                <div class="bg">
                    <dl class="coll-en">
                        <dt>
                            <span class="icon icon-ya"><i></i>Яндекс деньги</span>
                        </dt>
                        <dd>
                            Переведите необходимую сумму на наш счет 410011363103133 в комментариях укажите ваши имя или фамилию
                        </dd>
                    </dl>
                    <dl class="coll-de">
                        <dt>
                            <span class="icon icon-qw"><i></i>Киви-кошелек</span>
                        </dt>
                        <dd>
                            Через терминал оплаты или переводом с вашего кошелька на наш счет  922-517-35-76, в комментариях укажите имя или фамилию
                        </dd>
                    </dl>
                    <dl class="coll-tre">
                        <dt>
                            <span class="icon icon-wb"><i></i>Web-money</span>
                        </dt>
                        <dd>
                            Переводите на шаш кошелек R387430099336 с указанием ваших фамилии или имени в примечании
                        </dd>
                    </dl>
                    <dl class="coll-ctr">
                        <dt>
                            <span class="icon icon-sb"><i></i>Сбербанк</span>
                        </dt>
                        <dd>
                            Переведите деньги на наш счет с карты или в ближайшем отделении банка
                        </dd>
                    </dl>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <!--online pay End-->
    <!--rew-->
    <div class="rew">

        <div class="content">

            <h2>
                Отзывы
            </h2>
            <a href="#" class="icon read update-reviews" data-page="2">
                <i></i>
                Ещё отзывы
            </a>
            <div class="reviews-block">
                <? $this->renderPartial('reviews', array('reviews' => $reviews))?>
            </div>
        </div>

        <div class="aside">
            <div class="modul subsc">
                <dl>
                    <dt>
                        <input type="text" placeholder="Имя" />
                        <input type="text" placeholder="E-mail" />
                    </dt>
                    <dd>
                    <span class="spam">
                        Никакого спама - гарантируем!
                    </span>
                        <input type="submit" class="i-submit i-subscr" value="" />
                    </dd>
                </dl>
            </div>
            <div class="modul soc">
                <img src="<?=$this->getAssetsUrl()?>/images/soc.png" alt="" title=""/>
            </div>
        </div>

        <div class="clear"></div>

    </div>
    <!--rew End-->

    <!--stat-->
    <div class="stat">
        <h3>
            Почему уже более 6398 человек заказали букет у нас?
        </h3>
        <div class="coll">
            <div class="left">
                <dl class="item free">
                    <dt>
                        Бесплатная доставка
                    </dt>
                    <dd>
                        Бесплатная круглосуточная доставка по Ижевску. Заказы принимаются с 07:00 до 22:00 из любого города и страны, время Московское.
                    </dd>
                </dl>
                <dl class="item cl">
                    <dt>
                        Мы отвечаем за качество 100%
                    </dt>
                    <dd>
                        Мы отвечаем за качество букетов и свежесть цветов! Это не просто слова, мы даем 100% гарантию возврата денег, если букет вам не понравится. Мы соблюдаем условия хранения и температурный режим при транспортировке цветов, используя специальный контейнер.
                    </dd>
                </dl>
                <dl class="item pay">
                    <dt>
                        Универсальные способы оплаты
                    </dt>
                    <dd>
                        Заказ можно оплатить любым удобным способом -наличными, с банковской карты или электронными деньгами.
                    </dd>
                </dl>
            </div>
            <div class="right">
                <dl class="item time">
                    <dt>
                        Доставим за 60 минут
                    </dt>
                    <dd>
                        Среднее время доставки букетов нашей компанией составляет 60 минут. Спустя это время ваши близкие уже откроют дверь курьеру и узнают, что Вы о них помните.
                    </dd>
                </dl>
                <dl class="item client">
                    <dt>
                        Эти люди не могут ошибаться
                    </dt>
                    <dd>
                        Сотрудники компаний «Сбербанк», «Аспек», «Россельхозбанк», «Комос» и многие жители города Ижевска заказывают и получают наши букеты.
                    </dd>
                </dl>
                <dl class="item prz">
                    <dt>
                        Презенты
                    </dt>
                    <dd>
                        К каждому букету мы подарим фирменную открытку и впишем туда Ваши самые искренние пожелания. А что бы букет долго радовал и грел душу, приложим специальную подкормку для срезанных цветов Chrisal и инструкцию по уходу за букетом.
                    </dd>
                </dl>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!--stat End-->

    <!--client-->
    <div class="client">
        <div class="wr">
            <a href="#" class="arr prev"></a>
            <div class="bx">
                <ul>
                    <li class="cl">
                        <img src="<?=$this->getAssetsUrl()?>/images/s_cl.png" alt="" title="" />
                    </li>
                    <li class="sb">
                        <img src="<?=$this->getAssetsUrl()?>/images/s_sb.png" alt="" title="" />
                    </li>
                    <li class="as">
                        <img src="<?=$this->getAssetsUrl()?>/images/s_as.png" alt="" title="" />
                    </li>
                    <li class="ud">
                        <img src="<?=$this->getAssetsUrl()?>/images/s_ud.png" alt="" title="" />
                    </li>
                    <li class="bm">
                        <img src="<?=$this->getAssetsUrl()?>/images/s_bm.png" alt="" title="" />
                    </li>
                    <li class="rsb">
                        <img src="<?=$this->getAssetsUrl()?>/images/s_rsb.png" alt="" title="" />
                    </li>
                </ul>
            </div>
            <a href="#" class="arr next"></a>
        </div>
    </div>
    <!--client End-->
    <div class="hf"></div>