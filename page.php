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
        
<?php
get_footer();
?>