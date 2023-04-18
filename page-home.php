<?php /*.Template name: Home*/ ?>
<?php get_header(); ?>
<div class="torgi">
	<div class= "text_torgi_1"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Top 1")) ?></div>
	<div class="carts_item">
        <?php if (have_posts()) : query_posts("cat=5"); $i=0; while (have_posts() && ($i < 3)): the_post(); ?>
		<div class="carts_item_in">
			<div class="item_image">
                <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
            </div>
			<div class="carts_text_1 carts_text">
                <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
            </div>
		</div>
        <?php $i++; endwhile; wp_reset_query(); endif; ?>
		<div class="arr_1">
            <p><a href="./uchastie-v-torgax-po-prodazhe-gos-imushhestva/">Посмотреть все <br>объекты &rarr;</a></p>
		</div>
    </div>

</div>

<div id="uslugi_new" class="uslugi_new">
	<div class="uslugi_text text_torgi"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Top 2")) ?></div>
	<div class="carts_uslugi">
		<div class="carts_uslugi_1 all_carts_uslugi"><a style="display: block;" href="./soprovozdeniie-sdelok-oformlenie/" target="blank"><div class="a_block"><p class="text_center">Сопровождение сделок и проверка объектов недвижимости</p></div></a></div>
		<div class="carts_uslugi_2 all_carts_uslugi"><a style="display: block;" href="./uchastie-v-torgax-po-prodazhe-gos-imushhestva/" target="blank"><div class="a_block"><p class="text_center">Участие в торгах по покупке и аренде недвижимости</p></div></a></div>
		<div class="carts_uslugi_3 all_carts_uslugi"><a style="display: block;" href="./sudebnye-spory-po-voprosam-nedvizhimosti-i-stroitelstva/" target="blank"><div class="a_block"><p class="text_center">Судебные споры по недвижимости</p></div></a></div>
		<div class="carts_uslugi_4 all_carts_uslugi"><a style="display: block;" href="./izhs-oformlenie-zemli/" target="blank"><div class="a_block"><p class="text_center">Оформление земли, ИЖС.</p></div></a></div>
		<div class="carts_uslugi_5 all_carts_uslugi"><a style="display: block;" href="./arenda-i-investicii-v-nedvizhimost/" target="blank"><div class="a_block"><p class="text_center">Правовая поддержка арендного бизнеса и инвестиций в недвижимость</p></div></a></div>
		<div class="carts_uslugi_6 all_carts_uslugi"><a style="display: block;" href="./snt-kottedgi/" target="blank"><div class="a_block"><p class="text_center">Сопровождение СНТ, коттеджных поселков</p></div></a></div>
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