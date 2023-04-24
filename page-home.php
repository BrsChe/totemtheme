<?php /*.Template name: Home*/ ?>
<?php get_header(); ?>
<div class="torgi">
    <div class= "heading"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Top 1")) ?></div>
    <div class="carts_item container">
        <div class="carts_item_wrapper">
            <?php if (have_posts()) : query_posts("cat=5"); $i=0; while (have_posts() && ($i < 3)): the_post(); ?>
            <div class="carts_item_in">
                <div class="item_title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
                <div class="item_image">
                    <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
                </div>
                <div class="carts_text_1 carts_text">
                    <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
                </div>
                <div class="item_meta_fields">
                    <?php $address = get_post_meta($post->ID, 'address', true); if ( $address ) { ?>
                        <div class="item_meta-address">
                            <div class="icon-location-ind"></div>
                            <div class="item_meta_text"><?php echo $address; ?></div>
                        </div>
                    <?php } ?>
                    <?php $quadrature = get_post_meta($post->ID, 'quadrature', true); if ( $quadrature ) { ?>
                        <div class="item_meta-quadrature">
                            <div class="icon-square-ind"></div>
                            <div class="item_meta_text"><?php echo $quadrature; ?></div>
                        </div>
                    <?php } ?>
                    <?php $type_of_space = get_post_meta($post->ID, 'type_of_space', true); if ( $type_of_space ) { ?>
                        <div class="item_meta-type_of_space">
                            <div class="icon-building-ind"></div>
                            <div class="item_meta_text"><?php echo $type_of_space; ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php $i++; endwhile; wp_reset_query(); endif; ?>
        </div>
    </div>
    <div class="arr_1">
        <a class="gradient-bg-blue" href="./uchastie-v-torgax-po-prodazhe-gos-imushhestva/">смотреть все объекты</a>
    </div>
</div>

<?php $uslugi = array(
    'Сопровождение сделок с недвижимостью',
    'Покупка, аренда земли и иных объектов недвижимости на торгах',
    'Судебные споры по вопросам недвижимости и строительства',
    'Оформление земли и ИЖС',
    'Правовая поддержка арендного бизнеса и инвестиций в недвижимость',
    'Сопровождение СНТ, коттеджных поселков'
);?>
<div class="heading"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Top 2")) ?></div>
<div id="uslugi_new" class="uslugi_new">
    <div class="uslugi_bg gradient-bg-blue-to-left"></div>
    <div class="uslugi_item">
        <img
            class="uslugi_img"
            src="<?php echo get_template_directory_uri() . '/images/totem/transaction-support.png'; ?>"
            alt="<?php echo $uslugi[0] ?>"
            title="<?php echo $uslugi[0] ?>">
        <div class="uslugi_info">
            <div class="uslugi_title"><?php echo $uslugi[0] ?></div>
            <ul class="uslugi_list">
                <li>Подготовка и правовая экспертиза документов, договоров</li>
                <li>Юридическая проверка объекта недвижимости и прав на него</li>
                <li>Оценка и анализ рисков, представление интересов</li>
            </ul>
            <a class="moreinfobtn gradient-bg-red" href="./soprovozdeniie-sdelok-oformlenie/" target="blank">Подробнее</a>
        </div>
    </div>
    <div class="uslugi_item">
        <img
            class="uslugi_img"
            src="<?php echo get_template_directory_uri() . '/images/totem/land-lease.png'; ?>"
            alt="<?php echo $uslugi[1] ?>"
            title="<?php echo $uslugi[1] ?>">
        <div class="uslugi_info">
            <div class="uslugi_title"><?php echo $uslugi[1] ?></div>
            <ul class="uslugi_list">
                <li>Подбор объекта по Вашим условиям</li>
                <li>Участие в торгах, подготовка документов</li>
                <li>Консультирование и оформление прав</li>
            </ul>
            <a class="moreinfobtn gradient-bg-red" href="./uchastie-v-torgax-po-prodazhe-gos-imushhestva/" target="blank">Подробнее</a>
        </div>
    </div>
    <div class="uslugi_item">
        <img
            class="uslugi_img"
            src="<?php echo get_template_directory_uri() . '/images/totem/legal-disputes.png'; ?>"
            alt="<?php echo $uslugi[2] ?>"
            title="<?php echo $uslugi[2] ?>">
        <div class="uslugi_info">
            <div class="uslugi_title"><?php echo $uslugi[2] ?></div>
            <ul class="uslugi_list">
                <li>Досудебное урегулирование (участие в переговорах, претензионная работа)</li>
                <li>Подготовка документов для обращения в суд (исковых заявлений, жалоб, отзывов на иск, ходатайств, иных процессуальных документов)</li>
                <li>Представление интересов в суде</li>
            </ul>
            <a class="moreinfobtn gradient-bg-red" href="./sudebnye-spory-po-voprosam-nedvizhimosti-i-stroitelstva/" target="blank">Подробнее</a>
        </div>
    </div>
    <div class="uslugi_item">
        <img
            class="uslugi_img"
            src="<?php echo get_template_directory_uri() . '/images/totem/land-registration.png'; ?>"
            alt="<?php echo $uslugi[3] ?>"
            title="<?php echo $uslugi[3] ?>">
        <div class="uslugi_info">
            <div class="uslugi_title"><?php echo $uslugi[3] ?></div>
            <ul class="uslugi_list">
                <li>Оформление недвижимости, регистрация прав</li>
                <li>Земельные вопросы, сопровождение строительства, адресация, подключение</li>
                <li>Юридические консультации по вопросам недвижимости, земли, строительства</li>
            </ul>
            <a class="moreinfobtn gradient-bg-red" href="./izhs-oformlenie-zemli/" target="blank">Подробнее</a>
        </div>
    </div>
    <div class="uslugi_item">
        <img
            class="uslugi_img"
            src="<?php echo get_template_directory_uri() . '/images/totem/legal-support.png'; ?>"
            alt="<?php echo $uslugi[4] ?>"
            title="<?php echo $uslugi[4] ?>">
        <div class="uslugi_info">
            <div class="uslugi_title"><?php echo $uslugi[4] ?></div>
            <ul class="uslugi_list">
                <li>Юридическая проверка объектов инвестиций в недвижимость</li>
                <li>Сопровождение и структурирование сделок, владения активами</li>
                <li>Работа с арендаторами, взыскание задолженности</li>
            </ul>
            <a class="moreinfobtn gradient-bg-red" href="./arenda-i-investicii-v-nedvizhimost/" target="blank">Подробнее</a>
        </div>
    </div>
    <div class="uslugi_item">
        <img
            class="uslugi_img"
            src="<?php echo get_template_directory_uri() . '/images/totem/snt-support.png'; ?>"
            alt="<?php echo $uslugi[5] ?>"
            title="<?php echo $uslugi[5] ?>">
        <div class="uslugi_info">
            <div class="uslugi_title"><?php echo $uslugi[5] ?></div>
            <ul class="uslugi_list">
                <li>Создание, регистрация СНТ, коттеджных поселков, союзов, ассоциаций, НКО</li>
                <li>Оформление земли, работа с энергоснабжающими организациями</li>
                <li>Юридическое сопровождение</li>
            </ul>
            <a class="moreinfobtn gradient-bg-red" href="./snt-kottedgi/" target="blank">Подробнее</a>
        </div>
    </div>
</div>
<div class="home_news">
    <div class="heading"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Top phone")) ?></div>
    <div class="home_news_wrapper container">
        <div class="home_news_content">
            <?php if (have_posts()) : query_posts("cat=4"); $i=0; while (have_posts() && ($i < 3)): the_post(); ?>
            <div class="home_news-item">
                <a class="home_news-item_image" href="<?php the_permalink(); ?>">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }?>
                </a>
                <div class="home_news-item_title item_title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
                <div class="home_news-item_date"><?php echo the_date('d.m.Y'); ?></div>
                <a class="moreinfobtn gradient-bg-red" href="<?php the_permalink(); ?>">Подробнее</a>
            </div>
            <?php $i++; endwhile; wp_reset_query(); endif; ?>
        </div>
    </div>
    <div class="arr_1">
        <a class="gradient-bg-blue" href="/novosti-i-obzory">Смотреть все новости</a>
    </div>
</div>
<?php get_footer(); ?>