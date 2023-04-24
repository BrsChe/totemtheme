<?php
/*.Template name: Home obraz*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="stylesheet" href="/style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="widht=device-widht">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="yandex-verification" content="c1981dd518d015ab" />
    <meta name='wmail-verification' content='2575a7a59c693d624881511000863585' />
    <meta name="google-site-verification" content="EFzwivlaFyYRYS8LDrCaN4MwYOpb9Kp1vFtp3NtZQSs" />
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
    <!--[if lt IE 9]> 
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script> 
    <![endif]-->
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.png" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.default.min.css">
    <?php wp_head(); ?>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
    <script>
        $(function(){
            $(".owl-carousel").owlCarousel({
                nav: true,
                dots: false,
                navText: ['&#8592','&#8594;'],
                slideBy: 3
            });
        });
    </script>
</head>
<body>
<!-- Rating@Mail.ru counter -->

<script type="text/javascript">

var _tmr = _tmr || [];

_tmr.push({id: "2694065", type: "pageView", start: (new Date()).getTime()});

(function (d, w, id) {

if (d.getElementById(id)) return;

var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;

ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";

var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};

if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }

})(document, window, "topmailru-code");

</script><noscript><div style="position:absolute;left:-10000px;">

<img src="//top-fwz1.mail.ru/counter?id=2694065;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />

</div></noscript>

<!-- //Rating@Mail.ru counter -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter39844990 = new Ya.Metrika({
                    id:39844990,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/39844990" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59532775-4', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_head(); ?>
   <header role="banner" id="header">
            <div class="top">
                <div class="top-inner container">
                    <div class="row">
                        <div class="header-col w35">
                            <div class="address">
                                <p><a href="tel:+79017548262">✆ +7 (901) 754 82 62</a></p>
                                <p><a href="mailto:info@legal-union.ru">📧 info@legal-union.ru</a> </p>
                            </div>
                        </div>
                        
                        
                            <div class="header-soc" style="width:20%;float:right;text-align:center;vertical-align: middle; ">
            <p><a href="https://vk.com/olga_land_lawyer" target="_blank"><img alt="" height="35" src="../wp-content/uploads/2022/08/vk.png" width="35"></a>&nbsp;&nbsp;
                <a href="#" target="_blank"><img alt="" height="35" src="../wp-content/uploads/2022/08/tg.png" width="35"></a>&nbsp;&nbsp;
                <a href="https://www.facebook.com/legalsideproperty"><img alt="" height="35" src="../wp-content/uploads/2022/08/facebook.png" width="35"></a></p>
            </div>
                    </div>          
                </div>
            </div>
            <div class="clearfix"></div>




<div class="container">
    <div class="header_text">
        <div class="header_text_up">
            <div class="header_text_up_left">
                <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('sitetitle'); ?>">UNION</a>
            </div>
            <div class="header_text_up_right">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Header title") ) : ?><?php endif; ?>
            </div>
        </div>
        <div class="header_text_down">
            <div class="header_text_down_left">
                <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('sitetitle'); ?>">legal expert</a>
            </div>
            <div class="header_text_down_right">
                правовой консультант
            </div>
        </div>
    </div>
    <div class="header_nawi">
        <div class="header_naw">
                                <?php
                        $topmenu = array(
                        'menu'            => 'top-menu',
                        'menu_class'      => 'top-menu-inner',
                        'depth'           => 1
                        );
                        wp_nav_menu($topmenu);
                        ?>
        </div>
</div>
</div>



        </header>
<div class="torgi">
	<div class= "heading"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Top 1")) ?></div>
	<div class="carts_item"> <?php if (have_posts()) : query_posts("cat=5"); $i=0; while (have_posts() && ($i < 3)): the_post(); ?>
		<div class="carts_item_in">
			<div class="item_image"><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
	                                        the_post_thumbnail();
}  ?></a></div>
			<div class="carts_text_1 carts_text"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></div>
		</div>	 <?php $i++; endwhile; wp_reset_query(); endif; ?>
		<div class="arr_1">
            <p><a href="/torgi">Посмотреть все <br>объекты &rarr;</a></p>
		</div>
</div>

</div>

<div id="uslugi_new" class="uslugi_new">
	<div class="uslugi_text text_torgi"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Top 2")) ?></div>
	<div class="carts_uslugi"> 
		<div class="carts_uslugi_1 all_carts_uslugi"><a style="display: block;" href="./soprovozdeniie-sdelok-oformlenie/" target="blank"><div><p class="text_center">Сопровождение сделок и проверка объектов недвижимости</p></div></a></div>
		<div class="carts_uslugi_2 all_carts_uslugi"><a style="display: block;" href="./uchastie-v-torgax-po-prodazhe-gos-imushhestva/" target="blank"><div><p class="text_center">Участие в торгах по покупке и аренде недвижимости</p></div></a></div>
		<div class="carts_uslugi_3 all_carts_uslugi"><a style="display: block;" href="./sudebnye-spory-po-voprosam-nedvizhimosti-i-stroitelstva/" target="blank"><div><p class="text_center">Судебные споры по недвижимости</p></div></a></div>
		<div class="carts_uslugi_4 all_carts_uslugi"><a style="display: block;" href="./izhs-snt-poselki/" target="blank"><div><p class="text_center">Оформление земли, ИЖС.</p></div></a></div>
		<div class="carts_uslugi_5 all_carts_uslugi"><a style="display: block;" href="#" target="blank"><div><p class="text_center">Правовая поддержка арендного бизнеса и инвестиций в недвижимость</p></div></a></div>
		<div class="carts_uslugi_6 all_carts_uslugi"><a style="display: block;" href="#" target="blank"><div><p class="text_center">Сопровождение СНТ, коттеджных поселков</p></div></a></div>
	</div>
</div>
<div id="content">
            <section class="container" role="main">
                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </section>
        </div>
<div id="modules-main">
          <!--  <div class="module-1">
                <div class="module-1-inner container">
                    <div class="module-title">
                        <p>Статья 35 <span>Конституции Российской Федерации</span></p>
                    </div>
                    <ul>
                        <li><p>Право частной собственности охраняется законом.</p></li>
                        <li><p>Каждый вправе иметь имущество в собственности, владеть, пользоваться и распоряжаться им как единолично, так и совместно с другими лицами.</p></li>
                        <li><p>Никто не может быть лишен своего имущества иначе как по решению суда. Принудительное отчуждение имущества 
для государственных нужд может быть произведено только при условии предварительного и равноценного возмещения.</p></li>
                        <li><p>Право наследования гарантируется.</p></li>
                    </ul>
                </div>
            </div>
           
  <div class="module-2">
                <div class="module-inner container">

                    
                    <div class="module-grid">
                        <div class="module-column">
                            <div class="column-inner">
                                <div class="column-content">
                                    <ul>
                                        <li>Признание права собственности, споры из сделок с недвижимостью</li>
                                        <li>Долевое строительство, споры с застройщиками, банкротство</li>
                                        <li>Ипотека и обращение взыскания на недвижимость</li>
                                        <li>Оспаривание решений, действий органов власти</li>
                                        <li>Споры из договоров аренды недвижимости, земельные споры</li>
				    </ul>
                                    <a href="/sudebnye-spory-po-voprosam-nedvizhimosti-i-stroitelstva">Подробнее</a>
                                </div>
                            </div>
                        </div>

                    <div class="module-grid">
                          <div class="module-column">
                            <div class="column-inner">
                                
                              <div class="column-content">
                                    <ul>
                                        <li>Подготовка и правовая экспертиза документов, договоров</li>
                                        <li>Юридическая проверка объекта недвижимости и прав на него</li>
                                        <li>Земельные вопросы, сопровождение строительства, адресация</li>
                                        <li>Аренда, выкуп муниципальной земли, недвижимости, участие в торгах</li>
                                    </ul>
                                    <a href="/soprovozdeniie-sdelok-oformlenie">Подробнее</a>
                                </div>
                            </div>
                        </div>

                    <div class="module-grid">
                        <div class="module-column">
                            <div class="column-inner">
                                <div class="column-content">
                                    <ul>
                                        <li>Регистрация, сопровождение СНТ, коттеджных поселков</li>
                                        <li>Строительство, адресация, регистрация права собственности</li>
                                        <li>Подключение, присоединение, пользование инфраструктурой</li>
                                        <li>Оформление земель общего пользования в собственность СНТ</li>
                                        <li>Признание садового дома жилым</li>
				    </ul>
                                    <a href="/izhs-snt-poselki">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>-->
 
 <div class="clearfix"></div>
            <aside class="module-4">
                <div class="module-inner container">
                    	<div class="uslugi_text text_torgi"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Top phone")) ?></div>
                    <div class="module-content ">
                    <?php if (have_posts()) : query_posts("cat=3"); $i=0; while (have_posts() && ($i < 3)): the_post(); ?>
                        
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-image">
                                    <?php if ( has_post_thumbnail() ) {the_post_thumbnail();}?>
                                </div>
                                <div class="item-title">
                                    <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                </div>
                                <div class="item-date"><?php echo the_date('d.m.Y'); ?></div>
                                <div class="item-content">
                                    <p><?php the_content("подробнее..."); ?></p>
                                </div>
                            </div>
                        </div>
			        <?php $i++; endwhile; wp_reset_query(); endif; ?>
                    <div class="item">
                        <div class="item-title" style="position: relative; top: 50px;">
                            <a href="/novosti-i-obzory">Посмотреть все <br>новости &rarr;</a>
                        </div>
                    </div>
                    </div>
                </div>
            </aside>
                <div class="soc_seti">
        <div class="body_foot"><div class="soc_title">Следите за новостями и обзорами в социальных сетяx</div>
                <div class="soc_img">
            <div class="soc_vk soc_style">
                <a href="#"><img class="soc_img_2" src="../wp-content/uploads/2022/08/vk.png" alt=""></a>
            </div>
            <div class="soc_tg soc_style">
                <a href="#"><img class="soc_img_2" src="../wp-content/uploads/2022/08/tg.png" alt=""></a>
            </div>
            <div class="soc_facebook soc_style">
                <a href="#"><img class="soc_img_2" src="../wp-content/uploads/2022/08/facebook.png" alt=""></a>
            </div>
        </div>
    </div></div>
<?php
get_footer();
?>