<?php get_header(); ?>
	<div class="row site-content clearfix posts thin-line">
	
	    <div class="col-md-8 clearfix" role="main">

					<article id="post-not-found">
					<section class="post_content">
					<?php if ( is_user_logged_in() ) : ?>
					
					    <p><?php _e("In dieser Kategorie wurden noch keine Beiträge verfasst.", "nl-spraachen-org"); ?></p>
					
					<?php else: ?>
					<p><?php _e("Bitte logge dich ein, um diesen Artikel lesen zu können.", "nl-spraachen-org"); ?></p>
					
					<?php endif; ?>
					</section>
					            </article> <!-- end article -->
			
				</div> <!-- end #main -->
    			<?php get_sidebar(); // sidebar 1 ?>
			</div> <!-- end #content -->

<?php get_footer(); ?>