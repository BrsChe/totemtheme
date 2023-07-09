<?php
/*
 * Template name: Торги_услуги
 */
?>

<?php get_header(); ?>

<div id="content">
    <section class="container" role="main">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </section>
    <div id="auctions">
        <div class="carts_item container">
            <div class="carts_item_wrapper">
                <? $posts_vars = array('cat' => 5, 'posts_per_page' => '6') ?>
                <? $blog_posts = new WP_Query($posts_vars) ?>
                <?php if ($blog_posts->have_posts()) : query_posts("cat=5"); while ($blog_posts->have_posts()): $blog_posts->the_post(); ?>
                <div class="carts_item_in w-third w_half-bp_m">
                    <div class="item_title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                    <div class="item_image box_shadow">
                        <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
                    </div>
                    <div class="carts_info">
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
</div>
<?php get_footer(); ?>
