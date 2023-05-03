<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="yandex-verification" content="c1981dd518d015ab" />
      <meta name='wmail-verification' content='2575a7a59c693d624881511000863585' />
      <meta name="google-site-verification" content="EFzwivlaFyYRYS8LDrCaN4MwYOpb9Kp1vFtp3NtZQSs" />
      <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
      <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
      <![endif]-->
      <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.png" />
      <?php wp_head();?>
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
      </script>
      <noscript>
         <div style="position:absolute;left:-10000px;">
            <img src="//top-fwz1.mail.ru/counter?id=2694065;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru"/>
         </div>
      </noscript>

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
   <header role="banner" id="header" class="gradient-bg-red">
      <div class="container">
         <a href="/" class="logo">
            <img src="<?php echo get_template_directory_uri() . '/images/totem/logo.svg';?>" alt="<?php bloginfo('sitetitle'); ?>" title="<?php bloginfo('sitetitle'); ?>">
         </a>
         <div class="header_naw">
            <?php
               $topmenu = array('echo' => false, 'items_wrap' => '%3$s', 'container' => false, 'menu' => 'home-page-menu', 'menu_class' => 'top-menu-inner', 'depth' => 1);
               $menu = wp_nav_menu($topmenu);
               echo strip_tags($menu, '<a>');
            ?>
         </div>
         <div class="header_contacts">
            <div class="social-networks">
               <a href="https://vk.com/olga_land_lawyer">
                  <img src="<?php echo get_template_directory_uri() . '/images/totem/vk.svg';?>" alt="ВКонтакте" title="ВКонтакте">
               </a>
               <a href="http://wordpress/#">
                  <img src="<?php echo get_template_directory_uri() . '/images/totem/tg.svg';?>" alt="Телеграм" title="Телеграм">
               </a>
               <a href="https://www.facebook.com/legalsideproperty">
                  <img src="<?php echo get_template_directory_uri() . '/images/totem/fb.svg';?>" alt="Фейсбук" title="Фейсбук">
               </a>
            </div>
            <div class="header_bottom_contacts">
               <a href="tel:+79017548262">+7 (901) 754 82 62</a>
               <a href="mailto:info@legal-union.ru">info@legal-union.ru</a>
            </div>
         </div>
      </div>
   </header>