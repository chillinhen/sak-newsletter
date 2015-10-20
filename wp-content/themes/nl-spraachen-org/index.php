<?php get_header(); ?>

<div class="row site-content clearfix posts thin-line">
    <?php get_sidebar(); // sidebar 1  ?>
    <div id="content" class="col-sm-8 col-xs-12" role="main">
        <?php if (is_user_logged_in()) : ?>
            <!-- show posts -->
            <?php
            $filter = get_post_type($post_id);
            $temp = $wp_query;
            $wp_query = null;
            $wp_query = new WP_Query();
            $wp_query->query('category__not_in=21&paged=' . $paged);
            ?>

            <?php #query_posts(array('ignore_sticky_posts' => true));?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php get_template_part('partials/article', 'page'); ?>	<!-- end article -->

                <?php endwhile; ?>	

                    <nav><!-- ToDo translate -->
                                <span class="pull-left"><?php previous_posts_link('<i class="fa fa-caret-left"></i> Neuere Einträge') ?></span>
                                <span class="pull-right"><?php next_posts_link('Ältere Einträge <i class="fa fa-caret-right"></i>') ?></span>
                    </nav>

                <?php
                $wp_query = null;
                $wp_query = $temp;  // Reset
                ?>		

            <?php else : ?>

                <?php get_template_part('partials/article', '404'); ?>

            <?php endif; ?>
        <?php else : ?>


            <?php
            $args = array(
                'posts_per_page' => 1,
                'category_name' => 'welcome',
                'orderby' => 'date',
                'order' => 'DESC'
            );


            $custom_query = new WP_Query($args);

            if ($custom_query->have_posts()):
                while ($custom_query->have_posts()) :
                    $custom_query->the_post();

                    #echo $message . '<hr/>';
                    get_template_part('partials/article', 'list');

                endwhile;
            else:
                get_template_part('partials/article', '404');
            endif;

            wp_reset_query();
            ?>
        <?php endif; ?>
    </div> <!-- end #main -->

    

</div> <!-- end #content -->

<?php get_footer(); ?>