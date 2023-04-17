 <?php
/*
 * Template name: News
 */
?>
<?php
get_header();
?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; endif; ?>

        <section id="news">
            <h1 class="news-title">ПРАВОВЫЕ НОВОСТИ И ОБЗОРЫ ПО ВОПРОСАМ НЕДВИЖИМОСТИ, ЗЕМЛИ СТРОИТЕЛЬСТВА</h1>
            <div class="main-inner">
                <div class="center">
                    <section class="module-6">
                        <div class="module-inner">
			
			
			
			<?php	
			
			 $args1 = array(
            'paged'          => $paged,
            'posts_per_page' => 10,
            'cat' => 3,
        );
        $query1 = new WP_Query( $args1 );
			
			  while ( $query1->have_posts() ) : $query1->the_post(); ?>
                            <article class="item">
                                <?php   if ( has_post_thumbnail() ) {
	                                        the_post_thumbnail();
                                        }  ?>
				                <a class="title" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
				                <div class="date"><?php echo the_date('d.m.Y'); ?></div>
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