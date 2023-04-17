<?php
/*
 * Template name: Торги_услуги
 */
?>

<?php
get_header();
?>

<div id="content">
            <section class="container" role="main">
                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </section>
        </div>
        <section id="news">
            <div class="main-inner">
                <div class="center">
                    <section class="module-6">
                        <div class="module-inner">
         
         
         
         <?php 
         
          $args1 = array(
            'paged'          => $paged,
            'posts_per_page' => 10,
            'cat' => 5,
        );
        $query1 = new WP_Query( $args1 );
         
           while ( $query1->have_posts() ) : $query1->the_post(); ?>
                            <article class="item item_carts_margin">
                                <?php   if ( has_post_thumbnail() ) {
                                           the_post_thumbnail();
                                        }  ?>
                            <a class="title" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                            <div class="p_torgi"><?php the_excerpt(); ?></div>
                                <div class="readmore">
                                    <a role="button" href="<?php the_permalink(); ?>">Подробнее</a>
                                </div>
                            </article>
         <?php endwhile; wp_reset_query(); ?>

                        </div>
                  <?php
                  $pag_args1 = array(
            'current' => max( 1, get_query_var('paged') ),
            'total'   => $query1->max_num_pages,
'show_all'           => False,
'prev_text'          => __('Назад'),
   'next_text'          => __('Далее')
        ); ?>
      <div class="navigation">
      <? echo paginate_links( $pag_args1 ); ?>
      </div>
                    </section>
                </div>
            </div>
        </section>
        
<?php
get_footer();
?>