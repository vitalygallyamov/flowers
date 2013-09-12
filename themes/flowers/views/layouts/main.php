<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>title</title>
<link rel="stylesheet/less" type="text/css" href="<?=$this->getAssetsUrl()?>/css/styles.less">
<link rel="stylesheet/less" type="text/css" href="<?=$this->getAssetsUrl()?>/js/fancybox/jquery.fancybox.css">
<script src="<?=$this->getAssetsUrl()?>/js/less.js" type="text/javascript"></script>
<?/*<script src="<?=$this->getAssetsUrl()?>/js/jquery.js" type="text/javascript"></script>*/?>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?=$this->getAssetsUrl()?>/js/jquery.measurer.js"></script>
<script type="text/javascript" src="<?=$this->getAssetsUrl()?>/js/jquery.gradienttext.js"></script>
<script type="text/javascript" src="<?=$this->getAssetsUrl()?>/js/cusel.js"></script>
<script type="text/javascript" src="<?=$this->getAssetsUrl()?>/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?=$this->getAssetsUrl()?>/js/fotorama.js"></script>
<script type="text/javascript" src="<?=$this->getAssetsUrl()?>/js/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?=$this->getAssetsUrl()?>/js/common.js"></script>
<script>
  $(document).ready(function(){
      $('.slogan').gradientText({
         colors: ['#ed087f', '#ee5139']
      });
      $('.tel').gradientText({
          colors: ['#39b5a5', '#9acd5a']
      });
      $('.item .text .name').gradientText({
          colors: ['#008c93', '#1f9cd4']
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
  $(function() {
    $('.item .images').fotorama({width:320, height:378, nav:'none', arrows: 'true'});
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
                <a href="#" class="popup get-call">
                    Заказать звонок
                </a>
            </span>
        </div>
    </header>

    <? print $content;?>
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
