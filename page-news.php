 <?php
/*
 * Template name: News
 */
?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; endif; ?>
<div id="news" class="home_news box_shadow">
    <div class="heading"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Top phone")) ?></div>
    <div class="home_news_wrapper container">
        <div class="home_news_content" id="news_container">
            <?// На бою категория новостей 3, на локальном может отличаться?>
            <? $posts_vars = array('cat' => 3, 'posts_per_page' => '6') ?>
            <? $blog_posts = new WP_Query($posts_vars) ?>
            <?php if ($blog_posts->have_posts()): while ($blog_posts->have_posts()): $blog_posts->the_post(); ?>
            <div class="w-third w_full-bp_m">
                <div class="home_news-item">
                    <a class="home_news-item_image" href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }?>
                    </a>
                    <div class="home_news-item_title item_title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                    <div class="home_news-item_date color-dark_gray"><?php echo the_date('d.m.Y'); ?></div>
                    <a class="moreinfobtn gradient-bg-red" href="<?php the_permalink(); ?>">Подробнее</a>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
            <?php if ($blog_posts->max_num_pages > 1) : ?>
                <script>
                    var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
                    var posts_per_page = '<?php echo $posts_vars['posts_per_page'] ?>';
                    var cat = '<?php echo $posts_vars['cat'] ?>';
                    var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 2; ?>;
                    var max_pages = '<?php echo $blog_posts->max_num_pages; ?>';
                </script>
                <div class="home_news-item home_news-item_add item w-full" id="loadmore">
                    <div class="arr_1">
                        <a style="cursor: pointer;" class="gradient-bg-blue">Показать еще</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
