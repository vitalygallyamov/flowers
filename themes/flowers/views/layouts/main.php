<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>title</title>
<link rel="stylesheet/less" type="text/css" href="css/styles.less">
<script src="js/less.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.measurer.js"></script>
<script type="text/javascript" src="js/jquery.gradienttext.js"></script>
<script type="text/javascript" src="js/cusel.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script>
  $(document).ready(function(){
     $('.slogan').gradientText({
         colors: ['#ed087f', '#ee5139']
     });
      $('.tel').gradientText({
          colors: ['#39b5a5', '#9acd5a']
      });
  });
  $(function(select_cusel){
      var params = {
          changedEl: "select",
          scrollArrows: false
      }
      cuSel(params);
  });
  jQuery(document).ready(function() {
      jQuery('#carousel').jcarousel({
          scroll: 6,
          animation: 5000,
          auto: true,
          wrap: "circular"
      });
  });
</script>
</head>
<body>
<div class="wrap">
    <header>
        <div class="wr">
            <a href="#" class="logo"></a>

            <div class="slogan">
                Посылай красиво!
            </div>

            <div class="city">
                <span class="icon izh">
                    Ижевск <i></i>
                </span>
                <span class="tel">
                    +7(3412)773576
                </span>
                <a href="#" class="popup">
                    Заказать звонок
                </a>
            </span>
        </div>
    </header>

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
                <select id="fProduct">
                    <option value="0">
                        Товары
                    </option>
                </select>
                <select id="fPrice">
                    <option value="0">
                        Цена
                    </option>
                </select>
                <select id="fFloweras">
                    <option value="0">
                        Цветы
                    </option>
                </select>
                <select id="fDay">
                    <option value="0">
                        Повод
                    </option>
                </select>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="product">
        <img src="images/prod.png" alt="" title=""/>
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

    <!--rew-->
    <div class="rew">

        <div class="content">

            <h2>
                Отзывы
            </h2>

            <a href="#" class="icon read">
                <i></i>
                Ещё отзывы
            </a>

            <dl class="item">
                <dt>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                </dt>
                <dd>
                    <ul>
                        <li class="name">
                            <a href="#">
                                Анатолий, г.Пермь
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icon vk">
                                <i></i>
                                vk.com/user12
                            </a>
                        </li>
                    </ul>
                </dd>
                <dd class="ava">
                    <div class="bx">
                        <img src="images/u1.png" alt="" title="" />
                    </div>
                </dd>
            </dl>
            <dl class="item">
                <dt>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                </dt>
                <dd>
                    <ul>
                        <li class="name">
                            <a href="#">
                                Анатолий, г.Пермь
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icon vk">
                                <i></i>
                                vk.com/user12
                            </a>
                        </li>
                    </ul>
                </dd>
                <dd class="ava">
                    <div class="bx">
                        <img src="images/u1.png" alt="" title="" />
                    </div>
                </dd>
            </dl>
            <dl class="item">
                <dt>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remining essentially unchanged.
                </dt>
                <dd>
                    <ul>
                        <li class="name">
                            <a href="#">
                                Анатолий, г.Пермь
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icon vk">
                                <i></i>
                                vk.com/user12
                            </a>
                        </li>
                    </ul>
                </dd>
                <dd class="ava">
                    <div class="bx">
                        <img src="images/u1.png" alt="" title="" />
                    </div>
                </dd>
            </dl>
            <dl class="item">
                <dt>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                </dt>
                <dd>
                    <ul>
                        <li class="name">
                            <a href="#">
                                Анатолий, г.Пермь
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icon vk">
                                <i></i>
                                vk.com/user12
                            </a>
                        </li>
                    </ul>
                </dd>
                <dd class="ava">
                    <div class="bx">
                        <img src="images/u1.png" alt="" title="" />
                    </div>
                </dd>
            </dl>
            <dl class="item">
                <dt>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                </dt>
                <dd>
                    <ul>
                        <li class="name">
                            <a href="#">
                                Анатолий, г.Пермь
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icon vk">
                                <i></i>
                                vk.com/user12
                            </a>
                        </li>
                    </ul>
                </dd>
                <dd class="ava">
                    <div class="bx">
                        <img src="images/u1.png" alt="" title="" />
                    </div>
                </dd>
            </dl>
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
                <img src="images/soc.png" alt="" title=""/>
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
                        <img src="images/s_cl.png" alt="" title="" />
                    </li>
                    <li class="sb">
                        <img src="images/s_sb.png" alt="" title="" />
                    </li>
                    <li class="as">
                        <img src="images/s_as.png" alt="" title="" />
                    </li>
                    <li class="ud">
                        <img src="images/s_ud.png" alt="" title="" />
                    </li>
                    <li class="bm">
                        <img src="images/s_bm.png" alt="" title="" />
                    </li>
                    <li class="rsb">
                        <img src="images/s_rsb.png" alt="" title="" />
                    </li>
                </ul>
            </div>
            <a href="#" class="arr next"></a>
        </div>
    </div>
    <!--client End-->
    <div class="hf"></div>
</div>

<footer>
        <div class="top">
            <div class="wr">
                <span class="logo"></span>

                <div class="tel">
                    +7(3412)475454<br/>
                    +7(3412)475454<br/>
                    <a href="mailto:info@flowers18.ru">info@flowers18.ru</a>
                </div>

                <div class="contact">
                    г.Ижевск<br/>
                    ул.Пушкинская 100,д.23<br/>
                    <a href="#" class="icon maps"><i></i>Карта проезда</a>
                </div>

                <div class="soc">
                    <ul>
                        <li class="sk">
                            <a href="#"></a>
                        </li>
                        <li class="vk">
                            <a href="#"></a>
                        </li>
                        <li class="ins">
                            <a href="#"></a>
                        </li>
                    </ul>
                </div>

                <div class="text">
                    Цветочные истории - это служба доставки цветов по городу Ижевску и Удмуртской республике, это реальные истории людей, которых разделяют расстояния, но соединяют чувства. Букеты создаются опытными флористами исключительно из свежих цветов.
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="bottom">
            <div class="wr">
                <span class="data">
                    © «Цветочные истории», 2013
                </span>
                <a href="#" class="web">
                    Создание сайта - "Codax"
                </a>
            </div>
        </div>
</footer>
</body>
</html>
