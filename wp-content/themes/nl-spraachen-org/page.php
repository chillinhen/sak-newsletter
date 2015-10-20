<?php get_header(); ?>

<div class="row site-content clearfix posts thin-line">
    <?php get_sidebar(); // sidebar 1 ?>
    <div id="content" class="col-sm-8 col-xs-12" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); 
        
        get_template_part('partials/article','page');
        
        endwhile; ?>	

            <?php get_template_part('partials/paging');?>		

        <?php else : ?>

            <article id="post-not-found">
                <section class="post_content">
                    <p><?php _e("Sorry, but the requested resource was not found on this site.", "nl-spraachen-org"); ?></p>
                </section>
                <footer>
                </footer>
            </article>

        <?php endif; ?>

    </div> <!-- end #main -->



</div> <!-- end #content -->

<?php get_footer(); ?>