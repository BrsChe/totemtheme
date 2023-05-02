<?php
/* Template Name: page-uchastie-v-torgax-po-prodazhe-gos-imushhestva */
?>
<?php get_header(); ?>
<div id="auctions" class="torgi">
    <div class= "heading"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Top 1")) ?></div>
    <div class="carts_item container">
        <div class="carts_item_wrapper">
            <?php if (have_posts()) : query_posts("cat=5"); while (have_posts()): the_post(); ?>
            <div class="carts_item_in">
                <div class="item_title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
                <div class="item_image box_shadow">
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
            <?php endwhile; wp_reset_query(); endif; ?>
        </div>
    </div>
    <!-- <div class="arr_1">
        <a class="gradient-bg-blue" href="./uchastie-v-torgax-po-prodazhe-gos-imushhestva/">Показать еще</a>
    </div> -->
</div>
<?php get_footer(); ?>