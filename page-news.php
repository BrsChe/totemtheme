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
        <div class="home_news_content">
            <?php if (have_posts()) : query_posts("cat=3"); while (have_posts()): the_post(); ?>
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
            <?php endwhile; wp_reset_query(); endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
